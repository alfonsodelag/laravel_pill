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
                <th>Article Content</th>
            </tr>
                <tr>
                    <td>{{$article[0]['article_title']}}</td>
                    <td>{{$article[0]['article_summary']}}</td>
                    <td>{{$article[0]['article_content']}}</td>
                </tr>
        </table>
    </div>
</div>
@endsection
