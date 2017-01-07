<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Словарь с картинками</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var touch = $('#touch-menu');
		    var menu = $('.nav');
		 
		    $(touch).on('click', function(e) {
		        e.preventDefault();
		        menu.slideToggle();
		    });
		    $(window).resize(function(){
		        var wid = $(window).width();
		        if(wid > 760 && menu.is(':hidden')) {
		            menu.removeAttr('style');
		        }
		    });
		});
	</script>
	<script type="text/javascript">
 
$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});
 
</script>
</head>

<body>
<div id="ad"><a href="http://www.neguc.ru" target="_blank"><h4>Репетитор в Москве по истории</h4></a></div>

<div class="container">
		<a href="#" id="touch-menu">Меню</a>
		<nav>
			<ul class="nav clearfix">
				<li><a href="index.php">Поиск слов</a></li>
				<li><a href="dictionary.php">О словаре</a></li>
				<li><a href="agreement.php">Условия пользования</a></li>
				<li><a href="contacts.php">Связаться</a></li>
				<li><a href="http://саентология-дианетика.рф/1/_12_43">Технология обучения</a></li>
				<li><a href="https://beget.com/p344930" target="_blank">Куда поместить сайт?</a></li>
			</ul>
		</nav>
	</div>
	

    
 
        <div class="searchpane">
			<div class="text_block">    
			<h1>Русско-русский иллюстрированный словарь</h1>
              <fieldset>
		 <p>
		 <div id="wrappercontactform">
		    <form action="formdata.php" method="POST">
              <p class="question"><label for="textletter">Написать письмо автору:</label></p>
			  <p><input type="text" name="personname" id="textletter" placeholder="Ваше имя" class="input"</p>
			  <p><input type="email" name="emailaddress" placeholder="Адрес электронной почты" class="input"></p>
		      <p><textarea name="letterfrommassaslovru" cols="50" rows="10"></textarea></p>
			  <p><input type="submit" name="submitletter" value="Отправить"></p>
	        </form>
		</div>
         </p>
		 </fieldset>


      
<DIV ID = "toTop" > ^ Наверх </ DIV >
</body>
</html>

    















