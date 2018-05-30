<?php require 'functions.php'; ?><?php header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini'); 
if (!$ini) {
	echo 'Ошибка в конфигурационном файле'; die();
}	?><!DOCTYPE html><html>
<head> 
<link rel="shortcut icon" href="523-hazardous_material.png" type="image/x-icon"> 
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title><?php print $ini['title'];?></title>
<meta name="keywords" content="">
<meta name="description" content=""><meta name="viewport" content="user-scalable=1, width=1020px, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/style/CSS_reset.css">
<link rel="stylesheet" type="text/css" href="/js/bjqs.css">
<link rel="stylesheet" type="text/css" href="/style/style2.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
<script src="/js/index.js"></script>
<script src="js/button1.js"></script>
<script src="js/kalk.js"></script>



<!-- /Yandex.Metrika counter -->

  
  <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]--><script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.placeholder.min.js"></script><script type="text/javascript" src="js/jquery.maskedinput.min.js"></script><script type="text/javascript" src="js/jquery.form.min.js"></script><script type="text/javascript" src="js/bjqs-1.3.js"></script><script type="text/javascript" src="js/script.js?v2"></script><?php if ($ini['head_code']) include($ini['head_code']); ?></head><body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id'];?>">
	<div class="header">
		<div class="head-top-row">
			<div class="conteiner clr">
				<div id="ib-block1" class="logo" contenteditable="true"><img alt="" height="75%" src="images/logobiot.png" width="75%"><span> <font size="1" color="white"> — НПО Биотика <font> </span></div>
				<div class="b-request">
					<?php if ($ini['phone']) {?><address class="head-phone"><?php print $ini['phone'];?></address><?php } ?> <a href="#" class="bl-link call-request-btn">Закажите обратный звонок</a>
					<?php if ($ini['phonetwo']) {?><address class="head-phone"><?php print $ini['phonetwo'];?></address><?php } ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<?php if ($ini['entrance']) {?><?php print chr(60).'a href="'.$ini['entrance'].'" class="enter"'.chr(62).'
					<span class="bl-link">Войти
					<i class="icon-auth"></i>
					'.chr(60).'/a'.chr(62); ?>
					<?php } ?></div><!--end b-request-->
					
					&nbsp;&nbsp;<a href="index.php" target="_blank"><font size="5px" color="#008000" face="comic sans ms">  Главная   </font></a><!--&nbsp;&nbsp;<a href="paric.php" target="_blank"><font size="5px" color="#008000" face="comic sans ms">  Парикмахерские   </font></a> -->
					
			</div><!--end conteiner-->
		</div><!--end head-top-row-->
		<div class="head-down-row pattern-bg">
			<div class="conteiner clr">
				<div class="head-tile-col">
							<div class="title-block" id="ib-block2" contenteditable="true"><h1> <font face="CURSIVE" color="#000">Верные решения ЭКО-задач </font></h1>

								<p class="post-title"> <strong> <font face="CURSIVE" color="#000">&nbsp;&nbsp;Научно Производственное Объединение "Биотическая среда"</font> </strong> </p>
							</div>
					<div id="slider" style="width: 610px; height: 220px;">
						<ul class="bjqs"><?php if ($ini['slider']) {
							for ($i=1; $i<=$ini['slider']; $i++) {
								print '<li>'.chr(60).'img src="images/slider/img';
								print $i.'.png';
								print '"'.chr(62);
							}
						} ?>
						</ul></div>
				</div>
				<div class="head-form-col">
					<div id="ib-block3" contenteditable="true"><h3 class="form-title"> <center> <font color="#FF0000"> <strong> Будь вкурсе <br> ЭКО-новостей! </strong> </font> </center></h3></div>
					<form class="head-form reg-form" method="POST" action="form/form.php"><input type="hidden" name="type" value="registration"><?php if ($ini['ask_name']) {?><p><input type="text" name="name" class="name <?php if ($ini['name_required']) print 'required';?>" placeholder="Ваше имя"></p><?php }?><p><input type="text" name="email" class="email <?php if ($ini['email_required']) print 'required';?>" placeholder="Ваш e-mail"></p>
						<?php if ($ini['ask_pwd']) {?><p><input type="password" name="password" class="password <?php if ($ini['pwd_required']) print 'required';?>" placeholder="Ваш пароль"></p><?php } ?><p><button type="submit" class="orange-btn" ><?php print $ini['button'];?></button></p>
					</form>
					<div id="ib-block4" contenteditable="true"><p class="privacy"> <font color="#000000" size="2" face="SEGOE PRINT"> <strong> <center> <div class="qweqweqwe">  Новости, уведомления, статьи, скидки, акции и многое другое. </div> <font color="#1E90FF" size="1">При нажатии на "Подписаться", вы добровольно <br> соглашаетесь на обработку ваших персональных данных. </font> </center> </strong> </font> </p>
