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

/* Multi step form */

let currentTab = 0;

renderCircle();
showTab(currentTab);

function showTab(n) {
  
  const x = document.getElementsByClassName("tab");
        x[n].classList.add("tabs-active");
  
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "flex";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Start";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  
  fixStepIndicator(n);
}

function renderCircle() {
  let tabs = document.querySelectorAll('.tab'),
      circleWrap = document.querySelector('.circle-row'),
      i = 0;

  for (i = 0; i < tabs.length; i++) {
    const circle = document.createElement('div');
          circle.classList.add('step');

    circleWrap.prepend(circle);
  }
}

function nextPrev(n) {
  
  const x = document.querySelectorAll(".tab");

  
  if (n == 1 && !validateForm()) return false;
  
  x[currentTab].classList.remove("tabs-active");
  
  currentTab = currentTab + n;
  
  if (currentTab >= x.length) {
    
    document.getElementById("regForm").submit();
    return false;
  }
  
  showTab(currentTab);
}

function validateForm() {
  
  let valid = true,
      x = document.querySelectorAll(".tab"),
      textInput = x[currentTab].querySelectorAll("input[type='text']"),
      numberInput = x[currentTab].querySelectorAll("input[type='number']"),
      emailInput = x[currentTab].querySelectorAll("input[type='email']"),
      passwordInput = x[currentTab].querySelectorAll("input[type='password']");
  
      for (let i = 0; i < textInput.length; i++) {

          if (textInput[i].value.length == '' || textInput[i].value.length <= 2 || textInput[i].value.length >= 30) {
          
            if (!textInput[i].classList.contains('invalid')) {
              textInput[i].className += " invalid";
            }
            
            valid = false;
          }
      }

      for (let i = 0; i < numberInput.length; i++) {

        if (numberInput[i].value.length == '' || numberInput[i].value.length <= 0 || numberInput[i].value.length >= 10) {
        
          if (!numberInput[i].classList.contains('invalid')) {
            numberInput[i].className += " invalid";
          }
          
          valid = false;
        }
    }

      for (let i = 0; i < emailInput.length; i++) {
        if (textInput[i].value.length == '' || emailInput[i].value.length <= 2 || emailInput[i].value.length >= 30) {
        
          if (!emailInput[i].classList.contains('invalid')) {
            emailInput[i].className += " invalid";
          }
          
          valid = false;
        }
    }

    for (let i = 0; i <  passwordInput.length; i++) {
      if (passwordInput[i].value.length == '' || passwordInput[0].value !== passwordInput[1].value) {
        if (!passwordInput[i].classList.contains('invalid')) {
          passwordInput[i].className += " invalid";
        }
        
        valid = false;
      }
  }

 
  /*if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }*/

  return valid; 
}

function fixStepIndicator(n) {
  
  let x = document.querySelectorAll(".step"),
      i = 0;
  
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
 
  x[n].className += " active";
}


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
