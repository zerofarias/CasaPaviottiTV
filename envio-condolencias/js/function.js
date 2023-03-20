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
            var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var tel = $('#tel').val();
                var frase = $('#frase').val();
                

                    //valido el nombre
                    if (nombre.length==0){
                            Swal.fire({
                                position: 'top',
                                icon: 'warning',
                                title: 'Tiene que escribir su Nombre',
                                showConfirmButton: false,
                                timer: 1500
                            })
                    }else{
                            if (apellido.length==0) {
                                Swal.fire({
                                    position: 'top',
                                    icon: 'warning',
                                    title: 'Tiene que escribir su Apellido',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }else{
                                    if (tel.length==0) {
                                        Swal.fire({
                                            position: 'top',
                                            icon: 'warning',
                                            title: 'Tiene que escribir su Numero de Tel',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    }else{
                                            if (frase.length==0) {
                                                Swal.fire({
                                                    position: 'top',
                                                    icon: 'warning',
                                                    title: 'Tiene que escribir su Condolencia / Mensaje',
                                                    showConfirmButton: false,
                                                    timer: 1800
                                                })
                                            }else{
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
                                            }
                                    }
                                }
                            }
                        });



            function SubirImagen (){
                var file_data = $('#image').prop('files')[0];
                
                
                var formData = new FormData();
                
                    
                    if (file_data) {
                        formData.append('file', file_data);
                        formData.append('opcion', 1);
                    }else{
                        formData.append('opcion', 2);
                    }

                    if (terminos) {
                        formData.append('terminos', $('#terminos').val());
                    }

                    if (tel) {
                        formData.append('tel', $('#tel').val());
                    }

                    if (mail) {
                        formData.append('mail', $('#mail').val());
                    }

                    if (nombre) {
                        formData.append('nombre', $('#nombre').val());
                    }

                    if (apellido) {
                        formData.append('apellido', $('#apellido').val());
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


            //religion
            //apodo
            //frase
            //terminos
            //signupCheck


        });
