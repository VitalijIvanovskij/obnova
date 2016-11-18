<div id="add_form">
	<form action="#" method="post" name="add_form">
		<table>
			<tr>
				<td><select name="section" id="">
						<?php
							foreach ($items as $item){?><option value="<?=$item->id ?>"><?=$item->title?></option><?php }?>
					</select></td>
					<td>
					<input type="radio" name="category" value="1" checked>Продам
					<input type="radio" name="category" value="2">Куплю
					<input type="radio" name="category" value="3">Обмен
					<input type="radio" name="category" value="4">Другое
				</td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="text" id="" cols="60" rows="6" placeholder="Введите текст объявления"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="new_add" value="Разместить"></td>
			</tr>
		</table>
	</form>
</div>
<div id="add_button">
	<button>Разместить обяъвление</button>
</div>