@extends('layouts.app')

@if(session('message'))
        <p>{{session('message')}}</p>
@endif


@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach

@section('content')
<form method="POST" action="submitArticle">
    {{ csrf_field() }}
    <div class="container mt-5">
        <div class="col-12 mt-5">
            <label for="title">Title:</label><input type="text" name="article_title">
            <label for="article_summary">Article Summary:</label><input type="text" name="article_summary">
            <label for="slug_article">Slug Article:</label><input type="text" name="slug_article">
        </div>
        <div class="mt-5 col-12">
            <label for="textarea">Article Content: </label>
            <textarea name="article_content" rows="4" cols="50"></textarea>
        </div>
        <div class="col-12">
            <button type="submit">Submit Data</button>
        </div>
    </div>
</form>
@endsection
