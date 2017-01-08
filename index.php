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
              <form action="index.php" method='get' id="mainsearch">
			  <p class="searching"><label>В этом словаре можно посмотреть картинки слов<br>
                <input type="text" name='word' size="98%" class='inputword' placeholder="&nbsp;Введите сюда слово"></label>
	        <input type='submit' value='Поиск' id='searchbuttonmain'></p>
              </form>
			  
			  <form action="index.php" method='get' id="mobilesearch">
			  <p><input type='submit' value='Поиск' id='searchbuttonmobile'></p>
			   <p class="searching"><label>В словаре можно посмотреть картинки слов<br>
                <input type="text" name='word' size="30%" class='inputword' placeholder="&nbsp;Введите сюда слово"></label></p>
	       </form><br><br><br>
			
<?php
include('db.php');

$gk=$_GET['word'];

if (empty($gk))
{
echo "<h6><label for='inputword'>Нужно ввести слово</label></h6>";
}
if(isset($gk))
{
$query = mysql_query("SELECT * FROM maccaclovcomtable WHERE `title` LIKE '".$gk."'");
$row = mysql_fetch_array($query);
if (empty($row) AND !empty($gk))
{
echo "<h6><label for='inputword'>Такого выражения нет в словаре</label></h6>";
}
}

do
{
echo $row['definition'];
echo "<br>";
echo $row['pronunciation'];
echo "<br>";
echo $row['picture'];
echo "<br>";
echo "<br>";
echo $row['wikipictures'];
echo "<br>";
echo "<br>";

if (!empty($row['othernames']))
{
echo "<h3>Другие названия:</h3>";
}
echo $row['othernames'];

if (!empty($row['latinnames']))
{
echo "<h3>Латинские названия:</h3>";
}
echo $row['latinnames'];

if (!empty($row['examples']))
{
echo "<h3>Примеры употребления:</h3>";
}
echo $row['examples'];
echo "<br>";

if (!empty($row['ffilms']))
{
echo "<h3>Художественные фильмы:<h3>";
}
echo $row['ffilms'];
echo "<br>";
if (!empty($row['dfilms']))
{
echo "<h3>Документальные фильмы:</h3>";
}
echo $row['dfilms'];
echo "<br>";
echo $row['links0'];
echo "<br>";
echo "<br>";
echo $row['links'];
echo "<br>";
echo "<br>";
echo $row['links1'];
echo "<br>";
echo "<br>";
echo $row['links2'];
echo "<br>";
echo "<br>";
echo $row['links3'];
echo "<br>";
echo "<br>";
echo $row['links4'];
echo "<br>";
echo "<br>";
echo $row['links5'];
echo "<br>";
echo "<br>";
echo $row['links6'];
echo "<br>";
echo "<br>";
echo $row['links7'];
echo "<br>";
echo $row['links8'];
echo "<br>";
echo $row['links9'];
echo "<br>";
echo $row['links10'];
echo "<br>";
echo $row['links11'];
echo "<br>";

if (!empty($row['bibliography']))
{
echo "<h3>Дополнительные данные:</h3>";
}
echo $row['bibliography'];


if (!empty($row['ronhubbard']))
{
echo "<h3>Дополнительные данные у Рона Хаббарда:</h3>";
}
echo $row['ronhubbard'];


if (!empty($row['similarwords']))
{
echo "<h3>Похожие слова:</h3>";
}
echo $row['similarwords'];
}
while($row = mysql_fetch_array($query))
?>
</div>
</div>

      
<DIV ID = "toTop" > ^ Наверх </ DIV >
</body>
</html>

    















