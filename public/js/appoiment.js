document.addEventListener('DOMContentLoaded', function() {
    /// creacmos una variable para especificar nuesro fomulario
    let form = document.querySelector("form")
    /// le especificamos nustro archivo .js
    var calendarEl = document.getElementById('appoiment');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      /// le cambios el idioma
      locale: "es",

      /// le damos las diferentes caracteristicas
      headerToolbar: {
        //7 botones de anterior siguiente
        left: 'prev,next today',
        /// le damos el titulo entrado
        center: 'title',
        /// que nos ustres por mes, por semana y dia
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },

      dateClick: function(info) {
        /// que nos pre carge la fecha sun la seleccionemos
        form.reset();
        /// fecha inico
        form.start.value=info.dateStr;
        /// fecha fin
        form.end.value=info.dateStr;

        /// cuando seleccionemos nuestro dia en el calendario se nos despleigue el modal
        $("#exampleModal").modal("show");
      }

    });
    calendar.render();
    /// le damos carateristicas a nuestro boton de guardar
    document.getElementById("btSave").addEventListener("click",function(){
        /// le especificamos nustros formulario
        const data = new FormData(form);
        console.log(data);
        /// le damos la ruta de accion de nuestro formulario
        axios.post("/appoiment/create/", data).
        then(
            (respuesta)=>{
            /// y que se cueerre cuando se ejecute el duardar
            $("#exampleModal").modal("hide");

        }
        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.datos);
                }
            }
        )

    })
  });
