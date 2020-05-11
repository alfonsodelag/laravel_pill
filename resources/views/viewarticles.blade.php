@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <a class="text-center" href={{ url('newarticles') }}>Add New Articles</a>
        </div>
        <br>
        <h3 class="text-center">Articles Data</h3>
        <table class="table table-bordered">
            <tr>
                <th>Article Title</th>
                <th>Article Summary</th>
                <th>Article Slug</th>
                <th>Article Content</th>
            </tr>
            @foreach($articles as $row)
                <tr>
                    <td>{{$row['article_title']}}</td>
                    <td>{{$row['article_summary']}}</td>
                    <td>{{$row['slug_article']}}</td>
                    <td>{{$row['article_content']}}</td>
                    <td><a class="ml-4" href={{ url('showarticle/'.$row['slug_article']) }}>View Article</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
