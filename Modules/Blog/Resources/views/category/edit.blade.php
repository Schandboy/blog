@extends('master')

@section('title', 'Sahas Blog | Edit Category')
@section('Body')
    <div class="col-md-12">
        <form id="TypeValidation" class="form-horizontal process" action="{{URL::to('/category/'.$category->id)}}" method="post" enctype="multipart/form-data">
           @method('PUT')
            <div class="card ">
                <div class="card-header card-header-success card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Category</h4>
                    </div>
                </div>
                <div class="card-body ">

                    <div class="row">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="bmd-label-floating">Category Name*</label>
                                <input class="form-control" type="text" maxlength="100" value="{{$category->name}}" name="name" required="true" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-9 col-form-label"></label>
                        <button class="btn btn-primary btn-round float-right mr-1">
                            Update Category
                        </button>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@stop