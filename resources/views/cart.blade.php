<!DOCTYPE html>
<html>
<head>
	<title>гитары, музыка, магазин, интернет магазин, купить онлайн</title>
	<meta charset="utf-8">
	<link href="css/cart.css" rel="stylesheet">
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



<div class="cartdiv"> 
	<form method="post" >
		@csrf
	<div class="tittlecartdiv"><p class="title1">CART</p></div>
		@foreach($guitars as $guitar )
	  <div class="item">
		<div class="image">
			<div class="image2">
				<img src="{{asset("images/guitars/$guitar->id.png")}}" class = "img1"/>
			</div>
			<p class="description">{{$guitar->name}}</p>
		</div>
		<div class="integer">
			<input type="text" name="name" value="1">
		</div>
		<div class="totalprice">${{($guitar->price)/100 }}</div>
		<div class="buttons">
			<form method="post">
				@csrf
				<button class="deletebtn" type="submit" name="remove" value="{{$guitar->id}}"><img  src="images/cart/delete.png"></button>

			</form>
		</div>
	  </div>
		@endforeach

<!--
	<div class="item">
		<div class="image">
			<div class="image2">
				<img src="images/cart/img2.png" class = "img1"/>
			</div>
			<p class="description">Yamaha S30077</p>
		</div> 
		<div class="integer">
			<input type="text" name="name" value="1">
		</div>
		<div class="totalprice">$1650</div>
		<div class="buttons">
			<form>
				<button class="deletebtn"><img src="images/cart/delete.png"></button>
			</form>
		</div>
	</div>

	<div class="item">
		<div class="image">
			<div class="image2">
				<img src="images/cart/img3.png" class = "img1"/>
			</div>
			<p class="description">Yamaha FG-312</p>
		</div>
		<div class="integer">
			<input type="text" name="name" value="1">
		</div>
		<div class="totalprice">$4000</div>
		<div class="buttons">
			<form>
				<button class="deletebtn"><img src="images/cart/delete.png"></button>
			</form>
		</div>
	</div>
	-->
	<div class="bagwrapper">
		<!--
		<div class="allprice">
			<span class="allpricetext">Total: $7650</span>
		</div>
		-->
		<button  class = "buy">
			<a href="{{URL::route('buy')}}" class = "buy1">BUY</a>
		</button>
	</div>
	</form>
</div>




<div class = "content3div">
	<button class = "content3button"><p>EXPLORE GUITAR</p></button>
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