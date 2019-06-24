@extends('master')

@section('title')
    Susan's Blog | Feedback
@stop

@section('Body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Feedback</h4>

                        <button class="btn btn-primary btn-round float-right mr-1" data-toggle="modal"
                                data-target="#noticeModal">
                            <i class="material-icons">games</i>Advance Options
                        </button>

                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                {{--<th class="disabled-sorting text-right">Actions</th>--}}
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $feedback)
                                        <tr>
                                            <td>{{$feedback->id}}</td>
                                            <td>{{ucfirst($feedback->first_name)}} {{ucfirst($feedback->last_name)}}</td>
                                            <td>{{$feedback->email}}</td>
                                            <td>{{$feedback->subject}}</td>
                                            <td>{{$feedback->message}}</td>
                                            <td>{{$feedback->created_at}}</td>
                                            {{--<td class="text-right">--}}
                                                {{--@can('enquiry-show')--}}
                                                    {{--<a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>--}}
                                                {{--@endcan--}}
                                                {{--@can('enquiry-delete')--}}
                                                    {{--<a href="#" onclick="--}}
                                                            {{--on(); if(confirm('Are You sure, You Want To Delete?'))--}}
                                                            {{--{--}}
                                                            {{--event.preventDefault();--}}
                                                            {{--document.getElementById('delete-form-{{$feedback->id}}').submit();--}}
                                                            {{--}--}}
                                                            {{--else{--}}
                                                            {{--event.preventDefault();--}}
                                                            {{--}" title="Delete" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i>--}}
                                                    {{--</a>--}}
                                                    {{--<form method="post" action="{{route('contact.destroy',$feedback->id)}} " id="delete-form-{{$feedback->id}}">--}}
                                                        {{--@csrf--}}
                                                        {{--{{method_field('DELETE')}}--}}
                                                    {{--</form>--}}
                                                {{--@endcan--}}
                                            {{--</td>--}}
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
        @include('includes.advancedOption')
    </div>
@stop