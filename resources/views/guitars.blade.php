<!DOCTYPE html>
<html>
<head>
	<title>гитары, музыка, магазин, интернет магазин, купить онлайн</title>
	<meta charset="utf-8">
	<link href="css/guitars.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>

<div class = "headerdiv">
	<div class = "header">
		Viola! Welcome to <strong>GITAR KEREN</strong>, Find your dream guitar here! Happy shopping ^^
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


<div class = "filterdiv">
	<div class="filterheaderdiv">
		<p class="filterheader">GUITARS:</p>
	</div>
	<div class="filtertextdiv">
		<a href="demo.blade.php" class="filtertext">Electro</a>
		<a href="demo.blade.php" class="filtertext">Acoustic</a>
		<a href="demo.blade.php" class="filtertext">Bass</a>
		<a href="demo.blade.php" class="filtertext">Classical</a>
		<a href="demo.blade.php" class="filtertext">Electro-acoustic</a>
		<a href="demo.blade.php" class="filtertext">Silent</a>
		<a href="demo.blade.php" class="filtertext">Ukulele</a>
		<a href="demo.blade.php" class="filtertext">Banjo</a>
		<a href="demo.blade.php" class="filtertext">Mandolins</a>
	</div>
</div>



<div class = "content1div">
	<form>
	<div class = "content11">
		<div class = "content1head">BEST SELLER</div>
		<div class = "content1img"><img src="{{asset("images/index/content1/img.png")}}"></div>
	</div>

	<div class = "content12">
		<p class = "content1head2">Yamaha FG700S</p>
		<p class = "content1text">by Yamaha Guitar</p>
		<p class = "content1price">$2000</p>
		<button class = "content1button"><p>ADD TO CART</p></button>
	</div>
</form>
</div>



<div class = "content2div">
    @foreach($guitars as $guitar)
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="{{asset("images/guitars/$guitar->id.png")}}"></a>
		</div>
		<div class = "producttext">
			<form method="post">
				@csrf
				<p class = "content2head">{{$guitar->name}}</p>
				<p class = "content2text">by {{$guitar->model}}</p>
				<p class = "content2price">$ {{($guitar->price)/100}}</p>
				<input class="add" type="text" name="add"  value="{{$guitar->id}}">
				<input type="submit" class = "content2button" value="ADD TO CART">
			</form>
		</div>
	</div>
	@endforeach

	<p class="paginate">{{$guitars->links()}}</p>
	<!--
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="images/index/content2/img2.png"></a>
		</div>
		<div class = "producttext">
			<form>
				<p class = "content2head">Yamaha S30077</p>
				<p class = "content2text">by Yamaha Guitar</p>
				<p class = "content2price">$1650</p>
				<button class = "content2button"><p>ADD TO CART</p></button>
			</form>
		</div>
	</div>
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="images/index/content2/img3.png"></a>
		</div>
		<div class = "producttext">
			<form>
				<p class = "content2head">Yamaha FG-312</p>
				<p class = "content2text">by Yamaha Guitar</p>
				<p class = "content2price">$4500</p>
				<button class = "content2button"><p>ADD TO CART</p></button>
			</form>
		</div>
	</div>
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="images/index/content2/img1.png"></a>
		</div>
		<div class = "producttext">
			<form>
				<p class = "content2head">Yamaha FG-375</p>
				<p class = "content2text">by Yamaha Guitar</p>
				<p class = "content2price">$2000</p>
				<button class = "content2button"><p>ADD TO CART</p></button>
			</form>
		</div>
	</div>
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="images/index/content2/img2.png"></a>
		</div>
		<div class = "producttext">
			<form>
				<p class = "content2head">Yamaha S30077</p>
				<p class = "content2text">by Yamaha Guitar</p>
				<p class = "content2price">$1650</p>
				<button class = "content2button"><p>ADD TO CART</p></button>
			</form>
		</div>
	</div>
	<div class = "product">
		<div class = "productimg">
			<a href="guitars.blade.php" class = "imgsrc"><img src="images/index/content2/img3.png"></a>
		</div>
		<div class = "producttext">
			<form>
				<p class = "content2head">Yamaha FG-312</p>
				<p class = "content2text">by Yamaha Guitar</p>
				<p class = "content2price">$4500</p>
				<button class = "content2button"><p>ADD TO CART</p></button>
			</form>
		</div>
	</div>
	-->
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