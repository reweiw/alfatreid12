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
		<link href="/css/style_index.css" rel="stylesheet" type="text/css" />
		<link href="/css/style_footer.css" rel="stylesheet" type="text/css" />
	
		
		<script type="text/javascript" src="js/highlight/highlight.js"></script>
	</head>

	<body class="body">
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
				    <img src="/img/logo/Alfatrade_logo.png" alt="Home" title="На главную страницу">			
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
		



		<div class="catalogs">
		
			<script type="text/javascript">
				if($(window).width() <= 768){

					const list = document.querySelector(".catalogs", ".catalog_name", ".more_about");
					$(".more_about").css({"display": "none"});
					$(".more_about" > "a" ).css({"display": "none"});
					$(".more_about").css({"background": "none"});
					
					
					list.scrollTop = 1;
					
					list.addEventListener('scroll', function(ev) {
						
						let items = this.querySelectorAll(".section", ".catalog_name", ".more_about");
						$(".more_about").css({"display": "flex"});
						$(".more_about").css({"background": "#130F0F"});
					    
					    if (parseInt(this.scrollTop) == 0) {
							
							this.scrollTop = items[items.length - 1].clientHeight;
							this.prepend(items[items.length - 1]);
							
							this.append(items[0]);
							
							
					    } else if (this.scrollTop < this.scrollHeight - this.clientHeight - 1) {
						this.append(items[0]);
					    }
						return this.scrollTop = 1;
						
						$(".more_about").css({"display": "none"});
					$(".more_about").css({"background": "none"});
					});
					
				}
			</script>




			<div class="section" id="building_materials">
				<div class="more_about" id=" ">
					<a href="/about_building_materials.php" title="">Подробнее...</a>
				</div>
				<div class="catalog_name">Строительные материалы</div>
				<div class="catalog_img">
					
					<img src="/img/catalog/building_materials_750x562.jpg" class="pc_img" alt="Строительные материалы" title=" ">
					<img src="/img/catalog/building_materials_750x562.jpg" class="mobile_img" alt="Строительные материалы" title=" ">
				</div>
			</div>
			
			
			
			<div class="section" id="instruments">
				<div class="more_about" id=" ">
					<a href="/about_instruments.php" title="">Подробнее...</a>
				</div>
				<div class="catalog_name">Инструменты</div>
				<div class="catalog_img">
					
					<img src="/img/catalog/instrument_750x562.jpg" class="pc_img" alt="Инструменты" title="">
					<img src="/img/catalog/instrument_750x562.jpg" class="mobile_img" alt="Инструменты" title="">
				</div>
			</div>
			
			
			
			<div class="section" id="electrogoods">
				<div class="more_about" id=" ">
					<a href="/about_electrogoods.php" title="">Подробнее...</a>
				</div>
				<div class="catalog_name">Электротовары</div>
				<div class="catalog_img">
					
					<img src="/img/catalog/electrical_dev_750x562.jpg" class="pc_img" alt="Электротовары" title="">
					<img src="/img/catalog/electrical_dev_750x562.jpg" class="mobile_img" alt="Электротовары" title="">
				</div>
			</div>
			
			
			<div class="section" id="refrigeration_equipment">
				<div class="more_about" id=" ">
					<a href="/about_refrigeration_equipment.php" title="">Подробнее...</a>
				</div>
				<div class="catalog_name">Холодильное оборудование</div>
				<div class="catalog_img">
					
					<img src="/img/catalog/refrigeration_equipment_750x562.jpg" class="pc_img" alt="Холодильное оборудование" title="">
					<img src="/img/catalog/refrigeration_equipment_750x562.jpg" class="mobile_img" alt="Холодильное оборудование" title="">		
				</div>
			</div>	
			
			
			
			<div class="section" id="industrial_chemistry">
				<div class="more_about" id=" ">
					<a href="/about_industrial_chemistry.php" title="">Подробнее...</a>
				</div>
				<div class="catalog_name">Промышленная химия</div>
				<div class="catalog_img">
					
					<img src="/img/catalog/industrial_chemistry_750x562.jpg" class="pc_img" alt="Промышленная химия" title="">
					<img src="/img/catalog/industrial_chemistry_750x562.jpg" class="mobile_img" alt="Промышленная химия" title="">
				</div>
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