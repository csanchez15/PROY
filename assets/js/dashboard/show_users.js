(function(){

    $("tr td #delete").click(function(ev){
        ev.preventDefault();
     //captura  el dato entrando en lso padres xd
        var nombre = $(this).parents('tr').find('td:first').text();
        var id = $(this).attr('data-id');
        var self = this;



        Swal.fire({
            title: '¿Realmente quieres eliminar el Registro de '+nombre+'?',
            text: "El registro sera eliminado permanentemente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si,eliminalo!',
            cancelButtonText: 'no'
          }).then((result) => {
            if (result.value) {
    
                $.ajax({

                    type:'POST',
                    url:'/PROY/users/delete',
                    data:{'id':id},

                    success: function(){
                     //remueve la fila 
                        $(self).parents('tr').remove();
                        Swal(
                          'Eliminado!',
                          'El registro ha sido eliminado satisfactoriamente.',
                          'success'
                        )
                      },statusCode: {
                        400: function(data){
                          var json = JSON.parse(data.responseText);
                          Swal.fire(
                            'Error!',
                            json.msg,
                            'error'
                          )
                        }
                      }
                    });
              
                  }
              })
          })
      })();
      