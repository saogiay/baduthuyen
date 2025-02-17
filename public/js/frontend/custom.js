jQuery(document).ready(function ($) {
  jQuery('.stellarnav').stellarNav({
    theme: 'light',
  });
});

// tim-kiem
$('.search-icon').on('click', function (e) {
  e.preventDefault();

  $('.search-box-wrap').slideToggle();

  // $( "#header-search" ).addClass( "myClass" );

  // if (parseInt(posScroll) > parseInt(pos.top)){
  //     $(".header").addClass('fixed');
  // }else{
  //     $(".header").removeClass('fixed');
  // }
});
// tim-kiem

// menu mobile

// var owl = $('.owl-carousel');
// owl.owlCarousel({
//   margin: 10,
//   loop: true,
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
//   responsive: {
//     0: {
//       items: 2,
//     },
//     600: {
//       items: 2,
//     },
//     1000: {
//       items: 6,
//     },
//   },
// });

// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = 'block';
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = 'none';
}

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('demo');
  var captionText = document.getElementById('caption');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(' active', '');
  }
  slides[slideIndex - 1].style.display = 'block';
  dots[slideIndex - 1].className += ' active';
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

// menu mobile

$(document).ready(function () {
  var trigger = $('.hamburger'),
    overlay = $('.overlay'),
    isClosed = false;

  trigger.click(function () {
    hamburger_cross();
  });

  function hamburger_cross() {
    if (isClosed == true) {
      overlay.hide();
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
    } else {
      overlay.show();
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isClosed = true;
    }
  }

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });
});

pos = $('.menu').position();
$(window).scroll(function () {
  var posScroll = $(document).scrollTop();
  if (parseInt(posScroll) > parseInt(pos.top)) {
    $('.menu').addClass('fixed');
  } else {
    $('.menu').removeClass('fixed');
  }
});
