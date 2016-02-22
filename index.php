<!DOCTYPE html>
<html>
<head>
	<title>Rubik</title>
	<meta charset="utf-8"/>
	<link href='css/basic.css.php' rel='stylesheet'/>
	<meta name="description" content="Easily create your own guitar chord diagrams." />
	<meta name="keywords" content="chord, diagram, guitar, shape, image" />
</head>
<body>
<div id="page">

<?php
function print_side($name) {
	echo '<div id="rubiks_'.$name.'" class="rubiks_side">';
	for ($y = 0; $y < 3; $y++) {
                echo '<div>';
                for ($x = 0; $x < 3; $x++) {
                        echo '<div id="rubiks_'.$name.'_square_'.$y.'_'.$x.'" class="rubiks_'.$name.'_square rubiks_square"><div class="label">'.$name.'</div></div>';
                }
                echo '</div>';
        }
	echo '</div>';
}
?>

	<div id="rubiks">
		<?php print_side('top'); ?>
		<div id="left_front_right_back">
			<?php print_side('left'); ?>
			<?php print_side('front'); ?>
			<?php print_side('right'); ?>
			<?php print_side('back'); ?>
	
		</div>
		<?php print_side('bottom'); ?>
	</div>

</div>
</body>
</html>
