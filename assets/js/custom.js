$(document).ready(function () {
  // $("li:first-child").addClass("first");
  // $("li:last-child").addClass("last");

  // $('[href="#"]').attr("href", "javascript:;");
  // $('.menu-Bar').click(function() {
  //     $(this).toggleClass('open');
  //     $('.menuWrap').toggleClass('open');
  //     $('body').toggleClass('ovr-hiddn');
  //     $('body').toggleClass('overflw');
  // });

  $(".pro-card-wrapper").slick({
    dots: false,
    arrows: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 825,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: false,
        },
      },
    ],
  });

  $(".reviews-wrapper-container").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 825,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: false,
        },
      },
    ],
  });

  $(document).ready(function () {
    function toggleOverlay() {
      $(".open-overlay").css("pointer-events", "none");
      var overlay_navigation = $(".overlay-navigation");
      var trigger = $(".open-overlay");

      overlay_navigation.toggleClass("overlay-active");
      trigger.attr(
        "aria-expanded",
        overlay_navigation.hasClass("overlay-active") ? "true" : "false"
      );
      if (overlay_navigation.hasClass("overlay-active")) {
        overlay_navigation
          .removeClass("overlay-slide-up")
          .addClass("overlay-slide-down");
        overlay_navigation.velocity("transition.slideLeftIn", {
          duration: 300,
          delay: 0,
          begin: function () {
            $("nav ul li").velocity("transition.perspectiveLeftIn", {
              stagger: 150,
              delay: 0,
              complete: function () {
                $("nav ul li a").velocity(
                  {
                    opacity: [1, 0],
                  },
                    {
                      delay: 10,
                      duration: 140,
                      complete: function () {
                        $(".open-overlay").css("pointer-events", "auto");
                      },
                    }
                );
              },
            });
          },
        });
      } else {
        overlay_navigation
          .removeClass("overlay-slide-down")
          .addClass("overlay-slide-up");
        $("nav ul li").velocity("transition.perspectiveRightOut", {
          stagger: 150,
          delay: 0,
          complete: function () {
            overlay_navigation.velocity("transition.fadeOut", {
              delay: 0,
              duration: 300,
              complete: function () {
                $("nav ul li a").velocity(
                  {
                    opacity: [0, 1],
                  },
                    {
                      delay: 0,
                      duration: 50,
                      complete: function () {
                        $(".open-overlay").css("pointer-events", "auto");
                      },
                    }
                );
              },
            });
          },
        });
      }
    }

    $(".open-overlay").click(toggleOverlay);
    $(".open-overlay").on("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        toggleOverlay();
      }
    });
  });

  function myFunction() {
    var x = document.getElementById("myVideo").autoplay;
    document.getElementById("demo").innerHTML = x;
  }

  // $('.faqAccordian>li.first').addClass('active');
  $(".faqAccordian>li").click(function () {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  });

  $(".fancybox-media").fancybox({
    openEffect: "none",
    closeEffect: "none",
    helpers: {
      media: {},
    },
  });

  $(".searchBtn").click(function () {
    $(".searchWrap").addClass("active");
    $(".overlay").fadeIn("active");
    $(".searchWrap input").focus();
    $(".searchWrap input").focusout(function (e) {
      $(this).parents().removeClass("active");
      $(".overlay").fadeOut("active");
      $("body").removeClass("ovr-hiddn");
    });
  });
  //$('#soundbtn').click();
});

// function disableMute()
// {
//    vid.muted = false;
// }

$(window).on("load", function () {
  var currentUrl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $("ul.menu li a").each(function () {
    var hrefVal = $(this).attr("href");
    if (hrefVal == currentUrl) {
      $(this).removeClass("active");
      $(this).closest("li").addClass("active");
      $("ul.menu li.first").removeClass("active");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const circleCursor = document.querySelector(".circle-cursor");

  document.addEventListener("mousemove", (e) => {
    circleCursor.style.display = "block";
    circleCursor.style.left = e.clientX - 10 + "px";
    circleCursor.style.top = e.clientY - 10 + "px";
  });

  document.addEventListener("mouseleave", () => {
    circleCursor.style.display = "none";
  });
});
