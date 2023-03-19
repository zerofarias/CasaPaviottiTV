$(document).ready(function() {

    /////// capturo si el usuario selecciona una imagen si es asi modifico css
    const selectElement = document.querySelector('.file-select');
        selectElement.addEventListener('change', (event) => {
        selectElement.className = 'file';
        });

        
        ///// funcion inicia si el usuario presiona boton guardar
        $(".upload").on('click', function() {
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
                //var formData = new FormData();
                //var files = $('#image')[0].files[0];
                //formData.append('file',files);
                

                var file_data = $('#image').prop('files')[0];
                var formData = new FormData();
                    formData.append('file', file_data);
                //para agregar parametros extras al formData
                    formData.append('religion', $('#religion').val());
                    formData.append('apodo', $('#apodo').val());
                    formData.append('frase', $('#frase').val());


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
                        console.log(response);
                        switch (response) {
                            case '1':
                                alert(religion)
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
                return false;
            };


            //religion
            //apodo
            //frase
            //terminos
            //signupCheck


        });
