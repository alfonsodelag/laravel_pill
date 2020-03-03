{{-- @extends('main') --}}
@extends('layouts.app')

@if(session('message'))
        <p>{{session('message')}}</p>
@endif


@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach

{{-- TODO: FILL "ACTION" --}}
@section('content')
<h3>Thanks for contacting us</h3>
@endsection



