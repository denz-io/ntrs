var video = document.getElementById('video');
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var stream;

if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(get_stream) {
        stream = get_stream;
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 300, 250);
    stream.stop();
    $('#canvas').removeClass('hidden').addClass('shown');
    $('#video').removeClass('shown').addClass('hidden');
    $(this).addClass('hidden');
    $('#profile').val(document.getElementById('canvas').toDataURL());
});

