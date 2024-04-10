angular.module("webExpress")
//---------------------------------------------------------------------------------------
//--Bloque de servicios

//--Bloque de factorias
.factory("sliderFactory", ['$http', function($http) {
    var id_idioma = "";
    var base_url = "";

    return {
        asignar_valores: function(valor_pais,valor_idioma, url) {
			console.log("asdas")
			console.log(url)
            if (valor_pais !== "") {
                id_pais = valor_pais;
            } else {
                id_pais = "";
            }
			if (valor_idioma !== "") {
                id_idioma = valor_idioma;
            } else {
                id_idioma = "";
            }
            //---
            if (url !== "") {
                base_url = url;
            } else {
                base_url = "";
            }
			console.log([base_url,id_idioma])
        },
        cargar_slider: function(callback) {
			
            $http.post("/get/slider", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
            // $http.post(base_url + "/get/slider", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
        }
    };
}]).factory("rutasFactory", ['$http', function($http) {
    var id_idioma = "";
    var base_url = "";

    return {
        asignar_valores: function(valor_idioma,valor_ruta, url) {
            if (valor_ruta !== "") {
                rutas_id = valor_ruta;
            } else {
                rutas_id = "";
            }
			if (valor_idioma !== "") {
                id_idioma = valor_idioma;
            } else {
                id_idioma = "";
            }
            //---
            if (url !== "") {
                base_url = url;
            } else {
                base_url = "";
            }
			console.log([base_url,id_idioma])
        },
        cargar_rutas: function(callback) {
			
            $http.post("/get/rutas/web", { id_idioma: id_idioma, rutas_id: rutas_id, }).success(callback);
            // $http.post(base_url + "/get/slider", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
        }
    };
}]);
