$(document).ready(function() {

    function Validar(user,pass,opcion) {
        $.ajax({
            url: 'model/valida.php',
            type: "POST",
            dataType: "json",
            data: { user:user , pass:pass , opcion:opcion},
            success: function(data){
            if (data === 0101) {
                alert('passo')
            }else{
                Swal.fire({
                    position: 'top',
                    icon: 'warning',
                    title: 'Datos Incorrectos',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        console.log(data);
            }
        })
    } 

        $(".upload").on('click', function(event) {
            event.preventDefault();
                let user = $('#user').val();
                let pass = $('#pass').val();
                let opcion = 1;

                
                    
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
                                        Validar(user,pass,opcion)
                                        }
                            }
                    });


    
});