@extends('frontend::layouts.master')
@section('title','Home')
@section('Body')
<style>

    h1:hover
    {
        /* CSS3 Transform Effect */
        -webkit-transform: scale(1.2);     /* Safari & Chrome */
        -moz-transform: scale(1.2);        /* Firefox */
        -o-transform: scale(1.2);          /* Opera */
    }
</style>
    <div class="section section-header cd-section" id="headers">
        <div class="header-1">
            <div class="page-header" style="background-image: url({{url('frontend/assets/img/back.jpg')}});">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6  ml-auto mr-auto">
                                <h1 class="title" style=""><b><strong><font color="yellow">Susan's</font><font color="red"> Blog</font></strong></b></h1>
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
                                 src="{{url('frontend/assets/img/faces/nishan3.jpg')}}"
                                 alt=""/>
                            <img class="left-second-person add-animation"
                                 src="{{url('frontend/assets/img/faces/archi1.jpg')}}"
                                 alt=""/>
                            <img class="left-third-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sabina.jpg')}}"
                                 alt=""/>
                            <img class="left-fourth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/aries.jpg')}}"
                                 alt=""/>
                            <img class="left-fifth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sharmila.jpg')}}"
                                 alt=""/>
                            <img class="left-sixth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/aryan.jpg')}}"
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
                                                     src="{{url('frontend/assets/img/faces/susan.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Push yourself,
                                                    because no one else is going to do it for you."

                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title"><b>Susan Chikanbanjar</b></h4>
                                                    <h6 class="card-category">“Well, I’m from Chyamasingh, Bhaktapur.
                                                        I was born in 1997 A.D. and spent most of my childhood hunched
                                                        over a Computers, striving to become a Software Engineer (which
                                                        I now am).
                                                        I love the travellers – I’m and book reader and Music Lover.
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
                                                     src="{{url('frontend/assets/img/faces/susan4.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "It’s Not Whether You Get Knocked Down,
                                                    It’s Whether You Get Up."
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
                                                     src="{{url('frontend/assets/img/faces/susan2.jpg')}}"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Failure Will Never Overtake Me
                                                    If My Determination To Succeed Is Strong Enough."
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
                                                        <small># Android</small>
                                                    </h5>
                                                    <h5>
                                                        <small># Java</small>
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
                                 src="{{url('frontend/assets/img/faces/nishan1.jpg')}}" alt=""/>
                            <img class="right-second-person add-animation"
                                 src="{{url('frontend/assets/img/faces/saanro.jpg')}}"
                                 alt=""/>
                            <img class="right-third-person add-animation"
                                 src="{{url('frontend/assets/img/faces/sarita.jpg')}}"
                                 alt=""/>
                            <img class="right-fourth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/prem.jpg')}}"
                                 alt=""/>
                            <img class="right-fifth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/shreetu.jpg')}}"
                                 alt=""/>
                            <img class="right-sixth-person add-animation"
                                 src="{{url('frontend/assets/img/faces/susan5.jpg')}}"
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
                                                <p> Susan Chikanbanjar
                                                    <br> +977 9843352492
                                                    <br> Mon - Fri, 8:00-22:00
                                                </p>
                                            </div>
                                        </div>
                                        <div style="width: 300px; height: 300px;">

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
