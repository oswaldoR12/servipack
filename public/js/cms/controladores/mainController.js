angular.module("ContentManagerApp")
	.controller("mainController", function($scope,$http,$location){
		//Cuerpo declaraciones
		$(".li-menu").removeClass("active");
        $(".a-menu").removeClass("active");
		$scope.inicio = {
								'email':'',
								'password':'',
		}
		console.log("asdasd asd as das dsa d")
		$scope.base_url = $("#base_url").val();
		
		$scope.ingresar = function(){
			if($scope.validar_is()==true){
				uploader_reg("#mensaje_is","#email,#password")
				$http.post($scope.base_url+"/login/iniciarSession",
				{
					'email':$scope.inicio.email,
					'password':$scope.inicio.password,
				}).success(function(data, estatus, headers, config){
					$scope.mensajes  = data;
					console.log("asdasdasdasdasdasd asd asd")
					console.log(data)
					if($scope.mensajes.mensajes == "inicio_exitoso"){
						$scope.ir_dashboard();
					}else if($scope.mensajes.mensajes == "usuario_inactivado"){
						mostrar_notificacion("Mensaje","Su usuario ha sido inactivado temporalmente","warning");
					}else if($scope.mensajes.mensajes == "usuario_agencia"){
						mostrar_notificacion("Mensaje","Su agencia ha sido inactivada temporalmente","warning");
					} 
				
					else{
						mostrar_notificacion("Mensaje","Ocurrío un error inesperado","warning");
						desbloquear_pantalla("#mensaje_is","#email,#password")
					}

				}).error(function(data,estatus){
					console.log(data);
				});
			}
		}
		//--
		$scope.validar_is =  function(){
			if($scope.inicio.email==""){
				mostrar_notificacion("Campos no validos","Debe ingresar el correo electronico","warning");
				return false;
			}else if($scope.inicio.password==""){
				mostrar_notificacion("Campos no validos","Debe ingresar la password","warning");
				return false;
			}
			else{
				return true;
			}
		}
		//--
		$scope.ir_dashboard = function(){
			let form = document.getElementById('loginform');
			form.action = "./cms/dashboard";
			form.submit();
		}
	});

	