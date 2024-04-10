angular.module("webExpress")
    .controller('home', function ($scope,$compile, $location, $http, sliderFactory, $location, rutasFactory) {
        $scope.createForm = {};
        $scope.editForm = {};
        $scope.formulario_crear = [];
        $scope.formulario_editar = [];
        $scope.dato = {};
        $scope.datos = [];
        $scope.perfiles = [];
        $scope.fechasCalendario = [];
        $scope.fechasCalendario = $('#dataFecha').val();
        $scope.fechasCalendario = JSON.parse($scope.fechasCalendario);
        $scope.fechasCalendarioFilter = [];


        $scope.idioma = 1;
        $scope.pais = 1;

        $scope.base_url_all = $location.absUrl()
        $scope.base_url = $location.protocol() + '://' + $location.host() + ($location.port() ? ':' + $location.port() : '')


        $scope.myInterval = 1000;

        $scope.rutas_id = 0;









        $scope.getImageSourceFromPhotoPath = function (photoPath) {
            // return window.location.protocol + '//' + window.location.host + '/' + photoPath;
            return photoPath + '?format=webp';

        }

        $scope.currentDate = ''
        $scope.currentMonth = ''
        $scope.currentYear = ''

        $scope.initCalendario = function () {
            $scope.currentDate = new Date();
            $scope.currentMonth = $scope.currentDate.getMonth();
            $scope.currentYear = $scope.currentDate.getFullYear();

            // Llamar a la función que muestra el calendario
            $scope.showCalendar($scope.currentDate, $scope.currentMonth, $scope.currentYear);

            // Llamar a la función que resalta los días en el calendario
            $scope.highlightCalendar( $scope.currentMonth);

        };

        $scope.showCalendar = function (currentDate, month, year) {


            let daysContainer = document.getElementById("days");
            daysContainer.innerHTML = "";

            let emptyDays = 0 === new Date(year, month, 1).getDay() ? 6 : new Date(year, month, 1).getDay() - 1;

            // Crear días vacíos
            for (let i = 0; i < emptyDays; i++) {
                let emptyDay = document.createElement("li");
                let emptyTextNode = document.createTextNode("");
                emptyDay.appendChild(emptyTextNode);
                emptyDay.classList.add("empty");
                daysContainer.appendChild(emptyDay);
            }

            let daysInMonth = new Date(year, month + 1, 0).getDate();

            // Crear días del mes
            for (let i = 1; i <= daysInMonth; i++) {
                let day = document.createElement("li");
                let dayTextNode = document.createTextNode(i);

                if (currentDate.getDate() === i) {
                    day.classList.add("active");
                }

                day.setAttribute("data-day", i);
                day.setAttribute("data-month", month);
                day.setAttribute("data-year", year);
                day.classList.add("singleDay");
                day.appendChild(dayTextNode);
                daysContainer.appendChild(day);
            }

            document.getElementById("month").innerHTML = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][month];
            document.getElementById("year").innerHTML = year;
        };


        // Función para resaltar los días en el calendario
        $scope.highlightCalendar = function (month) {

            // Obtener el objeto $scope de AngularJS
            var scope = angular.element($("#webCalendarData")).scope();

            // Acceder a los datos del calendario desde el $scope
            // var calendarData = scope.webCalendarData;
            console.log($scope.fechasCalendario, $scope.rutas_id)

            $scope.fechasCalendarioFilter = $scope.fechasCalendario.filter(function (fecha) {
                return fecha.rutas_id == $scope.rutas_id;
            });
            console.log($scope.fechasCalendarioFilter)
            var calendarData = $scope.fechasCalendarioFilter

            angular.forEach(calendarData, function (entry) {
                var entryMonth = parseInt(entry.month - 1),
                    entryDay = parseInt(entry.day),
                    entryYear = parseInt(entry.year),
                    departureType = "";

                entry.ship_by_air && (departureType = "air");
                entry.ship_by_sea && (departureType = "sea");
                entry.ship_by_ground && (departureType = "ground");
                entry.ship_by_air && entry.ship_by_sea && (departureType = "air-ship");
                entry.ship_by_air && entry.ship_by_ground && (departureType = "air-ground");
                entry.ship_by_sea && entry.ship_by_ground && (departureType = "ship-ground");
                entry.ship_by_sea && entry.ship_by_air && entry.ship_by_ground && (departureType = "all");

                // Utilizar la función de AngularJS para buscar elementos en el DOM
                var dayElement = angular.element(document.querySelector('.singleDay[data-day="' + entryDay + '"][data-month="' + entryMonth + '"][data-year="' + entryYear + '"]'));

                // Agregar la clase según el tipo de salida
                dayElement.addClass("departure departure-" + entry.tipo);


                 // ... (código existente)

                // Obtener el elemento de día
                var dayElement = angular.element(document.querySelector('.singleDay[data-day="' + entryDay + '"][data-month="' + entryMonth + '"][data-year="' + entryYear + '"]'));

                // Agregar la clase según el tipo de salida
                dayElement.addClass("departure departure-" + entry.tipo);

                // Agregar tooltip según el tipo de salida
                dayElement.attr("data-tooltip", getTooltipText(entry.tipo));
                dayElement.attr("data-flow", "top");

                // Inicializar el tooltip
                $compile(dayElement)($scope);
            });

            // Obtener el primer mes desde el $scope
            var firstMonth = scope.firstMonth;

            // Actualizar la clase "first" del botón prev
            month == parseInt(firstMonth - 1) ? $("#prev").addClass("first") : $("#prev").removeClass("first");
        };
        function getTooltipText(tipo) {
            switch (tipo) {
                case "air":
                    return "Salida por aire";
                case "sea":
                    return "Salida por mar";
                case "ground":
                    return "Salida por tierra";
                case "air-ship":
                    return "Salida por aire y mar";
                case "air-ground":
                    return "Salida por aire y tierra";
                case "ship-ground":
                    return "Salida por mar y tierra";
                case "all":
                    return "Salida por aire, mar y tierra";
                default:
                    return "";
            }
        };
        

        // Función para actualizar el calendario
        $scope.updateCalendar = function (month, year) {
            let currentDate = new Date();
            let currentDay = currentDate.getDate();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();

            let daysContainer = document.getElementById("days");
            daysContainer.innerHTML = "";

            let emptyDays = 0 === new Date(year, month, 1).getDay() ? 6 : new Date(year, month, 1).getDay() - 1;

            // Crear días vacíos
            for (let i = 0; i < emptyDays; i++) {
                let emptyDay = document.createElement("li");
                let emptyTextNode = document.createTextNode("");
                emptyDay.appendChild(emptyTextNode);
                emptyDay.classList.add("empty");
                daysContainer.appendChild(emptyDay);
            }

            let daysInMonth = new Date(year, month + 1, 0).getDate();

            // Crear días del mes
            for (let day = 1; day <= daysInMonth; day++) {
                let li = document.createElement("li");
                let text = document.createTextNode(day);

                if (currentDay === day && currentMonth === month && currentYear === year) {
                    li.classList.add("active");
                }

                li.setAttribute("data-day", day);
                li.setAttribute("data-month", month);
                li.setAttribute("data-year", year);
                li.classList.add("singleDay");
                li.appendChild(text);
                daysContainer.appendChild(li);
            }

            document.getElementById("month").innerHTML = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][month];
            document.getElementById("year").innerHTML = year;
        };



        // Declaración de las variables d y o
        let d = document.getElementById("next"),
            o = document.getElementById("prev");

        // En el evento "next"
        d.onclick = function () {
            t = $scope.currentDate 
            a = $scope.currentMonth 
            n = $scope.currentYear 
           

            if ($scope.currentMonth  === 11) {
                $scope.currentYear  = $scope.currentYear  + 1;
                $scope.currentMonth  = 0;
            } else {
                $scope.currentMonth  = $scope.currentMonth  + 1;
            }

            $scope.updateCalendar($scope.currentMonth , $scope.currentYear );
            $scope.highlightCalendar($scope.currentMonth);
        };

        // En el evento "prev"
        o.onclick = function () {
            t = $scope.currentDate 
            a = $scope.currentMonth 
            n = $scope.currentYear 

            if ($scope.currentMonth  === 0) {
                $scope.currentYear = $scope.currentYear - 1;
                $scope.currentMonth  = 11;
            } else {
                $scope.currentMonth  = $scope.currentMonth  - 1;
            }

            $scope.updateCalendar($scope.currentMonth , $scope.currentYear );
            $scope.highlightCalendar($scope.currentMonth);
        };



        // En tu controlador de AngularJS
        $scope.onSelectChange = function () {
            // Esta función se ejecutará cada vez que cambie la opción seleccionada en el select
            console.log("Select cambiado. Nuevo valor:", $scope.rutas_id);
            $scope.initCalendario();

            // Puedes realizar otras acciones aquí, como llamar a funciones, realizar peticiones, etc.
        };


        $scope.consultar_rutas = function () {
            rutasFactory.asignar_valores("", "", $scope.base_url)
            rutasFactory.cargar_rutas(function (data) {
                $scope.rutas = data;
                console.log($scope.rutas[0].rutas_id)

                $scope.rutas_id = $scope.rutas[0].rutas_id;

                $scope.initCalendario();


            });
        }

        $scope.consultar_rutas();


    });