</div>
				</div>
			</div><!--end head-down-row-->
		</div><!--end conteiner-->
	</div><!--end header-->
	
	<div class="stat-block">
		<div class="conteiner">
			<div class="stat-info clr">
				<div class="wrap-num" id="ib-block5" contenteditable="true"><span class="num">136</span> <span class="num-title"> &nbsp; <font size="2" face="century gothic"> <strong> Тонн обезврежено </strong>  </font> </span></div>
				<div class="wrap-num" id="ib-block6" contenteditable="true">
					<span class="num">077</span>
					<span class="num-title"> &nbsp; <font size="2" face="century gothic"> <strong> Партнёрских программ </strong> </font> </span> 
				</div>
			</div>
		</div><!--conteiner-->
	</div><!--end stat-block-->
	
	
	
	
	<style>
	
	.fonffion {
		background: #f6f6f6 url(http://npobiotica.spb.ru/bg.png) repeat;
	}
	.vesblockstatya {
		
		margin: 0 7% 2% 7%;
		text-align: justify; /* Выравнивание текста по ширине слева\справа */

	}
	
	.zagolovok {
		color: #000000;
		font-size: 26pt;
		font-family: Monotype Corsiva;
		
		
		
	}
	 
	 
	.statyatxt {
		color: #000000;
		font-size: 13pt;
		font-family: constantia;
		
		
		
	}
	 
    
	
	.minizagolovok{
		color: #000000;
		font-size: 19pt;
		font-family: Monotype Corsiva;
		
		
		
	}

	
	.statyatxtniz {
		color: #000000;
		font-size: 13pt;
		font-family: lucida console;
		
		
		
	}
	</style>
	
	 <style type="text/css">
	TABLE {
		width: 100%; 
		border-collapse: collapse;
	}
	TD, TH {
		padding: 3px; 
		border: 1px solid black; 
   }
   TH {
		background: #b0e0e6; 
   }
  </style>
	
	
	
	
	<div class="fonffion">
	<br>
	<br>
	<br>
	<br>
	
	<div class="vesblockstatya"> <!-- ВЕСЬ БЛОК СТАТЬЯ -->
	
	

 		<form>
		<h1>Расчет стоимости для отходов класса "Б" и "В"</h1>
		
			<div class="border_select_okr">
			<p><span><font size="5px" color="#008000" face="comic sans ms"> Выбрать тариф:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<select id="select_tar" class="filtr_select" name="select_tar">
					<option value="" name="alw">Ежедневный</option>
					<option value=""  name="workD">По рабочим дням</option>
					<option value=""  name="treeweek">Вызов 3 раза в неделю</option>
					<option value="" name="twoweek">Вызов 2 раза в неделю</option>
					<option value="" name="oneweek">Вызов 1 раз в неделю</option>
					<option value="" name="twomon">Вызов 2 раза в месяц</option>
					<option value="" name="oneweek">Вызов 1 раз в месяц</option>
				</select>
				</p>
			</div>

			<div class="border_select_okr">
			<p><span><font size="5px" color="#008000" face="comic sans ms"> Округ Санкт-Петербурга:&nbsp;&nbsp;</span>
			   <select id="select_okr" class="filtr_select" name="select_okr" onchange="if_change()">
			   	  <option value=""  name="admiral" >Адмиралтейский</option>
				  <option value="" name="vasil" >Василеостровский</option>
				  <option value="" name="vb">Выборгский</option>
				  <option value="" name="kalin">Калининский</option>
				  <option value="" name="kir">Кировский</option>
				  <option value="" name="kolp">Колпинский</option>
				  <option value="" name="krasn">Красногвардейский</option>
				  <option value="" name="krasnsel">Красносельский</option>
				  <option value="" name="krond">Кронштадтский</option>
				  <option value="" name="kuror">Курортный</option>
				  <option value="" name="lom">Ломоносовский</option>
				  <option value="" name="mock">Московский</option>
				  <option value="" name="nev">Невский</option>
				  <option value="" name="pav">Павловский</option>
				  <option value="" name="petr">Петроградский</option>
				  <option value="" name="pdv">Петродворцовый</option>
				  <option value="" name="prim">Приморский</option>
				  <option value="" name="push">Пушкинский</option>
				  <option value="" name="fru">Фрунзенский</option>
				  <option value="" name="cent">Центральный</option>
				  <option value="" name="kad">За пределами КАД</option>

				</select>
				</p>
			</div> 
			
			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms"> Количество кг в месяц</span>
			<input  id="chis"  min="1" value="1" name="chislo" /></p>

			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms"> Количество км от КАД</span>
			<input id="kilom"  min="0"  name="chislo2" disabled/></p>

			<button  type="button" name="bth1" class="loginsubmit" onclick="button1(this.form)">
					
							Определить стоимость
						
				</button>



		    <p><font size="5px" color="#008000" face="comic sans ms"> Итого:
		    <input readonly type="text" name="total1" value=""></input>*</p>

		    
			<h1>Расчет стоимости для отходов класса "Г"</h1>
			
			<p><span><font size="5px" color="#008000" face="comic sans ms">Округ Санкт-Петербурга:</span>
			   <select id="select_okrdv" class="filtr_select" name="select_okr2" onchange="if_change1()">
			   	  <option value=""  name="admiral" >Адмиралтейский</option>
				  <option value="" name="vasil" >Василеостровский</option>
				  <option value="" name="vb">Выборгский</option>
				  <option value="" name="kalin">Калининский</option>
				  <option value="" name="kir">Кировский</option>
				  <option value="" name="kolp">Колпинский</option>
				  <option value="" name="krasn">Красногвардейский</option>
				  <option value="" name="krasnsel">Красносельский</option>
				  <option value="" name="krond">Кронштадтский</option>
				  <option value="" name="kuror">Курортный</option>
				  <option value="" name="lom">Ломоносовский</option>
				  <option value="" name="mock">Московский</option>
				  <option value="" name="nev">Невский</option>
				  <option value="" name="pav">Павловский</option>
				  <option value="" name="petr">Петроградский</option>
				  <option value="" name="pdv">Петродворцовый</option>
				  <option value="" name="prim">Приморский</option>
				  <option value="" name="push">Пушкинский</option>
				  <option value="" name="fru">Фрунзенский</option>
				  <option value="" name="cent">Центральный</option>
				  <option value="" name="kad">За пределами КАД</option>

				</select>
			</p>
	 

			<p>Ртутьсодержащие лампы</p>
			<div class="border_select_lamp"
				<p><span><font size="5px" color="#008000" face="comic sans ms">Тип ртутьсодержащих ламп:</span>
				   <select id="select_lamp" class="filtr_select" name="select_lamp" onchange="if_change2()">
					  <option value="" name="none"> - Выберети тип лампы-</option>
					  <option value=""  name="lb20" >ЛБ-20</option>
					  <option value="" name="lb40" >ЛБ-40</option>
					  <option value="" name="lb60">ЛБ-60</option>
					  <option value="" name="lb80">ЛБ-80</option>
					  <option value="" name="lb100">ЛБ-100</option>
					  <option value="" name="tld">ТЛД</option>
					  <option value="" name="lbu">ЛБУ</option>
					  <option value="" name="lbk">ЛБ компактные</option>
					  <option value="" name="fig"> Фигурные</option>
					  <option value="" name="bakt"> Бактерицидные</option>
					  <option value="" name="drl"> ДРЛ</option>
					  <option value="" name="dnat">ДНАТ</option>
					  <option value="" name="aner">Энергосберегающие</option>
					  <option value="" name="kom">Компактные</option>
					</select>
					</p>
			</div> 
			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms">Количество(шт.):</span>
			<input  id="chislamp"  min="0" name="chislo" disabled /></p>



			

			<p>Термометры</p>			
			<div class="border_select_term">
				<p><span><font size="5px" color="#008000" face="comic sans ms">Тип термометра:</span>
					<select id="select_term" class="filtr_select" name="select_term" onchange="if_change3()"> 
						<option value="" name="nope"> -Выберите тип термометра -</option>
						<option value="" name="med"> Медицинские</option>
						<option value="" name="nope"> Технические </option>
					</select>
				</p>
			</div>
			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms">Количество(шт.):</span>
			<input  id="chister"  min="0" name="chislo" disabled /></p>


			
			
			
			<p>Просроченные лекарственные средства</p>
			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms"> Количество в кг:</span>
			<input  id="chisdv"  min="0" value="0" name="chislo" /></p>

			<p style="padding-bottom:5px;"><span style=""><font size="5px" color="#008000" face="comic sans ms"> Количество км от КАД</span>
			<input id="kilomdv"  min="0"  name="chislodv" disabled/></p>

			<button  type="button" name="bth2" class="loginsubmit" onclick="kalk(this.form)">
					<div class="calc-cnt-item">
							<p>Определить стоимость</p>
						</div>
				</button>



		    <p><font size="5px" color="#008000" face="comic sans ms"> Итого:
		   <input readonly type="text" name="total2" value=""></input>*</p>

		    <p><font size="5px" color="#008000" face="comic sans ms"> Если, Вы, не нашли подходящий тариф, </p>
		    <p><font size="5px" color="#008000" face="comic sans ms"> оставьте заявку и наш менеджер свяжется с вами.</p>
			<p><font size="5px" color="#008000" face="comic sans ms"> * - не является публичной офертой </p>
			
			
			<table>
    <tr>
        <td style="text-align:center; vertical-align:middle;">№ п.п</td>
        <td style="text-align:center; vertical-align:middle;">Наименование услуг</td>
        <td style="width:200px; text-align:center; vertical-align:middle;">Срок вып-ния</td>
        <td style="text-align:center; vertical-align:middle;">Стоимость работ*, руб.</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">1</td>
        <td style="vertical-align:middle;">Разработка и предоставление в РПН отчета по форме 2ТП</td>
        <td style="text-align:center; vertical-align:middle;">от 10 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 6 000 (на 1-5 видов отходов)</td>
       
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">2</td>
        <td style="vertical-align:middle;">Разработка и предоставление отчета для субъектов МСП в Комитет по природопользованию/РПН</td>
        <td style="text-align:center; vertical-align:middle;">10 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 8 000</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">3</td>
        <td style="vertical-align:middle;">Разработка и предоставление в Комитет по благоустройству СПб сведений об отходах</td>
        <td style="text-align:center; vertical-align:middle;">10 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 6 500</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">4</td>
        <td style="vertical-align:middle;">Разработка ПНООЛР, передача на согласование</td>
        <td style="text-align:center; vertical-align:middle;">До 4 недель</td>
        <td style="text-align:center; vertical-align:middle;">от 40 000</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">5</td>
        <td style="vertical-align:middle;">Ежеквартальное заполнение таблиц учета в области обращения с отходами (согласно Приказа МПР № 721 от 01.09.2011 и СанПиН 2.1.7.2790-10) (только для класса «Г»)</td>
        <td style="text-align:center; vertical-align:middle;">От 3 р.д.</td>
        <td align="center">от 5 000</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">6</td>
        <td style="vertical-align:middle;">Разработка схемы обращения с отходами в медицинском учреждении</td>
        <td style="text-align:center; vertical-align:middle;">От 3 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 5 200</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">7</td>
        <td style="vertical-align:middle;">Разработка паспорта опасного отхода</td>
        <td style="text-align:center; vertical-align:middle;">10 р.д</td>
        <td style="text-align:center; vertical-align:middle;">от 5 000</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">8</td>
        <td style="vertical-align:middle;">Расчет и согласование экол-х платежей за НВОС (1-10 вид. отходов)</td>
        <td style="text-align:center; vertical-align:middle;">от 5 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">9 000 (1-10 видов отходов)</td>
        
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">9</td>
        <td style="vertical-align:middle;">Декларация о плате за НВОС</td>
        <td style="text-align:center; vertical-align:middle;">от 5 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 5 000</td>
    </tr>
    <tr>
        <td style="text-align:center; vertical-align:middle;">10</td>
        <td style="vertical-align:middle;">Разработка журнала учета и движения отходов</td>
        <td style="text-align:center; vertical-align:middle;">от 3 р.д.</td>
        <td style="text-align:center; vertical-align:middle;">от 2 000</td>
        
    </tr>
