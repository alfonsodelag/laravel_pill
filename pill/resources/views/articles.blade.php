@extends('main')

@if(session('message'))
        <p>{{session('message')}}</p>
@endif


@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach

@section('content')
<form method="GET" action="{{action('ContactController@store')}}">
    {{ csrf_field() }}

    <div class="container mt-5">
        <div class="col-12">
            <p for="article_ID">Article Id: {{ }} </p>
            <p for="article_title">Article Title: </p>
            <p for="article_summary">Article Summary: </p>
            <p for="slug_article">Slug Article: </p>
            <p for="article_content"></p>
            <p for="textarea"></p>
        </div>
    </div>
</form>
@endsection
