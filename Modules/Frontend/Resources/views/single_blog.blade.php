@extends('frontend::layouts.master')
@section('title','Blog')
@section('Body')

    <div class="wrapper">
        <div class="main">
            <div class="section section-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center title">
                            <h4 class="title-uppercase"><b><b>{{$blog->title}}</b></b></h4>
                        </div>
                    </div>
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="card" data-radius="none" >
                                <center><img src="{{url('/').Storage::url($blog->image)}}" alt="post/amage" style="width:650rem; height:30rem !important;"></center>
                                <div class="content-center">
                                    <div class="text-center">
                                        <h6 class="title-uppercase">{{date("M d, Y", strtotime($blog->created_at))}} <b>({{$blog->categories->name}})</b></h6>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row">--}}
                                <div class="article-content">
                                    <strong>{!! $blog->body !!}</strong>
                                </div>
                                <hr>
                            {{--</div>--}}
                        </div>

                    {{--<div class="row">--}}
                        {{--<div class="related-articles">--}}
                            {{--<h3 class="title">Related articles</h3>--}}
                            {{--<legend></legend>--}}
                            {{--<div class="container">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<a href="pkp.html">--}}
                                            {{--<img src="frontend/assets/img/sections/damir-bosnjak.jpg" alt="Rounded Image" class="img-rounded img-responsive">--}}
                                        {{--</a>--}}
                                        {{--<p class="blog-title">My Review of Pitchfork’s ‘Indie 500’ Album Review</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<a href="pkp.html">--}}
                                            {{--<img src="frontend/assets/img/sections/por7o.jpg" alt="Rounded Image" class="img-rounded img-responsive">--}}
                                        {{--</a>--}}
                                        {{--<p class="blog-title">Top Events This Month</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<a href="pkp.html">--}}
                                            {{--<img src="frontend/assets/img/sections/jeff-sheldon.jpg" alt="Rounded Image" class="img-rounded img-responsive">--}}
                                        {{--</a>--}}
                                        {{--<p class="blog-title">You Should Get Excited About Virtual Reality. Here’s Why.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@stop