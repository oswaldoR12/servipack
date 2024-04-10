(()=>{
    let a = [{
        origen: 1,
        tipoEnvio: "A",
        entrega: "CAS",
        calculo: "PV",
        precioMinimo: 25,
        tarifas: {
            z1: 4.49,
            z2: 4.99,
            z3: 5.49,
            z4: 5.99
        },
        mensaje: null
    }, {
        origen: 1,
        tipoEnvio: "M",
        entrega: "CAS",
        calculo: "PC",
        precioMinimo: 30,
        tarifas: {
            z1: 26.99,
            z2: 27.99,
            z3: 28.99,
            z4: 29.99
        },
        mensaje: null
    }, {
        origen: 1,
        tipoEnvio: "A",
        entrega: "OFI",
        calculo: "PV",
        precioMinimo: 25,
        tarifas: {
            z1: 3.99,
            z2: 4.49,
            z3: 4.99,
            z4: 5.49
        },
        mensaje: "Esta tarifa solo aplica para carga que se entregue en mano en nuestras oficinas lista para enviar."
    }, {
        origen: 1,
        tipoEnvio: "M",
        entrega: "OFI",
        calculo: "PC",
        precioMinimo: 30,
        tarifas: {
            z1: 25.99,
            z2: 26.99,
            z3: 27.99,
            z4: 28.99
        },
        mensaje: "Esta tarifa solo aplica para carga que se entregue en mano en nuestras oficinas lista para enviar."
    }, {
        origen: 2,
        tipoEnvio: "A",
        entrega: 0,
        calculo: "PV",
        precioMinimo: 30,
        tarifas: {
            z1: 4.99,
            z2: 5.49,
            z3: 5.99
        },
        mensaje: "El costo del servicio <i>pick up</i> es adicional a la tarifa reflejada."
    }, {
        origen: 2,
        tipoEnvio: "M",
        entrega: 0,
        calculo: "PC",
        precioMinimo: 20,
        tarifas: {
            z1: 18.99,
            z2: 19.99,
            z3: 20.99
        },
        mensaje: "El costo del servicio <i>pick up</i> es adicional a la tarifa reflejada."
    }];
    function e(a, e, i, o) {
        return !(isNaN(a) || 0 == a || isNaN(e) || 0 == e || isNaN(i) || 0 == i || isNaN(o) || 0 == o)
    }
    function i(a, e, i, o) {
        Swal.fire({
            title: a,
            text: e,
            icon: i,
            confirmButtonText: o,
            confirmButtonColor: "#25294A"
        })
    }
    $("#btn-calculadora").click((function(o) {
        o.preventDefault(),
        $(".calculadora-result").removeClass("calculadora-result-show");
        let r = 0;
        r = $("input[name=tipo_envio]:checked", "#calculadora-envio").val();
        let n = parseInt($("#calculadora-origen").val())
          , l = $("#calculadora-destino").val()
          , s = 1 == n ? $("#opciones-miami").val() : 0
          , t = parseFloat($("#alto").val().replace(",", "."))
          , c = parseFloat($("#ancho").val().replace(",", "."))
          , p = parseFloat($("#largo").val().replace(",", "."))
          , u = parseFloat($("#peso").val().replace(",", "."));
        if (isNaN(t) || isNaN(c) || isNaN(p) || isNaN(u))
            return i("ServiPack", "Rellene los campos con valores numéricos", "warning", "Cerrar"),
            !1;
        void 0 === r ? i("ServiPack", "Seleccione un tipo de envío", "warning", "Cerrar") : function(o, r, n, l, s, t, c, p) {
            var u = 0;
            const v = a.filter((a=>a.origen === r && a.tipoEnvio === o && a.entrega === l));
            if (v.length <= 0)
                i("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar");
            else {
                ruta = v[0];
                var m = ruta.tarifas[n]
                  , d = ruta.precioMinimo;
                switch (ruta.calculo) {
                case "PV":
                    if (!e(s, t, c, p))
                        return i("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let a = s * t * c / 166;
                    (u = Math.max(a, p) * m) < d && (u = d);
                    break;
                case "PC":
                    if (!e(s, t, c, p))
                        return i("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let o = s * t * c / 1728;
                    o < 1 && (o = 1),
                    (u = o * m) < d && (u = d)
                }
                var f = u.toFixed(2);
                "00" == f.toString().split(".")[1] && (f = parseFloat(f));
                var g = 'Coste aproximado del envio: <span class="calculadora-result-text-price text-highlight">$' + f + "</span>";
                null != ruta.mensaje && (g += "<p><small>" + ruta.mensaje + "</small>"),
                $(".calculadora-result-text").html(g),
                $(".calculadora-result").addClass("calculadora-result-show")
            }
        }(r, n, l, s, t, c, p, u)
    }
    )),
    $("#calculadora-origen").change((function() {
        1 == $(this).val() ? $(".wrapper-opciones-miami").show() : $(".wrapper-opciones-miami").hide()
    }
    ))
}
)();
