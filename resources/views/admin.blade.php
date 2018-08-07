<!DOCTYPE html>
<html>
<head>
	<title>одменка</title>
	<meta charset="utf-8">
	<link href="css\admin.css" rel="stylesheet">
</head>
<body>

<div class = "headerdiv1">
	<img src="images/index/header/guitarlogo.png" class = "headerimage">
	<a href="{{URL::route('contact')}}" class = "headersrc1">CONTACT</a>
	<a href="{{URL::route('aboutus')}}" class = "headersrc1">ABOUT US</a>
	<a href="{{URL::route('guitars')}}" class = "headersrc1">GUITARS</a>
	<a href="{{URL::route('demo')}}" class = "headersrc1">ACCESSORIES</a>
	<a href="{{URL::route('main')}}" class = "headersrc1">HOME</a>
</div>

<div class="admindiv">
 
  
	<div id="tab/three" class="absnon"></div>
  
  	<div id="tab/two" class="absnon"></div>
  
  	<div id="tab/one" class="absnon"></div>

  	<div id="tab" class="vkladka">
  		<div class="ssilki">
    		<div class="nonactive"><a href="#one">ДОБАВИТЬ</a></div>
    		<div class="nonactive"><a href="#two">РЕДАКТИРОВАТЬ</a></div>
    		<div class="active"><a class="ak" href="#tab/one">УДАЛИТЬ</a></div>
    	</div>
      <form method="post">
		  @csrf
    	<div class="osnova">
    		<input name="guitar_id" type="text" size="50" placeholder="id товара который хотите удалить">
    	</div>
		  <input name="del" type="submit" class="done" value="OK">
    </form>
  	</div>

  
  	<div id="two" class="vkladka">
  		<div class="ssilki">
    		<div class="nonactive"><a href="#one">ДОБАВИТЬ</a></div>
    		<div class="active"><a class="ak" href="#two">РЕДАКТИРОВАТЬ</a></div>
    		<div class="nonactive"><a href="#tab/one">УДАЛИТЬ</a></div>
    	</div>
      <form method="post">
		  @csrf
    	<div class="osnova">
    		<input name="guitar_id" type="text" size="50" placeholder="id гитары для редактирования">
			<input name="guitar_name" type="text" size="50" placeholder="Название гитары">
			<input name="guitar_price" type="text" size="7" placeholder="Цена">
			<input name="guitar_model" type="text" size="50" placeholder="Модель">
    	</div>
		  <input name="up" type="submit" class="done" value="OK">
  	</form>
    </div>

  	<div id="one" class="vkladka">
  		<div class="ssilki">
    		<div class="active"><a class="ak" href="#one">ДОБАВИТЬ</a></div>
    		<div class="nonactive"><a href="#two">РЕДАКТИРОВАТЬ</a></div>
    		<div class="nonactive"><a href="#tab/one">УДАЛИТЬ</a></div>
    	</div>
      <form method="post">
		  @csrf
    	<div class="osnova">
    		<input name="guitar_name" type="text" size="50" placeholder="Название гитары">
    		<input name="guitar_price" type="text" size="7" placeholder="Цена">
    		<input name="guitar_model" type="text" size="50" placeholder="Модель">
    	</div>
    	<input name="ins" type="submit" class="done" value="OK">
    </form>
  	</div>

</div>

<div class = "footerdiv">
	<div class = "footer">
		<a href="{{URL::route('demo')}}" class = "footersrc1">HOW TO BUY</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">RETURN POLICY</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">REVIEWS</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">SECURE PAYMENT</a>
		<a href="{{URL::route('demo')}}" class = "footersrc1">TERMS & CONDITIONS</a>
	</div>
	<div class = "footer2">
		<a href = "https://www.facebook.com/"><img src="olegphp/images/index/footer/facebook.png"></a>
		<a href = "https://www.tumblr.com/"><img src="olegphp/images/index/footer/tumb.png"></a>
		<a href = "https://twitter.com/"><img src="olegphp/images/index/footer/twitter.png"></a>
	</div>
</div>
</body>
</html>