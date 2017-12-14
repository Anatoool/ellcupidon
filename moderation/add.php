<?php
    session_start();  
?>

<?php
	if (($_SESSION['logged_user']['role'] == 'moderator')) {
		echo '<div id="user-name">
					Здравствуйте, '.$_SESSION['logged_user']['login'].'
					<a href="./moderation/logout.php">Выход</a>
				</div>';
		
	} else {
		echo '<div class="container">
				 
				   <div id="notification">
					   Упс, вам сюда нельзя, пожалуйста авторизуйтесь <a href="./moderation7815318220.php">здесь</a>!
				</div>
			</div>';
	}


if (($_SESSION['logged_user']['role'] == 'moderator')) {
	echo 
'<div id="files-upload">
	<div class="form-wrapper">
	
		<form action="./moderation/file-upload.php" method="post" enctype="multipart/form-data">
			<p id="upload-caption">
				Загрузка проекта:
			</p>
			
			
			<p id="radio-caption" class="mini-caption">
				Тип проекта:
			</p>
			<input id="radio-furniture" name="project" type="radio" value="furniture" checked>
			<label for="radio-furniture">Мебель</label>			
			<input id="radio-design" name="project" type="radio" value="design">
			<label for="radio-design">Интерьеры</label><br>
			
			<p id="caption-caption" class="mini-caption">
				Название проекта:
			</p>
			<input type="text" id="name" name="caption" required>
			
			<p class="mini-caption">
				Описание проекта:
			</p>
			<textarea name="description" id="description" cols="30" rows="10" required></textarea>
			
			<p class="mini-caption">
				Выберите главное фото:
			</p>
			<input name="userfile1" type="file" accept="image/*" required/><br>
			
			<p class="mini-caption">
				Выберите остальные фотографии для галереи:
			</p>
			<input name="userfile2[]" type="file" multiple accept="image/*"/><br />
			
			<p class="mini-caption">
				Вставьте часть ссылки с YouTube после v=:
			</p>
			<input type="text" id="youtube" name="youtube"><br>
			
			<input id="send-button" type="submit" value="Добавить" />
		</form>
		
	</div>
</div>';
}
?>
