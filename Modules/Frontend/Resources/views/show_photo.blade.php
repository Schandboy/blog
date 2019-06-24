@extends('frontend::layouts.master')
@section('title','Show Photo')
@section('head')
    {{--<link rel='stylesheet' href='{{Module::asset('gallery:css/ekko-lightbox.css')}}'>--}}
    <link rel="stylesheet" type="text/css" href="{{url('css/ekko-lightbox.css')}}" />
    <style>
        .row {
            margin: 15px;
        }

        img {
            margin-bottom: 15px;

        }

        #upload {
            display: none
        }

        .details {
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

        .details:hover {

            opacity: .6;
        }

        .invisible {
            visibility: hidden;
        }

        .img-wrap .remove {

            position: absolute;
            top: -10px;
            right: 10px;
            z-index: 100;
            background-color: #FFF;
            padding: 5px 2px 2px;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            opacity: .2;
            text-align: center;
            font-size: 22px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap .remove:hover {
            opacity: 0.8;
        }

    </style>
@stop
@section('Body')
    <div class="team-2 section-image" style="background-image: url({{url('frontend/assets/img/sections/jan-sendereks.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-sm-9">
                        <h2 class="title">
                            <a href="{{url($link.'gallery')}}" class="btn btn-white btn-round btn-just-icon">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            {{$album->title}}
                        </h2>
                    </div>

                </div>
            </div>
            <div class="row">
                @foreach($album->gallery_images as $image)
                    <div id="{{$image->id}}" class="col-sm-6 col-md-4">
                        <a href="{{url('/').Storage::url($image->image)}}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{url('/').Storage::url($image->image)}}"  class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
@section('script')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
    {{--<script src='{{Module::asset('gallery:js/ekko-lightbox.js')}}'></script>--}}
    <script type="text/javascript" src="{{ asset('js/ekko-lightbox.js') }}"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
        $(function () {
            $("#upload_link").on('click', function (e) {
                e.preventDefault();
                $("#upload:hidden").trigger('click');
            });
        });
        $("#delete").click(function () {
            $(this).toggleClass("active");
            $('.remove').toggleClass("invisible");
        });
    </script>
@stop