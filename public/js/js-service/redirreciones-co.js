(()=>{
        var a = window.location.href
          , o = {
            "#/Dudas": "faqs",
            "#/Empresa": "corporativos-y-franquiciados",
            "#/Contacto": "contacto",
            "#/Coronavirus": "contacto",
            "#/PoliticaCookies": "politica-de-cookies",
            "#/PoliticaPrivacidad": "politica-de-privacidad",
            "#/NotaLegal": "aviso-legal",
            "/index.html": "/",
            "index.html": "/"
        };
        for (var i in o)
            if (a.search(i) > 0) {
                var c = a.replace(i, o[i]);
                window.location.replace(c)
            }
    }
    )();
    