@extends('main')

@if(session('message'))
        <p>{{session('message')}}</p>
@endif


@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach

@section('content')
<form method="POST" action="{{action('ContactController@store')}}">
    {{ csrf_field() }}

    <div class="container mt-5">
        <div class="col-12">
            <label for="title">Title:</label><input type="text" name="title">
            <label for="email">E-mail:</label><input type="email" name="email">
            <label for="user_ID">User ID</label><input type="number" name="user_ID">
            <label for="textarea">Text:</label>
            <textarea name="textarea" rows="4" cols="50"></textarea>
            <input type="submit">
        </div>
    </div>
</form>
@endsection



