@extends('frontend::layouts.master')
@section('title','Travel')
@section('Body')
    <div class="projects-1">
        <div class="container">
            @php
                ++$i;
                $j=1;
            @endphp
            @foreach($blogs as $blog)
                @if($j==1)
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card" data-background="image"
                                 style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                <div class="card-body">
                                    <h6 class="card-category">{{$blog->categories->name}}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                    </a>
                                    <p class="card-description">
                                        {!!str_limit(strip_tags($blog->body,150))!!}
                                    </p>
                                    <br/>
                                    <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-danger btn-round">
                                        <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                    </a>
                                </div>
                            </div>
                        </div>
                        @elseif($j==2)
                            <div class="col-md-7">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">{{$blog->categories->name}}</h6>
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blog->body,150))!!}
                                        </p>
                                        <br/>
                                        <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-primary btn-round">
                                            <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endif
                @if($j==3)
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card" data-background="image"
                                 style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                <div class="card-body">
                                    <h6 class="card-category">{{$blog->categories->name}}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                    </a>
                                    <p class="card-description">
                                        {!!str_limit(strip_tags($blog->body,150))!!}
                                    </p>
                                    <br/>
                                    <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-info btn-round">
                                        <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                    </a>
                                </div>
                            </div>
                        </div>
                        @elseif($j==4)
                            <div class="col-md-5">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blog->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">{{$blog->categories->name}}</h6>
                                        <h3 class="card-title">{{$blog->title}}</h3>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blog->body,150))!!}
                                        </p>
                                        <br/>
                                        <a href="{{route('frontend.single_blog',$blog->id)}}" class="btn btn-warning btn-round">
                                            <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @php
                    $j=0;
                    @endphp
                @endif
                @php
                $i++;
                $j++;
                @endphp
            @endforeach
            <br>
            {!! $blogs->render() !!}
        </div>
    </div>
@stop