'use strict';

/* Testimonial carousel */

const animate = new WOW({
  boxClass: 'animated',
  animateClass: 'animate',
  offset: 10,
  mobile: true,
  live: true
});

animate.init();

$(document).ready(function(){
    $('.testimonial-slide').owlCarousel({
		navigation : true,
		navText: [$('.text-prev'), $('.text-next')],
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		items : 1, 
		center:true,
		loop:true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true
	});
});

$("input[name='form-phone']").mask("+19999999999");

/* Video player function */

function onYouTubePlayerAPIReady() {
  let playerYoutube,
      playerYoutubeSecond;

  playerYoutube = new YT.Player("video-youtube__content", {
    videoId: "jgqbMnJ2CX4",
    playerVars: {
      'controls': 1,
      'showinfo': 0,
      'autohide': 1,
      'color': 'white'
    },
    events: {
      onReady: onYouTubePlayerReady
    }
  });
  playerYoutubeSecond = new YT.Player("video-youtube__content-second", {
    videoId: "XRJnyl2f7og",
    playerVars: {
      'controls': 1,
      'showinfo': 0,
      'autohide': 1,
      'color': 'white'
    },
    events: {
      onReady: onYouTubePlayerReady
    }
  });
}

function onYouTubePlayerReady(event) {

  let targetYoutubeVideo = event.target;
  let videoDomElem = document.getElementById(
    event.target.getIframe().getAttribute("id")
  );
  let newPLayBtn = videoDomElem.nextElementSibling;

  newPLayBtn.addEventListener("click", function(event) {
    targetYoutubeVideo.playVideo();
    this.classList.add('hidden');
    videoDomElem.style.opacity = 1;
    videoDomElem.parentNode.classList.remove('video-youtube_overlay');
  });
}

let tag = document.createElement("script");

    tag.src = "https://www.youtube.com/iframe_api";
    const firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
