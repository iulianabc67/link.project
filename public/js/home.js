function scrollFooter(o, e) {
  console.log(o), console.log(e), e <= o ? $("footer").css({
    bottom: "0px"
  }) : $("footer").css({
    bottom: "-" + e + "px"
  })
}
$(window).load(function() {
  var o = $(window).height(),
    e = $("footer").height(),
    t = o + $(".content").height() + $("footer").height() - 20;
  $("#scroll-animate, #scroll-animate-main").css({
    height: t + "px"
  }), o < 360 ? $("header").css({
    height: "360px",
    "line-height": "360px"
  }) : $("header").css({
    height: o + "px",
    "line-height": o + "px"
  }), $("header").css({
    height: o + "px",
    "line-height": o + "px"
  }), $(".wrapper-parallax").css({
    "margin-top": o + "px"
  }), scrollFooter(window.scrollY, e), window.onscroll = function() {
    var o = window.scrollY;
    $("#scroll-animate-main").css({
      top: "-" + o + "px"
    }), $("header").css({
      "background-position-y": 50 - 100 * o / t + "%"
    }), scrollFooter(o, e)
  }
});