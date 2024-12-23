<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-10">
								<!-- 
									
									ЗДЕСЬ СОЗДАЕШЬ ФОРМУ С ИНПУТАМИ И КНОПКОЙ "Твитнуть"

								-->
							</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
							</div>
							<div class="col-xl-10">
									<h5><!--

										ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА НОВОГО ТВИТА

									-->
									</h5>
									<p><!-- 

										ЗДЕСЬ ВЫВОДИШЬ ТЕКСТА НОВОГО ТВИТА

									--></p>
							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 
									ЗДЕСЬ: 
										1. ПОДКЛЮЧИСЬ К СВОЕЙ БАЗЕ ДАННЫХ
										2. СДЕЛАЙ ЗАПРОС К ТАБЛИЦЕ
								
									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'
									
									-->

									<?php $connect = mysqli_connect('MySQL-8.2', 'root', '', 'twitter2'); 
									$query = mysqli_query($connect, 'SELECT * FROM post');
									

									



									$post1 = $query-> fetch_assoc();
									$post2 = $query-> fetch_assoc();
									$post3 = $query-> fetch_assoc();
									$post4 = $query-> fetch_assoc();
									?>

									<?php echo $post1['avtor']; ?>
									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
									<?php echo $post1['texts']; ?>
									</p>
									<!-- 

									место для картинки

									-->	
									<img src="<?php echo $post1['img']; ?>" class = 'w-100'>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->

									<?php echo $post2['avtor']; ?>
									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
									<?php echo $post2['texts']; ?>
									</p>
									<!-- 

									место для картинки

									-->	
									<img src="<?php echo $post2['img']; ?>" class = 'w-100'>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->
									<?php echo $post3['avtor']; ?>

									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
									<?php echo $post3['texts']; ?>
									</p>
									<!-- 

									место для картинки

									-->	
									<img src="<?php echo $post3['img']; ?>" class = 'w-100'>
								</div>
							</div>
						</div>


						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->
									<?php echo $post4['avtor']; ?>

									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
									<?php echo $post4['texts']; ?>
									</p>
									<!-- 

									место для картинки

									-->	
									<img src="<?php echo $post4['img']; ?>" class = 'w-100'>
								</div>
							</div>
						</div>
				</div>

				<!-- правая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- "Читаемые" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<!-- форму создать здесь -->
						<form action="insert.php" method="GET">
							<input type="" name="names" placeholder="Название" class="form-control">
							<input type="" name="channel" placeholder="Канал" class="form-control">
							<input type="" name="img" placeholder="Картинка" class="form-control">
							<button class="btn btn-primary">Добавить в читаемые</button>
						</form>
						<div class="col-4">
							<h6>Читаемые</h6>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<a href=""><img class="w-100 rounded-circle" src="images/1.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href="">LOL KEK</a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> @lolkek </span> <!--название аккаунта-->
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-4">
								<a href=""><img class="w-100 rounded-circle" src="images/2.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href=""><?php
									$query2 = mysqli_query($connect, 'SELECT * FROM follow');
									$fol1 = $query2 -> fetch_assoc();
									echo $fol1['name'];
									?></a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> <?php echo $fol1['channel']; ?> </span> <!--название аккаунта-->
								</div>
							</div>
						</div>

					</div>
					<!-- Ссылки © Twitter, 2018 -->
					
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>