<!DOCTYPE html>
<html>   
    <center>
        <div class="row">           
            <div class="col-12"><img src="{{ asset('images/coeac.png') }}"  width="600" height="150">
                <h6><br><center>Comisión Instrumentos para la Mejora de la <br>Armonización Contable (CIMAC)<center></h6>
            </div>
        </div>
    </div></center><br>
            
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
                <livewire:wizard />
            </div>
        </div>
    </div>
@livewireScripts
</body>
</html>