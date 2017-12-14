<div id="main-portfolio" class="cols col-12">

<div id="main-portfolio-anchor" style="position:absolute; top:-80px;"></div>

	<div class="top-wrapper">
	<?php
		if ($_SERVER['SCRIPT_NAME'] == "/mebel.php") {
			$path = "furniture";
			$link = "mebel";
		}			
		else {
			$path = "design";
			$link = "design";
		}
	?>
	<div id="main-portfolio-caption">Наши работы</div>
	
	<?php
		echo '<div id="more-works"><a href="./'.$link.'-projects.php?page=1&table='.$link[0].'">Все проекты</a></div>';
		$projects = getProjectsMain(0,6, $_SERVER['SCRIPT_NAME']);
		
		
	//echo $_SERVER['SCRIPT_NAME'];
		
	?>
	</div>
	
	
	<div class="mp-works">
		
		<div class="mp-work">			
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[0]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[0]['id'].'/'.$projects[0]['text'].'.'.$projects[0]['extension'].'" alt="1">';
			?>			
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
		
		
		<div class="mp-work">
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[1]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[1]['id'].'/'.$projects[1]['text'].'.'.$projects[1]['extension'].'" alt="2">';
			?>		
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
		<div class="mp-work">
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[2]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[2]['id'].'/'.$projects[2]['text'].'.'.$projects[2]['extension'].'" alt="3 проект">';
			?>		
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
	</div>
	
	<div class="mp-works">
		<div class="mp-work">
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[3]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[3]['id'].'/'.$projects[3]['text'].'.'.$projects[3]['extension'].'" alt="4 проект">';
			?>	
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
		<div class="mp-work">
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[4]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[4]['id'].'/'.$projects[4]['text'].'.'.$projects[4]['extension'].'" alt="5 проект">';
			?>	
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
		<div class="mp-work">
			<?php
				echo '<a href="./'.$link.'-project.php?id='.$projects[5]['id'].'">'; 
			?>		
			<?php
				echo '<img src="./portfolio/'.$path.'/'.$projects[5]['id'].'/'.$projects[5]['text'].'.'.$projects[5]['extension'].'" alt="6 проект">';
			?>	
			<div class="camera-hull">
				<div class="shutter"></div>
				<div class="lens-1">
					<div class="lens-2"></div>
				</div>
			</div>
			<div class="black-hover">
				<div class="details">
					<div class="details-inner">
						<i></i>Детали
					</div>
				</div>
			</div>
			<?php echo '</a>';?>
		</div>
	</div>

</div> 