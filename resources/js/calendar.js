$(document).ready(function () {
    $("#btnAddTask").click(agregarTarea);
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
        },
        views: {
            dayGridMonth: { buttonText: "Mes" },
            timeGridWeek: { buttonText: "Semana" },
            timeGridDay: { buttonText: "Día" },
        },
        selectable: true,
        events: url,
        eventMouseEnter: function (info) {
            $(info.el).tooltip({
                title: info.event.title,
                placement: "bottom",
            });
        },
        dateClick: function (info) {
            if (info.allDay) {
                $("#fecInicio").val(info.dateStr);
                $("#fecFin").val(info.dateStr);
            } else {
                let fechaHora = info.dateStr.split("T");
                $("#fecInicio").val(fechaHora[0]);
                $("#fecFin").val(fechaHora[0]);
                $("#horaInicio").val(fechaHora[1].substring(0, 5));
            }
            $("#modal-tarea").modal("show");
        },
    });
    calendar.render();
    calendar.setOption("locale", "es");

    function agregarTarea(){
        let tarea = recuperarDatosFormulario();
        let token = $("input[name='_token']").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            async: true, 
            method: "POST", 
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url: addTaskURL,
            data: {
             "token": token,
             "tarea": tarea   
            },
            success: function(msg){
                // calendar.fetchEvents();
                console.log(msg)
            },
            error: function(error){
                console.log(error);
            }
        })
    }

    function recuperarDatosFormulario(){
        let tarea = {
            tarea: $("#tarea").val(),
            fechaInicio: $("#fecInicio").val(),
            horaInicio: $("#horaInicio").val(),
            fechaFin: $("#fecFin").val(),
            horaFin: $("#horaFin").val() 
        }
        return tarea;
    }
});
