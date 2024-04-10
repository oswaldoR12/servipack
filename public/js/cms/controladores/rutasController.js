angular.module("ContentManagerApp")
	.controller("rutasController", function($scope,$http,$location,paisesFactory,rutasFactory){

		$(".li-menu").removeClass("active");
		$("#li_rutas").addClass("active");
		$(".a-menu").removeClass("active");
		$("#rutas").addClass("active");

		$scope.ruta_id = '';

		$scope.titulo_pagina = "Registrar Rutas";
		$scope.subtitulo_pagina = "Registro";
		$scope.titulo_registrar = "Registrar";
		$scope.titulo_cons = "Consultar";
		$scope.base_url = $("#base_url").val();
		$scope.titulo_text = "Pulse aquí para ingresar el contenido"
		$scope.activo_img = "inactivo";
		$scope.searchMarcas = []
		$scope.borrar_imagen = []
		$scope.ruta = {
						'rutas_id': '',
						'pais_origen': '',
						'pais_destino' : '',
						'ruta_inversa' : '',
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.limpiar_cajas = function(){
			$scope.ruta = {
				'rutas_id': '',
				'pais_origen': '',
				'pais_destino' : '',
				'ruta_inversa' : '',
			}

		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.registrarRuta = function(){
			// uploader_reg("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
			if($scope.validar_form()==true){
				//Para guardar
				if(($scope.ruta.rutas_id!="")&&($scope.ruta.rutas_id!=undefined)){
					$scope.modificar_rutas();
				}else{
					$scope.insertar_rutas();
				}

			}
			//desbloquear_pantalla("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
								
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.validar_form = function(){
			
			if($scope.ruta.pais_origen==""){
				mostrar_notificacion("Campos no validos","Debe seleccionar un origen","warning");
				return false;
			}else if($scope.ruta.pais_destino==""){
				mostrar_notificacion("Campos no validos","Debe seleccionar un destino","warning");
				return false;
			}else{
				return true;
			}
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.insertar_rutas = function(){

			// Obtén la fecha del objeto $scope.ruta.fecha_ruta
			var fecharuta = new Date($scope.ruta.fecha_ruta);

			// Obtiene día, mes y año
			var dia = fecharuta.getDate();
			var mes = fecharuta.getMonth() + 1; // Nota: Se suma 1 porque los meses son indexados desde 0
			var anual = fecharuta.getFullYear();

			
			$http.post($scope.base_url+"/cms/ruta/guardar",
			{
				'pais_origen'	: $scope.ruta.pais_origen.pais_id,
				'pais_destino' 	: $scope.ruta.pais_destino.pais_id,
				'ruta_inversa' 	: $scope.ruta.ruta_inversa,
			}).success(function(data, estatus, headers, config){
				$scope.mensajes  = data;
				if($scope.mensajes.mensaje == "registro_procesado"){
					mostrar_notificacion("Mensaje","El registro fue realizado de manera exitosa","info");
					$scope.limpiar_cajas();

				}else if($scope.mensajes.mensaje == "existe"){
					mostrar_notificacion("Mensaje","Ya existe esa ruta","warning");
				
				}else if($scope.mensajes.mensaje == "pais_iguales"){
					mostrar_notificacion("Campos no validos","Debe seleccionar paies distintos","warning");
				}
				else{
					mostrar_notificacion("Mensaje","Ocurrío un error inesperado","warning");
				}
				

			}).error(function(data,estatus){
				console.log(data);
			});
		}
		///////////////////////////////////////pais_destino////////////////////////////////////////////////////////////////
		$scope.consultarRutaIndividual = function(){
			uploader_reg("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
			rutasFactory.asignar_valores("",$scope.ruta_id,$scope.base_url)
			rutasFactory.cargar_rutas(function(data){
				$scope.ruta=data[0];
				
				// $scope.ruta = {
				// 	'id': '',
				// 	'pais_origen': '',
				// 	'pais_destino' : '',
				// 	'ruta_inversa' : '',
				// }

				 $scope.titulo_pagina = "Modificar ruta";
				 $scope.subtitulo_pagina  = "Modificar ruta";
				 $scope.titulo_registrar = "Modificar";
				
				 setTimeout(function(){
				 	$('#pais_origen > option[value="'+$scope.ruta.pais_origen+'"]').prop('selected', true);
					$('#pais_destino > option[value="'+$scope.ruta.pais_destino+'"]').prop('selected', true);

				 },300);
				
				 $("#pais_origen").prop('disabled', true);
				 $("#pais_destino").prop('disabled', true);
			});
			desbloquear_pantalla("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.modificar_rutas = function(){
			console.log($scope.ruta)
			console.log("$scope.ruta")
			
			 $http.post($scope.base_url+"/cms/ruta/modificar",
			 {
				'rutas_id' 	     	: $scope.ruta.rutas_id,
			 	'pais_origen'	: $scope.ruta.pais_origen,
				'pais_destino' 	: $scope.ruta.pais_destino,
				'ruta_inversa' 	: $scope.ruta.ruta_inversa,
				
			 }).success(function(data, estatus, headers, config){
			 	$scope.mensajes  = data;
			 	if($scope.mensajes.mensaje == "modificacion_procesada"){
			 		mostrar_notificacion("Mensaje","El registro fue actualizado de manera exitosa","info");
			 	}else if($scope.mensajes.mensaje == "existe"){
			 		mostrar_notificacion("Mensaje","Ya existe ese color","warning");
			 	}
			 	else{
			 		mostrar_notificacion("Mensaje","Ocurrío un error inesperado","warning");
			 	}
			 	$mensajes["mensaje"] = "no_registro";

			 }).error(function(data,estatus){
			 	console.log(data);
			 });
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.consultar_pais = function(){
			paisesFactory.asignar_valores("","",$scope.base_url)
			paisesFactory.cargar_paises(function(data){
				$scope.paises=data;

			});
		}
		
		$scope.consultar_pais();

		$scope.ruta_id = $("#ruta_id").val();
        if($scope.ruta_id){
            $scope.consultarRutaIndividual();

		}
	})
