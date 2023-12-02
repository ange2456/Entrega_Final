var videoContainer = document.getElementById('video-container');
  var video = document.getElementById('video');
  var exitButton = document.getElementById('exit-button');

video.onclick = function () {
    if (video.requestFullscreen) {
      video.requestFullscreen();
    } else if (video.mozRequestFullScreen) { // Firefox
      video.mozRequestFullScreen();
    } else if (video.webkitRequestFullscreen) { // Chrome, Safari y Opera
      video.webkitRequestFullscreen();
    }

    exitButton.style.display = 'block';
};

function exitFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) { // Firefox
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) { // Chrome, Safari y Opera
      document.webkitExitFullscreen();
    }

    exitButton.style.display = 'none';
}