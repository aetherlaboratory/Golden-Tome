
//CONTROLS

$(document).ready(function() {
  var video = $("#custom-video")[0];

 $("#restart").on("click", function () {
  video.currentTime = 0;
  video.play();
  $("#pause").show();
  $("#play").hide();
});

$("#rewind").on("click", function () {
  video.currentTime -= 10;
});

$("#pause").on("click", function () {
  video.pause();
  $("#pause").hide();
  $("#play").show();
});

$("#play").on("click", function () {
  video.play();
  $("#pause").show();
  $("#play").hide();
});

$("#forward").on("click", function () {
  video.currentTime += 10;
});

$(".bt-menu-trigger").on("click", function() {
    video.pause();
    showPlayButton();
    $('.footer-nav').removeClass('d-none');
});


  // Play the video when #bt-menu-trigger-out is clicked
  $("#bt-menu-trigger-out").on("click", function() {
    video.play();
    showPauseButton();
    $('.footer-nav').addClass('d-none');
  });

  // Show the play button and hide the pause button
  function showPlayButton() {
    $("#play").show();
    $("#pause").hide();
  }

  // Show the pause button and hide the play button
  function showPauseButton() {
    $("#play").hide();
    $("#pause").show();
  }

    
    
    
    $("#custom-video").on("click", function() {
    if (video.paused) {
        video.play();
        showPauseButton();
    } else {
        video.pause();
        showPlayButton();
    }
});

$("#custom-video").on("dblclick", function() {
    video.pause();
    showPlayButton();
    $('.footer-nav').removeClass('d-none');
  // Toggle the classes for #bt-menu
  var menuEl = document.getElementById('bt-menu');
  if ($(menuEl).hasClass('bt-menu-open')) {
    $(menuEl).removeClass('bt-menu-open');
    $(menuEl).addClass('bt-menu-close');
  } else {
    $(menuEl).removeClass('bt-menu-close');
    $(menuEl).addClass('bt-menu-open');
  }
  
  // Trigger the click event for .bt-menu-trigger
  $(".bt-menu-trigger").trigger("click");
});
  // If needed, handle other controls here...
});







//UI

$('#bt-menu-trigger-out').on('click', function() {
    $('.video-container').css('display', 'block');
    $(this).css('display', 'none');
});


$('.bt-menu-trigger').on('click', function() {
    $('.video-container').css('display', 'none');
    $('#bt-menu-trigger-out').css('display', 'block');
});


$('.bt-menu-controls').on('click', function() {
    var menuEl = document.getElementById('bt-menu');
    if ($(menuEl).hasClass('bt-menu-open')) {
      $(menuEl).removeClass('bt-menu-open');
      $(menuEl).addClass('bt-menu-close');
    } else {
      $(menuEl).removeClass('bt-menu-close');
      $(menuEl).addClass('bt-menu-open');
    }
  });




document.addEventListener("DOMContentLoaded", function() {
  const video = document.getElementById("custom-video");
  const videoContainer = document.querySelector(".video-container");
  const toggleButton = document.getElementById("toggleButton");

  toggleButton.addEventListener("click", function() {
    if (videoContainer.style.display === "none") {
      videoContainer.style.display = "block";
      video.play();
    } else {
      videoContainer.style.display = "none";
      video.pause();
    }
  });
});
