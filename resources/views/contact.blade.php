<!DOCTYPE html>
<html>
<head>
	<title>гитары, музыка, магазин, интернет магазин, купить онлайн</title>
	<meta charset="utf-8">
	<link href="css/contact.css" rel="stylesheet">
</head>
<body>
<div class = "headerdiv">
	<div class = "header">
		Viola! Welcome to <strong>GITAR KEREN<strong>, Find your dream guitar here! Happy shopping ^^
	</div>
	<div class = "header1">
		<a href="{{URL::route('register')}}" class = "headersrc">REGISTER</a>
		<a href="{{URL::route('login')}}" class = "headersrc">SIGN IN</a>
		<a href="{{URL::route('cart')}}" class = "headersrc">CART</a>
	</div>
</div>
<div class = "headerdiv1">
	<img src="images/index/header/guitarlogo.png" class = "headerimage">
	<a href="{{URL::route('contact')}}" class = "headersrc1">CONTACT</a>
	<a href="{{URL::route('aboutus')}}" class = "headersrc1">ABOUT US</a>
	<a href="{{URL::route('guitars')}}" class = "headersrc1">GUITARS</a>
	<a href="{{URL::route('demo')}}" class = "headersrc1">ACCESSORIES</a>
	<a href="{{URL::route('main')}}" class = "headersrc1">HOME</a>
</div>



<div class="contactdiv">
	<div class = "cntcthdr"><p>КОНТАКТНАЯ ИНФОРМАЦИЯ</p></div>
	<div class = "contactheader"><p>Отдел продаж</p></div>
	<div class = "contacttext">
		<p class="contacttextheader1">График:</p>
		<p class="contacttext1">Пн.-Птн. 09:00-20:00<br>Сб.-Вс. 10:00-17:00</p>
		<p class="contacttextheader1">Номера:</p>
		<p class="contacttext1">(067) 507-55-66<br>(093) 170-12-13<br>(050) 450-30-01<br>0800-50-70-99<br>(093) 223-45-23</p>
	</div>

	<div class = "contactheader"><p>Отдел доставки</p></div>
	<div class = "contacttext">
		<p class="contacttextheader1">График:</p>
		<p class="contacttext1">Пн.-Птн. 09:00-19:00<br>Сб. 10:00-17:00</p>
	</div>

	<div class = "contactheader"><p>Пункт выдачи</p></div>
	<div class = "contacttext">
		<p class="contacttextheader1">График:</p>
		<p class="contacttext1">Пн.-Птн. 10:00-20:00<br>Сб. 10-17.00<br>Вс. выходной</p>
	</div>
</div>



<div class = "content1div">
	<form>
	<div class = "content11">
		<div class = "content1head">BEST SELLER</div>
		<div class = "content1img"><img src="images/index/content1/img.png"></div>
	</div>

	<div class = "content12">
		<p class = "content1head2">Yamaha FG700S</p>
		<p class = "content1text">by Yamaha Guitar</p>
		<p class = "content1price">$2000</p>
		<button class = "content1button"><p>ADD TO CART</p></button>
	</div>
</form>
</div>



<div class = "footerdiv">
	<div class = "footer">
		<a href="{{URL::route('demo')}}" class = "footersrc1">HOW TO BUY</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">RETURN POLICY</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">REVIEWS</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">SECURE PAYMENT</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">TERMS & CONDITIONS</a>
	</div>
	<div class = "footer1"><p class = "p01">CRAFTED BY <strong>NUR PRADITYA WIBISONO</strong></p><p class = "p02">COPYRIGHT 2015 <strong>WELLSAE PROJECT</strong></p></div>
	<div class = "footer2">
		<a href = "https://www.facebook.com/"><img src="images/index/footer/facebook.png"></a>
		<a href = "https://www.tumblr.com/"><img src="images/index/footer/tumb.png"></a>
		<a href = "https://twitter.com/"><img src="images/index/footer/twitter.png"></a>
	</div>
</div>
</body>
</html>