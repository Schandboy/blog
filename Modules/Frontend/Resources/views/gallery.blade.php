@extends('frontend::layouts.master')
@section('title','Gallery')
@section('head')
    <style>
        img {
            max-height: 200px;
        }

        .categories_post {
            position: relative;
            text-align: center;
            cursor: pointer;
        }

        .categories_post img {
            max-width: 100%;
        }

        .categories_post .categories_details {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: rgba(34, 34, 34, 0.8);
            color: #fff;
            transition: all 0.3s linear;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .categories_post .categories_details h5 {
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
            position: relative;
        }

        .categories_post .categories_details p {
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px;
        }

        .categories_post .categories_details .border_line {
            margin: 10px 0px;
            background: #fff;
            width: 100%;
            height: 1px;
        }

        .categories_post:hover .categories_details {
            background-color: transparent;
            opacity: .6;
        }

        .add-album:hover {
            background-color: #343434;
        !important;
        }


    </style>
@stop
@section('Body')
    <div class="team-2 section-image" style="background-image: url({{url('frontend/assets/img/sections/jan-sendereks.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Welcome To My Photo Gallery</h2>
                    <h5 class="description">One Day, You'll be memory for some people.<br>
                    Do your best to be a Good One...
                    </h5>
                </div>
            </div>
            <div class="row">
                @foreach($albums as $album)
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="{{url($link.'gallery/'.$album->id)}}">
                                    <div class="categories_post">
                                        <img src="{{url('/').Storage::url($album->gallery_images->first()->image)}}" alt="post">
                                        <div class="categories_details">
                                            <div class="categories_text">
                                                <h5>{{$album->title}}</h5>
                                                <div class="border_line"></div>
                                                <p>Enjoy your social life together</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop