=<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/site/assets/images/logo-sign.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
<h1 style="text-align: center">DanPanel</h1>
<br>
<h2 style="text-align: center">Tak for din henvendelse! </h2>
<h4 style="text-align: center">Vores supervisor gennemgår din forespørgsel med udgangspunkt i den ønskede ydelse. Vi vil kontakte dig snarest og matche dit behov med kvalificeret mandskab til sagen/opgaven.
</h4>
<h4 style="text-align: center">Supervisoren vil efter dialogen med dig matche opgaven med den rette kandidat. Du/kommunen vælger selv om I vil fortsætte med kandidaten. Herefter vil et opstartsmøde aftales, og I kan drøfte sagen/opgaven med den valgte kandidat.
</h4>
<h4 style="text-align: center">Du vil modtage notifikationer om, hvilket stadie din henvendelse er på. Følg med i forløbet ved at logge ind og klikke på din profil på offentlige.danpanel.dk. Her vil du også kunne chatte med os samt finde dokumenter/filer relateret til dine sager.
</h4>
 
                       
                       
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
