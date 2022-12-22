<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<title></title>
</head>
<body>
	<style type="text/css">
		.containerr{
			width: 30%;
			margin-left: 35%;
			padding: 2%;
			border: 0.5px solid lightgray;
			box-shadow: 1px 1px 10px lightgray;
			margin-top: 50px;
		}
		.field-row label{
			font-family: "Big Caslon";
			font-size: 20px;
			font-weight: 500;
		}
		.field-row input{
			width: 100%;
			height: 30px;
			border-radius: 5px;
			border: 0.5px solid gray;
			margin-top: 5px;
			margin-bottom: 5px;
			padding: 5px;
		}
		.field-row textarea{
			width: 100%;
			height: 50px;
			border-radius: 5px;
			border: 0.5px solid gray;
			margin-top: 5px;
			margin-bottom: 5px;
			padding: 5px;
		}
		.form-row label{
			font-family: "Big Caslon";
			font-size: 20px;
		}
		#card-errors{
			font-family: "Big Caslon";
			font-size: 20px;
			margin: 10px;
		}
		.submitbut{
			width: 80%;
			margin-left: 10%;
			border: none;
			background: #3CB371;
			color: white;
			border-radius: 5px;
			height: 40px;
			font-size: 20px;
			margin-top: 5px;
		}
		.containerr img{
			margin: 20px;
		}
	</style>
	<div class="containerr">
		<div class="center">
			<img src="image/ssl.png">
		</div>
		<form action="charge.php" method="POST" id="payment-form">
			<div class="field-row">
				<label>Ad *</label><span id="card-holder-name-info" class="info"></span><br>
				<input type="text" name="" id="" class="demoInputBox" placeholder="Ad" required>
			</div>
			<div class="field-row">
				<label>Soyad *</label><span id="card-holder-name-info" class="info"></span><br>
				<input type="text" name="" id="" class="demoInputBox" placeholder="Soyad" required>
			</div>
			<div class="field-row">
				<label>Kart Üzerindeki İsim *</label><span id="card-holder-name-info" class="info"></span><br>
				<input type="text" name="fullname" id="fullname" class="demoInputBox" placeholder="Kart Üzerindeki İsim" required>
			</div>
			<div class="field-row">
				<label>E-mail *</label><span id="email-info" class="info"></span><br>
				<input type="email" name="email" id="email" class="demoInputBox" placeholder="artexperts@gmail.com" required>
			</div>
			<div class="field-row">
				<label>Adres</label>
				<textarea type="text" class="demoInputBox" id="adress" name="adress" placeholder="Adres..."></textarea>
			</div>
			<div class="field-row">
				<label>Tutar *</label>
				<input type="text" name="tutar" id="tutar" class="demoInputBox" placeholder="100.50" required>
			</div>
			<br>	
			<div class="form-row">
				<label for="card-element">Kart Bilgileri *</label>
			</div>
			<div id="card-element">

			</div>
			<div id="card-errors" role="alert" style="color:red">

			</div>
			<button class="submitbut">Ödeme Yap</button>
		</form>
	</div>


	<script type="text/javascript">
		var stripe = Stripe("pk_live_rmu8LDgMN0HMxIsQRNOhAEb300iYwWxxQ0");
		var elements = stripe.elements();
		var style = {
			base:{
				iconColor: '#000',
				fontSize : "20px",
				color:"#000",
				fontSmoothing: 'antialiased',
				':-webkit-autofill': {
					color: '#000',
				},
				'::placeholder': {
					color: '#000',
				},
				invalid: {
					iconColor: '#f00',
					color: '#FFC7EE',
				},
			},
		};
		var card = elements.create("card",{style:style});
		card.mount("#card-element");
		var form = document.getElementById("payment-form");
		form.addEventListener("submit",function(event){
			event.preventDefault();
			stripe.createToken(card).then(function(result){
				if(result.error){
					var errorElement = document.getElementById("card-errors");
					errorElement.textContent = result.error.message;
				}
				else{
					var fullname = $("#fullname").val();
					var email = $("#email").val();
					var adress = $("#adress").val();
					var tutar = $("#tutar").val();
					$.ajax({
						url:"insert.php",
						method:"POST",
						data:{
							fullname:fullname,
							email:email,
							adress:adress,
							tutar:tutar
						},
						success:function(data){
							alert("Ödeme Başarılı");
						}
					})
					stripeTokenHandler(result.token);
				}
			});
		});
		function stripeTokenHandler(token){
			var form = document.getElementById("payment-form");
			var hiddenInput = document.createElement("input");
			hiddenInput.setAttribute("type","hidden");
			hiddenInput.setAttribute("name","stripeToken");
			hiddenInput.setAttribute("value",token.id);
			form.appendChild(hiddenInput);
			form.submit();
		}
	</script>

</body>
</html>