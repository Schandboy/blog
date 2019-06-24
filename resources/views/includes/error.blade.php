@if(count($errors)>0)
    <strong class="btn-outline-danger">Whoops!</strong> There were some problems with your input.<br>
@foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
@endif