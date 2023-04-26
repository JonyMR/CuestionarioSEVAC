<!DOCTYPE html>
<html>   
    <div class="container">
        <div class="row">           
            <div class="col-4"><img src="{{ asset('images/coeac.png') }}" class = "img-fluid"></div>
            <div class ="col-18"><center><h5><br>Comisión Instrumentos para la Mejora de la <br>Armonización Contable (CIMAC)</h5></center></div>
        </div>
    </div><br>
            
<head>
    
    <title>Cuestionario para el Diagnóstico de los elementos del SEvAC de aplicación de los Entes Públicos del Estado de Michoacán</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container">   
        <div class="card">
            <div class="card-header">
            <center><h5>Cuestionario para el Diagnóstico de los elementos del SEvAC de aplicación de los Entes Públicos del Estado de Michoacán.</h5></center>
            </div>
            
            <div class="card-body">
                <livewire:tablarespuestas />
            </div>
            <button onclick="exportTableToExcel('data', 'respuestas')" class="btn btn-success">Descargar Excel</button>
        </div>
    </div>
@livewireScripts

</body>
<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}</script>
</html>