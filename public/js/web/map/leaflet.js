(()=>{
    function t(t, e) {
        if (t.hasOwnProperty("lat") && t.lat.length > 0 && t.hasOwnProperty("lng") && t.lng.length > 0) {
            var a = t.lat
              , n = t.lng
              , r = function(t) {
                var e = "<strong>" + t.nombre + "</strong>";
                return t.hasOwnProperty("direccion") && null !== t.direccion && t.direccion.length > 0 && (e = e.concat("<br>" + t.direccion)),
                t.hasOwnProperty("como_llegar") && null !== t.como_llegar && t.como_llegar.length > 0 && (e = e.concat('<br><a href="' + t.como_llegar + '" target="_blank">¿Cómo llegar?</a>')),
                e
            }(t);
            if (t.hasOwnProperty("tipo") && t.tipo.length > 0)
                if ("area" === t.tipo)
                    L.circle([a, n], {
                        color: "red",
                        fillColor: "#f03",
                        fillOpacity: .5,
                        radius: 500
                    }).addTo(e).bindPopup(r);
                else {
                    var o = {};
                    if (t.hasOwnProperty("icon") && t.icon.length > 0 && t.hasOwnProperty("iconWidth") && t.iconWidth > 0 && t.hasOwnProperty("iconHeight") && t.iconHeight > 0) {
                        var i = L.icon({
                            iconUrl: t.icon,
                            iconSize: [t.iconWidth, t.iconHeight],
                            iconAnchor: [parseInt(t.iconWidth / 2), t.iconHeight],
                            popupAnchor: [0, -1 * t.iconWidth]
                        });
                        o.icon = i
                    }
                    L.marker([a, n], o).addTo(e).bindPopup(r)
                }
            else
                L.marker([a, n]).addTo(e).bindPopup(r)
        }
    }
    $((function() {
        $.each($(".leaflet"), (function(e, a) {
            var n = $(a);
            let r = n.data("zoom");
            null == r && (r = 14);
            var o = n.data("markers")
              , i = Object.keys(o).length;
            if (i > 0) {
                var l = L.map(n.attr("id"), {
                    scrollWheelZoom: !1
                }).setView([43.4621324, -3.81007], r);
                let e = {
                    default: {
                        url: "https://stamen-tiles.a.ssl.fastly.net/terrain/{z}/{x}/{y}.jpg",
                        data: {
                            id: "",
                            token: null,
                            attribution: 'Map tiles by <a href="http://stamen.com" target="_blank">Stamen Design</a>, under <a href="http://creativecommons.org/licenses/by/3.0" target="_blank">CC BY 3.0</a>. Data by <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a>, under <a href="http://www.openstreetmap.org/copyright" target="_blank">ODbL</a>.',
                            zoom: r
                        }
                    },
                    openstreetmap: {
                        url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                        data: {
                            maxZoom: 19,
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }
                    }
                }[n.data("provider") ?? "default"];
                if (L.tileLayer(e.url, e.data).addTo(l),
                1 == i) {
                    var c = o[0];
                    t(c, l),
                    l.panTo(new L.LatLng(c.lat,c.lng))
                } else {
                    var p = new Array;
                    $.each(o, (function(e, a) {
                        p.push([a.lat, a.lng]),
                        t(a, l)
                    }
                    ));
                    var h = new L.LatLngBounds(p);
                    l.fitBounds(h, {
                        padding: [50, 50]
                    })
                }
            }
        }
        ))
    }
    ))
}
)();
