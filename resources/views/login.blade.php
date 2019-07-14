<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>

    <div id="login">
        <div class="login-wrapper">
            <div class="container">
                <div class="d-flex pt-5 align-items-center flex-column">
                    <h3>Sign In</h3>
                    <p>Selamat Datang Kembali Admin</p>

                    {{-- form login --}}
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" aria-describedby="username"
                                placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>


</body>

</html>
