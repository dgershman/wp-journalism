<?php
/* Template Name: Gallery Popup*/
global $pods;
?>
<html>
<head>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/scripts/jquery.1.6.4.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/galleria/galleria-1.2.6.min.js"></script>
</head>
<body>
			<div id="gallery2">					
				<?php
				$images = $pods->get_field('associated_images');
				echo $pods->pod_helper('thumb_helper', $images);
				?>
			</div>			
			<script type="text/javascript">
				Galleria.loadTheme('<?php bloginfo( 'template_directory' ); ?>/galleria/themes/classic/galleria.classic.min.js');
				$("#gallery2").galleria({
					width: 800,
					height: 600,
					showInfo: true
				});
			</script>
</body>
</html>