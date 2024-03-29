@extends('master')

@section('title', get_school_info('site_title').' | Add Permission')

@section('Body')

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Add Permission</h1>
        <br>
        <form action="{{route('permissions.index')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <br>
            <div class="form-group">
                <label for="name">Guard Name</label>
                <input type="text" class="form-control" name="guard_name" value="web">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Add">
        </form>
    </div>

@endsection