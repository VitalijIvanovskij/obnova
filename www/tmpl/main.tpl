<!DOCTYPE html>
<html>
<?=$head?>
<body>
	<div id="wrap">
		<header>
			<div id="logo">obnova.lg.ua</div>
			<h1>Объявления Новопскова</h1>
			<?=$auth?>
		</header>
		<div id="search">
			<form action="#" name="search" method="post"><input type="text" placeholder="Что ищем?"><input type="submit" name="search" value="Искать"></form>
		</div>
		<?=$new_add?>
		<?=$top?>
		<?=$left?>
		<?=$content?>
		<?=$right?>
		<a href="#"><div class="toTop left">Наверх</div></a>
		<a href="#"><div class="toTop right">Наверх</div></a>
		<footer>
			<div class="footer_info">
				<a href="#">Lorem ipsum dolor.</a>
				<a href="#">Mollitia, voluptatem debitis.</a>
				<a href="#">Magni, nemo, doloremque.</a>
			</div>
			<div class="footer_info">
				<a href="#">Lorem ipsum dolor.</a>
				<a href="#">Sunt, quia est.</a>
				<a href="#">Neque, id, culpa!</a>
			</div>
			<div class="footer_info">
				<a href="#">Lorem ipsum dolor.</a>
				<a href="#">Laudantium, eveniet praesentium.</a>
				<a href="#">Asperiores, laborum, tempore.</a>
			</div>
			<div id="copyright">&copy; 2016 Created by Vitalij Ivanovskij</div>
		</footer>
	</div>
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/sstu_script.js"></script>
</body>
</html>