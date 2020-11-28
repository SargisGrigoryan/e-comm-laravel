@extends('master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4 m-auto">
                <h1>Login</h1>
                <hr>
                <form action="login" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection