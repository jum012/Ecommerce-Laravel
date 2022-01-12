@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmaill">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="exampleInputEmaill">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
