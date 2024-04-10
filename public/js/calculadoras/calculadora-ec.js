(()=>{
    let a = [{
        origen: 1,
        destino: 1,
        tipoEnvio: "A",
        calculo: "PV",
        unidadMinima: 1,
        tarifas: {
            z1: 12.5
        },
        mensaje: null
    }, {
        origen: 1,
        destino: 1,
        tipoEnvio: "M",
        calculo: "PC",
        unidadMinima: 1,
        tarifas: {
            z1: 49.5
        },
        mensaje: null
    }, {
        origen: 1,
        destino: 2,
        tipoEnvio: "A",
        calculo: "PV",
        unidadMinima: 1,
        tarifas: {
            z1: 13
        },
        mensaje: "Todos los paquetes pagan un recargo fijo de 4$ por concepto de guía."
    }, {
        origen: 1,
        destino: 2,
        tipoEnvio: "S",
        calculo: "SOBRE",
        unidadMinima: 1,
        tarifas: {
            z1: 19.99
        },
        mensaje: null
    }];
    function e(a, e, r, o) {
        return !(isNaN(a) || 0 == a || isNaN(e) || 0 == e || isNaN(r) || 0 == r || isNaN(o) || 0 == o)
    }
    function r(a, e, r, o) {
        Swal.fire({
            title: a,
            text: e,
            icon: r,
            confirmButtonText: o,
            confirmButtonColor: "#25294A"
        })
    }
    $("#btn-calculadora").click((function(o) {
        o.preventDefault(),
        $(".calculadora-result").removeClass("calculadora-result-show");
        let i = 0;
        i = $("input[name=tipo_envio]:checked", "#calculadora-envio").val();
        let n = parseInt($("#calculadora-origen").val())
          , s = $("#calculadora-destino").val()
          , l = parseFloat($("#alto").val().replace(",", "."))
          , t = parseFloat($("#ancho").val().replace(",", "."))
          , c = parseFloat($("#largo").val().replace(",", "."))
          , u = parseFloat($("#peso").val().replace(",", "."));
        if (isNaN(l) || isNaN(t) || isNaN(c) || isNaN(u))
            return r("ServiPack", "Rellene los campos con valores numéricos", "warning", "Cerrar"),
            !1;
        void 0 === i ? r("ServiPack", "Seleccione un tipo de envío", "warning", "Cerrar") : function(o, i, n, s, l, t, c) {
            var u = 0;
            const p = a.filter((a=>a.origen === i && a.destino == n && a.tipoEnvio === o));
            if (p.length <= 0)
                r("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar");
            else {
                ruta = p[0];
                var d = ruta.unidadMinima;
                switch (ruta.calculo) {
                case "PV":
                    if (!e(s, l, t, c))
                        return r("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let a = s * l * t / 5e3;
                    c < ruta.unidadMinima && (c = d),
                    u = Math.max(a, c) * ruta.tarifas.z1;
                    break;
                case "PC":
                    if (!e(s, l, t, c))
                        return r("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let o = s * l * t / 28316.8;
                    o < 1 && (o = 1),
                    u = o * ruta.tarifas.z1;
                    break;
                case "SOBRE":
                    if (!e(s, l, t, c))
                        return r("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    if (c > .5)
                        return r("ServiPack", "Él peso máximo para los sobres es de 0.5kg", "warning", "Cerrar"),
                        !1;
                    u = ruta.tarifas.z1
                }
                var v = u.toFixed(2);
                "00" == v.toString().split(".")[1] && (v = parseFloat(v));
                var m = 'Coste aproximado del envio: <span class="calculadora-result-text-price text-highlight">$' + v + "</span>";
                null != ruta.mensaje && (m += "<p><small>" + ruta.mensaje + "</small>"),
                $(".calculadora-result-text").html(m),
                $(".calculadora-result").addClass("calculadora-result-show")
            }
        }(i, n, s, l, t, c, u)
    }
    ))
}
)();
