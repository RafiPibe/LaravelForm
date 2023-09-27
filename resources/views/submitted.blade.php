<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submitted Data</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <h1>Submitted Data</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Age:</strong> {{ $age }}</p>
    <p><strong>Height:</strong> {{ $Height }} cm</p>
    <img src="{{ asset('storage/' . $picturePath) }}" alt="User's Picture">

</body>
</html>
