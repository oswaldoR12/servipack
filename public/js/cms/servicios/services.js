angular.module("ContentManagerApp")
//---------------------------------------------------------------------------------------
//--Bloque de servicios
//--Servicio para cargar imagenes...
.service('upload', ["$http", "$q", function ($http, $q)
{
	this.uploadFile = function(file, categoria,nombre_archivo,base_url)
	{
		var deferred = $q.defer();
		var formData = new FormData();
		formData.append("categoria", categoria);
		formData.append("file", file);
		formData.append("nombre_archivo",nombre_archivo);
		return $http.post(base_url+"GaleriaMultimedia/upload", formData, {
			headers: {
				"Content-type": undefined
			},
			transformRequest: angular.identity
		})
		.success(function(res)
		{
			deferred.resolve(res);
		})
		.error(function(msg, code)
		{
			deferred.reject(msg);
		})
		return deferred.promise;
	},
	this.uploadFileFolleto = function(file, id_negocio,nombre_archivo)
	{
		var deferred = $q.defer();
		var formData = new FormData();

		formData.append("id_negocio", id_negocio);
		formData.append("file", file);
		/*formData.append("categoria", categoria);
		formData.append("file", file);*/
		formData.append("nombre_archivo",nombre_archivo);
		return $http.post("./controladores/archivosController.php", formData, {
			headers: {
				"Content-type": undefined
			},
			transformRequest: angular.identity
		})
		.success(function(res)
		{
			deferred.resolve(res);
		})
		.error(function(msg, code)
		{
			deferred.reject(msg);
		})
		return deferred.promise;
	},
	this.uploadFileBlog = function(file, id_blog,nombre_archivo)
	{
		var deferred = $q.defer();
		var formData = new FormData();

		formData.append("id_blog", id_blog);
		formData.append("file", file);
		/*formData.append("categoria", categoria);
		formData.append("file", file);*/
		formData.append("nombre_archivo",nombre_archivo);
		return $http.post("./controladores/archivosBlogController.php", formData, {
			headers: {
				"Content-type": undefined
			},
			transformRequest: angular.identity
		})
		.success(function(res)
		{
			deferred.resolve(res);
		})
		.error(function(msg, code)
		{
			deferred.reject(msg);
		})
		return deferred.promise;
	}
}])

//--Bloque de factorias//--Bloque de factorias
.factory("calendarioFactory", ['$http', function($http) {
    var id_idioma = "";
    var base_url = "";

    return {
        asignar_valores: function(valor_pais,valor_idioma, url) {
			
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
        cargar_calendario: function(callback) {
			
            $http.post("/get/calendario", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
            // $http.post(base_url + "/get/slider", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
        }
    };
}]).factory("paisesFactory", ['$http', function($http) {
    var id_idioma = "";
    var base_url = "";

    return {
        asignar_valores: function(valor_pais,valor_idioma, url) {
			
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
        cargar_paises: function(callback) {
			
            $http.post("/get/paises", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
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
			
            $http.post("/get/rutas", { id_idioma: id_idioma, rutas_id: rutas_id, }).success(callback);
            // $http.post(base_url + "/get/slider", { id_idioma: id_idioma, id_pais: id_pais, }).success(callback);
        }
    };
}])
.service('serverDataMensajes',[function(){
	var puente = [];
	this.puenteData = function(arreglo){
		puente = arreglo;
		return puente;
	}
	this.obtener_arreglo = function(){
		return puente;
	}
	this.limpiar_arreglo_servicio = function (){
		puente = [];
		return puente;
	}
}]);

