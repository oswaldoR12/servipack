angular.module("ContentManagerApp")
	.controller("calendarioController", function($scope,$http,$location,paisesFactory,rutasFactory){

		$(".li-menu").removeClass("active");
		$("#li_calendario").addClass("active");
		$(".a-menu").removeClass("active");
		$("#calendario").addClass("active");

		$scope.titulo_pagina = "Registrar Envios";
		$scope.subtitulo_pagina = "Registro";
		$scope.titulo_registrar = "Registrar";
		$scope.titulo_cons = "Consultar";
		$scope.base_url = $("#base_url").val();
		$scope.titulo_text = "Pulse aquí para ingresar el contenido"
		$scope.activo_img = "inactivo";
		$scope.searchMarcas = []
		$scope.borrar_imagen = []
		$scope.envio = {
						'id': '',
						'tipo_envio': '',
						'fecha_envio' : '',
						'rutas_id' : '',
						
		}

		$scope.consultar_idioma = function(){
			idiomaFactory.asignar_valores("",$scope.base_url)
			idiomaFactory.cargar_idioma(function(data){
				$scope.idioma=data;
				//console.log($scope.idioma);
			});
		}
		///////////////////////////////////////////////////////////////
		

		$scope.seleccione_img_principal = function(){
			$("#modal_img1").modal("show");
		}
		//PARA SELECCIONAR UNA IMAGEN Y MOSTRARLA EN EL CAMPO DE IMG
		$scope.seleccionar_imagen = function(event){
				var imagen = event.target.id;//Para capturar id
				//console.log(imagen);
				var vec = $("#"+imagen).attr("data");
				var vector_data = vec.split("|")
				var id_imagen = vector_data[0];
				var ruta = vector_data[1];

				$scope.borrar_imagen.push(id_imagen);
				$scope.activo_img = "activo"
				$scope.envio.id_imagen = id_imagen
				$scope.envio.imagen = ruta
				//alert($scope.envio.id_imagen);
				//--
				$("#modal_img1").modal("hide");
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.limpiar_cajas = function(){
			$scope.envio = {
				'id': '',
				'tipo_envio': '',
				'fecha_envio' : '',
}

			$scope.activo_img = "inactivo";
			$("#div_descripcion").html($scope.titulo_text);
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.registrarEvento = function(){
			console.log($scope.envio)
			uploader_reg("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
			if($scope.validar_form()==true){
				//Para guardar
				if(($scope.envio.id!="")&&($scope.envio.id!=undefined)){
					 $scope.modificar_colores();
				}else{
					 $scope.insertar_colores();
				}

			}
			//desbloquear_pantalla("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
								
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.validar_form = function(){
			console.log($scope.envio)
			if($scope.envio.rutas_id==""){
				mostrar_notificacion("Campos no validos","Debe seleccionar una ruta","warning");
				return false;
			}else if(($scope.envio.fecha_envio=="")||($scope.envio.fecha_envio=="")){
				mostrar_notificacion("Campos no validos","Debe seleccionar una fecha","warning");
				return false;
			}else if($scope.envio.tipo_envio==""){
				mostrar_notificacion("Campos no validos","Debe seleccionar un tipo de envio","warning");
				return false;
			}//else if(($scope.envio.id_imagen=="NULL")||($scope.envio.id_imagen=="")){
			// 	mostrar_notificacion("Campos no validos","Debe seleccionar la imagen","warning");
			// 	return false;
			// }
			else{
				return true;
			}
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.insertar_colores = function(){

			// Obtén la fecha del objeto $scope.envio.fecha_envio
			var fechaEnvio = new Date($scope.envio.fecha_envio);

			// Obtiene día, mes y año
			var dia = fechaEnvio.getDate();
			var mes = fechaEnvio.getMonth() + 1; // Nota: Se suma 1 porque los meses son indexados desde 0
			var anual = fechaEnvio.getFullYear();
			$http.post($scope.base_url+"/cms/calendario/guardar",
			{
				'id' 	     	: $scope.envio.id,
				'tipo_envio'  	: $scope.envio.tipo_envio,
				'fecha_envio'	: $scope.envio.fecha_envio,
				'rutas_id'		: $scope.envio.rutas_id.rutas_id,
				'dia'			: dia,
				'mes'			: mes,
				'anual'			: anual,
			}).success(function(data, estatus, headers, config){
				$scope.mensajes  = data;
				console.log(data)
				if($scope.mensajes.mensaje == "registro_procesado"){
					mostrar_notificacion("Mensaje","El registro fue realizado de manera exitosa","info");
					$scope.limpiar_cajas();

				}else if($scope.mensajes.mensaje == "existe"){
					mostrar_notificacion("Mensaje","Ya existe ese color","warning");
				}
				else{
					mostrar_notificacion("Mensaje","Ocurrío un error inesperado","warning");
				}

			}).error(function(data,estatus){
				console.log(data);
			});
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.consultarColorIndividual = function(){
			uploader_reg("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
			coloresFactory.asignar_valores("",$scope.id_color,$scope.base_url)
			coloresFactory.cargar_colores(function(data){
				$scope.envio=data[0];
				//console.log(data[0]);
				$("#div_descripcion").html($scope.envio.descripcion)
				$scope.borrar_imagen.push($scope.envio.id_imagen);
				$scope.activo_img = "activo"
				$scope.envio.imagen = $scope.envio.ruta
				$scope.titulo_pagina = "Modificar color";
				$scope.subtitulo_pagina  = "Modificar color";
				$scope.titulo_registrar = "Modificar";
				setTimeout(function(){
					$('#idioma > option[value="'+$scope.envio.id_idioma+'"]').prop('selected', true);
				},300);
				$("#idioma").prop('disabled', true);
			});
			desbloquear_pantalla("#div_mensaje","#btn-nuevo,#btn-limpiar,#btn-registrar,#btn-consultar");
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.modificar_colores = function(){
			$http.post($scope.base_url+"/Colores/modificarColores",
			{
                'id' 	     : $scope.envio.id,
				'id_idioma'  : $scope.envio.id_idioma.id,
				'descripcion': $scope.envio.descripcion,
			}).success(function(data, estatus, headers, config){
				$scope.mensajes  = data;
				if($scope.mensajes.mensaje == "modificacion_procesada"){
					mostrar_notificacion("Mensaje","El registro fue actualizado de manera exitosa","info");
					$scope.limpiar_cajas();
				}else if($scope.mensajes.mensaje == "existe"){
					mostrar_notificacion("Mensaje","Ya existe ese color","warning");
				}
				else{
					mostrar_notificacion("Mensaje","Ocurrío un error inesperado","warning");
				}
				$mensajes["mensaje"] = "no_registro";

			}).error(function(data,estatus){
				//console.log(data);
			});
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$scope.consultar_pais = function(){
			paisesFactory.asignar_valores("","",$scope.base_url)
			paisesFactory.cargar_paises(function(data){
				$scope.paises=data;


			});
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.consultar_rutas = function(){
			rutasFactory.asignar_valores("","",$scope.base_url)
			rutasFactory.cargar_rutas(function(data){
				$scope.rutas=data;
			});
		}



		
		$scope.consultar_pais();
		$scope.consultar_rutas();


	})
