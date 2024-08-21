<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="head">
		<meta charset="utf-8" />
		
		<title>Главная страница</title>
		
		<meta name="" content="" />
		<meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		<link rel="shortcut icon" type="image/vnd.microsoft.ico" href="img/favicon/Alfatrade_512px.svg" />
		<link rel="icon" type="image/vnd.microsoft.ico" href="img/favicon/Alfatrade_512px.svg" />
		
		
		<link href="/css/style_basic.css" rel="stylesheet" type="text/css" />
		<link href="/css/style_header.css" rel="stylesheet" type="text/css" />
		<link href="/css/style_about_us.css" rel="stylesheet" type="text/css" />
		<link href="/css/style_footer.css" rel="stylesheet" type="text/css" />
	
		
		<script type="text/javascript" src="js/highlight/highlight.js"></script>
	</head>

	<body>
		<header class="header" >
		
		    <div class="iconMenu">
				<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
					<path id="menu" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
					<path id="cross" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"
					/>
				</svg>
			</div>
			
			
			<div class="logo">
				<a href="/" title="Перейти на главную">
				    <img src="/img/logo/Alfatrade_logo.png" width=" " height=" " alt="Home" title="На главную страницу">			
				</a>
			</div>

			
			<div class="itemsMenu">
				<a id="href_index" href="/index.php">Направления работы</a>
				<a id="href_about_us" href="/about_us.php">О фирме</a>
			</div>
			
			<script type="text/javascript">
				onload = function (){
					for (var lnk = document.links, j = 0; j < lnk.length; j++)
					if (lnk [j].href == document.URL) lnk [j].style.cssText = 'color: white; text-decoration: none;';
				}
			</script>
			
			
			<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
			
			<script type="text/javascript">
				$(function() {
				document.getElementById('cross').style.display = 'none';
					$('.iconMenu').click(function() {
					    document.body.style.overflow = 'visible';
						document.getElementById('menu').style.display = 'block';
						document.getElementById('cross').style.display = 'none';
						if($('.itemsMenu').is(':visible')) {
							$('.itemsMenu').removeClass('showitems');	
						}
						else {
							$('.itemsMenu').addClass('showitems');
							document.getElementById('menu').style.display = 'none';
						    document.getElementById('cross').style.display = 'block';
							document.body.style.overflow = 'hidden';
						}
					});
				});
			</script>
			
		</header>


		<div class="o_firme">
		    <div id="about_as">
				<p></span></br>
				<p>Мы специализируемся на оптово-розничных поставках инструментов и расходных материалов, строительных и отделочных матералов, электротоваров, холодильном оборудовании и промышленной химии.</br>
				В основном работаем с бюджетными организациями и выполняем свою работу в рамках 44-го и 223-го Федеральных законов.</p></br>
			</div>
			
			
			<div id="work">
				<p><span>Мы рады сотрудничеству</span></p></br>
				<p><ul>
					<li>Необходимо коммерческое предложение?</li>
					<li>Испытываете сложности при поиске товаров?</li>
					<li>Вам нужна доставка?</li>
				</ul></p></br>
				<p>Отправьте нам заявку с перечнем необходимых товаров, мы подберем и доставим вам всё, что нужно по оптимальным ценам.</p></br>
			</div>
			
			
			<div id="requisites">
				<p><span>Реквизиты</span></p></br>
				<p>ОГРН 1191215001592</br>
				ИНН 1215227998</p></br>
			</div>
			
			
			<div id="contacts">
				<p><span>Контакты</span></p></br>
				<p>Тел.: <a href="tel:+79278831059">+7 (927) 883-10-59</a></br>
				WhatsApp: <a href="https://api.whatsapp.com/send/?phone=79278831059">+7 (927) 883-10-59</a></br>
				E-mail: <a href="mailto:alfa_19@inbox.ru">alfa_19@inbox.ru</a></p></br>				
			</div>
			
			
			<div id="work_schedule">
				<p><span>График работы</span></p></br>
				<p>Пн-Пт: с 9:00 до 18:00</br>
				Сб, Вс: выходной</p>
			</div>
		</div>


		<footer class="footer">
		
			<div id="footer_itemsMenu">
				<a id="footer_href_index" href="/index.php">Направления работы</a>
			</div>
		
			<div id="website_autor">
				<a href="https://t.me/+5TYoJufW1J85Njky" title="Страница в Telegram" target="_blank">
					<img id="design_autor" src="/img/social/telegram.png" alt="Telegram" title="Telegram">&copy Азъ</br>
					<p id="design_mission">Разработка и дзайн</p></br>
				</a>	
			</div>
			
			<div id="right">
				&copy ООО "Альфа Трейд" <?php echo date ('Y')?> г.
			</div>
		    
		</footer>
	</body>
</html>