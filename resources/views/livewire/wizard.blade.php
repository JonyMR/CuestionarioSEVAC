<div>
   
        @if(!empty($successMessage))
        <div class="alert alert-success">
        {{ $successMessage }}
        </div>
        @endif
        
        <div class="text-center">
            <!-- progressbar 
            <ul class="progressbar">
            <li class="{{ $currentStep != 1 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 4 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 5 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 6 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 7 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 8 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 9 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 10 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 11 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 12 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 13 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 14 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 15 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 16 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 17 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 18 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 19 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 20 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 21 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 22 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 23 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 24 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 25 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 26 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 27 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 28 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 29 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 30 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 31 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 32 ? '' : 'active' }}"><a type="button"></a></li>
            <li class="{{ $currentStep != 33 ? '' : 'active' }}"><a type="button"></a></li>
            </ul>-->
        </div>

        

        <!-- ************** STEP 0 **************** -->
        <div class="row setup-content {{ $currentStep != 0 ? 'displayNone' : '' }}" id="step-0">
                <div class="col-xs-12">
                <div class="col-md-12">
                        <div class="form-group">

                            <h3>Objetivo.</h3>
                            <p>Identificar la situación que guardan en materia de evaluación, los elementos que conforman los resultados del SEvAC de cada uno de los entes Públicos
                                del Estado para estar en condiciones de sugerir alternativas de solución en sus procesos de armonización contable.</p>

                            <h3>Importancia.</h3>
                            <p>Para el llenado del presente cuestionario, se requiere que el personal sea el responsable de las áreas de los entes públicos que guarden relación con 
                                los temas contables, presupuestarios, administrativos, transparencia y de informática.</p>

                            <p>El personal deberá contar con la información soporte a nivel detalle (reactivos, secciones y apartados) de las últimas evaluaciones SEvAC de su respectivo Ente 
                                Público.</p>

                            <p>Para el caso del área informática deberá tener claridad sobre los elementos que dan soporte a los procesos contemplados en el SEvAC, en tiempo real 
                                y de otra temporalidad.
                            </p>
                        </div>
                        <button class="btn btn-primary" wire:click="ceroStepSubmit" >Comenzar</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 1 **************** -->
            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                <div class="col-xs-12">
                <div class="col-md-12">
                <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                        <div class="form-group">
                            <br><h4>DATOS DEL ENTE PÚBLICO.</h4>
                            <label for="title">1.- Ingresa el correo electrónico oficial:</label>
                            <input type="text" wire:model="email" class="form-control" id="correo" placeholder="usuario@ejemplo.com" name = "correo" wire:keydown.tab="checkMail">
                            @error('email') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">2.- Ingresa el nombre completo y cargo de quién realiza la captura:</label>
                            <input type="text" wire:model="nombre" class="form-control" id="resnombre" placeholder="Jhon Doe" wire:click = "checkMail">
                            @error('nombre') <span style="color:red">{{ $message }}<br></span> @enderror
                            
                            <p></p><input type="text" wire:model="cargo" class="form-control" id="rescargo" placeholder="Jefe de Dpto." wire:click = "checkMail">
                            @error('cargo') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">3.- Ingresa el área de quién realiza la captura:</label>
                            <input type="text" wire:model="area" class="form-control" id="resarea" placeholder="Rec. Financieros" wire:click = "checkMail">
                            @error('area') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">4.- Ingresa el nombre del Ente Público:</label>


                            <div class="form-group">
                                <input type='text' wire:model="search" wire:keyup="searchResult" class="form-control" placeholder="Secretaría de Finanzas" wire:click = "checkMail">
                                <!--<label>{{$search}} // {{$ente}}</label>-->

                                <!-- Search result list -->
                                @if($showdiv)
                                    <ul class="list-group">
                                        @if(!empty($records))
                                            @foreach($records as $record)
                                                <button  class="list-group-item list-group-item-action" wire:click="fetchEntesDetail({{ $record->id }})">{{ $record->ente}}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                @endif
                                <div class="clear"></div>
                            </div>
                            <!--<input type="text" wire:model="search" class="form-control" id="resente" placeholder="Secretaría de Finanzas" wire:click = "checkMail">-->
                            
                            @error('ente') <span style="color:red">{{ $message }}<br></span> @enderror

                            

                        </div>
                        <button class="btn btn-primary"  type="submit" value="prueba" id="btn"
                        wire:click = "firstStepSubmit">Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 2 **************** -->
            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">5.- ¿Cuenta actualmente con un Sistema Informático que le ayude a realizar los registros contables y presupuestales 
                                    del proceso de la Contabilidad Gubernamental?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" checked value="1" {{ $pre5 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" value="0" {{ $pre5 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre5') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(1)">Atras</button>
                            <button class="btn btn-primary" wire:click="secondStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 3 **************** -->
            <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">¿Cuál es el nombre del Sistema informático de contabilidad gubernamiental que utiliza?</label><br>
                                <input type="text" wire:model="nameSys" class="form-control" id="resnameSys" placeholder="Nombre del Sistema">
                                @error('nameSys') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Su Sistema es:</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Comprado" {{ $cadp = 'Comprado' ? "checked" : "" }}> Comprado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Arrendado" {{ $cadp = 'Arrendado' ? "checked" : "" }}> Arrendado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Propio" {{ $cadp = 'Propio' ? "checked" : "" }}> Desarrollo Propio</label><br>
                                @error('cadp') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">¿Con qué documentación cuenta?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual" {{ $docsSys = 'manual' ? "checked" : "" }}> Manual de Usuario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="procesos" {{ $docsSys = 'procesos' ? "checked" : "" }}> Documentación de Procesos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual y procesos" {{ $docsSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="ninguno" {{ $docsSys = 'ninguno' ? "checked" : "" }}> Ninguno</label><br>
                                @error('docsSys') <span style="color:red">{{ $message }}<br></span> @enderror   
                            </div>


                            <?php $fcha = date("Y-m-d");?>

                            <div class="form-group">
                                <label for="title">¿Desde cuándo usa este Sistema informático?</label><br>
                                <input type="date" class="form-control col-3" id="fstartSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="startSys" max="<?php echo $fcha;?>""><br>
                                @error('startSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <br><label for="title">¿Cuándo fue la última vez que se realizaron actualizaciones al Sistema apegadas a las normas emitidas por el LGCG?</label><br>
                                <input type="date" id="fupdSys" class="form-control col-3" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="updSys"><br>
                                @error('updSys') <span style="color:red">{{ $message }}<br></span> @enderror

                            </div>


                            
                            <button class="btn btn-secondary" type="button" wire:click="back(2)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirdStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 4 **************** -->
            <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">¿Por qué?</label><br>
                                <textarea type="text" wire:model="noSys" class="form-control" id="resnoSys" placeholder="Motivo por el que no cuenta con un Sistema"> </textarea><br>
                                @error('noSys') <span style="color:red">{{ $message }}<br></span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(2)">Atras</button>
                            <button class="btn btn-primary" wire:click="fourthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 5 **************** comprado -->
            <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">Ingresa la empresa a la que le compraste el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(3)">Atras</button>
                            <button class="btn btn-primary" wire:click="fifthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 6 **************** arrendado-->
            <div class="row setup-content {{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-6">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">Ingresa la empresa a la que le arrendas el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(3)">Atras</button>
                            <button class="btn btn-primary" wire:click="sixthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 7 **************** propio-->
            <div class="row setup-content {{ $currentStep != 7 ? 'displayNone' : '' }}" id="step-7">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">¿Con que documentación de tu Sistema Propio cuentas?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="registro" {{ $infSys = 'registro' ? "checked" : "" }}> Registro</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="patente" {{ $infSys = 'patente' ? "checked" : "" }}> Patente</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ambos" {{ $infSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ninguno" {{ $infSys = 'ninguno' ? "checked" : "" }}> Ninguno</label>
                                <br>@error('infSys') <span style="color:red">{{ $message }}<br></span> @enderror   
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(3)">Atras</button>
                            <button class="btn btn-primary" wire:click="seventhStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 8 **************** -->
            <div class="row setup-content {{ $currentStep != 8 ? 'displayNone' : '' }}" id="step-8">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">6.- ¿Cuenta con respaldos de la información generada por el Sistema?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="1" {{ $pre6 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="0" {{ $pre6 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre6') <span style="color:red">{{ $message }}</span> @enderror<br>
                                <label >Si su respuesta es no, ¿Por qué?</label><br>
                                <input type ="text" class="form-control" wire:model = "NoResSys" placeholder ="Explique por que no cuenta con respaldo">
                                <br>@error('NoResSys') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(2)">Atras</button>
                            <button class="btn btn-primary" wire:click="eigthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 9 **************** -->
            <div class="row setup-content {{ $currentStep != 9 ? 'displayNone' : '' }}" id="step-9">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">¿Con que periodicidad realizan los respaldos?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="diario" {{ $perioRes = 'diario' ? "checked" : "" }}> Diario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="semanal" {{ $perioRes = 'semanal' ? "checked" : "" }}> Semanal</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="mensual" {{ $perioRes = 'mensual' ? "checked" : "" }}> Mensual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="semestral" {{ $perioRes = 'semestral' ? "checked" : "" }}> Semestral</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="anual" {{ $perioRes = 'anual' ? "checked" : "" }}> Anual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="evento" {{ $perioRes = 'evento' ? "checked" : "" }}> Por Evento</label>
                                <br>@error('perioRes') <span style="color:red">{{ $message }}<br></span> @enderror 

                                <br><label for="title">¿Cuándo fue la última vez que se realizó?</label><br>
                                <input type="date" class="form-control col-3" id="flastRes" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="lastRes">
                                <br>@error('lastRes') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(8)">Atras</button>
                            <button class="btn btn-primary" wire:click="ninethStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 10 **************** -->
        <div class="row setup-content {{ $currentStep != 10 ? 'displayNone' : '' }}" id="step-10">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">7.- ¿Realiza los respaldos en medios externos al Sistema? (USB, Otro equipo, Nube, CD/DVD)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="1" {{ $pre7 = '1' ? "checked" : "" }}> Si</label><br>

                                <input type="checkbox" value="1" name="extCheck" wire:model="usb">&nbsp Memoria USB<br>
                                <input type="checkbox" value="1" name="extCheck" wire:model="ddext">&nbsp Disco Duro Externo<br>
                                <input type="checkbox" value="1" name="extCheck" wire:model="cddvd">&nbsp CD/DVD<br>
                                <input type="checkbox" value="1" name="extCheck" wire:model="nube">&nbsp Nube<br>
                                <input type="checkbox" value="1" name="extCheck" wire:model="otroequipo">&nbsp Otro Equipo<br><br>
                                <label style="color:red">{{$alert}}</label><br>

                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="0" {{ $pre7 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre7') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(8)">Atras</button>
                            <button class="btn btn-primary" wire:click="tenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 11 **************** -->
        <div class="row setup-content {{ $currentStep != 11 ? 'displayNone' : '' }}" id="step-11">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">¿Por qué?</label><br>
                                <textarea type="text" wire:model="noRes" class="form-control" id="resnoRes" placeholder="Motivo por el que no realiza respaldos en medios externos."> </textarea><br>
                                @error('noRes') <span style="color:red">{{ $message }}<br></span> @enderror                                

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(10)">Atras</button>
                            <button class="btn btn-primary" wire:click="eleventhStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>        
  
        <!-- ************** STEP 12 **************** -->
        <div class="row setup-content {{ $currentStep != 12 ? 'displayNone' : '' }}" id="step-12">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">8.- ¿El Sistema contable que utiliza genera la información de conformidad a los manuales de Evaluaciones de la Armonización Contable?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="1" {{ $pre8 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="0" {{ $pre8 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre8') <span style="color:red">{{ $message }}</span> @enderror    

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(10)">Atras</button>
                            <button class="btn btn-primary" wire:click="twelfthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 13 **************** -->
        <div class="row setup-content {{ $currentStep != 13 ? 'displayNone' : '' }}" id="step-13">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">9.- ¿El Sistema de Contabilidad Gubernamental que genera la información le permite atender los apartados del SEvAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="1" {{ $pre9 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="0" {{ $pre9 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre9') <span style="color:red">{{ $message }}</span> @enderror    

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(12)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 14 **************** -->
        <div class="row setup-content {{ $currentStep != 14 ? 'displayNone' : '' }}" id="step-14">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">Ingresa cuál de los apartados y en qué porcentaje:</label><br><br>
                            <center>
                            <form class = "form">
                                        <p></p>
                                        <p align="center"></p>
                                        <p></p>
                                        <p align="center"></p>
                                        <p></p>

                                        <p align="right">Registros Contables:</p>
                                        <p align ="center">
                                            <input type="number" wire:model="RegCont9" class="form-control" id="resRegCont9" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegCont9') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                        <p align ="center">
                                        </p><p></p>
                                        
                                        <p align="right">Registros Presupuestales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RegPre9" class="form-control" id="resRegPre9" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegPre9') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                        </p><p></p>
                                        
                                        <p align="right">Registros Administrativos:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RegAdm9" class="form-control" id="resRegAdm9" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegAdm9') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                        </p><p></p>
                                        
                                        <p align="right">Registros Transparencia:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RegTra9" class="form-control" id="resRegTra9" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegTra9') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                        </p><p></p>
                                        
                                        <p align="right">Registros Cuenta Pública:</p>
                                        <p align ="center">
                                            <input type="number" wire:model="RegCP9" class="form-control" id="resRegCP9" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegCP9') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                        </p><p></p>
                                    </form></center>
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(13)">Atras</button>
                            <button class="btn btn-primary" wire:click="fourteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 15 **************** -->
        <div class="row setup-content {{ $currentStep != 15 ? 'displayNone' : '' }}" id="step-15">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">10.- Para el caso de los registros contables, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <form class = "form">

                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Instrumentos Contables:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SInstC10" class="form-control" id="resSInstC10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SInstC10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="InstC10" class="form-control" id="resInstC10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('InstC10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                        
                                        <p align="right">Registros Contables:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SRegCont10" class="form-control" id="resSRegCont10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SRegCont10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RegCont10" class="form-control" id="resRegCont10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegCont10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Reportes Contables:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SRepCont10" class="form-control" id="resSRepCont10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SRepCont10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RepCont10" class="form-control" id="resRepCont10" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RepCont10') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p>
                                        <p>%</p>
                                    </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(13)">Atras</button>
                            <button class="btn btn-primary" wire:click="fifteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 16 **************** -->
        <div class="row setup-content {{ $currentStep != 16 ? 'displayNone' : '' }}" id="step-16">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">11.- Para el caso de los registros Presupuestales, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <form class = "form">

                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Clasificadores Presupuestales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SClasP11" class="form-control" id="resSClasP11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SClasP11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ClasP11" class="form-control" id="resClasP11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ClasP11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Registros Presupuestarios:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SRegPre11" class="form-control" id="resSRegPre11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SRegPre11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RegPre11" class="form-control" id="resRegPre11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RegPre11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Reportes Presupuestarios:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SRepPre11" class="form-control" id="resSRepPre11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SRepPre11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RepPre11" class="form-control" id="resRepPre11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RepPre11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>

                                        <p align="right">Reportes Programáticos:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SPrePro11" class="form-control" id="resSPrePro11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SPrePro11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="PrePro11" class="form-control" id="resPrePro11" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('PrePro11') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>

                                    </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(15)">Atras</button>
                            <button class="btn btn-primary" wire:click="sixteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 17 **************** -->
        <div class="row setup-content {{ $currentStep != 17 ? 'displayNone' : '' }}" id="step-17">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">12.- Para el caso de los registros Administrativos, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <form class = "form">

                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Control de Bienes y Documentos Soporte:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SContBie12" class="form-control" id="resSContBie12" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SContBie12') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ContBie12" class="form-control" id="resContBie12" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ContBie12') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Recursos Federales y Pagos Electrónicos:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="SRecFed12" class="form-control" id="resSRecFed12" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('SRecFed12') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="RecFed12" class="form-control" id="resRecFed12" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('RecFed12') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                    
                                    </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(16)">Atras</button>
                            <button class="btn btn-primary" wire:click="seventeenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 18 **************** -->
        <div class="row setup-content {{ $currentStep != 18 ? 'displayNone' : '' }}" id="step-18">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">13.- Para el caso de los registros de Transparencia y Difusión de la información Financiera derivada del Título Quinto de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                                <form class = "formplus">

                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P1<br>Ente Público</p>
                                        <p></p>
                                        <p align="center">SEvAC<br>P-2-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P2<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Publicar Contenido Contable:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ContSP113" class="form-control" id="resContSP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ContSP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ContEP113" class="form-control" id="resContEP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ContEP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ContSP213" class="form-control" id="resContSP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ContSP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ContEP213" class="form-control" id="resContEP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ContEP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Publicar Contenido Presupuestario:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="PresSP113" class="form-control" id="resPresSP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('PresSP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="PresEP113" class="form-control" id="RESPresEP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('PresEP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="PresSP213" class="form-control" id="RESPresSP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('PresSP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="PresEP213" class="form-control" id="resPresEP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('PresEP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>

                                        <p align="right">Publicar Contenido Programático:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ProgSP113" class="form-control" id="resProgSP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ProgSP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ProgEP113" class="form-control" id="resProgEP113" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ProgEP113') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ProgSP213" class="form-control" id="resProgSP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ProgSP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="ProgEP213" class="form-control" id="resProgEP213" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('ProgEP213') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                    
                                </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(17)">Atras</button>
                            <button class="btn btn-primary" wire:click="eigteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 19 **************** -->
        <div class="row setup-content {{ $currentStep != 19 ? 'displayNone' : '' }}" id="step-19">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">14.- Para el caso de los registros de Transparencia del Título Quinto y Otras Obligaciones de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br><br><br>
                            

                            <p>Título V:</p>
                                <form class = "formplus">                                
                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P1<br>Ente Público</p>
                                        <p></p>
                                        <p align="center">SEvAC<br>P-2-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P2<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Anuales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVASP114" class="form-control" id="resTVASP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVASP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVACP114" class="form-control" id="resTVACP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVACP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVASP214" class="form-control" id="resTVASP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVASP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVACP214" class="form-control" id="resTVACP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVACP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Trimestrales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVTSP114" class="form-control" id="resTVTSP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVTSP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVTCP114" class="form-control" id="resTVTCP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVTCP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVTSP214" class="form-control" id="resTVTSP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVTSP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="TVTCP214" class="form-control" id="resTVTSP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('TVTSP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                </form>

                                <p>Otras Obligaciones:</p>
                                <form class = "formplus">
                                        <p></p>
                                        <p align="center">SEvAC<br>P-1-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P1<br>Ente Público</p>
                                        <p></p>
                                        <p align="center">SEvAC<br>P-2-2022</p>
                                        <p></p>
                                        <p align="center">Criterio P2<br>Ente Público</p>
                                        <p></p>

                                        <p align="right">Anuales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OASP114" class="form-control" id="resOASP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OASP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OACP114" class="form-control" id="resOACP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OACP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OASP214" class="form-control" id="resOASP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OASP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OACP214" class="form-control" id="resOACP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OACP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                        <p align="right">Trimestrales:</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OTSP114" class="form-control" id="resOTSP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OTSP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OTCP114" class="form-control" id="resOTCP114" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OTCP114') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OTSP214" class="form-control" id="resOTSP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OTSP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        <p align ="center">
                                            <input type="number"wire:model="OTCP214" class="form-control" id="resOTCP214" 
                                            placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                            @error('OTCP214') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                        </p><p>%</p>
                                        
                                    </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(18)">Atras</button>
                            <button class="btn btn-primary" wire:click="nineteenthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 20 **************** -->
        <div class="row setup-content {{ $currentStep != 20 ? 'displayNone' : '' }}" id="step-20">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">15.- Para el caso de los registros de Cuenta Pública Estatal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento? <br>NOTA: Solo aplica al Poder Ejecutivo del Estado, en su defecto llenar con 0.</label><br>
                            <form class = "form">
                                
                                <p></p>
                                <p align="center">SEvAC<br>P-2-2022</p>
                                <p></p>
                                <p align="center">Criterio<br>Ente Público</p>
                                <p></p>

                                <p align="right">Resultados Generales y Consolidados:</p>
                                <p align ="center">
                                    <input type="number"wire:model="SResGenCon15" class="form-control" id="resSResGenCon15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('SResGenCon15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="ResGenCon15" class="form-control" id="resResGenCon15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('ResGenCon15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                
                                <p align="right">Tomo del Poder Ejecutivo:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoPE15" class="form-control" id="resSTomoPE15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoPE15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoPE15" class="form-control" id="resTomoPE15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoPE15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Tomo del Poder Legislativo:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoPL15" class="form-control" id="resSTomoPL15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoPL15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoPL15" class="form-control" id="resTomoPL15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoPL15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Tomo del Poder Judicial:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoPJ15" class="form-control" id="resSTomoPJ15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoPJ15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoPJ15" class="form-control" id="resTomoPJ15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoPJ15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Tomo del Órganos Autónomos:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoOA15" class="form-control" id="resSTomoOA15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoOA15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoOA15" class="form-control" id="resTomoOA15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoOA15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Información Financiera Consolidada del Sector Paraestatal:</p>
                                <p align ="center">
                                    <input type="number"wire:model="SInfFin15" class="form-control" id="resSInfFin15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('SInfFin15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="InfFin15" class="form-control" id="resInfFin15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('InfFin15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Tomo del Sector Paraestatal:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoSP15" class="form-control" id="resSTomoSP15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoSP15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoSP15" class="form-control" id="resTomoSP15" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoSP15') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                            </form>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(19)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentiethStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 21 **************** -->
        <div class="row setup-content {{ $currentStep != 21 ? 'displayNone' : '' }}" id="step-21">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                            <label for="title">16.- Para el caso de los registros de Cuenta Pública Municipal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                                <form class = "form">
                                
                                <p></p>
                                <p align="center">SEvAC<br>P-2-2022</p>
                                <p></p>
                                <p align="center">Criterio<br>Ente Público</p>
                                <p></p>

                                <p align="right">Resultados Generales y Consolidados:</p>
                                <p align ="center">
                                    <input type="number"wire:model="SResGenCon16" class="form-control" id="resSResGenCon16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('SResGenCon16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="ResGenCon16" class="form-control" id="resResGenCon16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('ResGenCon16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                
                                <p align="right">Información Financiera del Municipio:</p>
                                <p align ="center">
                                    <input type="number"wire:model="SInfFinMun16" class="form-control" id="resSInfFinMun16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('SInfFinMun16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="InfFinMun16" class="form-control" id="resInfFinMun16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('InfFinMun16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Tomo del Sector Paramunicipal:</p>
                                <p align ="center">
                                    <input type="number"wire:model="STomoSP16" class="form-control" id="resSTomoSP16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('STomoSP16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="TomoSP16" class="form-control" id="resTomoSP16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('TomoSP16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                <p align="right">Información Financiera Consolidada del sector Paramunicipal:</p>
                                <p align ="center">
                                    <input type="number"wire:model="SInfFin16" class="form-control" id="resSInfFin16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('SInfFin16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>
                                <p align ="center">
                                    <input type="number"wire:model="InfFin16" class="form-control" id="resInfFin16" 
                                    placeholder = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp%">
                                    @error('InfFin16') <span style = "color:red" >{{ $message }}<br></span> @enderror
                                </p><p>%</p>

                                
                            </form>


                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(20)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyfirstStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 22 **************** -->
        <div class="row setup-content {{ $currentStep != 22 ? 'displayNone' : '' }}" id="step-22">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">17.- En cuestión de conectividad ¿Su ente público cuenta con conexión a Internet?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre17" value="1" {{ $pre17 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre17" value="0" {{ $pre17 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre17') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(21)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentysecondStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 23 **************** -->
        <div class="row setup-content {{ $currentStep != 23 ? 'displayNone' : '' }}" id="step-23">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">18.- ¿Con cuántas personas especializadas en TIC'S dispone?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="0" {{ $pre18 = '0' ? "checked" : "" }}> 0</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="1" {{ $pre18 = '1' ? "checked" : "" }}> 1</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="2-5" {{ $pre18 = '2-5' ? "checked" : "" }}> 2-5</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="6-10" {{ $pre18 = '6-10' ? "checked" : "" }}> 6-10</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre18" value="Más de 10" {{ $pre18 = 'Más de 10' ? "checked" : "" }}> Más de 10</label>
                                
                                <br>@error('pre18') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(22)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentythirdStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>            

        <!-- ************** STEP 24 **************** -->
        <div class="row setup-content {{ $currentStep != 24 ? 'displayNone' : '' }}" id="step-24">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">19.- ¿Cómo considera la calidad de la conexión a Internet?</label><br>
                                
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
                                

                                
                                <br>@error('pre19') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(23)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyfourthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 25 **************** -->
        <div class="row setup-content {{ $currentStep != 25 ? 'displayNone' : '' }}" id="step-25">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

                                <label for="title">20.- ¿Cuáles son las fallas más frecuentes?</label><br>
                                <textarea type="text" wire:model="pre20" class="form-control" id="respre20" placeholder="Escriba aquí las fallas mas frecuentes en su red de Internet."> </textarea><br>
                                @error('pre20') <span style="color:red">{{ $message }}<br></span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(24)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyfifthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 26 **************** -->
        <div class="row setup-content {{ $currentStep != 26 ? 'displayNone' : '' }}" id="step-26">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">

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
                                
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(25)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentysixthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 27 **************** -->
        <div class="row setup-content {{ $currentStep != 27 ? 'displayNone' : '' }}" id="step-27">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">22.- ¿Cuenta con una página web oficial del Ente Público?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre22" checked value="1" {{ $pre22 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre22" value="0" {{ $pre22 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre22') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(26)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyseventhStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 28 **************** -->
        <div class="row setup-content {{ $currentStep != 28 ? 'displayNone' : '' }}" id="step-28">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">¿Cuál es el link?</label><br>
                                <input type="text" wire:model="link" class="form-control" id="reslink" placeholder = "http://www.ejemplo.com"></label><label><br>
                                @error('link') <span style="color:red">{{ $message }}<br></span> @enderror

                                <label for="title">¿Cuál es el link dónde publica el apartado de transparencia conforme a la LGCG?</label><br>
                                <input type="text" wire:model="linklgcg" class="form-control" id="reslinklgcg" placeholder = "http://www.ejemplo.com">
                                <br>@error('linklgcg') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(27)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyeigthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div> 

        <!-- ************** STEP 29 **************** -->
        <div class="row setup-content {{ $currentStep != 29 ? 'displayNone' : '' }}" id="step-29">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspI. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h4><br><br>
                            <div class="form-group">
                                <label for="title">¿Por qué motivo?</label><br>
                                <textarea type="text" wire:model="motivo" class="form-control" id="resmotivo" placeholder="Ingrese el motivo por el cual no cuenta con un sitio."> </textarea><br>
                                @error('motivo') <span style="color:red">{{ $message }}<br></span> @enderror
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(27)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyninethStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 30 **************** -->
        <div class="row setup-content {{ $currentStep != 30 ? 'displayNone' : '' }}" id="step-30">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">
                                <label for="title">23.- En materia de contabilidad gubernamental, del periodo de Octubre del 2021 a la fecha, ¿Cuántas capacitaciones ha recibido el ente público?</label><br>
                                
                                <label for="title">Cantidad:</label><br>
                                <input type="number" wire:model="Cantidad22" class="form-control" id="resCantidad22"  placeholder="Número de capacitaciones recibidas" >
                                @error('Cantidad22') <span style="color:red">{{ $message }}<br></span> @enderror<br>    

                                <label for="title">Temas: </label><br>
                                <input type="text" wire:model="Temas22" wire:click="statCap" class="form-control" id="resTemas22" placeholder="SEvAC, LGCG, etc" >
                                @error('Temas22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Impartidos por: </label><br>
                                <input type="text" wire:model="Impartido22" wire:click="statCap"  class="form-control" id="resImpartido22" placeholder="Empresa que impartió la capacitación" >
                                @error('Impartido22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Área capacitada: </label><br>
                                <input type="text" wire:model="Area22" wire:click="statCap"  class="form-control" id="resArea22" placeholder="Recursos Financieros">
                                @error('Area22') <span style="color:red">{{ $message }}<br></span> @enderror<br>
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(27)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtiesthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 31 **************** -->
        <div class="row setup-content {{ $currentStep != 31 ? 'displayNone' : '' }}" id="step-31">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">
                                <label for="title">24.- ¿El personal encargado de dar atención y cumplimiento a la plataforma del SEvAC es?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="interno" {{ $pre23 = 'interno' ? "checked" : "" }}> Interno</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="externo" {{ $pre23 = 'externo' ? "checked" : "" }}> Externo</label><br>
                                @error('pre23') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">Para cualquier respuesta mencionar el área del ente público o empresa a que corresponde. </label><br>
                                <input type="text" wire:model="area23" class="form-control" id="resarea23" placeholder="Recursos Financieros">
                                @error('area23') <span style="color:red">{{ $message }}<br></span> @enderror<br>
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(30)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtyfirstStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 32 **************** -->
        <div class="row setup-content {{ $currentStep != 32 ? 'displayNone' : '' }}" id="step-32">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">

                                <label for="title">25.- ¿Consideras necesario reforzar la capacitación en el uso de la plataforma SEvAC, para la mejora de la evaluación?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="1" {{ $pre24 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="0" {{ $pre24 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre24') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(31)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtysecondStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 33 **************** -->
        <div class="row setup-content {{ $currentStep != 33 ? 'displayNone' : '' }}" id="step-33">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">

                            <label for="title">26.- ¿Sobre qué temas de capacitación que se enlistan a continuación requiere para la mejora de la evaluación contable?</label><br>
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

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(32)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtythirdStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 34 **************** -->
        <div class="row setup-content {{ $currentStep != 34 ? 'displayNone' : '' }}" id="step-34">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">

                                <label for="title">27.- ¿Es atendido oportunamente por el Ente Fiscalizador Local (ASM), para disipar sus dudas respecto a las observaciones de los reactivos evaluados?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="1" {{ $pre26 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="0" {{ $pre26 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre26') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque26" class="form-control" id="resporque26" placeholder="¿Por qué?">
                                @error('porque26') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(33)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtyfourthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 35 **************** -->
        <div class="row setup-content {{ $currentStep != 35 ? 'displayNone' : '' }}" id="step-35">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">

                                <label for="title">28.- ¿Es atendido oportuna y satisfactoriamente en el tiempo de solventación en cuanto a las dudas de los reactivos observados por el Ente Fiscalizador Local (ASM)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="1" {{ $pre27 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="0" {{ $pre27 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre27') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque27" class="form-control" id="resporque27" placeholder="¿Por qué?">
                                @error('porque27') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(34)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtyfifthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

                    <!-- ************** STEP 36 **************** -->
                    <div class="row setup-content {{ $currentStep != 36 ? 'displayNone' : '' }}" id="step-36">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>
                            <div class="form-group">

                                <label for="title">29.- ¿Describa lo que sugiere que debería implementar el Ente Fiscalizador Local (ASM), para su mejor atención en cuanto a las evaluaciones relacionadas con el SEvAC?</label><br>
                                <textarea type="text" wire:model="pre28" class="form-control" id="resnoSys" placeholder="Sugerencias"> </textarea><br>
                                @error('pre28') <span style="color:red">{{ $message }}</span> @enderror


                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(35)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtysixthStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

                    <!-- ************** STEP 37 **************** -->
                    <div class="row setup-content {{ $currentStep != 37 ? 'displayNone' : '' }}" id="step-37">
                <div class="col-xs-12">
                    <div class="col-md-12">
                    <h4>&nbsp&nbsp&nbsp&nbsp&nbspII. CAPACITACIÓN Y EVALUACIÓN.</h4><br><br>


                            <h5><center>Presione el botón de enviar para registrar sus respuestas al cuestionario, o regrese para revisar las respuestas.</center></h5><br>
                                
                                

                            
                            <br><button class="btn btn-secondary" type="button" wire:click="back(36)">Atras</button>
                            <button class="btn btn-success" wire:click="submitForm" type="button" >Enviar</button>
                    </div>
                </div>
            </div>

            
                    <!-- ************** STEP 38 **************** -->
                    <div class="row setup-content {{ $currentStep != 38 ? 'displayNone' : '' }}" id="step-38">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <center><h3>{{$email}} Ha respondido la encuesta, gracias por participar.</h3><br>
                            <button class="btn btn-success" wire:click="resetSteps" type="button">Volver al Inicio</button></center>
                    </div>
                </div>
            </div>


</div>

