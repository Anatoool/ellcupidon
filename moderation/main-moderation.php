<?php
    session_start();  
?>

<?php

	if ($_SESSION['logged_user']['role'] == 'moderator') {
		echo '<div id="user-name">
					Здравствуйте, '.$_SESSION['logged_user']['login'].'
					<a href="./moderation/logout.php">Выход</a>
				</div>';
		echo '<div id="add">
					<a href="./addproject.php">
						<div class="add-project">
							<span>+</span><b>Добавить проект</b>
						</div>
					</a>
				</div>';
		
	} else {
		echo '<div class="container">
				 <form>  
				   <div id="log_in_form">
					   <div id="login_answer">
							Неверный логин или пароль!
					   </div>
						<p><strong>Логин:</strong></p>
						<input type="text" name="login">

					   <p><strong>Пароль:</strong></p>
						<input type="password" name="password"><br>    
					   <button type="button" id="login_button" value="Войти">Войти</button>       
					</div>
				</form>
			</div>';
	}



if ($_SESSION['logged_user']['role'] == 'moderator') {
echo '<div id="delete">
	<div class="form-wrapper">
		<form action="./moderation/file-delete.php" method="post" enctype="application/x-www-form-urlencoded">
				<p id="upload-caption">
					Удаление проекта
				</p>			

				<p id="radio-caption" class="mini-caption">
					Тип проекта:
				</p>
				<input id="radio-furniture" name="project" type="radio" value="furniture" checked>
				<label for="radio-furniture">Мебель</label>			
				<input id="radio-design" name="project" type="radio" value="design">
				<label for="radio-design">Интерьеры</label><br>

				<p id="caption-caption" class="mini-caption">
					Номер проекта:
				</p>
				<input type="text" id="number" name="number" required><br>



				<input id="send-button" type="submit" value="Удалить" />
			</form>
	</div>
</div>';

}
?>