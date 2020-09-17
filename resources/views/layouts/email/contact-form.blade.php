<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/site/assets/images/logo-sign.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
<h1 style="text-align: center">DanPanel</h1>

<div style="text-align: center;">
    <p><strong>Name: {{$data->name}}</strong></p>
    <p><strong>Email: {{$data->email}}</strong></p>
    <p><strong>Tlf: {{$data->tlf}}</strong></p>
    <p><strong>Subject: {{$data->subject}}</strong></p>
    <p><strong>Message: {{$data->message}}</strong></p>
</div>
</body>

</html>
