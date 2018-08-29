var video = document.getElementById('video');
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var stream;

if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(get_stream) {
        stream = get_stream;
        video.src = window.URL.createObjectURL(stream);
        video.play();
        sweetAlert("Thanks!", "You have granted the app access to your webcam.", "success")
    }, function() {
        sweetAlert("Access Required", "The app needs access to your webcam. Pls refresh (press f5) and allow access.", "info")
    });
}

document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 300, 240);
    stream.stop();
    $('#canvas').removeClass('hidden').addClass('shown');
    $('#video').removeClass('shown').addClass('hidden');
    $(this).addClass('hidden');
    $('#profile').val(document.getElementById('canvas').toDataURL());
    $('#register-submit').prop('disabled',false);
});

