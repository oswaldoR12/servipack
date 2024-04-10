angular.module("ContentManagerApp")
	.controller("calendarioConsultasController", function($scope,$http,$location,calendarioFactory){
        $(".li-menu").removeClass("active");
		$("#li_calendario").addClass("active");
		$(".a-menu").removeClass("active");
		$("#calendario").addClass("active");

		$scope.titulo_pagina = "Consulta de calendario";
		$scope.activo_img = "inactivo";

		$scope.color = {
						'id': '',
						'fecha': '',
						'pais_id' : '',
						'tipo' : '',
		}
		$scope.id_color = "";
		$scope.categorias_menu = "2";
		$scope.id_marca = "";

		$scope.base_url_all=$location.absUrl()
		$scope.base_url= $location.protocol() + '://' + $location.host() + ($location.port() ? ':' + $location.port() : '')


		$scope.iniciar_datatable = function(){
			//--Iniciar DataTable

			var table = $('#myTable').DataTable();
			table.destroy();
			$('#myTable').DataTable({
			    language: {
			        "decimal": "",
			        "emptyTable": "No hay información",
			        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
			        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
			        "infoPostFix": "",
			        "thousands": ",",
			        "lengthMenu": "Mostrar _MENU_ Entradas",
			        "loadingRecords": "Cargando...",
			        "processing": "Procesando...",
			        "search": "Buscar:",
			        "zeroRecords": "Sin resultados encontrados",
			        "paginate": {
			            "first": "Primero",
			            "last": "Ultimo",
			            "next": "Siguiente",
			            "previous": "Anterior"
			        }
			    },
			    "order": [[ 0, "asc" ]]

			});
			//console.log($scope.calendario);
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.consultar_calendario = function(){
			calendarioFactory.asignar_valores("","",$scope.base_url)
			calendarioFactory.cargar_calendario(function(data){
				$scope.calendario=data;
				setTimeout(function(){
					$scope.iniciar_datatable();
				},500);

			});
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.ver_calendario = function(valor){
			var id = $("#ver"+valor).attr("data");
			$scope.id_color = id;
			//console.log($scope.id_color);
			$("#id_color").val($scope.id_color)
			let form = document.getElementById('formConsultacalendario');
			form.action = "./colorVer";
			form.submit();
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.activar_registro = function(event){
			$scope.id_seleccionado_calendario = []
			$scope.estatus_seleccionado_calendario = []
			var caja = event.currentTarget.id;
			var atributos = $("#"+caja).attr("data");
			var arreglo_atributos = atributos.split("|");
			$scope.id_seleccionado_calendario = arreglo_atributos[0];
			$scope.estatus_seleccionado_calendario = arreglo_atributos[1];

			
			$("#cabecera_mensaje").text("Información:");
			//--
			if ($scope.estatus_seleccionado_calendario==0){
				mensaje = "Desea modificar el estatus de este registro a publicado? ";
				$scope.estatus_seleccionado_calendario=1;
			}else{
				mensaje = "Desea modificar el estatus de este registro a inactivo? ";
				$scope.estatus_seleccionado_calendario=0
			}
			//($scope.estatus_seleccionado_categorias==1) ? $scope.estatus_seleccionado_categorias=0:$scope.estatus_seleccionado_categorias=1;

			//--
			$scope.modificar_estatus("activar_inactivar",mensaje)
		}
		//----------------------------------------------------------------
		$scope.modificar_estatus = function(opcion,mensaje){
			 Swal.fire({
				  title: 'Esta seguro?',
				  text: mensaje,
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Si!',
				  cancelButtonText: 'No',
				}).then((result) => {
					  if (result.value) {
						$scope.accion_estatus()
					  }
				})
		
		}
		//----------------------------------------------------------------
		$scope.accion_estatus = function(){

			console.log($scope.id_seleccionado_calendario)
			console.log($scope.estatus_seleccionado_calendario)
			$http.post($scope.base_url+"/calendario/eliminar",
			{
				 'id':$scope.id_seleccionado_calendario,
				 'estatus':$scope.estatus_seleccionado_calendario,

			}).success(function(data, estatus, headers, config){
				$scope.mensajes  = data;
				if($scope.mensajes.mensaje == "registro_eliminado"){
					// mostrar_notificacion("Mensaje","El proceso fue ejecutado","success");
					// mostrar_notificacion("Mensaje","Ya existe ese color","warning");
					
					Swal.fire(
						  'Realizado!',
						  'El proceso fue ejecutado.',
						  'success'
					).then((result) => {
						var table = $('#myTable').DataTable();
						table.destroy();
						$scope.consultar_calendario();

					});
				}else{
					Swal.fire(
						  'No realizado!',
						  'El proceso no pudo ser ejecutado.',
						  'warning'
					)
				}
			}).error(function(data,estatus){
				console.log(data);
			});
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.eliminar_registro = function(event){
			$scope.id_seleccionado_calendario = []
			$scope.estatus_seleccionado_calendario = []
			var caja = event.currentTarget.id;
			//alert(caja);
			var atributos = $("#"+caja).attr("data");
			var arreglo_atributos = atributos.split("|");
			$scope.id_seleccionado_calendario = arreglo_atributos[0];
			$scope.estatus_seleccionado_calendario = arreglo_atributos[1];
			//console.log($scope.estatus_seleccionado_calendario);
			$("#cabecera_mensaje").text("Información:");
			mensaje = "Desea eliminar este registro? ";
			$scope.modificar_estatus("eliminar",mensaje)
		}
		//////////////////////////////////////////////////////////////////////////////////////
		
		$scope.consultar_calendario();
	})
