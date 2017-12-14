<div id="gallery" style="display:none;">	

<?php
	
	$table="designgallery";
	$GallereyArray = getGallerey($_GET['id'], $table);
	
	for ($i = 0; $i < count($GallereyArray); $i++) {
		
		if ($GallereyArray[$i]['type'] == 'photo') {
			echo '<img alt="Дизайн интерьера в Улан-Удэ"		 src="./portfolio/design/'.$_GET['id'].'/'.$GallereyArray[$i]['name'].'.'.$GallereyArray[$i]['extension'].'"
		 	data-image="./portfolio/design/'.$_GET['id'].'/'.$GallereyArray[$i]['name'].'.'.$GallereyArray[$i]['extension'].'">'; 
		}
		else if ($GallereyArray[$i]['type'] == 'video') {
			echo '<img alt="Youtube Video"
					data-type="youtube"
		 			data-videoid="'.$GallereyArray[$i]['name'].'">';
		}
		
	}
				
?>
				 
</div>
	
<div class="text-container">

	<?php
		$table = "projectdesign";
		$project = getProject($_GET['id'], $table);
	?>

	<h2 class="project-caption">
		<?php		
			echo $project[0]["name"];		
		?>
	</h2>

	<div class="project-description">
		<?php		
			echo $project[0]["description"];		
		?>		
	</div>

</div>

	
	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery").unitegallery({
				theme_enable_text_panel: false,
				slider_scale_mode: "fit"
			});

		});
		
	</script>