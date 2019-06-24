@php
    $settings=get_sidebar_setting();
@endphp

<div class="sidebar" data-color="{{$settings[1]->value}}" data-background-color="{{$settings[2]->value}}"
     data-image="{{url('img/sidebar-3.jpg')}}">

    <div class="logo">
        <a href="{{url('/dashboard')}}" class="simple-text logo-mini">
            {{--{{getInitials($settings[0]->value)}}--}}
        </a>
        <a href="{{url('/dashboard')}}" class="simple-text logo-normal">
            {{$settings[0]->value}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('assets/backend/img/faces/avatar.jpg')}}"/>
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                {{ucwords(Auth::user()->name)}}
                  <b class="caret"></b>
              </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/profile')}}">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{url('/profile')}}">--}}
                        {{--<span class="sidebar-mini"> EP </span>--}}
                        {{--<span class="sidebar-normal"> Edit Profile </span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav nav-sm" id="sidebar-menu">

            {{--dashboard--}}
            <li class="nav-item  nav-item-sm">
                <a class="nav-link" href="{{url('/home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            {{--dashboard--}}

            {{--Front Office--}}
            @if(\Illuminate\Support\Facades\Gate::check('visitor-list'))
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#front">
                        <i class="material-icons">class</i>
                        <p> Front Office
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="front">
                        <ul class="nav">
                            @can('visitor-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('visitors')}}">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> Visitor Book </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endif
            {{--Front Office--}}

            {{--RuleBook--}}
            @if(\Illuminate\Support\Facades\Gate::check('permission-list') || \Illuminate\Support\Facades\Gate::check('role-list') || \Illuminate\Support\Facades\Gate::check('user-list'))
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#rbac">
                        <i class="material-icons">recent_actors</i>
                        <p> Rule Book
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="rbac">
                        <ul class="nav">
                            @can('permission-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('permissions.index')}}">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> All Permissions </span>
                                    </a>
                                </li>
                            @endcan
                            @can('role-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('roles.index')}}">
                                        <span class="sidebar-mini"> &nbsp; </span>
                                        <span class="sidebar-normal"> All Roles </span>
                                    </a>
                                </li>
                            @endcan
                            @can('user-list')
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{url('/users')}}">
                                            <span class="sidebar-mini"> &nbsp; </span>
                                            <span class="sidebar-normal"> All Users </span>
                                        </a>
                                    </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endif
            {{--RuleBook--}}

            @can('category-list')
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/category')}}">
                        <i class="material-icons">supervisor_account</i>
                        <p> Category Information </p>
                    </a>
                </li>
            @endcan

            @can('blog-list')
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/blog')}}">
                        <i class="material-icons">supervisor_account</i>
                        <p> Manage Blogs </p>
                    </a>
                </li>
            @endcan

            @can('contact-list')
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/contact')}}">
                        <i class="material-icons">supervisor_account</i>
                        <p> Manage Feedback </p>
                    </a>
                </li>
            @endcan

            {{--Account--}}
            @if(\Illuminate\Support\Facades\Gate::check('day-book-list')  )
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('daybook')}}">
                        <i class="material-icons">account_balance</i>
                        <p> Account</p>
                    </a>
                </li>
            @endif
            {{--Account--}}

            {{--FrontEnd--}}
            @if(\Illuminate\Support\Facades\Gate::check('notice-list') || \Illuminate\Support\Facades\Gate::check('news-and-event-list') || \Illuminate\Support\Facades\Gate::check('gallery-list'))
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#frontend">
                        <i class="material-icons">class</i>
                        <p>
                            Front End
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="frontend">
                        <ul class="nav">
                            {{--Notice--}}
                            @can('notice-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/notice')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">Notice</span>
                                    </a>
                                </li>
                            @endcan
                            {{--Notice--}}
                            {{----News & Events----}}
                            @can('news-and-event-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/news_and_events')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">News & Events</span>
                                    </a>
                                </li>
                            @endcan
                            {{----News & Events----}}
                            @can('gallery-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/gallery')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">Gallery</span>
                                    </a>
                                </li>
                            @endcan @can('faq-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/faq')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">FAQ</span>
                                    </a>
                                </li>
                            @endcan @can('quick-link-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/quick_links')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">Quick Links</span>
                                    </a>
                                </li>
                            @endcan @can('content-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/content')}}">
                                        <span class="sidebar-mini">&nbsp;</span>
                                        <span class="sidebar-normal">Contents</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
            @endif
            {{--FrontEnd--}}

        </ul>
    </div>
</div>