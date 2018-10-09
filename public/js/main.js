$(document).ready(function() {
    startTime();
});

$('.message').delay(4000).fadeOut(400);

function startTime() {
    let today = new Date();
    let y = today.getFullYear();
    let mth = today.getMonth() + 1;
    let d = today.getDate();
    let h = today.getHours() > 12 ? today.getHours() - 12 : today.getHours();
    let amOrpm = today.getHours() > 12 ? 'PM' : 'AM';
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML = mth + '/' + d + '/' + y; 
    document.getElementById('time').innerHTML =
     h + ":" + m + ":" + s + " " + amOrpm;
    let t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

