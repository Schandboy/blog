<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Contact\Entities\Contact;

class ContactController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        $this->middleware('permission:contact-list', ['only' => ['index','show']]);
        $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $feedbacks = Contact::select('id','first_name','last_name','subject','email','message','created_at')
        ->orderBy('id','DESC')
        ->get();
        return view('contact::index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contact::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string|max:100',
                'message' => 'required'
            ]);

            try {
                $input = $request->all();
                Contact::create($input);
            } catch (\Exception $e) {
                return back()->withError($e->getMessage())->withInput();
            }
            Session::flash('type', "success");
            Session::flash('message', "New Message has been submitted successfully");
            return redirect('/');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('contact::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('contact::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
