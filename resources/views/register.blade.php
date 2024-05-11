<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.header-package')
    <title>Register New Customer</title>
</head>

<body>
    <main class="authentication-container">
        <section class="authentication-form-container">
            <form action="" method="GET">
                @csrf
                <h1>Register New Customer</h1>
                <input type="text" name="type" value="customer" hidden>
                <div class="field-container">
                    <label for="lastname" class="form-label">Name</label>
                    <input type="text" name="lastname" class="form-control"
                        value="{{ !empty(old('lastname')) ? old('lastname') : null }}" placeholder="Enter Name"
                        required>
                </div>
                <div class="field-container">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ !empty(old('email')) ? old('email') : null }}" placeholder="Enter Email Address"
                        required>
                </div>
                <div class="field-container">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="authentication-button-container">
                    <a href="{{ route('welcomes') }}" class="btn-danger">Back</a>
                    <button type="submit" class="btn-success"
                        onclick="return confirm('Are you sure to register this information?')">Register</button>
                </div>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('layouts.toastr-script')
</body>

</html>
