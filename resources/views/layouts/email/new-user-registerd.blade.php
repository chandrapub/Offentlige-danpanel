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
    <h1>New User Registered at Danpanel.dk</h1>
    <div>
        <h2>Name: {{$data['name']}}</h2>
        <h2>Email: {{$data['email']}}</h2>
        <h2>Registered At: {{$data['created_at']}}</h2>
    </div>
</div>
</body>

</html>
