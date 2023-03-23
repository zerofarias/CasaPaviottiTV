$(document).ready(function() {

    function Validar(user,pass) {
        $.ajax({
            url: 'model/valida.php',
            type: "POST",
            dataType: "json",
            data: { user:user , pass:pass , opcion:1},
            success: function(data){
            if (data === 0101) {
                location.href ='panel.php';
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
            },
            error: function(){
                Swal.fire({
                    position: 'top',
                    icon: 'warning',
                    title: 'Datos Incorrectos',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        })
    } 

        $(".upload").on('click', function(event) {
            event.preventDefault();
                let user = $('#user').val();
                let pass = $('#pass').val();
                    
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
                                        Validar(user,pass)
                                        }
                            }
                    });


    
});