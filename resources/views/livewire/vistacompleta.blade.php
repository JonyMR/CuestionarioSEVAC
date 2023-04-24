<div>
        @if(!empty($successMessage))
        <div class="alert alert-success">
        {{ $successMessage }}
        </div>
        @endif
    <div class="form-group">
        
    <h3>Objetivo.</h3>
    <p>Identificar la situación que guardan en materia de evaluación, los elementos que conforman los resultados del SEvAC, de cada uno de los entes Públicos
    del Estado para estar en condiciiones de sugerir alternativas de solución en sus procesos de armonización contable.</p>

    <h3>Importancia.</h3>
    <p>Para el llenado del presente cuestionario, se requiere que el personal sea el responsable de las áreas de los entes públicos que guarden relación con 
    los temas contables, presupuestarios, administrativos, transparencia y de informática.</p>

    <p>Deberá contar con la información soporte a nivel detalle(reactivos, secciones y apartados) de las últimas evaluaciones SEvAC de su respectivo Ente 
    Público.</p>

    <p>El área informática deberá tener claridad sobre los elementos que dan soporte a los procesos contemplados en el SEvAC, en tiempo real 
    y de otra temporalidad.</p>

<br><h4>DATOS DEL ENTE PÚBLICO.</h4>
                            <label for="title">1.- Ingresa tu correo electrónico:</label>
                            <input type="text" wire:model="email" class="form-control" id="correo" placeholder="usuario@ejemplo.com" name = "correo" wire:keydown.tab="checkMail">
                            
                            @error('email') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">2.- Ingresa tu nombre completo y cargo:</label>
                            <input type="text" wire:model="nombre" class="form-control" id="resnombre" placeholder="Jhon Doe" wire:click = "checkMail">
                            @error('nombre') <span style="color:red">{{ $message }}<br></span> @enderror
                            
                            <p></p><input type="text" wire:model="cargo" class="form-control" id="rescargo" placeholder="Jefe de Dpto." wire:click = "checkMail">
                            @error('cargo') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">3.- Ingresa tu Área de Adscripción:</label>
                            <input type="text" wire:model="area" class="form-control" id="resarea" placeholder="Rec. Financieros" wire:click = "checkMail">
                            @error('area') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">4.- Ingresa el Ente Público al que perteneces:</label>
                            <input type="text" wire:model="ente" class="form-control" id="resente" placeholder="Secretaría de Finanzas" wire:click = "checkMail">
                            @error('ente') <span style="color:red">{{ $message }}<br></span> @enderror
                    
                            <label for="title">5.- ¿Cuenta actualmente con un Sistema Informático que le ayude a realizar los registros contables y presupuestales 
                                    del proceso de la Contabilidad Gubernamental?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" checked value="1" {{ $pre5 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" value="0" {{ $pre5 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre5') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Cuál es el nombre del Sistema que utiliza?</label><br>
                                <input type="text" wire:model="nameSys" class="form-control" id="resnameSys" placeholder="Nombre del Sistema">
                                @error('nameSys') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Su Sistema es:</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Comprado" {{ $cadp = 'Comprado' ? "checked" : "" }}> Comprado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Arrendado" {{ $cadp = 'Arrendado' ? "checked" : "" }}> Arrendado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Propio" {{ $cadp = 'Propio' ? "checked" : "" }}> Desarrollo Propio</label><br>
                                @error('cadp') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Con qué documentación cuenta?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual" {{ $docsSys = 'manual' ? "checked" : "" }}> Manual de Usuario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="procesos" {{ $docsSys = 'procesos' ? "checked" : "" }}> Documentación de Procesos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual y procesos" {{ $docsSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="ninguno" {{ $docsSys = 'ninguno' ? "checked" : "" }}> Ninguno</label><br>
                                @error('docsSys') <span style="color:red">{{ $message }}<br></span> @enderror   

                                <label for="title">¿Desde cuando usa este Sistema?</label><br>
                                <input type="date" class="form-control col-3" id="fstartSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="startSys"><br>
                                @error('startSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <br><label for="title">¿Cuándo fue la última vez que se realizaron acualizaciones al Sistema apegadas a las normas emitidas por el LGCG?</label><br>
                                <input type="date" id="fupdSys" class="form-control col-3" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="updSys"><br>
                                @error('updSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Por qué?</label><br>
                                <textarea type="text" wire:model="noSys" class="form-control" id="resnoSys" placeholder="Motivo por el que no cuenta con un Sistema"> </textarea><br>
                                @error('noSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">Ingresa la empresa a la que le compraste el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">Ingresa la empresa a la que le arrendas el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Con que documentación de tu Sistema Propio cuentas?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="registro" {{ $infSys = 'registro' ? "checked" : "" }}> Registro</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="patente" {{ $infSys = 'patente' ? "checked" : "" }}> Patente</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ambos" {{ $infSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ninguno" {{ $infSys = 'ninguno' ? "checked" : "" }}> Ninguno</label>
                                <br>@error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror   

                                <label for="title">6.- ¿Cuenta con respaldos de la información generada por el Sistema?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="1" {{ $pre6 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="0" {{ $pre6 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre6') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">¿Con que periodicidad realizan los respaldos?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="diario" {{ $perioRes = 'diario' ? "checked" : "" }}> Diario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="semanal" {{ $perioRes = 'semanal' ? "checked" : "" }}> Semanal</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="mensual" {{ $perioRes = 'mensual' ? "checked" : "" }}> Mensual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="anual" {{ $perioRes = 'anual' ? "checked" : "" }}> Anual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="evento" {{ $perioRes = 'evento' ? "checked" : "" }}> Por Evento</label>
                                <br>@error('perioRes') <span style="color:red">{{ $message }}<br></span> @enderror 

                                <br><label for="title">¿Cuándo fue la última vez que se realizó?</label><br>
                                <input type="date" class="form-control col-3" id="flastRes" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="lastRes">
                                <br>@error('lastRes') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">7.- ¿Realiza los respaldos en medios externos al Sistema? (USB, Otro equipo, Nube, CD/DVD)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="1" {{ $pre7 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="0" {{ $pre7 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre7') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">¿Por qué?</label><br>
                                <textarea type="text" wire:model="noRes" class="form-control" id="resnoRes" placeholder="Motivo por el que no realiza respaldos en medios externos."> </textarea><br>
                                @error('noRes') <span style="color:red">{{ $message }}<br></span> @enderror   

                                <label for="title">8.- ¿El Sistema contable que utiliza genera la información de conformidad a la normativa de la LGCG y disposiciones
                                normativas del CONAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="1" {{ $pre8 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="0" {{ $pre8 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre8') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">9.- ¿El Sistema de Contabilidad Gubernamental que genera la información le permite atender los apartados del SEvAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="1" {{ $pre9 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="0" {{ $pre9 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre9') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">Ingresa cual de los apartados y en que porcentaje:</label><br>

                            <label>Registros Contables:<input type="number" wire:model="RegCont9" class="form-control" id="resRegCont9" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegCont9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestales:<input type="number" wire:model="RegPre9" class="form-control" id="resRegPre9" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegPre9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Administrativos:<input type="number" wire:model="RegAdm9" class="form-control" id="resRegAdm9" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegAdm9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Transparencia:<input type="number" wire:model="RegTra9" class="form-control" id="resRegTra9" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegTra9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Cuenta Pública:<input type="number" wire:model="RegCP9" class="form-control" id="resRegCP9" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegCP9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">10.- Para el caso de los registros contables, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Instrumentos Contables:<input type="number" wire:model="InstC10" class="form-control" id="resInstC10" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('InstC10') <span style = "color:red" >{{ $message }}<br></span> @enderror

                            <label>Registros Contables:<input type="number" wire:model="RegCont10" class="form-control" id="resRegCont10" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegCont10') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Contables:<input type="number" wire:model="RepCont10" class="form-control" id="resRepCont10" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RepCont10') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">11.- Para el caso de los registros Presupuestales, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Clasificadores Presupuestales:<input type="number" wire:model="ClasP11" class="form-control" id="resClasP11" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ClasP11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestarios:<input type="number" wire:model="RegPre11" class="form-control" id="resRegPre11" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RegPre11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Presupuestarios:<input type="number" wire:model="RepPre11" class="form-control" id="resRepPre11" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RepPre11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Programáticos:<input type="number" wire:model="PrePro11" class="form-control" id="PrePro11" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('PrePro11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">12.- Para el caso de los registros Administrativos, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Control de bienes y documentos soporte:<input type="number" wire:model="ContBie12" class="form-control" id="resContBie12" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ContBie12') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Recursos Federales y Pagos Electrónicos:<input type="number" wire:model="RecFed12" class="form-control" id="resRecFed12" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('RecFed12') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">13.- Para el caso de los registros de Transparencia y Difusión de la información Financiera derivada del Título Quinto de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Publicar Contenido Contable:<input type="number" wire:model="ContCont13" class="form-control" id="resContCont13" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ContCont13') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Presupuestario:<input type="number" wire:model="ContPre13" class="form-control" id="resContPre13" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ContPre13') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Programático:<input type="number" wire:model="ContProg13" class="form-control" id="resContProg13" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ContProg13') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">14.- Para el caso de los registros de Transparencia del Título Quinto y Otras Obligaciones de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <h4>Publicar Título V</h4>

                            <label>Anuales:<input type="number" wire:model="TVAn14" class="form-control" id="resTVAn14" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TVAn14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="number" wire:model="TVTri14" class="form-control" id="resTVTri14" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TVTri14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <h4>Publicar Otras Obligaciones</h4>

                            <label>Anuales:<input type="number" wire:model="OtrAn14" class="form-control" id="resOtrAn14" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('OtrAn14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="number" wire:model="OtrTri14" class="form-control" id="resOtrTri14" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('OtrTri14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">15.- Para el caso de los registros de Cuenta Pública Estatal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento? <br>(De aplicación exclusiva al Ejecutivo del Estado).<br>Si no aplica
                            llenar los campos con 0.</label><br>

                            <label>Resultados Generales y Consolidados:<input type="number" wire:model="ResGenCon15" class="form-control" id="resResGenCon15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ResGenCon15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Ejecutivo:<input type="number" wire:model="TomoPE15" class="form-control" id="resTomoPE15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoPE15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Legislativo:<input type="number" wire:model="TomoPL15" class="form-control" id="resTomoPL15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoPL15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Judicial:<input type="number" wire:model="TomoPJ15" class="form-control" id="resTomoPJ15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoPJ15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo de Órganos Autónomos:<input type="number" wire:model="TomoOA15" class="form-control" id="resTomoOA15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoOA15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera Consolidada del Sector Paraestatal:<input type="number" wire:model="InfFin15" class="form-control" id="resInfFin15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('InfFin15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Sector Paraestatal:<input type="number" wire:model="TomoSP15" class="form-control" id="resTomoSP15" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoSP15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">16.- Para el caso de los registros de Cuenta Pública Municipal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Resultados Generales y Consolidados:<input type="number" wire:model="ResGenCon16" class="form-control" id="resResGenCon16" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('ResGenCon16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera del Municipio:<input type="number" wire:model="InfFinMun16" class="form-control" id="resInfFinMun16" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('InfFinMun16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Sector Paramunicipal:<input type="number" wire:model="TomoSP16" class="form-control" id="resTomoSP16" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('TomoSP16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera Consolidada del Sector Paramunicipal:<input type="number" wire:model="InfFin16" class="form-control" id="resInfFin16" placeholder = "1-100"></label><label>&nbsp%</label><br>
                            @error('InfFin16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label for="title">17.- En cuestión de conectividad ¿Su ente público cuenta con conexión a Internet?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre17" value="1" {{ $pre17 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre17" value="0" {{ $pre17 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre17') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">18.- ¿Cuenta con personas especializadas en TIC'S?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="0" {{ $pre18 = '0' ? "checked" : "" }}> 0</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="1" {{ $pre18 = '1' ? "checked" : "" }}> 1</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="2-5" {{ $pre18 = '2-5' ? "checked" : "" }}> 2-5</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="6-10" {{ $pre18 = '6-10' ? "checked" : "" }}> 6-10</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="Más de 10" {{ $pre18 = 'Más de 10' ? "checked" : "" }}> Más de 10</label>
                                
                                <br>@error('pre18') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">19.- ¿Cómo considera la calidad de la conexión a Internet? Siendo 1 muy malo y 10 excelente.</label><br>
                                <br><label>Muy malo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/>
</svg></label><br><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="1" {{ $pre19 = '1' ? "checked" : "" }}> 1</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="2" {{ $pre19 = '2' ? "checked" : "" }}> 2</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="3" {{ $pre19 = '3' ? "checked" : "" }}> 3</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="4" {{ $pre19 = '4' ? "checked" : "" }}> 4</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="5" {{ $pre19 = '5' ? "checked" : "" }}> 5</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="6" {{ $pre19 = '6' ? "checked" : "" }}> 6</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="7" {{ $pre19 = '7' ? "checked" : "" }}> 7</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="8" {{ $pre19 = '8' ? "checked" : "" }}> 8</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="9" {{ $pre19 = '9' ? "checked" : "" }}> 9</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre19" value="10" {{ $pre19 = '10' ? "checked" : "" }}> 10 </label>
                                <br><br><label>Excelente <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
</svg></label>

                                
                                <br>@error('pre19') <span style="color:red">{{ $message }}</span> @enderror


                                <label for="title">20.- ¿Cuáles son las fallas mas frecuentes?</label><br>
                                <textarea type="text" wire:model="pre20" class="form-control" id="respre20" placeholder="Escriba aquí las fallas mas frecuentes en su red de Internet."> </textarea><br>
                                @error('pre20') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">21.- ¿Utilizan herramientas informáticas adicionales?</label><br>
                                <label for="title">Plataformas de video:</label><br>
                                <input type="checkbox" value="1" wire:model="zoom" name="zoomCheck" {{ $zoom = '1' ? "checked" : ""  }}>&nbsp Zoom<br>
                                <input type="checkbox" value="1" wire:model="meet" {{ $meet = '1' ? "checked" : "" }}>&nbsp Meet<br>
                                <input type="checkbox" value="1" wire:model="skype" {{ $skype = '1' ? "checked" : "" }}>&nbsp Skype<br>
                                <input type="checkbox" value="1" wire:model="teams" {{ $teams = '1' ? "checked" : "" }}>&nbsp Teams<br><br>
                                <label for="title">Herramientas para conversión de PDF:</label><br>
                                <input type="checkbox" value="1" wire:model="nitropdf" {{ $nitropdf = '1' ? "checked" : "" }}>&nbsp NitroPDF<br>
                                <input type="checkbox" value="1" wire:model="adobe" {{ $adobe = '1' ? "checked" : "" }}>&nbsp Adobe<br><br>
                                <label for="title">Plataformas para soporte remoto:</label><br>
                                <input type="checkbox" value="1" wire:model="anydesk" {{ $anydesk = '1' ? "checked" : "" }}>&nbsp AnyDesk<br>
                                <input type="checkbox" value="1" wire:model="teamviwer" {{ $teamviwer = '1' ? "checked" : "" }}>&nbsp Team Viewer<br><br>
                                <label for="title">¿Utiliza otras herramientas adicionales?:</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="otrasHerramientas" value="" {{ $otrasHerramientas = '' ? "checked" : "" }}> Si</label><br>
                                <label for="title">Escriba el nombre:</label><br>
                                <input type="text" wire:model="otrasHerramientas" class="form-control" id="resotrasHerramientas" placeholder="Nombre de las herramientas"><br>
                                
                                <label class="radio-inline"><input type="radio" wire:model="otrasHerramientas" value="No usa" {{ $otrasHerramientas = '0' ? "checked" : "" }}> No</label>
                                <br>@error('otrasHerramientas') <span style="color:red">{{$message}}<br></span> @enderror

                                <label for="title">22.- ¿Cuenta con una página web oficial del Ente Público?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre22" checked value="1" {{ $pre22 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre22" value="0" {{ $pre22 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre22') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Cuál es el link?</label><br>
                                <input type="text" wire:model="link" class="form-control" id="reslink" placeholder = "http://www.ejemplo.com"></label><label><br>
                                @error('link') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Cuál es el link donde publica el apartado de transparencia conforme a la LGCG?</label><br>
                                <input type="text" wire:model="linklgcg" class="form-control" id="reslinklgcg" placeholder = "http://www.ejemplo.com">
                                <br>@error('linklgcg') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Por qué motivo?</label><br>
                                <textarea type="text" wire:model="motivo" class="form-control" id="resmotivo" placeholder="Ingrese el motivo por el cual no cuenta con un sitio."> </textarea><br>
                                @error('motivo') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">23.- En materia de contabilidad Gubernamental, del periodo de Octubre del 2021 a la fecha, ¿Cuántas capacitaciones ha recibido el ente público?</label><br>
                                
                                <label for="title">Cantidad: </label><br>
                                <input type="number" wire:model="Cantidad22" class="form-control" id="resCantidad22" placeholder="Número de capacitaciones recibidas">
                                @error('Cantidad22') <span style="color:red">{{ $message }}<br></span> @enderror<br>    

                                <label for="title">Temas: </label><br>
                                <input type="text" wire:model="Temas22" class="form-control" id="resTemas22" placeholder="SEvAC, LGCG, etc">
                                @error('Temas22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Impartidos por: </label><br>
                                <input type="text" wire:model="Impartido22" class="form-control" id="resImpartido22" placeholder="Empresa que impartió la capacitación">
                                @error('Impartido22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Área capacitada: </label><br>
                                <input type="text" wire:model="Area22" class="form-control" id="resArea22" placeholder="Recursos Financieros">
                                @error('Area22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">24.- ¿Quién es el personal encargado de dar atención y cumplimiento a la plataforma del SEvAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="interno" {{ $pre23 = 'interno' ? "checked" : "" }}> Interno</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="externo" {{ $pre23 = 'externo' ? "checked" : "" }}> Externo</label><br>
                                @error('pre23') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">Para cualquier respuesta mencionar de que área del ente público o empresa. </label><br>
                                <input type="text" wire:model="area23" class="form-control" id="resarea23" placeholder="Recursos Financieros">
                                @error('area23') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">25.- ¿Consideras necesario reforzar la capacitación en el uso de la plataforma SEvAC, para la mejora de la evaluación?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="1" {{ $pre24 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="0" {{ $pre24 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre24') <span style="color:red">{{ $message }}</span> @enderror

                                <label for="title">26.- ¿Sobre qué temas de capacitación que se enlistan a continuación consideras que pudieran apoyarte para la mejora de la evaluación contable?</label><br>
                            <input type="checkbox" value="1" wire:model="pre251" name="zoomCheck" {{ $pre251 = '1' ? "checked" : ""  }}>&nbsp 1. Curso-Taller: Manual de Contabilidad Gubernamental, Inducción para su elaboración.<br>
                            <input type="checkbox" value="1" wire:model="pre252" name="zoomCheck" {{ $pre252 = '1' ? "checked" : ""  }}>&nbsp 2. Clasificadores Presupuestarios y su Vinculación con el Plan de Cuentas.<br>
                            <input type="checkbox" value="1" wire:model="pre253" name="zoomCheck" {{ $pre253 = '1' ? "checked" : ""  }}>&nbsp 3. Registro Presupuestario y Patrimonial del Ingreso Público.<br>
                            <input type="checkbox" value="1" wire:model="pre254" name="zoomCheck" {{ $pre254 = '1' ? "checked" : ""  }}>&nbsp 4. Registro Presupuestario y Patrimonial del Gasto Público.<br>
                            <input type="checkbox" value="1" wire:model="pre255" name="zoomCheck" {{ $pre255 = '1' ? "checked" : ""  }}>&nbsp 5. Administración y Registro de Bienes Patrimoniales.<br>
                            <input type="checkbox" value="1" wire:model="pre256" name="zoomCheck" {{ $pre256 = '1' ? "checked" : ""  }}>&nbsp 6. Integración de Estados e Informes Financieros.<br>
                            <input type="checkbox" value="1" wire:model="pre257" name="zoomCheck" {{ $pre257 = '1' ? "checked" : ""  }}>&nbsp 7. Notas a los Estados Financieros.<br>
                            <input type="checkbox" value="1" wire:model="pre258" name="zoomCheck" {{ $pre258 = '1' ? "checked" : ""  }}>&nbsp 8. Integración y Rendición de la Cuenta Pública Armonizada.<br>
                            <input type="checkbox" value="1" wire:model="pre259" name="zoomCheck" {{ $pre259 = '1' ? "checked" : ""  }}>&nbsp 9. Transparencia de la Información Financiera (Título V LGCG).<br>
                            <input type="checkbox" value="1" wire:model="pre2510" name="zoomCheck" {{ $pre2510 = '1' ? "checked" : ""  }}>&nbsp 10. Entrega-Recepción de la Hacienda Municipal.<br>
                            <input type="checkbox" value="1" wire:model="pre2511" name="zoomCheck" {{ $pre2511 = '1' ? "checked" : ""  }}>&nbsp 11. Mejora de los Resultados de la Evaluación de la Armonización Contable (SEvAC).<br>

                            <label for="title">27.- ¿Es atendido oportunamente por el Ente Fiscalizador Local (ASM), para disipar sus dudas respecto a las observaciones de los reactivos evaluados?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="1" {{ $pre26 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="0" {{ $pre26 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre26') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque26" class="form-control" id="resporque26" placeholder="¿Por qué?">
                                @error('porque26') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">28.- ¿Es atendido oportuna y satisfactoriamente en el tiempo de solventación en cuanto a las dudas de los reactivos observados por el Ente Fiscalizador Local (ASM)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="1" {{ $pre27 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="0" {{ $pre27 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre27') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque27" class="form-control" id="resporque27" placeholder="¿Por qué?">
                                @error('porque27') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">29.- ¿Describa lo que sugiere que debería implementar el Ente Fiscalizador Local (ASM), para su mejor atención en cuanto a las evaluaciones relacionadas con el SEvAC?</label><br>
                                <textarea type="text" wire:model="pre28" class="form-control" id="resnoSys" placeholder="Sugerencias"> </textarea><br>
                                @error('pre28') <span style="color:red">{{ $message }}</span> @enderror


    </div>
</div>
