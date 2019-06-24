@extends('frontend::layouts.master')
@section('title','Home')
@section('Body')

    <div class="section section-header cd-section" id="headers">
        <div class="header-1">
            <div class="page-header" style="background-image: url({{url('frontend/assets/img/bg1.JPG')}});">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6  ml-auto mr-auto">
                                <h2 class="title"><strong>Susan's Blog</strong></h2>
                                <h3 class="description">Welcome</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section secion-blog cd-section" id="blogs">
        <div class="section secion-blog cd-section" id="blogs">
            <div class="blog-5">
                <div class="container">
                    <h2 class="title text-center">Latest Blogs</h2>
                    @if(count($blogs)>0)
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blogs[0]->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">
                                            <i class="fa fa-newspaper-o"></i> {{$blogs[0]->categories->name}}</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">{{$blogs[0]->title}}</h3>
                                        </a>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blogs[0]->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="{{route('frontend.single_blog',$blogs[0]->id)}}"
                                                   class="btn btn-link btn-neutral">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blogs[1]->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">
                                            <i class="fa fa-newspaper-o"></i> {{$blogs[1]->categories->name}}</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">{{$blogs[1]->title}}</h3>
                                        </a>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blogs[1]->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="{{route('frontend.single_blog',$blogs[1]->id)}}"
                                                   class="btn btn-link btn-neutral">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blogs[2]->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">
                                            <i class="fa fa-newspaper-o"></i> {{$blogs[2]->categories->name}}</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">{{$blogs[2]->title}}</h3>
                                        </a>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blogs[2]->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="{{route('frontend.single_blog',$blogs[2]->id)}}"
                                                   class="btn btn-link btn-neutral">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blogs[3]->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">
                                            <i class="fa fa-newspaper-o"></i> {{$blogs[3]->categories->name}}</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">{{$blogs[3]->title}}</h3>
                                        </a>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blogs[3]->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="{{route('frontend.single_blog',$blogs[3]->id)}}"
                                                   class="btn btn-link btn-neutral">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" data-background="image"
                                     style="background-image: url({{url('/').Storage::url($blogs[4]->image)}})">
                                    <div class="card-body">
                                        <h6 class="card-category">
                                            <i class="fa fa-newspaper-o"></i> {{$blogs[4]->categories->name}}</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">{{$blogs[4]->title}}</h3>
                                        </a>
                                        <p class="card-description">
                                            {!!str_limit(strip_tags($blogs[4]->body,150))!!}
                                        </p>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="{{route('frontend.single_blog',$blogs[4]->id)}}"
                                                   class="btn btn-link btn-neutral">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="blog-2 section section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Category wise</h2>
                            <br/>
                            <div class="row">
                                @if($technology)
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised"
                                                     src="{{url('/').Storage::url($technology->image)}}"
                                                     style="width:100rem; height:15rem !important;"/>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-info">{{$technology->categories->name}}</h6>
                                            <h5 class="card-title">
                                                <a href="#pablo">{{$technology->title}}</a>
                                            </h5>
                                            <p class="card-description">
                                                {!!str_limit(strip_tags($technology->body,150))!!}
                                                <br/>
                                            </p>
                                            <hr>
                                            <div class="card-footer">
                                                <div class="author">
                                                    <a href="{{route('frontend.single_blog',$technology->id)}}">
                                                        <span><strong>Read More</strong></span>
                                                    </a>
                                                </div>
                                                <div class="stats">
                                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                    @if($travel)
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised"
                                                     src="{{url('/').Storage::url($travel->image)}}"
                                                     style="width:100rem; height:15rem !important;"/>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-success">
                                                {{$travel->categories->name}}
                                            </h6>
                                            <h5 class="card-title">
                                                <a href="#pablo">{{$travel->title}}</a>
                                            </h5>
                                            <p class="card-description">
                                                {!!str_limit(strip_tags($travel->body,150))!!}
                                                <br/>
                                            </p>
                                            <hr>
                                            <div class="card-footer">
                                                <div class="author">
                                                    <a href="{{route('frontend.single_blog',$travel->id)}}">
                                                        <span><strong>Read More</strong></span>
                                                    </a>
                                                </div>
                                                <div class="stats">
                                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                        @if($food)
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised"
                                                     src="{{url('/').Storage::url($food->image)}}"
                                                     style="width:100rem; height:15rem !important;"/>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category text-danger">
                                                <i class="fa fa-free-code-camp"
                                                   aria-hidden="true"></i> {{$food->categories->name}}
                                            </h6>
                                            <h5 class="card-title">
                                                <a href="#pablo">{{$food->title}}</a>
                                            </h5>
                                            <p class="card-description">
                                                {!!str_limit(strip_tags($food->body,150))!!}
                                                <br/>
                                            </p>
                                            <hr>
                                            <div class="card-footer">
                                                <div class="author">
                                                    <a href="{{route('frontend.single_blog',$food->id)}}">
                                                        <span><strong>Read More</strong></span>
                                                    </a>
                                                </div>
                                                <div class="stats">
                                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-testimonials cd-section" id="testimonials">
        <!--     *********    TESTIMONIALS 2     *********      -->
        <div class="testimonials-2 section section-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 mr-auto">
                        <div class="testimonials-people">
                            <img class="left-first-person add-animation"
                                 src="{{url('frontend/assets/img/faces/samundra.jpg')}}"
                                 alt=""/>
                            <img class="left-second-person add-animation"
                                 src="{{url('frontend/assets/img/faces/rajesh.jpg')}}"
                                 alt=""/>
                            <img class="left-third-person add-animation"
                                 src="{{url('frontend/assets/img/faces/richa3.jpg')}}"
                                 alt=""/>
                            <img class="left-fourth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/ragen.jpg')}}"
                                 alt=""/>
                            <img class="left-fifth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sapna1.jpg')}}"
                                 alt=""/>
                            <img class="left-sixth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/milan2.jpg')}}"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="page-carousel">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img"
                                                     src="{{url('frontend/assets/img/faces/sahas1.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Don't Trust Me,
                                                    Otherwise I need to Trust You!"

                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title"><b>Sahas Dangol</b></h4>
                                                    <h6 class="card-category">“Well, I’m from Lubhoo, Lalitpur.
                                                        I was born in 1995 A.D. and spent most of my childhood hunched
                                                        over a Computers, striving to become a Software Engineer (which
                                                        I now am).
                                                        I love the travellers – I’m and book reeader and Music Lover.
                                                        I really love to Coding with my Logics.”</h6>
                                                    <div class="card-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img"
                                                     src="{{url('frontend/assets/img/faces/sahas2.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Being Alive is so Expensive. <br>
                                                    Feeling Alive is more..."
                                                </h5>
                                                <div class="card-footer">
                                                    <h5 class="card-title"><b>About Me</b></h5>
                                                    <h6 class="card-category">I graduated with a Bachelor in Computer
                                                        Engineering degree in 2018 A.D. from Khwopa Engineering College,
                                                        and was offered a full stack engineer position from a
                                                        information & telecommunications company.
                                                        I loved solving problems with my dedication and passion.
                                                        I feel ready to take my career to the next level so that’s why
                                                        I’m currently looking for a new opportunity.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img"
                                                     src="{{url('frontend/assets/img/faces/sahas3.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Life is too short to wake up in the morning with Regrets..."
                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title"><b>Skills</b></h4>
                                                    <h5>
                                                        <small># HTML, CSS, Bootstrap Framework</small>
                                                    </h5>
                                                    <h5>
                                                        <small># Javascript with React, Ajax, Jquery</small>
                                                    </h5>
                                                    <h5>
                                                        <small># PHP with Laravel framework & MYSQL</small>
                                                    </h5>
                                                    <h5>
                                                        <small># Python with django framework</small>
                                                    </h5>
                                                    <h5>
                                                        <small># Java with Swing</small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control carousel-control-prev"
                                   href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control carousel-control-next"
                                   href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 ml-auto">
                        <div class="testimonials-people">
                            <img class="right-first-person add-animation"
                                 src="{{url('frontend/assets/img/faces/roshan.jpg')}}" alt=""/>
                            <img class="right-second-person add-animation"
                                 src="{{url('frontend/assets/img/faces/biraz.jpg')}}"
                                 alt=""/>
                            <img class="right-third-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sahas1.jpg')}}"
                                 alt=""/>
                            <img class="right-fourth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/nabin.jpg')}}"
                                 alt=""/>
                            <img class="right-fifth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sapna2.jpg')}}"
                                 alt=""/>
                            <img class="right-sixth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/aashish.jpg')}}"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********    END TESTIMONIALS 2      *********      -->
    </div>

    <div class="section section-contactus cd-section" id="contact-us">
        <div class="contactus-1 section-image"
             style="background-image: url('frontend/assets/img/sections/soroush-karimi.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-contact no-transition">
                            <h3 class="card-title text-center">Contact Me</h3>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="card-body">
                                        {{--<div class="info info-horizontal">--}}
                                        {{--<div class="icon icon-info">--}}
                                        {{--<i class="nc-icon nc-pin-3" aria-hidden="true"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="description">--}}
                                        {{--<h4 class="info-title">Find us at the office</h4>--}}
                                        {{--<p> Bld Mihail Kogalniceanu, nr. 8,--}}
                                        {{--<br> 7652 Bucharest,--}}
                                        {{--<br> Romania--}}
                                        {{--</p>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="info info-horizontal">
                                            <div class="icon icon-danger">
                                                <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Give me a ring</h4>
                                                <p> Sahas Dangol
                                                    <br> +977 9843498012
                                                    <br> Mon - Fri, 8:00-22:00
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <form role="form" id="contact-form" method="post"
                                          action="{{route('contact.store')}}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First name</label>
                                                        <input type="text" name="first_name" class="form-control"
                                                               placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last name</label>
                                                        <input type="text" name="last_name" class="form-control"
                                                               placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="Email" required/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Subject</label>
                                                <input type="text" name="subject" class="form-control"
                                                       placeholder="Subject" required/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your message</label>
                                                <textarea name="message" class="form-control" id="message" rows="6"
                                                          placeholder="Message" required></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox"
                                                                   value=""> I'm not a robot !
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary pull-right">Send
                                                        Message
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="cd-vertical-nav">
        <ul>
            <li>
                <a href="#headers" data-number="1">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Home</span>
                </a>
            </li>
            <li>
                <a href="#blogs" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Blogs</span>
                </a>
            </li>
            <li>
                <a href="#testimonials" data-number="3">
                    <span class="cd-dot"></span>
                    <span class="cd-label">About</span>
                </a>
            </li>
            <li>
                <a href="#contact-us" data-number="4">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Contact</span>
                </a>
            </li>
        </ul>
    </nav>
@stop
