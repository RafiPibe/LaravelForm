<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submitted Data</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data Submitted successfully!</h1>
    
    <h2>Here's the data:</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Age:</strong> {{ $age }}</p>
    <p><strong>Shoe Size:</strong> {{ $shoeSize }} cm</p>
    <p><strong>Le Image:</strong></p>
    <img src="{{ asset('storage/' . $picturePath) }}" alt="User's Picture">

</body>
</html>