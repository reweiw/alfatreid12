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
		<link href="/css/style_product.css" rel="stylesheet" type="text/css" />
		<link href="/css/style_footer.css" rel="stylesheet" type="text/css" />
	
		
		<script type="text/javascript" src="js/highlight/highlight.js"></script>
	</head>

	<body>
		<header class="header" >
		
		    <div class="iconMenu">
				<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
					<path id="menu" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
					<path id="cross" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"
					/>
				</svg>
			</div>
			
			
			<div class="logo">
				<a href="/" title="">
				    <img src="/img/logo/Alfatrade_logo.png" width="80%" height="" alt="Home" title="Перейти на главную страницу">			
				</a>
			</div>

			
			<div class="itemsMenu">
				<ul>
					<li><a id="href_index" href="/index.php">Направления работы</a></li>
					<li><a id="href_about_us" href="/about_us.php">О фирме</a></li>
				</ul>
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
		

		<div class="product">
			
			<nav class="back" id="come_back">
				<div id="back_home" class="main"><a href="/" title="Перейти на главную страницу">Главная страница </a></div>
				<div id="this_page" class="main" title="Вы находитесь в разделе Электротовары"> Электротовары</div> 
			</nav>
			
            <div id="about_electrogoods" class="about_this">
			
				<div class="electrogoods_products">
					<img class="img-preview" id="pc_img" src="" alt=" " title="Электротовары">
					<img class="img-preview" id="mobile_img" src="" alt=" " title="Электротовары">
				</div>
				
				<div class="commodities">
					<p><span>Электротовары</span></p>
					<p>За время нашей деятельности мы обросли большим количеством контактов производителей элетроосветительного оборудования, элетрокабелей и прочих комплектующих.
					Именно поэтому спектр нащих возможностей в сфере поставок элетротоваров достаточно широк.</p><br>
					<p><u>Мы поставляем следующие товары:</u></p>
					
					<ul>
						<li class="name" data-img="/img/catalog/img_electrogoods/wires_dev_750x562.jpg">кабели и провода;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/lamps_dev_750x562.jpg">лампы;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/svetilniki_dev_750x562.jpg">светильники;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/electrical_fittings_dev_750x562.jpg">электрофурнитуру;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/batteries_dev_750x562.jpg">элементы питания;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/electroautomatics_dev_750x562.jpg">электроавтоматику;</li>
						
						<li class="name" data-img="/img/catalog/img_electrogoods/electrical_consumables_dev_750x562.jpg">расходные материалы для электромонтажа.</li>
					</ul>
				</div>
				
				<div id="to_ask"><u>Запросить коммерческое предложение:</u>
					<div id="mail" class="contacts">E-mail: <a href="mailto:alfa_19@inbox.ru">alfa_19@inbox.ru</a></div>
					<div id="phone" class="contacts">WhatsApp: <a href="https://api.whatsapp.com/send/?phone=79278831059">+7 (927) 883-10-59</a></div>
				</div>
				

				<script type="text/javascript">
					if (document.documentElement.clientWidth > 768) { 
						/*Выполнение кода, если ширина экрана более 768 px*/
						$(document).ready(function() {

							const imgWindow = $('.img-preview');
							let defImg = $('.name')[0].dataset.img;
							imgWindow.attr('src', defImg);
							
							$('.name').hover(function(e) {
								let newSrc = e.target.dataset.img;
								imgWindow.attr('src', newSrc);
							});
						});
					} else {
						/*...иначе выполняем код слайдера для экрана =<768 px (смартфона)*/
						$(document).ready(function() {

							const imgWindow = $('.img-preview');
							let defImg = $('.name')[0].dataset.img;
							imgWindow.attr('src', defImg);
							
							$('.name').hover(function(e) {
								let newSrc = e.target.dataset.img;
								imgWindow.attr('src', newSrc);
							});
						});
					};
				</script>
			</div>
		</div>
		


		<footer class="footer">
			<div class="first_line">
				<div id="footer_contacts">
					<u>Контакты</u></br>
					Тел.: <a href="tel:+79278831059">+7 (927) 883-10-59</a></br>
					E-mail: <a href="mailto:alfa_19@inbox.ru">alfa_19@inbox.ru</a></br>				
				</div>
				
				<div id="footer_itemsMenu">
					<u>О фирме</u></br>
					<a id="footer_href_about_us" href="/about_us.php">Узнать больше о нашей деятельности</a>
				</div>
				
				<div class="space"></div>
			
				<div id="website_autor">
					<a href="https://t.me/+5TYoJufW1J85Njky" title="Страница в Telegram" target="_blank">
						<img id="design_autor" src="/img/social/telegram.png" alt="Telegram" title="Telegram"></br>
						Разработка и дзайн &copy Азъ
					</a>
				</div>
			</div>
			
			<div class="second_line" id="right">
				&copy ООО "Альфа Трейд" <?php echo date ('Y')?> г.
			</div>
		 
		</footer>
	</body>
</html>