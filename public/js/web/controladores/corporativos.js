angular.module("webExpress")
    .controller('corporativos', function ($scope, $location, $http, sliderFactory, $location) {
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
        $scope.corporativos = {
            'email': '',
            'telefono': '',
            'asunto': '',
            'asunto_text': '',
            'avisoLegal': '',
            'condiciones': '',
        }

        $scope.franquiciados = {
            'email': '',
            'telefono': '',
            'avisoLegal': '',
            'condiciones': '',
        }



        $scope.base_url_all = $location.absUrl()
        $scope.base_url = $location.protocol() + '://' + $location.host() + ($location.port() ? ':' + $location.port() : '')

        console.log($scope.base_url)
        console.log($scope.base_url_all)


        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.enviarCorporativo = function () {

            var loadingDiv = document.querySelector('.loading');

            // Cambiar el estilo para mostrar el div
            loadingDiv.style.display = 'block';

            if ($scope.validar_form_corpo() == true) {
                $scope.enviarCorreoCorpo();
            } else {
                var loadingDiv = document.querySelector('.loading');

                // Cambiar el estilo para ocultar el div
                loadingDiv.style.display = 'none';
            }

        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.validar_form_corpo = function () {

            var exr = /^\w+[a-z_0-9\-\.]+@\w+[0-9a-z\-\.]+\.[a-z]{2,4}$/i;


            if (!(exr.test($scope.corporativos.email))) {
                toastr.warning('Debe ingresar una dirección de correo válida: xxxxxxxxxxxxxx@host.com', 'Advertencia');
                return false;
            } else if ($scope.corporativos.telefono == "" || !$scope.corporativos.telefono) {
                toastr.warning('Debe ingresar un teléfono', 'Advertencia');
                return false;
            } else if (($scope.corporativos.asunto == "") || ($scope.corporativos.asunto == "")) {
                toastr.warning('Debe seleccionar un asunto', 'Advertencia');
                return false;
            } else if (!$scope.corporativos.avisoLegal) {
                toastr.warning('Debe autorizar las políticas de tratamieto de datos', 'Advertencia');
                return false;
            } else {
                return true;
            }
        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.enviarCorreoCorpo = function () {


            // Obtener los datos del formulario
            var formData = {
                email: $scope.corporativos.email,
                telefono: $scope.corporativos.telefono,
                asunto: $scope.corporativos.asunto,
                asunto_text: $scope.corporativos.asunto_text,
                avisoLegal: $scope.corporativos.avisoLegal,
                condiciones: $scope.corporativos.condiciones
            };
            console.log(formData)
            $http.post('/api/corporativos', formData)
                .then(function (response) {
                    var data = response.data;
                    console.log(data)
                    if (data.status === 'success') {
                        $scope.limpiar_cajas_corpo();
                        var loadingDiv = document.querySelector('.loading');

                        loadingDiv.style.display = 'none';
                        toastr.success('El formulario se envió correctamente.', 'Operación exitosa');
                    } else {
                        var loadingDiv = document.querySelector('.loading');

                        loadingDiv.style.display = 'none';
                        toastr.warning('Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo.', 'Advertencia');
                    }
                })
                .catch(function (error) {
                    var loadingDiv = document.querySelector('.loading');

                    loadingDiv.style.display = 'none';
                });
        };

        $scope.seleccionarAsunto = function () {
            var valueSeleccionado = $scope.corporativos.asunto;
            var textoSeleccionado = obtenerTextoSeleccionado(valueSeleccionado);
            $scope.corporativos.asunto_text = textoSeleccionado

            console.log("Value seleccionado: " + valueSeleccionado);
            console.log("Texto seleccionado: " + textoSeleccionado);
        };

        function obtenerTextoSeleccionado(value) {
            var optionSeleccionada = document.querySelector('#que-informacion-te-interesa option[value="' + value + '"]');
            return optionSeleccionada ? optionSeleccionada.getAttribute('data-texto') : '';
        }


        //////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.limpiar_cajas_corpo = function () {

            $scope.corporativos = {
                'email': '',
                'telefono': '',
                'asunto': '',
                'avisoLegal': '',
                'condiciones': '',
            }
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////



        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.enviarFranquiciado = function () {

            var loadingDiv = document.querySelector('.loading');

            // Cambiar el estilo para mostrar el div
            loadingDiv.style.display = 'block';

            if ($scope.validar_form_franquiciado() == true) {
                $scope.enviarCorreoFranquiciado();
            } else {
                var loadingDiv = document.querySelector('.loading');

                // Cambiar el estilo para ocultar el div
                loadingDiv.style.display = 'none';
            }

        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.validar_form_franquiciado = function () {

            var exr = /^\w+[a-z_0-9\-\.]+@\w+[0-9a-z\-\.]+\.[a-z]{2,4}$/i;


            if (!(exr.test($scope.franquiciados.email))) {
                toastr.warning('Debe ingresar una dirección de correo válida: xxxxxxxxxxxxxx@host.com', 'Advertencia');
                return false;
            } else if ($scope.franquiciados.telefono == "" || !$scope.franquiciados.telefono) {
                toastr.warning('Debe ingresar un teléfono', 'Advertencia');
                return false;
            }
            if (!$scope.franquiciados.avisoLegal) {
                toastr.warning('Debe autorizar las políticas de tratamieto de datos', 'Advertencia');
                return false;
            } else {
                return true;
            }
        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.enviarCorreoFranquiciado = function () {


            // Obtener los datos del formulario
            var formData = {
                email: $scope.franquiciados.email,
                telefono: $scope.franquiciados.telefono,
                avisoLegal: $scope.franquiciados.avisoLegal,
                condiciones: $scope.franquiciados.condiciones
            };
            console.log(formData)
            $http.post('/api/franquiciados', formData)
                .then(function (response) {
                    var data = response.data;
                    console.log(data)
                    if (data.status === 'success') {
                        $scope.limpiar_cajas_franquiciados();
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
                .catch(function (error) {
                    console.error('Error en la solicitud AJAX:', error);
                });
        };

        //////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.limpiar_cajas_franquiciados = function () {

            $scope.franquiciados = {
                'email': '',
                'telefono': '',
                'asunto': '',
                'avisoLegal': '',
                'condiciones': '',
            }
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        $scope.cargar_home = function () {

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
