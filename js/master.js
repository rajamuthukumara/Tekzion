$(window).scroll(function(){
  fixednav();
  updateTimer();
})

// ------------------------------fixed nav------------------------------------

function fixednav(){
    if($(document).scrollTop() > 50){
      $('nav').addClass('fixed-nav');
      $('.banner').addClass('fixed-banner');
    }
    else {
      $('nav').removeClass('fixed-nav');
      $('.banner').removeClass('fixed-banner');
    }
}

// function menuhide(){
//   $('.toggle-btn').click(function(){
//     $('.sidemenu').addClass('mhide');
//   });
// }

// function parallax(){
//   var wScroll = $(this).scrollTop();
//   $('.parallax').css('background-position','center '+(-wScroll*0.01)+'px');
// }

// function parallax() {
//   var scroll = $(window).scrollTop();
//   var screenHeight = $(window).height();
//
//   $('.parallax').each(function() {
//     var offset = $(this).offset().top;
//     var distanceFromBottom = offset - scroll - screenHeight
//
//     if (offset > screenHeight && offset) {
//       $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.2) +'px');
//     } else {
//       $(this).css('background-position', 'center ' + (( -scroll ) * 0.01) + 'px');
//     }
//   })
// }

// ------------------------------------smooth scroll---------------------------------

$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: ($(hash).offset().top)
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});

// $(document).ready(function(){
//   // var date = new Date();
//   var today = new Date();
//   var symp = new Date();
//   today.setDate('2018','24','02');
//   symp.setDate('2018','17','03');
//   var ans = new Date();
//   ans = today - symp;
//   $("#daystogo").html(ans+" days to go");
// });

// -------------------------------------timer---------------------------------------

function updateTimer(){
   var counter = document.getElementById("daystogo");
   var targetDate = new Date("march 17, 2018 08:30:00");

   var remainingSeconds = ~ ~((targetDate - new Date()) / 1000);
   var remainingTime = {
       "days": remainingSeconds / (60 * 60 * 24)
   };

   var str = " ";
   for (var i in remainingTime) {
       str += ~ ~remainingTime[i] + " " + i + " ";
   }

   str = str+" to go";
   counter.innerHTML = str;
}

// ------------------------------navbar------------------------------------------------

function expandmenu(){
  document.getElementById('side-menu').style.width = '250px';
}

function closemenu(){
  document.getElementById('side-menu').style.width = '0';
}

// --------------------------------events-----------------------------------------------

function pp(){
  window.location = "pp.php";
}

function techspeech(){
  window.location = "techspeech.php";
}

function quiz(){
  window.location = "quiz.php";
}

function debug(){
  window.location = "debug.php";
}

function wd(){
  window.location = "wd.php";
}

function robot(){
  window.location = "robot.php";
}

// --------------------------------non technical---------------------------------

function fpaint(){
  window.location = "facepaint.php";
}

function film(){
  window.location = "film.php";
}

function game(){
  window.location = "game.php";
}

function art(){
  window.location = "art.php";
}

function eat(){
  window.location = "eatathon.php";
}

function cym(){
  window.location = "cym.php";
}

// ---------------------------------loader---------------------------------------
$(window).on('load', function() {
  $('#spinner').fadeOut();
  $('#overlay').delay(350).fadeOut('slow');
  // $('body').delay(350).css({'overflow':'visible'});
})