</table>
<p>*Стоимость услуг указана с учетом НДС.</p>
		</form>
		</div>
		<script type="text/javascript">
			
		function if_change()
		{		
			
			var ind2 = document.getElementById("select_okr").selectedIndex;
			if (document.getElementById('select_okr').value != 20)
				document.getElementById('kilom').disabled=0;
			else
				document.getElementById('kilom').disabled=1;
		}
					
		function if_change1()
		{		
			
			var ind2 = document.getElementById("select_okrdv").selectedIndex;
			if (document.getElementById('select_okrdv').value != 20)
				document.getElementById('kilomdv').disabled=0;
			else
				document.getElementById('kilomdv').disabled=1;
		}

		function if_change2()
		{		
			
			var ind2 = document.getElementById("select_lamp").selectedIndex;
			if (document.getElementById('select_lamp').value == 0)
				document.getElementById('chislamp').disabled=0;
			else
				document.getElementById('chislamp').disabled=1;
		}

		function if_change3()
		{		
			
			var ind2 = document.getElementById("select_term").selectedIndex;
			if (document.getElementById('select_term').value == 0)
				document.getElementById('chister').disabled=0;
			else
				document.getElementById('chister').disabled=1;
		}
		</script>
	
	

	
	
	</div> <!-- ВЕСЬ БЛОК СТАТЬЯ -->
	</div>
	
	
	
	
	
	
	
	<style>
	 .xren {
    background: url(515982342212.png) ;
    -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;

   } 

	</style>
	
	<div class="xren">
	<center>
	<a href="#" class="bl-link call-request-btn"> <font size="9" color="#FFFFFF" face="CURSIVE">  Закажите обратный звонок </font> </a>
	</center>
	</div>
	
	
	
	
	<div class="contacts-block">
		<div class="conteiner clr">
			<div class="contacts-col">
				<div id="ib-block10" contenteditable="true"><h3> <font size="5" color="#000000" face="COMIC SANS MS"> Делаем мир чище! </font></h3>
