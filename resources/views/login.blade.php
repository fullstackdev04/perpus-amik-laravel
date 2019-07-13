@extends('template.app')

@section('content')
    <div id="login">
        <div class="login-wrapper">
            <div class="container">
                <div class="d-flex pt-5 align-items-center flex-column">
                    <h3>Sign In</h3>
                    <p>Selamat Datang Kembali Admin</p>

                    {{-- form login --}}
                    <form>
                        <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
@endsection