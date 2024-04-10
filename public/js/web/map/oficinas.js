z(()=>{
    if (window.location.search.includes("?")) {
        var o = document.querySelector(".block-oficinas-buscador-content-info");
        window.scrollTo({
            behavior: "smooth",
            top: o.getBoundingClientRect().top - document.body.getBoundingClientRect().top - $(".header").height()
        })
    }
    $("#cpSubmit").click((function(o) {
        var t;
        o.preventDefault(),
        $("#cp")[0].checkValidity() ? (t = $("#cp").val(),
        $.ajax({
            method: "GET",
            url: "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyA5Eg7GzQwLw651eG-oSG1Otp4FEcaCqmg&components=postal_code:" + t
        }).done((function(o) {
            if ("OK" == o.status) {
                var a = o.results[0].geometry.location.lat
                  , e = o.results[0].geometry.location.lng;
                !function(o, t, a) {
                    let e = $("#total-markers").data("markers");
                    var n = t
                      , c = a
                      , i = L.latLng([n, c])
                      , r = [];
                    e.forEach((function(o, t) {
                        var a = Array(o.lat, o.lng)
                          , e = L.latLng(a)
                          , n = i.distanceTo(e)
                          , c = [];
                        c.index = t,
                        c.distancia = n,
                        c.latLng = e,
                        r.push(c)
                    }
                    )),
                    r.sort((function(o, t) {
                        return o.distancia - t.distancia
                    }
                    ));
                    for (var l = "cp=" + o, s = 0; s < 3; s++)
                        l += "&officenear[]=" + r[s].index,
                        l += "&distance[]=" + r[s].distancia;
                    window.location.search = l
                }(t, a, e)
            } else
                alert("No se ha encontrado información para ese código postal")
        }
        )).fail((function() {
            alert("Ha ocurrido un error contactando con el servidor")
        }
        ))) : $("#cp")[0].reportValidity()
    }
    ))
}
)();
