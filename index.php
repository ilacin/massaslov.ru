<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Словарь с картинками</title>
<link href="style.css" rel="stylesheet" type="text/css">
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
				<li><a href="#">Поиск слов</a></li>
				<li><a href="#">О словаре</a></li>
				<li><a href="#">Условия пользования</a></li>
				<li><a href="#">Связаться</a></li>
				<li><a href="#">Технология обучения</a></li>
				<li><a href="#">Куда поместить сайт?</a></li>
			</ul>
		</nav>
	</div>
    
 
        <div>
			<div>    
			<h1>Русско-русский иллюстрированный словарь</h1>
              <form action="index.php" method='get'>
			  <p id="searching"><label>В этом словаре можно посмотреть картинки слов.<br><br><br>
                <input type="text" name='word' size="98%" id='inputword' placeholder="Введите сюда слово">
	        <input type='submit' value='Поиск'></label></p>
              </form>
			
<?php
include('db.php');

$gk=$_GET['word'];

if (empty($gk))
{
echo "<p><label for='inputword'>Нужно ввести слово</label></p>";
}
if(isset($gk))
{
$query = mysql_query("SELECT * FROM maccaclovcomtable WHERE `title` LIKE '".$gk."'");
$row = mysql_fetch_array($query);
if (empty($row) AND !empty($gk))
{
echo "<p><label for='inputword'>Такого выражения нет в словаре</label></p>";
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
echo "<p><b>Другие названия</b>:</p>";
}
echo $row['othernames'];

if (!empty($row['latinnames']))
{
echo "<p><b>Латинские названия</b>:</p>";
}
echo $row['latinnames'];

if (!empty($row['examples']))
{
echo "<p><b>Примеры употребления</b>:</p>";
}
echo $row['examples'];
echo "<br>";

if (!empty($row['ffilms']))
{
echo "<p><b>Художественные фильмы</b>:</p>";
}
echo $row['ffilms'];
echo "<br>";
if (!empty($row['dfilms']))
{
echo "<p><b>Документальные фильмы</b>:</p>";
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
echo "<p><b>Дополнительные данные</b>:</p>";
}
echo $row['bibliography'];


if (!empty($row['ronhubbard']))
{
echo "<p><b>Дополнительные данные у Рона Хаббарда</b>:</p>";
}
echo $row['ronhubbard'];


if (!empty($row['similarwords']))
{
echo "<p><b>Похожие слова</b>:</p>";
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

    















