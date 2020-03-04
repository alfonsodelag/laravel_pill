{{-- @extends('main') --}}
@extends('layouts.app')

@if(session('message'))
        <p>{{session('message')}}</p>
@endif


@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach

{{-- TODO: FILL "ACTION --}}
@section('content')
<form method="POST" action="sendmail">
    {{ csrf_field() }}

    <div class="container mt-5">
        <div class="col-12 mt-5">
            <label for="title">Title:</label><input type="text" name="title" required>
            <label for="email">E-mail:</label><input type="email" name="email" required>
            <label for="user_ID">User ID</label><input type="number" name="user_ID" required>
        </div>
        <div class="col-12 mt-5">
            <label for="textarea">Text:</label>
            <textarea name="textarea" rows="4" cols="50"></textarea>
        <div class="col-12">
            <input type="submit">
        </div>
    </div>
</form>
@endsection



