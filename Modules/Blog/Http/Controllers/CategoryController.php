<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Modules\Blog\Entities\Category;

class CategoryController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct()
    {
        $this->middleware('permission:category-list');
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $category = Category::select('id', 'name')->where('status', 1)->get();

        return view('blog::category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',

        ]);
        DB::beginTransaction();
        try {
            $input = $request->all();

            Category::create($input);
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError($e->getMessage())->withInput();
        }
        DB::commit();
        Session::flash('type', "success");
        Session::flash('message', "New Category has been Added Successfully");
        return redirect()->route('category.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        try {

            $category = Category::select('id', 'name')->findOrFail($id);


        } catch (ModelNotFoundException $e) {

            return redirect('category')->withError("Category with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('category')->withError("Something went wrong!! Please Contact to Service Provider");
        }

        return view('blog::category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);

        } catch (ModelNotFoundException $e) {

            return redirect('category')->withError("Category with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('category')->withError("Something went wrong!! Please Contact to Service Provider");
        }

        $this->validate($request, [
            'name' => 'required|string',
        ]);
        DB::beginTransaction();
        try {
            $category->name = $request->name;
            $category->save();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError($e->getMessage())->withInput();
        }
        DB::commit();
        Session::flash('type', "info");
        Session::flash('message', "Category has been Updated Successfully");
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch (ModelNotFoundException $e) {

            return redirect('notice')->withError("Category with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('notice')->withError("Something went wrong!! Please Contact to Service Provider");
        }
        $category->status = 0;
        $category->save();

        Session::flash('type', "danger");
        Session::flash('message', "Category has been Deleted Successfully");
        return redirect()->back();
    }
}
