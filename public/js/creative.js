(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 57
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });
  $.extend($.validator.messages, {
    required: "Пожалуйста, заполните это поле",
    email: "Неверный формат"
  });

  var contactForm = $("#contactForm");
  contactForm.validate({
    errorPlacement: function (error, element) {
      var customError = $([
        '<span class="invalid-feedback d-block">',
        '  <span class="mb-0 d-block">',
        '  </span>',
        '</span>'
      ].join(""));

      // Add `form-error-message` class to the error element
      error.addClass("form-error-message");

      // Insert it inside the span that has `mb-0` class
      error.appendTo(customError.find("span.mb-0"));

      // Insert your custom error
      customError.insertAfter(element);
    },
  });

  contactForm.on('submit', function (e) {

    e.preventDefault();

    if (contactForm.valid()) {
      $.ajax({
        type: "POST",
        url: '/sendMessage',
        data: contactForm.serialize(), // serializes the form elements.
        success: function(data)
        {
          animationSendMessage();
        }
      });
    }

  });

  function animationSendMessage() {
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var message = $('#message').val();

    $('#letter-name').html(name);
    $('#letter-email').html('Email: ' + email);
    $('#letter-phone').html('Телефон: ' + phone);
    $('#letter-message').html(message.slice(0, 150) + '...');

    $('.form-wrapper').css('display', 'none');
    $('.modal-footer').css('display', 'none');
    $('.envelope-wrapper').css('display', 'flex');


    setTimeout(function () {
      $('input:checkbox').removeAttr('checked');

      setTimeout(function () {
        $(".envelope").addClass('hide')
      }, 1500);

      setTimeout(function () {
        $('#exampleModal').modal('hide');

        setTimeout(function () {
          $('.form-wrapper').css('display', 'block');
          $('.modal-footer').css('display', 'block');
          $('.envelope-wrapper').css('display', 'none');
          $(".envelope").removeClass('hide');
          $('input:checkbox').attr('checked', 'checked');
        }, 200)

      }, 2500);
    }, 1000)
  }
})(jQuery); // End of use strict
