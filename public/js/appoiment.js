document.addEventListener('DOMContentLoaded', function() {
    let form = document.querySelector("form")
    var calendarEl = document.getElementById('appoiment');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: "es",

      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },

      dateClick: function(info) {
        $("#exampleModal").modal("show");

      }

    });
    calendar.render();
    document.getElementById("btSave").addEventListener("click",function(){
        const data = new FormData(form);
        console.log(data);
        axios.post("/appoiment/create/", data).
        then(
            (respuesta)=>{
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
