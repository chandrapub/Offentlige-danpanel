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
	<!--<h1>Thank you for choosing DanPanel ApS.</h1>-->
	<!--<p>Your Subscription is now completed and registered in our system. We look forward to submitting your product /-->
	<!--	solution.-->
	<!--	<br> You can follow the process in your profile. If you have questions regarding this. delivery or other, please-->
	<!--	contact us.</p>-->
</div>

<div class="order-info">
    <h1> Formular detaljer</h1>
    @include('customer.inc.order-info',['order'=>$data])
</div>
<div>
    <h1> Ordre detaljer</h1>
    <table>
        <tr>
            <td>Ordre ID</td>
            <td>:</td>
            <td> {{$data->custom_order_id}}</td>
        </tr>
        <tr>
            <td>Produktnavn</td>
            <td>:</td>
            <td> {{$data->product->name}}</td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td> {{$data->product->category->name}}</td>
        </tr>
        <tr>
            <td>Ordre Dato</td>
            <td>:</td>
            <td>{{$data->created_at->format('d-m-Y H:s:i')}}</td>
        </tr>
    </table>

    <h4>Din forespørgsel videresendes til vores samarbejdspartner. Vi tilstræber os efter, at du får svar på din
        henvendelse inden for 24 timer jf. arbejdsdage</h4>

</div>
</body>

</html>
