// My Functions

  // Scroll Down Button
  $('.startScroll').click(function(){
    $('body, html').animate({
      scrollTop: $('.content-warpper').offset().top
    }, 1000);
  });


  // My Parallax
  function Parallax() {
    var $window = $(window);
    $('[data-type="background"]').each(function(){
          var $bgobj = $(this); // assigning the object
          $(window).scroll(function() {
              var yPos = -($window.scrollTop() / $bgobj.data('speed'));

              // Put together our final background position
              var coords = '50% '+ yPos + 'px';

              // Move the background
              $bgobj.css({ backgroundPosition: coords });
          });
      });
  }
  window.requestAnimationFrame(Parallax);


  

  // Back To Top
  $(window).scroll(function(){
    if ($('body').scrollTop() > 300) {
      $('#backToTop').css({bottom: '0px'})
    }else {
      $('#backToTop').css({bottom: '-100%'})
    }
  });
  $('#backToTop').click(function(event) {
    $('html, body').animate({scrollTop: 0}, 400);
    event.preventDefault();
  });

  // Video Player
  var $video = $('#feed_window').get(0);
  // Play video on click
  $('span.play').click(function(){
    $video.play();
    $('.play-layer').fadeOut(function(){
      $('.controls').fadeIn();
    });
  });
  // Pause video
  $('.controls .ion-ios-pause, #feed_window').click(function(){
    $video.pause();
    $('.controls').fadeOut(function(){
      $('.play-layer').fadeIn();
    });
  });
















// Kill a tag
  $('a[href="#"]').click(function(event){
    event.preventDefault();
  });