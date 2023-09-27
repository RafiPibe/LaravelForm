<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
</div>

    @endif
    <h1>Register Form</h1>
    <form class="register" action="{{ route('register.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="file" name="picture" accept="image/*" required>
        <button type="submit" name="submit" placeholder="Register">Register</button>
    </form>

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