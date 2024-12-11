var front = {
  stage: {
      width: 0,
      height: 0,
      top: 0,
      ptop: 0
  },

  init: function() {

      this.common.init(),   
      this.resize(),
      this.scroll()
     
  },
  ready: function() {},
  load: function() {},

  resize: function() {
      front.stage.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
      front.stage.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
      front.stage.top = window.scrollTop || document.documentElement.scrollTop || document.body.scrollTop
  },
  scroll: function() {
      front.stage.top = window.scrollTop || document.documentElement.scrollTop || document.body.scrollTop,
      front.common.scroll()
  },
  common: {
     
      init: function() {     
          effectData.init(),       
          $(".company-wrap").length > 0 && company.init(),          
          $("#wrap").addClass("actived")
      },
     
      scroll: function() {
        
        
         
      },
      moveScroll: function(tgY, speed) {
          null != speed && "undefind" != speed || (speed = 1e3),
          $("html, body").stop().animate({
              scrollTop: tgY
          }, {
              queue: !1,
              duration: speed
          })
      },
     
  }
  
}

, $WINDOW = {
  addFix: function() {
      $DOM.addClass(document.documentElement, "fix")
  },
  removeFix: function() {
      $DOM.removeClass(document.documentElement, "fix")
  },
  getScrollBarWidth: function() {
      var inner = document.createElement("p");
      inner.style.width = "100%",
      inner.style.height = "200px";
      var outer = document.createElement("div");
      outer.style.position = "absolute",
      outer.style.top = "0px",
      outer.style.left = "0px",
      outer.style.visibility = "hidden",
      outer.style.width = "200px",
      outer.style.height = "150px",
      outer.style.overflow = "hidden",
      outer.appendChild(inner),
      document.body.appendChild(outer);
      var w1 = inner.offsetWidth;
      outer.style.overflow = "scroll";
      var w2 = inner.offsetWidth;
      return w1 == w2 && (w2 = outer.clientWidth),
      document.body.removeChild(outer),
      w1 - w2
  },
  getParameter: function(key) {
      for (var url = location.href, spoint = url.indexOf("?"), query = url.substring(spoint, url.length), keys = new Array, values = new Array, nextStartPoint = 0; query.indexOf("&", nextStartPoint + 1) > -1; ) {
          var item = query.substring(nextStartPoint, query.indexOf("&", nextStartPoint + 1))
            , p = item.indexOf("=");
          keys[keys.length] = item.substring(1, p),
          values[values.length] = item.substring(p + 1, item.length),
          nextStartPoint = query.indexOf("&", nextStartPoint + 1)
      }
      p = (item = query.substring(nextStartPoint, query.length)).indexOf("="),
      keys[keys.length] = item.substring(1, p),
      values[values.length] = item.substring(p + 1, item.length);
      for (var value = "", i = 0; i < keys.length; i++)
          keys[i] == key && (value = values[i]);
      return value
  },
  getHash: function() {
      var url = window.location.href;
      return url.substring(url.indexOf("#") + 1)
  },
  isMobile: function() {
      return null != navigator.userAgent.match(/iPhone|iPad|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) || null != navigator.userAgent.match(/LG|SAMSUNG|Samsung/)
  },
  isIpadPro: function() {
      return (/iPhone|iPod/.test(navigator.platform) || "MacIntel" === navigator.platform && navigator.maxTouchPoints > 1) && !window.MSStream
  },
  isIE: function() {
      return "Netscape" == navigator.appName && -1 != navigator.userAgent.search("Trident") || -1 != navigator.userAgent.toLowerCase().indexOf("msie")
  }
}
, $DOM = {
  element: function(_el) {
      if (_el)
          return _el.length > 0 ? _el[0] : _el;
      console.log("Not Element")
  },
  addClass: function(_el, _class) {
      $DOM.element(_el).classList.add(_class)
  },
  hasClass: function(_el, _class) {
      return $DOM.element(_el).classList.contains(_class)
  },
  removeClass: function(_el, _class) {
      $DOM.element(_el).classList.remove(_class)
  },
  closest: function(_el, _selector) {
      for (var el = $DOM.element(_el), matchesSelector = el.matches || el.webkitMatchesSelector || el.mozMatchesSelector || el.msMatchesSelector, selector = "." + _selector; el; ) {
          if (matchesSelector.call(el, selector))
              return el;
          el = el.parentElement
      }
      return null
  },
  closestAll: function(_el, _selector) {
      for (var arr = [], el = $DOM.element(_el); el; )
          el && el.classList.contains(_selector) && arr.push(el),
          el = el.parentElement;
      return arr
  },
  siblings: function(_el, _selector) {
      var el = $DOM.element(_el);
      return Array.from(el.parentNode.children).filter((function(sibling) {
          return _selector ? sibling !== el && $DOM.hasClass(sibling, _selector) ? sibling : void 0 : sibling !== el
      }
      ))
  },
  child: function(_el, _selector) {
      var el = $DOM.element(_el);
      if (el.children.length > 0)
          return Array.from(el.children).filter((function(sibling) {
              return _selector ? sibling !== el && $DOM.hasClass(sibling, _selector) ? sibling : void 0 : sibling !== el
          }
          ));
      console.log("Not Element")
  },
  next: function(_el) {
      return $DOM.element(_el).nextElementSibling
  },
  prev: function(_el) {
      return $DOM.element(_el).previousElementSibling
  },
  parent: function(_el) {
      return $DOM.element(_el).parentNode
  },
  getAttr: function(_el, _attr) {
      return $DOM.element(_el).getAttribute(_attr)
  },
  setAttr: function(_el, _attr, _value) {
      $DOM.element(_el).setAttribute(_attr, _value)
  },
  hasAttr: function(_el, _attr) {
      return $DOM.element(_el).hasAttribute(_attr)
  },
  getIndex: function(_el) {
      return Array.prototype.slice.call($DOM.element(_el).parentElement.children).indexOf($DOM.element(_el))
  },
  getHtml: function(_el) {
      return $DOM.element(_el).innerHTML
  },
  setHtml: function(_el, _html) {
      $DOM.element(_el).innerHTML = _html
  },
  setAdjacentHtml: function(_el, _position, _html) {
      $DOM.element(_el).insertAdjacentHTML(_position, _html)
  }
}


