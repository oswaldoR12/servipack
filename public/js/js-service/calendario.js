console.log(calendario);


$("#webCalendarData").data("calendar", calendario);

function createCalendar() {
    let e = new Date(),
        t = e.getDate(),
        a = e.getMonth(),
        n = e.getFullYear(),
        r = document.getElementById("days"),
        i = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        d = document.getElementById("next"),
        o = document.getElementById("prev");

    function updateCalendar(month, year) {
        let dayOfWeek = new Date(year, month).getDay();
        r.innerHTML = "";
        let lastDayOfMonth = (function (month, year) {
            return new Date(year, month + 1, 0).getDate();
        })(month, year);

        (function fillEmptyDays(emptyDays) {
            for (let i = 0; i < emptyDays; i++) {
                let li = document.createElement("li");
                let text = document.createTextNode("");
                li.appendChild(text);
                li.classList.add("empty");
                r.appendChild(li);
            }
        })(0 === dayOfWeek ? 6 : dayOfWeek - 1);

        for (let day = 1; day <= lastDayOfMonth; day++) {
            let li = document.createElement("li");
            let text = document.createTextNode(day);
            t === day && month === e.getMonth() && year === e.getFullYear() && li.classList.add("active");

            li.setAttribute("data-day", day);
            li.setAttribute("data-month", month);
            li.setAttribute("data-year", year);
            li.classList.add("singleDay");
            li.appendChild(text);
            r.appendChild(li);
        }

        document.getElementById("month").innerHTML = i[month];
        document.getElementById("year").innerHTML = year;
    }

    function highlightDepartures(month) {
        console.log(month);
        $("#webCalendarData").data("calendar").forEach((function (entry) {
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

            $('.singleDay[data-day="' + entryDay + '"][data-month="' + entryMonth + '"][data-year="' + entryYear + '"]').addClass("departure departure-" + entry.tipo);
        }));

        let firstMonth = $("#webCalendarData").data("first");
        month == parseInt(firstMonth - 1) ? $("#prev").addClass("first") : $("#prev").removeClass("first");
    }

    d.onclick = function () {
        n = 11 === a ? n + 1 : n;
        a = (a + 1) % 12;
        updateCalendar(a, n);
        highlightDepartures(a);
    };

    o.onclick = function () {
        n = 0 === a ? n - 1 : n;
        a = 0 === a ? 11 : a - 1;
        updateCalendar(a, n);
        highlightDepartures(a);
    };

    updateCalendar(a, n);
    highlightDepartures(a);

    $("#route_id").change((function () {
        var routeId = "?ruta_id=" + $(this).val();
        window.location.href = routeId + "#calendar";
    }));
}

