(()=>{
    let a = [{
        origen: 1,
        tipoEnvio: "A",
        calculo: "PV",
        unidadMinima: 1,
        tarifas: {
            z1: 43e3,
            z2: 43e3
        }
    }, {
        origen: 1,
        tipoEnvio: "T",
        calculo: "PC",
        unidadMinima: 1,
        tarifas: {
            z1: 169e3,
            z2: 169e3
        }
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
        let l = parseInt($("#calculadora-origen").val())
          , t = ($("#calculadora-destino").val(),
        parseFloat($("#alto").val().replace(",", ".")))
          , s = parseFloat($("#ancho").val().replace(",", "."))
          , n = parseFloat($("#largo").val().replace(",", "."))
          , c = parseFloat($("#peso").val().replace(",", "."));
        if (isNaN(t) || isNaN(s) || isNaN(n) || isNaN(c))
            return r("ServiPack", "Rellene los campos con valores numéricos", "warning", "Cerrar"),
            !1;
        void 0 === i ? r("ServiPack", "Seleccione un tipo de envío", "warning", "Cerrar") : function(o, i, l, t, s, n, c) {
            var u = 0;
            const p = a.filter((a=>a.origen === i && a.tipoEnvio === o));
            if (p.length <= 0)
                r("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar");
            else {
                ruta = p[0];
                var d = ruta.unidadMinima;
                switch (ruta.calculo) {
                case "PV":
                    if (!e(t, s, n, c))
                        return r("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let a = t * s * n / 6e3;
                    c < ruta.unidadMinima && (c = d),
                    prePrecio = Math.max(a, c),
                    u = ruta.tarifas.z1 + (prePrecio - 1) * ruta.tarifas.z2;
                    break;
                case "PC":
                    if (!e(t, s, n, c))
                        return r("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let o = t * s * n / 28316.8;
                    o < 1 && (o = 1),
                    u = o * ruta.tarifas.z1
                }
                var v = u.toFixed(2);
                "00" == v.toString().split(".")[1] && (v = parseFloat(v));
                var f = 'Coste aproximado del envio: <span class="calculadora-result-text-price text-highlight">' + v + "COP</span>";
                $(".calculadora-result-text").html(f),
                $(".calculadora-result").addClass("calculadora-result-show")
            }
        }(i, l, 0, t, s, n, c)
    }
    ))
}
)();
