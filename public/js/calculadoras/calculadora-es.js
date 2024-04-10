(()=>{
    let l = [{
        origenes: [1],
        destinos: ["CB"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 2,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: 10,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro e impuestos necesarios."
    }, {
        origenes: [2, 3],
        destinos: ["CB"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 2,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: 11,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro e impuestos necesarios."
    }, {
        origenes: [4],
        destinos: ["CB"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 2,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: 11,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro e impuestos necesarios."
    }, {
        origenes: [1],
        destinos: ["CB"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 24,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro."
    }, {
        origenes: [2, 3],
        destinos: ["CB"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 25,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro."
    }, {
        origenes: [4],
        destinos: ["CB"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 25,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro."
    }, {
        origenes: [1],
        destinos: ["RD"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: null,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 23,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro."
    }, {
        origenes: [2, 3],
        destinos: ["RD"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: null,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 26,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: "A este precio se sumará el costo del seguro."
    }, {
        origenes: [1],
        destinos: ["RD"],
        tipoEnvio: "S",
        calculo: "SOBRE",
        minimo: null,
        maximos: {
            alto: null,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 15,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [2, 3],
        destinos: ["RD"],
        tipoEnvio: "S",
        calculo: "SOBRE",
        minimo: null,
        maximos: {
            alto: null,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: 17,
            z1: null,
            z2: null,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [1],
        destinos: ["VE"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 1,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: null,
            z1: 11,
            z2: 11,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [2, 3],
        destinos: ["VE"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 1,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: null,
            z1: 11,
            z2: 11,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [4],
        destinos: ["VE"],
        tipoEnvio: "A",
        calculo: "PV",
        minimo: 1,
        maximos: {
            alto: 40,
            ancho: 40,
            largo: 50,
            peso: 99999
        },
        tarifas: {
            z0: null,
            z1: 11,
            z2: 11,
            z3: null,
            z4: null
        },
        mensaje: "<strong> A esta tarifa hay que sumar el 5% del valor declarado</strong>"
    }, {
        origenes: [1],
        destinos: ["VE"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: null,
            z1: 19.99,
            z2: 19.99,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [2, 3],
        destinos: ["VE"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: null,
            z1: 19.99,
            z2: 19.99,
            z3: null,
            z4: null
        },
        mensaje: null
    }, {
        origenes: [4],
        destinos: ["VE"],
        tipoEnvio: "M",
        calculo: "PC",
        minimo: 1,
        maximos: {
            alto: 200,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: null,
            z1: 19.99,
            z2: 19.99,
            z3: null,
            z4: null
        },
        mensaje: "<strong> A esta tarifa hay que sumar el 5% del valor declarado</strong>"
    }, {
        origenes: [1],
        destinos: ["VE"],
        tipoEnvio: "S",
        calculo: "SOBRE",
        minimo: null,
        maximos: {
            alto: null,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: null,
            z1: 11,
            z2: 11,
            z3: null
        },
        mensaje: null
    }, {
        origenes: [2, 3],
        destinos: ["VE"],
        tipoEnvio: "S",
        calculo: "SOBRE",
        minimo: null,
        maximos: {
            alto: null,
            ancho: null,
            largo: null,
            peso: null
        },
        tarifas: {
            z0: null,
            z1: 11,
            z2: 11,
            z3: null
        },
        mensaje: null
    }];
    function o(l, o, e, a) {
        return !(isNaN(l) || 0 == l || isNaN(o) || 0 == o || isNaN(e) || 0 == e || isNaN(a) || 0 == a)
    }
    function e(l, o, e, a) {
        Swal.fire({
            title: l,
            text: o,
            icon: e,
            confirmButtonText: a,
            confirmButtonColor: "#25294A"
        })
    }
    $(".select-venezuela").hide(),
    $("#btn-calculadora").click((function(a) {
        a.preventDefault(),
        $(".calculadora-result").removeClass("calculadora-result-show");
        let n = 0;
        n = $("input[name=tipo_envio]:checked", "#calculadora-envio").val();
        let s = parseFloat($("#calculadora-origen").val())
          , i = $("#calculadora-destino").val()
          , r = $("#calculadora-destino_venezuela").val()
          , u = parseFloat($("#alto").val().replace(",", "."))
          , t = parseFloat($("#ancho").val().replace(",", "."))
          , c = parseFloat($("#largo").val().replace(",", "."))
          , m = parseFloat($("#peso").val().replace(",", "."));
        if (isNaN(u) || isNaN(t) || isNaN(c) || isNaN(m))
            return e("ServiPack", "Rellene los campos con valores numéricos", "warning", "Cerrar"),
            !1;
        5 === s ? e("ServiPack", "Para envíos desde otros puntos de España o Europa, póngase en contacto con nosotros", "info", "Cerrar") : void 0 === n ? e("ServiPack", "Seleccione un tipo de envío", "warning", "Cerrar") : function(a, n, s, i, r, u, t, c) {
            var m = 0
              , p = !1;
            const z = l.filter((l=>l.origenes.includes(n) && l.destinos.includes(s) && l.tipoEnvio === a));
            if (z.length <= 0)
                e("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar");
            else {
                ruta = z[0];
                var d = "z0";
                switch ("VE" == s && (d = i),
                ruta.calculo) {
                case "PV":
                    if (!o(r, u, t, c))
                        return e("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    if ("A" == a && "CB" == s & c > 25 && (p = !0),
                    c < ruta.minimo && (c = ruta.minimo),
                    r > ruta.maximos.alto || u > ruta.maximos.ancho || t > ruta.maximos.largo || c > ruta.maximos.peso)
                        return e("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar"),
                        !1;
                    {
                        let l = r * u * t / 6e3;
                        c - parseInt(c) >= .5 && (c = Math.ceil(c)),
                        m = Math.max(l, c) * ruta.tarifas[d]
                    }
                    break;
                case "PC":
                    if (!o(r, u, t, c))
                        return e("ServiPack", "Rellene todos los campos para obtener una tarifa", "warning", "Cerrar"),
                        !1;
                    let l = r * u * t / 28316.6;
                    if (l < 1 && (l = 1),
                    r > ruta.maximos.alto)
                        return e("ServiPack", "Lo sentimos, no es posible realizar un envío con los datos introducidos", "warning", "Cerrar"),
                        !1;
                    m = l * ruta.tarifas[d];
                    break;
                case "SOBRE":
                    m = ruta.tarifas[d]
                }
                var g = m.toFixed(2);
                "00" == g.toString().split(".")[1] && (g = parseFloat(g));
                var v = 'Coste aproximado del envio: <span class="calculadora-result-text-price text-highlight">' + g + "€</span>";
                p && (v += "<p><small>Tu caja no puede pesar más de 25kg, te recomendamos dividirlo o solicitar reempaque en la agencia</small>"),
                null != ruta.mensaje && (v += "<p><small>" + ruta.mensaje + "</small>"),
                $(".calculadora-result-text").html(v),
                $(".calculadora-result").addClass("calculadora-result-show")
            }
        }(n, s, i, r, u, t, c, m)
    }
    )),
    $("#calculadora-destino").change((function() {
        "VE" === $(this).val() ? $(".select-venezuela").show() : $(".select-venezuela").hide()
    }
    )),
    $("input[name=tipo_envio]").click((function() {
        "S" == $(this).val() ? ($(".form-medidas").hide(),
        $(".form-medidas-label").hide()) : ($(".form-medidas").show(),
        $(".form-medidas-label").show())
    }
    ))
}
)();