</div>
				<address class="bottom-contacts">
					<?php if ($ini['address']) { ?><span class="cont-title">Адрес:</span>
					<span><?php print $ini['address'];?></span>
					<?php } ?><?php if ($ini['phone']) { ?><span class="cont-title">Телефон:</span>
					<span><?php print $ini['phone']; ?></span>
					<span><?php print $ini['phonetwo']; ?></span>
					<?php } ?><?php if ($ini['email']) { ?><span class="cont-title">E-mail:</span>
					<span><?php print $ini['email'];?></span>
					<?php } ?></address>
			</div>
			<div class="bot-form-col">
				<div id="ib-block11" contenteditable="true"><h3>   <font size="5" color="#000000" face="COMIC SANS MS">   Ещё один повод познакомиться... </font>  </h3>
</div>
				<form class="bottom-form reg-form" method="POST" action="form/form.php"><input type="hidden" name="type" value="registration"><?php if ($ini['ask_name']) {?><p><input type="text" name="name" class="name <?php if ($ini['name_required']) print 'required';?>" placeholder="Ваше имя"></p><?php }?><p><input type="text" name="email" class="email <?php if ($ini['email_required']) print 'required';?>" placeholder="Ваш e-mail"></p>
					<?php if ($ini['ask_pwd']) {?><p><input type="password" name="password" class="password <?php if ($ini['pwd_required']) print 'required';?>" placeholder="Ваш пароль"></p><?php } ?>
										<font color="#1E90FF" size="1">При нажатии на "Подписаться", вы добровольно <br> соглашаетесь на обработку ваших персональных данных. </font>

					<p><button type="submit" class="orange-btn" ><?php print $ini['button'];?></button></p>
				</form>
				<div id="ib-block12" contenteditable="true"><p class="privacy"> <font color="#000000" face="SEGOE PRINT"> <strong> Новости, уведомления, статьи, скидки, акции и многое другое. </strong> </font> </p></div>
			</div>
		</div><!--end conteiner-->
	</div><!--end contacts-block-->
	<div class="modals">
		<div class="overlay"></div>
		<div class="modal recall-modal">
			<h3 class="form-title">Обратный звонок</h3>
			<a href="#" class="close-btn"></a>
			<form action="form/form.php" method="POST" class="modal-form callback-form"><input type="hidden" name="type" value="call_request">
				<p><input type="text" class="name <?php if ($ini['name_required']) print 'required';?>" name="name" placeholder="Ваше Имя"></p>
				<p><input type="text" class="phone phone-mask required" name="phone" placeholder="Ваш &nbsp;Телефон"></p>	
				<p><input type="text" class="email" name="eemmaaiill" placeholder="Ваша Почта"></p>	
				<font color="#1E90FF" size="1">При нажатии на "Заказать звонок", вы добровольно <br> соглашаетесь на обработку ваших персональных данных. </font>
				<p><button type="submit" class="orange-btn" >Заказать звонок</button></p>
			</form>
		</div>
		
		<div class="modal thanks1-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p>Ваша заявка принята!</p>
		</div>
		
		<div class="modal thanks2-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p>Мы перезвоним вам в ближайшее время!</p>
		</div>
	</div>
		<?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?>
		
		</body></html>