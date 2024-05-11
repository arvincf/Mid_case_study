<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.header-package')
    <title>Login Form</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card">
        <div class="card-body">
            <main class="authentication-container">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <h1 class="mb-4">Login Form</h1>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Enter Email Address" value="{{ old('email') }}" required>
                        <label for="email" class="form-label">Email address</label>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Password" required>
                        <label for="password" class="form-label">Password</label>
                        <div class="invalid-feedback">Please provide a password.</div>
                    </div>
                    <div class="form-link mb-3">
                        <a href="{{route('register')}}">Do you have an account? Register new account.</a>
                    </div>
                    <div class="authentication-button-container">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('layouts.toastr-script')
</body>

</html>
