<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Gallery\Entities\Gallery;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $blogs=Blog::select('id','category','title','body','image')
            ->where('status',1)
            ->orderBy('id', 'DESC')
            ->paginate(5);

        $technology=Blog::select('blogs.id','blogs.category','blogs.title','blogs.body','blogs.image')
            ->join('categories','categories.id','=','blogs.category')
            ->where('blogs.status',1)
            ->where('categories.name','technology')
            ->orderBy('blogs.id', 'DESC')
            ->first();
        $travel=Blog::select('blogs.id','blogs.category','blogs.title','blogs.body','blogs.image')
            ->join('categories','categories.id','=','blogs.category')
            ->where('blogs.status',1)
            ->where('categories.name','travel')
            ->orderBy('blogs.id', 'DESC')
            ->first();
        $food=Blog::select('blogs.id','blogs.category','blogs.title','blogs.body','blogs.image')
            ->join('categories','categories.id','=','blogs.category')
            ->where('blogs.status',1)
            ->where('categories.name','food')
            ->orderBy('blogs.id', 'DESC')
            ->first();
        return view('frontend::index',compact('blogs','technology','travel','food'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('frontend::edit');
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

    public function technology(Request $request)
    {
        $blogs = Blog::with('categories:id,name')
            ->whereHas('categories', function ($query) {
                $query->where('name', 'technology');
            })
            ->select('id', 'category', 'title', 'body', 'image')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(5);

        return view('frontend::technology', compact('blogs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function travel(Request $request)
    {
        $blogs = Blog::with('categories:id,name')
            ->whereHas('categories', function ($query) {
                $query->where('name', 'travel');
            })
            ->select('id', 'category', 'title', 'body', 'image')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(4);

        return view('frontend::travel', compact('blogs'))
            ->with('i', ($request->input('page', 1) - 1) * 4);

    }

    public function food(Request $request)
    {
        $blogs = Blog::with('categories:id,name')
            ->whereHas('categories', function ($query) {
                $query->where('name', 'food');
            })
            ->select('id', 'category', 'title', 'body', 'image')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(4);

        return view('frontend::food', compact('blogs'))
            ->with('i', ($request->input('page', 1) - 1) * 4);
    }

    public function single_blog($id)
    {
        $blog=Blog::with('categories:id,name')
            ->select('id','category', 'title','body','image','created_at')
            ->where('id',$id)
            ->first();
        return view('frontend::single_blog',compact('blog'));
    }

    public function gallery()
    {
        $albums = Gallery::all();
        $view = 'frontend::layouts.';
        $link = 'photo/';
        return view('frontend::gallery', compact('albums', 'view', 'link'));
//        return view('gallery::gallery.index', compact('albums', 'view', 'link'));
    }

    public function showAlbum($id)
    {
        $album = Gallery::with('gallery_images')->where('id', $id)
            ->where('status', 1)->first();
        $view = 'frontend::layouts.';
        $link = 'photo/';
        return view('frontend::show_photo', compact('album', 'view', 'link'));
    }
}
