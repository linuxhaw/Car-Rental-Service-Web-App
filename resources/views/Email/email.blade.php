<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/emails/contact.blade.php -->

    <p>Name: {{ $formData['name'] }}</p>
    <p>Email: {{ $formData['email'] }}</p>
    <p>Message: {{ $formData['message'] }}</p>

</body>

</html>
