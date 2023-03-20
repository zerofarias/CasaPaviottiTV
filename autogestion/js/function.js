$(document).ready(function() {

    /////// capturo si el usuario selecciona una imagen si es asi modifico css
    const selectElement = document.querySelector('.file-select');
        selectElement.addEventListener('change', (event) => {
        selectElement.className = 'file';
        });

        
        ///// funcion inicia si el usuario presiona boton guardar
        $(".upload").on('click', function(event) {
            event.preventDefault()
            const miCheckbox = document.getElementById('terminos');
            if(miCheckbox.checked) {
                SubirImagen();
            } else {
                Swal.fire({
                    position: 'top',
                    icon: 'warning',
                    title: 'DEBE ACEPTAR LOS TERMINOS Y CONDICIONES',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        });


            function SubirImagen (){
                var file_data = $('#image').prop('files')[0];
                var religion = $('#religion').val();
                var apodo = $('#apodo').val();
                var formData = new FormData();
                
                    
                    if (file_data) {
                        formData.append('file', file_data);
                        formData.append('opcion', 1);
                    }else{
                        formData.append('opcion', 2);
                    }

                    if (religion) {
                        formData.append('religion', $('#religion').val());
                    }

                    if (apodo) {
                        formData.append('apodo', $('#apodo').val());
                    }

                    if (frase) {
                        formData.append('frase', $('#frase').val());
                    }

                    if (hash) {
                        formData.append('hash', $('#hash').val());
                    }

                $.ajax({
                    url: 'model/upload.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        const religion  = document.getElementById("religion").value;
                        const apodo  = document.getElementById("apodo").value;
                        const frase  = document.getElementById("frase").value;
                        const hash  = document.getElementById("hash").value;
                        
                        console.log(response);
                        switch (response) {
                            case '1':
                                    Swal.fire({
                                        position: 'top',
                                        icon: 'success',
                                        title: 'GUARDADO CON EXITO',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })   

                                break;
                            case '2':
                                    Swal.fire({
                                        position: 'top',
                                        icon: 'warning',
                                        title: 'ERROR AL GUARDAR IMAGEN, INTENTE DE NUEVO EN UNOS MINUTOS POR FAVOR',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                
                                break;
                            case '3':
                                        Swal.fire({
                                            position: 'top',
                                            icon: 'warning',
                                            title: 'FORMATO DE IMAGEN NO COMPATIBLE, SELECCIONE OTRA IMAGEN POR FAVOR',
                                            showConfirmButton: false,
                                            timer: 2500
                                        })
                                break;
                            case '4':
                                alert(religion)
                                break;
                                default:
                                    Swal.fire({
                                        position: 'top',
                                        icon: 'warning',
                                        title: 'ERROR AL GUARDAR IMAGEN, INTENTE DE NUEVO EN UNOS MINUTOS POR FAVOR',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                    break;
                        }
                    }
                });
                //return false;
            };

});
