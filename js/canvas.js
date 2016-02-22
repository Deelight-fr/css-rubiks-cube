var draw = function (context, x, y, fillcolor, radius, linewidth, strokestyle, fontcolor, textalign, fonttype, filltext) {
    context.beginPath();
    context.arc(x, y, radius, 0, 2 * Math.PI, false);
    context.fillStyle = fillcolor;
    context.fill();
    context.lineWidth = linewidth;
    context.strokeStyle = strokestyle;
    context.stroke();
    
    context.fillStyle = fontcolor;
    context.textAlign = textalign;
    context.font = fonttype;
    
    context.fillText(filltext, x, y);    
};

var Circle = function(x, y, radius) {
    this.left = x - radius;
    this.top = y - radius;
    this.right = x + radius;
    this.bottom = y + radius;
};

var drawCircle = function (context, x, y, fillcolor, radius, linewidth, strokestyle, fontcolor, textalign, fonttype, filltext, circles) {
    draw(context, x, y, fillcolor, radius, linewidth, strokestyle, fontcolor, textalign, fonttype, filltext);
    var circle = new Circle(x, y, radius);
    circles.push(circle);  
};

var canvas = document.getElementById("myCanvas");
var context = canvas.getContext("2d");
drawCircle(context, 300, canvas.height / 2, "green", 40, 5, "#003300", "white", "center", "bold 32px Arial", "1", circles);
