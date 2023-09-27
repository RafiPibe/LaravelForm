<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container h1 {
            text-align: center;
            margin-top: 0;
        }
    </style>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="form-container">
        <form class="register form-container" action="{{ route('register.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="">Register Form</h1>
            <p>Name:</p>
            <input type="text" name="name" placeholder="Name" required>

            <p>Address:</p>
            <input type="text" name="address" placeholder="Address" required>

            <p>Email:</p>
            <input type="email" name="email" placeholder="Email" required>

            <p>Age:</p>
            <input type="number" name="age" placeholder="Age" required>

            <p>Shoe Size:</p>
            <input type="number" step="0.01" name="shoeSize" placeholder="Shoe Size" required>

            <p>Image:</p>
            <input type="file" name="picture" accept="image/*" required>
            <button type="submit" name="submit" placeholder="Register">Register</button>
        </form>
    </div>

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

</body>
</html>