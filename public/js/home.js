function startTime() {
    var today = new Date();
    var y = today.getFullYear();
    var mth = today.getMonth() + 1;
    var d = today.getDate();
    var h = today.getHours() > 12 ? today.getHours() - 12 : today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML = y + '/' + d + '/' + mth; 
    document.getElementById('time').innerHTML =
     h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

$(document).ready(function() {
    startTime();
});
