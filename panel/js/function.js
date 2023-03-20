$(document).ready(function() {

        $(".upload").on('click', function(event) {
            event.preventDefault();
                var user = $('#user').val();
                var pass = $('#pass').val();
                    
                    if (user.length==0){
                            Swal.fire({
                                position: 'top',
                                icon: 'warning',
                                title: 'Debe Ingresar su Usuario',
                                showConfirmButton: false,
                                timer: 1500
                            })
                    }else{
                                if (pass.length==0) {
                                    Swal.fire({
                                        position: 'top',
                                        icon: 'warning',
                                        title: 'Debe Ingresar su Contraseña',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }else{
                                        function Validar()
                                        }
                            }
                    });


    function Validar(user,pass) {
        $.ajax({
            url: 'model/valida.php',
            type: 'post',
            data: {u:user, p:pass, opcion:2},
            contentType: false,
            processData: false,
            success: function(response) {
        
            }
        })
    } 
});