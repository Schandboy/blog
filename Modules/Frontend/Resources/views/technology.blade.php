@extends('frontend::layouts.master')
@section('title','Technology')
@section('Body')
    <div class="project-4 section section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h3 class="title">Technology</h3>
                    <h5 class="description">"I do not fear computers. I fear lack of them."
                        <br>
                        — Isaac Asimov</h5>
                </div>
            </div>
            <div class="space-top"></div>
            @php
                ++$i;
            @endphp

            @foreach($blogs as $blog)

                @if($i%2!=0)
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="card" data-background="image"
                                 style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                <div class="card-icon">
                                    <i class="nc-icon nc-mobile"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <h6 class="card-category">{{$blog->categories->name}}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                    </a>
                                    <p class="card-description">{!!str_limit(strip_tags($blog->body,150))!!}</p>
                                    <div class="card-footer">
                                        <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-link btn-neutral">
                                            <i class="fa fa-book" aria-hidden="true"></i> Read More
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-apple" aria-hidden="true"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-android" aria-hidden="true"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-windows" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <br/>
                <hr/>
                <br/>
                @else
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <h6 class="card-category">{{$blog->categories->name}}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                    </a>
                                    <p class="card-description">{!!str_limit(strip_tags($blog->body,150))!!}</p>
                                    <div class="card-footer">
                                        <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-link btn-neutral">
                                            <i class="fa fa-book" aria-hidden="true"></i> Read More
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-apple" aria-hidden="true"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-android" aria-hidden="true"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                            <i class="fa fa-windows" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">
                            <div class="card" data-background="image"
                                 style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                <div class="card-icon">
                                    <i class="nc-icon nc-controller-modern"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                @endif
                @php
                $i++;
                @endphp
                    {!! $blogs->render() !!}
            @endforeach
        </div>
    </div>

@stop

