$((function() {
    var e = $(window)
      , o = $("header.header")
      , s = $(".side-links")
      , l = $(".header-top").height()
      , a = $(".quick-links").height() || 0
      , t = null
      , r = function(r) {
        var c = e.scrollTop();
        t && clearTimeout(t),
        c >= l + a ? o.addClass("header-sticky") : o.removeClass("header-sticky"),
        c >= 200 ? s.addClass("less-importance") : s.removeClass("less-importance")
    };
    t = setTimeout(r, 500),
    e.on("scroll", r);
    var c = navigator.userAgent.toLowerCase()
      , i = -1 != c.indexOf("safari") && !(c.indexOf("chrome") > -1)
      , n = $("header .offcanvas-collapse").height();
    $("header .hamburger").on("click", (function(e) {
        e.preventDefault(),
        $(this).toggleClass("open");
        var o = $("header .offcanvas-collapse");
        o.toggleClass("open"),
        i && (o.hasClass("open") ? o.parent().height(n) : o.parent().height(0))
    }
    )),
    $(".modal-selector-casilleros-toggler").on("click", (function(e) {
        e.preventDefault();
        var o = $(".modal-selector-casilleros").data("site-country");
        $(".modal-selector-casilleros .modal-selector-casilleros-pais").each((function() {
            $(this).data("country") != o && $(this).remove()
        }
        )),
        $(".modal-selector-casilleros").toggleClass("show"),
        $("body").toggleClass("fixed-by-kws-modal")
    }
    )),
    $(".modal-selector-casilleros-content-close").on("click", (function(e) {
        e.preventDefault(),
        $(".modal-selector-casilleros").toggleClass("show"),
        $("body").toggleClass("fixed-by-kws-modal")
    }
    )),
    $(".modal-selector-casilleros-content a").on("click", (function(e) {
        $(".modal-selector-casilleros").toggleClass("show"),
        $("body").toggleClass("fixed-by-kws-modal")
    }
    ))
}
));
