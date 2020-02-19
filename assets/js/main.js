var colors = new Array(
    [62,35,255],
    [60,255,60],
    [255,35,98],
    [45,175,230],
    [255,0,255],
    [255,128,0]);

var step = 0;
var colorIndices = [0,1,2,3];
var gradientSpeed = 0.002;
var isStarted = false;

function activeDynamicColor() {
    if(!isStarted)
    {
        isStarted = true;
        updateGradient();
    }
}

function updateGradient() {
    setTimeout(updateGradient, 20);

    var c0_0 = colors[colorIndices[0]];
    var c0_1 = colors[colorIndices[1]];
    var c1_0 = colors[colorIndices[2]];
    var c1_1 = colors[colorIndices[3]];

    var istep = 1 - step;
    var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
    var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
    var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
    var color1 = "#"+((r1 << 16) | (g1 << 8) | b1).toString(16);

    var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
    var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
    var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
    var color2 = "#"+((r2 << 16) | (g2 << 8) | b2).toString(16);

    $('#gradient').css({
        "background": "-webkit-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "   -moz-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "    -ms-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "     -o-linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)",
        "background": "        linear-gradient(90deg, "+color1+" 10%, "+color2+" 90%)"
    });

    step += gradientSpeed;
    if ( step >= 1 )
    {
        step %= 1;
        colorIndices[0] = colorIndices[1];
        colorIndices[2] = colorIndices[3];
        colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
        colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    }
}
