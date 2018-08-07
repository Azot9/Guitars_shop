<!DOCTYPE html>
<html>
<head>
    <title>гитары, музыка, магазин, интернет магазин, купить онлайн</title>
    <meta charset="utf-8">
    <link href="css/buy.css" rel="stylesheet">
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



<div class = "regdiv">
    <form method="post">
        @csrf
        <div class = "regform">
        <p class = "regtext">Buying Form</p>
    </div>

    <div class = "reg">
        <p class = "regtext">Input Your Name</p>
        <input name="name" type="text" placeholder="name...">
    </div>
    <div class = "reg">
        <p class = "regtext">Input Your Surname</p>
        <input name="surname" type="text" placeholder="surname...">
    </div>
    <div class = "reg">
        <p class = "regtext">Input Your E-Mail</p>
        <input name="e_mail" type="text" placeholder="email...">
    </div>

    <div class = "reg">
        <p class = "regtext">Input Your Phone Number</p>
        <input  name="phone_number" type="text" placeholder="phone number...">
    </div>
    <button class = "send">OK</button>
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