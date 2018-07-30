/*
 * a function that helps you draw the circle animation
 */
function circle(canvas, fps) {

    if (!canvas) {
        console.warn("parameter canvas is null");
        return;
    }

    canvas.height = 300;
    canvas.width = 300;

    if (!fps) {
        fps = 5;
    }

    //var canvas = document.querySelector('#i');
    var context = canvas.getContext('2d');

    var radius = 120;
    var sinABase = 20;

    var init = [150, 150];

    var timeV = 0;

    var interval = setInterval(it);

    return interval;

    //it();

    function it() {
        draw(getR(timeV++ / fps / 180 * Math.PI));
    }

    function getR(timeV) {
        return Math.sin(timeV) * sinABase;
    }

    function draw(sinA) {
        canvas.width = canvas.width;
        context.beginPath();
        context.arc(init[0],init[1],radius,0,360,0);
        context.closePath();
        context.strokeStyle = "#8BDBFC";
        context.lineWidth='5';
        context.stroke();
        var wave = 4;
        var angleStart = 260;
        var angle = 500;
        var last = [-1, -1];
        //context.beginPath();
        var colorChangeThreshold = 5;
        for (var i=angleStart; i < angleStart+angle; ++i) {
            var p = ((i-angleStart) * wave * 540 / angle % 360);
            var cr = sinA * Math.sin(p / 180 * Math.PI) + radius;
            context.beginPath();
            if (last[0] > 0){
                context.moveTo(last[0],last[1]);
            }
            var current = [Math.cos(i / 180 * Math.PI) * cr + init[0], cr * Math.sin(i / 180 * Math.PI) + init[1]];
            context.lineTo(current[0], current[1]);
            if (Math.abs(cr - radius) < colorChangeThreshold) {
                context.strokeStyle = "#8BDBFC";
            } else {
                context.strokeStyle = "#F8EEF1";
            }
            context.stroke();
            context.closePath();
            last = current;
        }
    }
}