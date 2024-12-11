
$(function () {

  $("#open-menus").on("click", function () {
    $("body").removeClass("submenu-on");
    

    if ($("body").hasClass("navbar-open")) {
      TweenLite.fromTo(
        ".sub-nav",
        0.2,
        { y: "0%" },
        {
          y: "-100%",
          ease: Power2.easeOut,
          onComplete: function () {},
        }
      );
      setTimeout(function () {
        $("body").removeClass("navbar-open");
        $(".navbar .main-nav").addClass("menu-over");
      }, 120);
      
    } else {
      $("body").addClass("navbar-open");
      $(".navbar .main-nav").removeClass("menu-over");
      TweenLite.fromTo(
        ".sub-nav",
        0.5,
        { y: "-100%" },
        {
          y: "0%",
          ease: Power2.easeOut,
          onComplete: function () {},
        }
      );
    }
  });

    //메뉴 데스크탑 활성화
  $("body").on("mouseenter  focus ", ".menus", function(){
     $("body").addClass("submenu-on");
  }).on("mouseleave", ".menus",function(){
    $("body").removeClass("submenu-on");
  })

  $(".list_wrap .item").on('click', function(){
    $(this).toggleClass('on').siblings().removeClass('on');

  })
 
});


function setCookie(name, value, expirehours) {
  console.log(name);
  var todayDate = new Date();
  todayDate.setHours(todayDate.getHours() + expirehours);
  document.cookie =
    name +
    "=" +
    escape(value) +
    "; path=/; expires=" +
    todayDate.toGMTString() +
    ";";
}
function getCookie(name) {
  var nameOfCookie = name + "=";
  var x = 0;
  while (x <= document.cookie.length) {
    var y = x + nameOfCookie.length;
    if (document.cookie.substring(x, y) == nameOfCookie) {
      if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
        endOfCookie = document.cookie.length;
      return unescape(document.cookie.substring(y, endOfCookie));
    }
    x = document.cookie.indexOf(" ", x) + 1;
    if (x == 0) break;
  }
  return "";
}



