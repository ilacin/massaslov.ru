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
              <p>
&#1069;&#1090;&#1086;&#1090; &#1089;&#1083;&#1086;&#1074;&#1072;&#1088;&#1100; &#1087;&#1088;&#1077;&#1076;&#1085;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085; &#1076;&#1083;&#1103; &#1087;&#1086;&#1083;&#1091;&#1095;&#1077;&#1085;&#1080;&#1103; &#1090;&#1086;&#1075;&#1086;, &#1095;&#1090;&#1086; &#1085;&#1072;&#1079;&#1099;&#1074;&#1072;&#1077;&#1090;&#1089;&#1103; &#1084;&#1072;&#1089;&#1089;&#1086;&#1081;, &#1090;&#1086; &#1077;&#1089;&#1090;&#1100; &#1090;&#1086;&#1075;&#1086;, &#1095;&#1090;&#1086; &#1087;&#1086;&#1076;&#1088;&#1072;&#1079;&#1091;&#1084;&#1077;&#1074;&#1072;&#1077;&#1090;&#1089;&#1103; &#1087;&#1086;&#1076; &#1082;&#1072;&#1082;&#1080;&#1084;-&#1085;&#1080;&#1073;&#1091;&#1076;&#1100;
&#1089;&#1083;&#1086;&#1074;&#1086;&#1084;. &#1044;&#1083;&#1103; &#1089;&#1083;&#1086;&#1074;&#1072; "&#1082;&#1086;&#1096;&#1082;&#1072;" &#1084;&#1072;&#1089;&#1089;&#1086;&#1081; &#1073;&#1091;&#1076;&#1077;&#1090; &#1089;&#1072;&#1084;&#1072; &#1082;&#1086;&#1096;&#1082;&#1072;. &#1053;&#1086; &#1082;&#1072;&#1088;&#1090;&#1080;&#1085;&#1082;&#1072; &#1076;&#1072;&#1077;&#1090; &#1086;&#1073;&#1077;&#1097;&#1072;&#1085;&#1080;&#1077; &#1085;&#1072; &#1084;&#1072;&#1089;&#1089;&#1091;.
         </p>
<?php
 include('db.php');
 $res = mysql_query("SELECT COUNT(*) FROM maccaclovcomtable");
 $countrow = mysql_fetch_row($res);
 $total = $countrow[0]; // &#1074;&#1089;&#1077;&#1075;&#1086; &#1079;&#1072;&#1087;&#1080;&#1089;&#1077;&#1081;
 echo "<p>&#1057;&#1077;&#1081;&#1095;&#1072;&#1089; &#1074; &#1089;&#1083;&#1086;&#1074;&#1072;&#1088;&#1077; $total единиц(а/ы) (значений/словоформ).</p>";
?>


<?php
include('db.php');
$query = mysql_query("SELECT * FROM maccaclovcomtable WHERE id='1'");
do
{
echo $row['definition'];
echo "<br>";
echo $row['picture'];
echo "<br>";
echo "<br>";
echo $row['examples'];
}
while($row = mysql_fetch_array($query))
?>

      
<DIV ID = "toTop" > ^ Наверх </ DIV >
</body>
</html>

    















