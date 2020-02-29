@extends('main')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Signup</h3>
                </div>
                <div class="card-body">
                    <form action="/signup" method="POST">
                        <div class="form-group">
                            <input type="text" name="userName" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="email" placeholder="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



