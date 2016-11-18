<div class="auth"><a href="#"><div id="view_auth">&#709;</div></a>
	<?php if ($message) { ?><span class="message"><?=$message?></span><?php } ?>
	<form action="<?=$action?>" method="post"> 
		<table name="auth">
			<tr>
				<td><input type="text" name="login" placeholder="login"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>
				<a href="<?=$link_register?>">Регистрация</a>
				<input type="submit" value="Войти" name="auth">
				</td>
			</tr>
		</table>
	</form>
	<!-- <div id="links_reset">
		<a href="<?=$link_reset?>">Забыли пароль?</a>
		<a href="<?=$link_remind?>">Забыли логин?</a>
	</div> -->
</div>