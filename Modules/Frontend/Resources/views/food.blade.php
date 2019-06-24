@extends('frontend::layouts.master')
@section('title','Food')
@section('Body')
        <div class="team-5 section-image" style="background-image: url('frontend/assets/img/sections/martin-knize.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Food</h2>
                        <h4 class="description">Seize the moment. Remember all those women on the "Titanic" who waved off the dessert cart.
                            <br>
                            - Erma Bombeck</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="{{url('/').Storage::url($blog->image)}}" />
                                            {{--<img class="lazy" src="{{asset('img/loading.gif')}}" data-src="{{url('/').Storage::url($blog->image)}}" alt="post-image">--}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h3 class="card-category">{{$blog->categories->name}}</h3>
                                        <hr>
                                        <h4 class="card-title">{{$blog->title}}</h4>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blog->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-link btn-neutral">
                                                <i class="fa fa-book" aria-hidden="true"></i> Read More
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        {!! $blogs->render() !!}
                </div>
            </div>
        </div>

@stop