$(document).ready(function(){
	// Face
	var front_x_offset = 200;
	var front_y_offset = 200;
	var space_between_squares = 2;

        // Background
        $('#myCanvas').drawRect({
                fillStyle: '#000',
                x: front_x_offset,
                y: front_y_offset,
                width: 300,
                height: 300,
                fromCenter: false
        });

	for (x = 0; x <3; x++) {
		for (y= 0; y <3; y++) {
			$('#myCanvas').drawRect({
				fillStyle: '#fff',
				x: front_x_offset + 100*x + space_between_squares,
				y: front_y_offset + 100*y + space_between_squares,
				width: 100 - (space_between_squares*2),
				height: 100 - (space_between_squares*2),
				cornerRadius: 10,
				fromCenter: false
			});
		}
	}
});
