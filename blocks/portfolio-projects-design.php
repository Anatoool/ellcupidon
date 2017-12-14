<div id="portfolio-projects-container" class="cols col-12">	

<?php
	
	$projects = getProjects(0,10,$_GET['table']);
	$projectsCount = count($projects);
	echo $_POST['table'];
	
	for ($i = 0; $i < $projectsCount; $i++) {
    	echo '<div class="project-container">
		<div class="project-img">
			<img src="./portfolio/design/'.$projects[$i]['id'].'/'.$projects[$i]['text'].'.'.$projects[$i]['extension'].'" alt="Дизайн интерьера в Улан-Удэ">
		</div>
		<div class="project-info">
			<h2 class="project-caption">'.$projects[$i]['name'].'</h2>
			<div class="project-description">
			'.$projects[$i]['description'].'
			</div>
			
			<a href="./design-project.php?id='.$projects[$i]['id'].'" target="_blank">
				<div class="details-button">
					Подробнее
				</div>
			</a>
		
			</div>
		</div>';
	}
	
?>
	
</div>


<div class="ajax-load-container">
		<div class="indicator" id="d"></div>
		<div class="loading"></div>
		<div class="ajax-load-button">
			Больше проектов
		</div>
		
		<div class="ups">
			Вы просмотрели все проекты.
		</div>
</div>	