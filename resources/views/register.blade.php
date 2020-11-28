@extends('master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4 m-auto">
                <h1>Register</h1>
                <hr>
                <form action="register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input1">User name</label>
                        <input type="text" name="username" class="form-control" id="input1" placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection