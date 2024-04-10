angular.module("ContentManagerApp")
	.controller("rutasConsultasController", function($scope,$window ,$http,$location,rutasFactory){
		$(".li-menu").removeClass("active");
		$("#li_rutas").addClass("active");
		$(".a-menu").removeClass("active");
		$("#rutas").addClass("active");

		$scope.titulo_pagina = "Consulta de Rutas";
		$scope.activo_img = "inactivo";

		$scope.color = {
						'id': '',
						'fecha': '',
						'pais_id' : '',
						'tipo' : '',
		}
		$scope.ruta_id = "";
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
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.consultar_rutas = function(){
			rutasFactory.asignar_valores("","",$scope.base_url)
			rutasFactory.cargar_rutas(function(data){
				$scope.rutas=data;
				console.log($scope.rutas)
				setTimeout(function(){
					$scope.iniciar_datatable();
				},500);

			});
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.ver_ruta = function(valor){
			var id = $("#ver"+valor).attr("data");
			$scope.ruta_id = id;
			//console.log($scope.ruta_id);
			$("#id_color").val($scope.ruta_id)
			var url = $scope.base_url + "/cms/ruta/editar/" + $scope.ruta_id;
			// Redirigir a la nueva URL
			$window.location.href = url;
		
		}
		//////////////////////////////////////////////////////////////////////////////////////
		$scope.activar_registro = function(event){
			$scope.id_seleccionado_ruta = []
			$scope.estatus_seleccionado_ruta = []
			var caja = event.currentTarget.id;
			var atributos = $("#"+caja).attr("data");
			var arreglo_atributos = atributos.split("|");
			$scope.id_seleccionado_ruta = arreglo_atributos[0];
			$scope.estatus_seleccionado_ruta = arreglo_atributos[1];

			$("#cabecera_mensaje").text("Información:");
			//--
			if ($scope.estatus_seleccionado_ruta==0){
				mensaje = "Desea modificar el estatus de este registro a publicado? ";
				$scope.estatus_seleccionado_ruta=1;
			}else{
				mensaje = "Desea modificar el estatus de este registro a inactivo? ";
				$scope.estatus_seleccionado_ruta=0
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

			$http.post($scope.base_url+"/cms/ruta/cambiar_estatus",
			{
				 'id':$scope.id_seleccionado_ruta,
				 'estatus':$scope.estatus_seleccionado_ruta,

			}).success(function(data, estatus, headers, config){
				$scope.mensajes  = data;
				if($scope.mensajes.mensaje == "modificacion_procesada"){
					Swal.fire(
						  'Realizado!',
						  'El proceso fue ejecutado.',
						  'success'
					).then((result) => {
						location.reload();
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
			$scope.id_seleccionado_ruta = []
			$scope.estatus_seleccionado_ruta = []
			var caja = event.currentTarget.id;
			//alert(caja);
			var atributos = $("#"+caja).attr("data");
			var arreglo_atributos = atributos.split("|");
			$scope.id_seleccionado_ruta = arreglo_atributos[0];
			$scope.estatus_seleccionado_ruta = arreglo_atributos[1];
			//console.log($scope.estatus_seleccionado_ruta);
			$("#cabecera_mensaje").text("Información:");
			mensaje = "Desea eliminar este registro? ";
			$scope.modificar_estatus("eliminar",mensaje)
		}
		//////////////////////////////////////////////////////////////////////////////////////
		
		$scope.consultar_rutas();
	})
