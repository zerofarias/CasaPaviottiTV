$(document).ready(function() {
    inhumados = $('#inhumados').DataTable({  
        "ajax":{            
            "url": "model/valida.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:4}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        
        "columns":[
            {"data": "COD_EXTINTO"},
            {"data": "apellido"},
            {"data": "fechafal"},
            {"data": "fechasep"},
            {"data": "horasep"},
            {"data": "sala"},
            {"data": "cementerio"},
            {"data": "religion"},
            {"data": "frace"},
            {"data": "apodo"},
            { "data": "foto" ,
              "render": function (data) {
              return '<img src="../autogestion/images/'+data+' " width="45px">';}
            },
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary  btn-sm agregar1' title='Editar'><i class='fas fa-edit'></i></button><button class='btn btn-warning btn-sm btnSolicitud' title='Imprimir Solicitud'><i class='fas fa-print'></i></button><button class='btn btn-danger btn-sm btnBorrar' title='Eliminar'><span class='material-symbols-outlined'>cancel</span></button></div></div>"}
        ],
        'rowCallback': function(row, data) {
            //$(row).find('td:eq(10)').html("<img src="+data.foto+" >");
            
            //$(row).find('td:eq(5)').text("$ " + data.cinco);
        },
        order: [[0, "desc"]],
        iDisplayLength: 50, 
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        
        responsive: true,
            details: true,
                  columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
        dom: 'Bfrtilp',       
        buttons:[ 
            {
                extend:    'excelHtml5','footer':'true',
                text:      '<i class="fas fa-file-excel"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend:    'pdfHtml5','footer': 'true',
                text:      '<i class="fas fa-file-pdf"></i>',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                extend:    'print','footer':'true',
                text:      '<i class="fa fa-print"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info'
            },
        ]
    });     
    
});