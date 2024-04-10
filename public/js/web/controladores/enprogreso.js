angular.module("webExpress")
.controller('enprogreso', function ($scope,$location, $http,sliderFactory,$location) {
    $scope.createForm = {};
    $scope.editForm = {};
    $scope.formulario_crear = [];
    $scope.formulario_editar = [];
    $scope.dato = {};
    $scope.datos = [];
    $scope.perfiles = [];
    $scope.idioma = 1;
    $scope.pais = 1;
    
    //////////////////////////////////////////////////////////////////////////////
    $scope.progreso  = {
        'email' : '',
        'avisoLegal' : '',
        'condiciones' : '',
        'pais' : '',

    }

    $scope.progreso.pais = $("#pais").val();
    console.log($scope.progreso.pais)
    $scope.base_url_all=$location.absUrl()
    $scope.base_url= $location.protocol() + '://' + $location.host() + ($location.port() ? ':' + $location.port() : '')
   
    console.log( $scope.base_url)
    console.log( $scope.base_url_all)

    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    $scope.enviarFormulario = function(){

        var loadingDiv = document.querySelector('.loading');
            
        // Cambiar el estilo para mostrar el div
        loadingDiv.style.display = 'block';

        if($scope.validar_form()==true){
            $scope.enviarCorreo();
        }else{
            var loadingDiv = document.querySelector('.loading');
            
            // Cambiar el estilo para ocultar el div
            loadingDiv.style.display = 'none';
        }
                            
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    $scope.validar_form = function(){
        
        var exr = /^\w+[a-z_0-9\-\.]+@\w+[0-9a-z\-\.]+\.[a-z]{2,4}$/i;

        if(!(exr.test($scope.progreso.email))){
            toastr.warning('Debe ingresar una dirección de correo válida: xxxxxxxxxxxxxx@host.com', 'Advertencia');
            return false;
        }else if (!$scope.progreso.avisoLegal)               {
            toastr.warning('Debe autorizar las políticas de tratamiento', 'Advertencia');
            return false;
        }else{
            return true;
        }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    $scope.enviarCorreo = function() {


        // Obtener los datos del formulario
        var formData = {
            email: $scope.progreso.email,
            avisoLegal: $scope.progreso.avisoLegal,
            condiciones: $scope.progreso.condiciones,
            pais: $scope.progreso.pais,
            
        };
        console.log(formData)
        $http.post('/api/progreso', formData)
             .then(function(response) {
                 var data = response.data;
                 console.log(data)
                 if (data.status === 'success') {
                    $scope.limpiar_cajas();
                    var loadingDiv = document.querySelector('.loading');
            
                    // Cambiar el estilo para ocultar el div
                    loadingDiv.style.display = 'none';
                    toastr.success('El formulario se envió correctamente.', 'Operación exitosa'); 
                 } else {
                    var loadingDiv = document.querySelector('.loading');
            
                    // Cambiar el estilo para ocultar el div
                    loadingDiv.style.display = 'none';
                    toastr.warning('Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo.', 'Advertencia');
                 }
             })
             .catch(function(error) {
                 console.error('Error en la solicitud AJAX:', error);
        });
    };

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    

    $scope.limpiar_cajas = function(){
        $scope.progreso  = {
            'nombre' : '',
            'email' : '',
            'telefono' : '',
            'asunto' : '',
            'comentarios' : '',
            'condicionesUso' : '',
            'condicionesprogreso' : '',
        }

    }

    $scope.cargar_home = function(){

    }
    $scope.cargar_home()
    

    $scope.getImageSourceFromPhotoPath = function (photoPath) {
        // return window.location.protocol + '//' + window.location.host + '/' + photoPath;
        return photoPath + '?format=webp';

    }
  
                  
});




//  // Mensaje de éxito
//  toastr.success('¡Bien hecho!', 'Operación exitosa');

//  // Mensaje de error
//  toastr.error('Ocurrió un error', 'Error');

//  // Mensaje de información
//  toastr.info('Información adicional', 'Información');

//  // Mensaje de advertencia
//  toastr.warning('Cuidado', 'Advertencia');