// $(document).ready(function() {

//     $("#info").bind("submit", function() {

//         $.ajax({
//             type: $(this).attr("method"),
//             url: $(this).attr("action"),
//             data: $(this).serialize(),
//             beforeSend: function() {
//                 $("#info button[type=submit]");

//             },
//             success: function(response) {
//                 if (response.resultado == "") {

//                     Swal.fire({

//                         icon: 'success',
//                         title: '¡Conexión exitosa!',
//                         confirmButtonColor: '#3085d6',
//                         confirmButtonText: 'Ingresar'

//                     })
//                 } else {
//                     Swal.fire({
//                         icon: 'success',
//                         title: '',
//                         text: 'Datos Enviados Correctamente!',
//                     }).then((result) => {
//                         if (result.value) {
//                             window.location.href = "informacion.php ";
//                         }
//                     })



//                 }

//                 $("#info button[type=submit]").html("Ok");

//             }
//         });

//         return false;

//     });


// });