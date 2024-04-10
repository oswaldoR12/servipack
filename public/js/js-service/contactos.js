(()=>{
    let a = $("#instalaciones-data").data("pais")
      , e = $("#instalaciones-data").data("instalaciones");
    var n;
    function i(n) {
        let i = '<a href="tel:' + e[a][n].telefono + '" target="_blank">' + e[a][n].telefono + "</a>"
          , t = '<a href="mailto:' + e[a][n].email + '">' + e[a][n].email + "</a>";
        $("#info-response-ciudad").html(e[a][n].ciudad),
        $("#info-response-direccion").html(e[a][n].direccion),
        $("#info-response-telefono").html(i),
        $("#info-response-email").html(t),
        $("#instalacion").val(n)
    }
    n = e[a],
    $.each(n, (function(a, e) {
        $("#agencia").append('<option value="' + a + '">' + e.name + "</option>")
    }
    )),
    i(Object.entries(n)[0][0]),
    $("#agencia").change((function() {
        i($(this).val())
    }
    ))
}
)();
