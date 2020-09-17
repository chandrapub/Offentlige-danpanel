<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<div class="create-payment">Accepter ordre</div>
<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>


<script>

    $(".create-payment").click(function () {
        $.ajax({
            url: "https://api.dibspayment.eu/v1/payments/",
            type: "post",
            headers: {
                'Authorization': 'test-secret-key-545225c85d254ef296283fcba54bd26c',
                // 'Content-Type':'application/json'
            },
         
            success: function (response) {
                console.log(response)
            },

            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    })

</script>
</body>
</html>