<?php
// vim: set filetype=css:
header("Content-type: text/css; charset=utf-8");

$colors = array(
	'w' => 'white',
	'y' => 'yellow',
	'g' => 'green',
	'b' => 'blue',
	'o' => 'orange',
	'r' => 'red',
	'x' => 'rgba(200, 200, 200, 0.3)',
);

$sides = array(
	'top', 'left', 'front', 'right', 'back', 'bottom'
);

$color_settings = array (
	'front' => array(
		array('x', 'x', 'y'),
		array('o', 'o', 'o'),
		array('o', 'o', 'o'),
	),
	'back' => array(
		array('x', 'x', 'x'),
		array('r', 'r', 'r'),
		array('r', 'r', 'r'),
        ),
	'right' => array(
                array('x', 'x', 'x'),
		array('b', 'b', 'b'),
		array('b', 'b', 'b'),
        ),
	'left' => array(
                array('x', 'x', 'x'),
		array('g', 'g', 'g'),
		array('g', 'g', 'g'),
        ),
	'bottom' => array(
		array('w', 'w', 'w'),
		array('w', 'w', 'w'),
		array('w', 'w', 'w'),
	),
	'top' => array(
		array('x', 'y', 'x'),
		array('y', 'y', 'y'),
		array('x', 'y', 'x'),
	),
);


foreach ($sides as $side) {
	for ($y = 0; $y < 3; $y++) {
		for ($x = 0; $x < 3; $x++) {
			if (isset($color_settings[$side][$y][$x]))
				$color_code = $color_settings[$side][$y][$x];
			else
				$color_code = 'x';
			echo '#rubiks_'.$side.'_square_'.$y.'_'.$x.' .label {';
			echo '	background-color: '.$colors[$color_code].';';
			if ($color_code != 'x' && !in_array($side, array('back', 'left', 'bottom'))) {
				echo 'box-shadow: inset 0 -2px 2px rgba(0,0,0,0.5), inset 0 2px 2px rgba(255,255,255,0.8);';
			}
			echo '}';
		}
	}
}

$explode = !true;
?>

#rubiks {
	position: relative;
	top: -0px;
	left: 100px;
	transform: scale(0.6, 0.6);
	transform-origin: 0px 0px;
}

.rubiks_square {
        width: 100px;
        height: 100px;
        color: transparent;
        position: relative;
        float: left;
        box-sizing:border-box;
        border: 5px solid black;
}

.rubiks_square .label {
	position: relative;
	top: -5px;
	left: -5px;
	height: 90px;
	width: 90px;
	border-radius: 15px;
	text-align: center;
        line-height: 94px;
	border: 5px solid black;
}

.rubiks_side {
	width: 300px;
	height: 300px;
	position: relative;
}

#rubiks_top {
	left: 100px;
	position: relative;
	transform: skewX(-45deg) scale(1, 0.25);
	transform-origin: 0px 300px;
}

#left_front_right_back {
	width: 1200px;
	height: 300px;
}

#left_front_right_back .rubiks_side {
	float: left;
}

#rubiks_front {
	left: -200px;
}

#rubiks_right {
	left: -200px;
	transform: skewY(-45deg) scale(0.25, 1);
	transform-origin: 0px 0px;
}

#rubiks_back {
<?php
if ($explode)
	echo 'top: -163px; left: -385px;';
else
	echo 'top: -75px; left: -725px;';
?>
	z-index: -1;
}

#rubiks_bottom {
        transform: skewX(-45deg) scale(1, 0.25);
        transform-origin: 0px 300px;
<?php
if ($explode)
	echo 'top: -200px;';
else
	echo 'top: -300px;';
?>
	left: 100px;
	z-index: -1;

	box-shadow: 15px 50px 50px 20px rgba(0, 0, 0, 0.2);
}

#rubiks_left {
<?php
if (!$explode)
	echo 'left: +100px;';
?>
        transform: skewY(-45deg) scale(0.25, 1);
        transform-origin: 0px 0px;
	z-index: -1;
}

<?php
if (!$explode) {
	echo '.rubiks_left_square, .rubiks_back_square, .rubiks_bottom_square {';
              echo 'border: 5px solid #D0D0D0;';
	echo '}';
	echo '.rubiks_left_square .label, .rubiks_back_square .label, .rubiks_bottom_square .label {';
	echo 'border: 5px solid #D0D0D0;';
	echo '}';
}
?>
