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
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\Category;

class BlogController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct()
    {
        $this->middleware('permission:blog-list');
        $this->middleware('permission:blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::select('id','category', 'title')->where('status', 1)->get();

        return view('blog::blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $category=Category::select('id','name')->where('status',1)->get();
        return view('blog::blog.create',compact('category'));
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
            'category'=>'required',
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'required',

        ]);
        DB::beginTransaction();
        try {
            $input = $request->all();

            if ($request->hasFile('image')) {
                $original = $request->file('image');
                $path = compress_and_store($original);
                $input['image'] = 'public/' . $path;
            }
            Blog::create($input);
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError($e->getMessage())->withInput();
        }
        DB::commit();
        Session::flash('type', "success");
        Session::flash('message', "New Blog has been Added Successfully");
        return redirect()->route('blog.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $blogs = Blog::select('*')->where('notice.id', $id)->first();

        return view('notice::notice.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        try {

            $blog = Blog::select('id', 'category', 'image', 'body', 'title')->findOrFail($id);
            $category=Category::select('id','name')->where('status',1)->get();


        } catch (ModelNotFoundException $e) {

            return redirect('blog')->withError("Blog with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('blog')->withError("Something went wrong!! Please Contact to Service Provider");
        }

        return view('blog::blog.edit', compact('blog','category'));


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
            $blog = Blog::findOrFail($id);

        } catch (ModelNotFoundException $e) {

            return redirect('blog')->withError("Blog with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('blog')->withError("Something went wrong!! Please Contact to Service Provider");
        }

        $this->validate($request, [
            'category'=>'required',
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $original = $request->file('image');
                $path = compress_and_store($original);
                $blog->image = 'public/' . $path;
            }
            $blog->category = $request->category;
            $blog->title = $request->title;
            $blog->body = $request->body;
            $blog->save();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withError($e->getMessage())->withInput();
        }
        DB::commit();
        Session::flash('type', "info");
        Session::flash('message', "Blog has been Updated Successfully");
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
        } catch (ModelNotFoundException $e) {

            return redirect('blog')->withError("Blog with ID '" . $id . "' not found.");
        } catch (\Exception $ex) {
            return redirect('blog')->withError("Something went wrong!! Please Contact to Service Provider");
        }
        $blog->status = 0;
        $blog->save();

        Session::flash('type', "danger");
        Session::flash('message', "Blog has been Deleted Successfully");
        return redirect()->back();
    }
}
