@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br>
        <h3 class="text-center">Articles Data</h3>
        <table class="table table-bordered">
            <tr>
                <th>Article Title</th>
                <th>Article Summary</th>
                <th>Article Slug</th>
                <th>Article Content</th>
            </tr>
                <tr>
                    <td>{{$article['article_title']}}</td>
                    <td>{{$article['article_summary']}}</td>
                    <td>{{$article['slug_article']}}</td>
                    <td>{{$article['article_content']}}</td>
                    <td><a href="/viewarticle/{{$article['slug_article']}}">{{$article['slug_article']}}</a></td>
                </tr>
        </table>
    </div>
</div>