, effectData = {
  controller: null,
  container: null,
  init: function() {
      if (this.container = document.querySelectorAll(".effect-data"),
      this.container.length > 0) {
          this.controller = new ScrollMagic.Controller;
          for (var k = 0; k < this.container.length; k++)
              var effects = new this.fadeEffect(this.container[k])
      }
  },
  fadeEffect: function(target) {
      var $controller = new ScrollMagic.Controller
        , $element = target
        , scenes = new ScrollMagic.Scene({
          triggerElement: $element,
          offset: 0,
          triggerHook: 1
      }).addTo($controller);
      scenes.on("leave", (function() {
          $element.classList.remove("actived")
      }
      )),
      scenes.on("enter", (function() {
          $element.classList.add("actived")
      }
      ))
  }
}
, company = {
  controller: null,
  container: null,
  tweeners: {},
  scenes: {},
  historyConatiner: null,
  historyNav: null,
  historyData: null,
  historyVisual: null,
  cur: -1,
  init: function() {
      var _this = this;
      
      setTimeout((function() {
         
      }
      ), 1e3),
      this.controller = new ScrollMagic.Controller,
      this.container = $(".company-wrap"),
      this.historyConatiner = this.container.find(".company-history"),
      this.historyNav = this.historyConatiner.find(".tab-nav"),
      this.historyData = this.historyConatiner.find(".detail"),
      this.historyVisual = this.historyConatiner.find(".background"),
      $(document).on("click", ".btn-history-tab-nav", (function() {
          var posY = Math.ceil(_this.historyData.find(".detail-data").eq($(this).index()).offset().top);
          front.common.moveScroll(posY, 400)
      }
      )),
      this.historySort(),
      this.scroll(),
      window.addEventListener("DOMContentLoaded", (function() {
          _this.container.addClass("actived"),
          _this.resize()
      }
      )),
      window.addEventListener("load", (function() {
          _this.resize()
      }
      )),
      window.addEventListener("resize", (function() {
          _this.resize()
      }
      )),
      window.addEventListener("scroll", (function() {
          _this.scroll()
      }
      ))
  },
  sceneSet: function() {
      var _this = this
        , stageW = $(window).width()
        , stageH = $(window).height()
        , companyVisual = $(".company-visual")
        , txt1 = companyVisual.find(".txt-group .txt-1")
        , txt2 = companyVisual.find(".txt-group .txt-2")
        , txt3 = companyVisual.find(".txt-group .txt-3")
        , txt4 = companyVisual.find(".txt-group .txt-4")
        , txt5 = companyVisual.find(".txt-group .txt-5")
        , k = 0;
      companyVisual.find(".txt-group .txt").each((function() {
          var $element = $(this);
          _this.scenes["scene0" + k] = new ScrollMagic.Scene({
              triggerElement: companyVisual[0],
              triggerHook: 0,
              offset: 200 * (k + 1)
          }).addTo(_this.controller),
          _this.scenes["scene0" + k].on("leave", (function() {
              $element.removeClass("actived")
          }
          )),
          _this.scenes["scene0" + k].on("enter", (function() {
              $element.addClass("actived")
          }
          )),
          k++
      }
      ));
      var i = 0;
      _this.container.find(".parallax-items").each((function() {
          var $parents = $(this)
            , $randomY = parseInt(_this.getMathRandomMinMax(50, 150));
          _this.tweeners["tweener1" + i] = gsap.timeline({}),
          _this.tweeners["tweener1" + i].fromTo($parents.find(".parallax-parents"), {
              y: $randomY + "px"
          }, {
              y: -1 * $randomY + "px",
              ease: Linear.easeNone
          }, 0),
          _this.tweeners["tweener1" + i].fromTo($parents.find(".parallax-children img"), {
              y: "-100px"
          }, {
              y: "0px",
              ease: Linear.easeNone
          }, 0),
          _this.scenes["scene1" + i] = new ScrollMagic.Scene({
              triggerElement: $(this)[0],
              triggerHook: 1
          }).addTo(_this.controller),
          _this.scenes["scene1" + i].duration($parents.height() + stageH),
          _this.scenes["scene1" + i].setTween(_this.tweeners["tweener1" + i]),
          i++
      }
      ));
      var companyHistory = $(".company-history");
      this.scenes.scene11 = new ScrollMagic.Scene({
          triggerElement: companyHistory[0],
          triggerHook: .3
      }).addTo(this.controller),
      this.scenes.scene11.on("leave", (function() {
          companyHistory.removeClass("actived")
      }
      )),
      this.scenes.scene11.on("enter", (function() {
          companyHistory.addClass("actived")
      }
      ))
  },
  sceneReset: function() {
      for (var scenes in this.scenes)
          this.scenes[scenes] && (this.scenes[scenes].destroy(!0),
          this.scenes[scenes] = null),
          delete this.scenes[scenes];
      for (var tweeners in this.tweeners)
          this.tweeners[tweeners] && (this.tweeners[tweeners] = null),
          delete this.tweeners[tweeners]
  },
  scroll: function() {
      var _this = this
        , srcollY = $(window).scrollTop();
        if (this.historyNav && this.historyNav.length > 0) {
      scrollY >= this.historyNav.offset().top ? this.historyNav.addClass("fix") : this.historyNav.removeClass("fix");
      var margin = 0;
      this.historyData.find(".detail-data").each((function() {
          srcollY >= $(this).offset().top - 0 && srcollY <= $(this).offset().top - 0 + $(this).innerHeight() && (_this.cur = $(this).index() + 1),
          0 == $(this).index() && scrollY < Math.ceil($(this).offset().top) - 0 && (_this.cur = 0)
      }
      )),
      this.historyNav.find(".btn-history-tab-nav").each((function() {
          $(this).index() == _this.cur - 1 ? $(this).addClass("actived") : $(this).removeClass("actived")
      }
      )),
      this.historySort()
    }
    
  },
  historySort: function() {
      this.historyVisual.find(".visual-cell").eq(this.cur).addClass("actived").siblings().removeClass("actived")
  },
  resize: function() {
      this.sceneReset(),
      this.sceneSet()
  },
  getChangePercent: function(value, Amin, Amax, Bmin, Bmax) {
      var y;
      return (Bmax - Bmin) / (Amax - Amin) * (value - Amin) + Bmin
  },
  getMathRandomMinMax: function(min, max) {
      return Math.random() * (max - min) + min
  }
}






window.addEventListener("DOMContentLoaded", front.ready),
window.addEventListener("load", front.load),
window.addEventListener("resize", front.resize),
window.addEventListener("scroll", front.scroll),

front.init();