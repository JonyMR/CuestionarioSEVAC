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
                        <h3> Bienvenido</h3><br>
                        <div class="form-group">

                            <h3>Objetivo.</h3>
                            <p>Identificar la situación que guardan en materia de evaluación, los elementos que conforman los resultados del SEvAC, de cada uno de los entes Públicos
                                del Estado para estar en condiciiones de sugerir alternativas de solución en sus procesos de armonización contable.</p>

                            <h3>Importancia.</h3>
                            <p>Para el llenado del presente cuestionario, se requiere que el personal sea el responsable de las áreas de los entes públicos que guarden relación con 
                                los temas contables, presupuestarios, administrativos, transparencia y de informática.
                            </p><br>

                            <p>Deberá contar con la información soporte a nivel detalle(reactivos, secciones y apartados) de las últimas evaluaciones SEvAC de su respectivo Ente 
                                Público.</p><br>

                            <p>El área informática deberá tener claridad sobre los elementos que dan soporte a los procesos contemplados en el SEvAC, en tiempo real 
                                y de otra temporalidad.
                            </p><br>
                        </div>
                        <button class="btn btn-primary" wire:click="ceroStepSubmit" >Comenzar</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 1 **************** -->
            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                <div class="col-xs-12">
                <div class="col-md-12">
                        <br><br><br><h3> <center>I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.<center></h3><br><br>
                        <div class="form-group">
                            <br><h4>DATOS DEL ENTE PÚBLICO.</h4>
                            <label for="title">1.- Ingresa tu correo electrónico:</label>
                            <input type="text" wire:model="email" class="form-control" id="correo" placeholder="usuario@ejemplo.com" name = "correo">
                            @error('email') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">2.- Ingresa tu nombre completo y cargo:</label>
                            <input type="text" wire:model="nombre" class="form-control" id="resnombre" placeholder="Nombre Completo">
                            @error('nombre') <span style="color:red">{{ $message }}<br></span> @enderror
                            
                            <p></p><input type="text" wire:model="cargo" class="form-control" id="rescargo" placeholder="Cargo">
                            @error('cargo') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">3.- Ingresa tu área de Adscripción:</label>
                            <input type="text" wire:model="area" class="form-control" id="resarea" placeholder="Área de Adscripción">
                            @error('area') <span style="color:red">{{ $message }}<br></span> @enderror

                            <br><label for="title">4.- Ingresa el Ente Público al que perteneces:</label>
                            <input type="text" wire:model="ente" class="form-control" id="resente" placeholder="Ente Público">
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                                <label for="title">5.- ¿Cuenta actualmente con un Sistema que le ayude a realizar el proceso de la Contabilidad Gubernamental?</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">¿Cuál es el nombre del Sistema que utiliza?</label><br>
                                <input type="text" wire:model="nameSys" class="form-control" id="resnameSys" placeholder="Nombre del Sistema">
                                @error('nameSys') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Su sistema es:</label><br>
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

                            <div class="form-group">
                                <label for="title">¿Desde cuando usa este sistema?</label><br>
                                <input type="date" id="fstartSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="startSys"><br>
                                @error('startSys') <span style="color:red">{{ $message }}<br></span> @enderror

                                <br><label for="title">¿Cuándo fue la última vez que se realizaron acualizaciones al sistema apegadas a las normas emitidas por el LGCG?</label><br>
                                <input type="date" id="fupdSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="updSys"><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">6.- ¿Cuenta con respaldos de la información generada por el Sistema?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="1" {{ $pre6 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="0" {{ $pre6 = '0' ? "checked" : "" }}> No</label>
                                <br>@error('pre6') <span style="color:red">{{ $message }}</span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">¿Con que periodicidad realizan los respaldos?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="diario" {{ $perioRes = 'diario' ? "checked" : "" }}> Diario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="semanal" {{ $perioRes = 'semanal' ? "checked" : "" }}> Semanal</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="mensual" {{ $perioRes = 'mensual' ? "checked" : "" }}> Mensual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="anual" {{ $perioRes = 'anual' ? "checked" : "" }}> Anual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="evento" {{ $perioRes = 'evento' ? "checked" : "" }}> Por Evento</label>
                                <br>@error('perioRes') <span style="color:red">{{ $message }}<br></span> @enderror 

                                <br><label for="title">¿Cuándo fue la última vez que se realizó?</label><br>
                                <input type="date" id="flastRes" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="lastRes">
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">7.- ¿Realiza los respaldos en medios externos al sistema? (USB, Otro equipo, Nube, CD/DVD)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="1" {{ $pre7 = '1' ? "checked" : "" }}> Si</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">¿Por qué?</label><br>
                                <textarea type="text" wire:model="noRes" class="form-control" id="resnoRes" placeholder="Motivo por el que no cuenta con un Sistema"> </textarea><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">8.- ¿El Sistema contable que utiliza genera la información de conformidad a los Manuales de Evaluaciones de la Armonización Contable?</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">9.- ¿El Sistema de contabilidad que genera la infomación le permite atender los apartados del SEvAC?</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">Ingresa cual de los apartados y en que porcentaje:</label><br>

                            <label>Registros Contables:<input type="number" wire:model="RegCont9" class="form-control" id="resRegCont9" placeholder = "100%"
                            required pattern="[0-9],{3}" max="100" min="0"></label><br>
                            @error('RegCont9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestales:<input type="number" wire:model="RegPre9" class="form-control" id="resRegPre9" placeholder = "100%"></label><br>
                            @error('RegPre9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Administrativos:<input type="number" wire:model="RegAdm9" class="form-control" id="resRegAdm9" placeholder = "100%"></label><br>
                            @error('RegAdm9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Transparencia:<input type="number" wire:model="RegTra9" class="form-control" id="resRegTra9" placeholder = "100%"></label><br>
                            @error('RegTra9') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Cuenta Pública:<input type="number" wire:model="RegCP9" class="form-control" id="resRegCP9" placeholder = "100%"></label><br>
                            @error('RegCP9') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">10.- Para el caso de los registros contables, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Instrumentos Contables:<input type="number" wire:model="InstC10" class="form-control" id="resInstC10" placeholder = "100%"></label><br>
                            @error('InstC10') <span style = "color:red" >{{ $message }}<br></span> @enderror

                            <label>Registros Contables:<input type="number" wire:model="RegCont10" class="form-control" id="resRegCont10" placeholder = "100%"></label><br>
                            @error('RegCont10') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Contables:<input type="number" wire:model="RepCont10" class="form-control" id="resRepCont10" placeholder = "100%"></label><br>
                            @error('RepCont10') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">11.- Para el caso de los registros Presupuestales, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Clasificadores Presupuestales:<input type="number" wire:model="ClasP11" class="form-control" id="resClasP11" placeholder = "100%"></label><br>
                            @error('ClasP11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestarios:<input type="number" wire:model="RegPre11" class="form-control" id="resRegPre11" placeholder = "100%"></label><br>
                            @error('RegPre11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Presupuestarios:<input type="number" wire:model="RepPre11" class="form-control" id="resRepPre11" placeholder = "100%"></label><br>
                            @error('RepPre11') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Reportes Programáticos:<input type="number" wire:model="PrePro11" class="form-control" id="PrePro11" placeholder = "100%"></label><br>
                            @error('PrePro11') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">12.- Para el caso de los registros Administrativos, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Control de bienes y documentos soporte:<input type="number" wire:model="ContBie12" class="form-control" id="resContBie12" placeholder = "100%"></label><br>
                            @error('ContBie12') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Recursos Federales y Pagos Electrónicos:<input type="number" wire:model="RecFed12" class="form-control" id="resRecFed12" placeholder = "100%"></label><br>
                            @error('RecFed12') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">13.- Para el caso de los registros de Transparencia y Difusión de la información Financiera derivada del Título Quinto de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Publicar Contenido Contable:<input type="number" wire:model="ContCont13" class="form-control" id="resContCont13" placeholder = "100%"></label><br>
                            @error('ContCont13') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Presupuestario:<input type="number" wire:model="ContPre13" class="form-control" id="resContPre13" placeholder = "100%"></label><br>
                            @error('ContPre13') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Programático:<input type="number" wire:model="ContProg13" class="form-control" id="resContProg13" placeholder = "100%"></label><br>
                            @error('ContProg13') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">14.- Para el caso de los registros de Transparencia del Título Quinto y Otras Obligaciones de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <h2>Publicar Título V</h2>

                            <label>Anuales:<input type="number" wire:model="TVAn14" class="form-control" id="resTVAn14" placeholder = "100%"></label><br>
                            @error('TVAn14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="number" wire:model="TVTri14" class="form-control" id="resTVTri14" placeholder = "100%"></label><br>
                            @error('TVTri14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <h2>Publicar Otras Obligaciones</h2>

                            <label>Anuales:<input type="number" wire:model="OtrAn14" class="form-control" id="resOtrAn14" placeholder = "100%"></label><br>
                            @error('OtrAn14') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="number" wire:model="OtrTri14" class="form-control" id="resOtrTri14" placeholder = "100%"></label><br>
                            @error('OtrTri14') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">15.- Para el caso de los registros de Cuenta Pública Estatal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento? (De aplicación exclusiva al Ejecutivo del Estado).</label><br>

                            <label>Resultados Generales y Consolidados:<input type="number" wire:model="ResGenCon15" class="form-control" id="resResGenCon15" placeholder = "100%"></label><br>
                            @error('ResGenCon15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Ejecutivo:<input type="number" wire:model="TomoPE15" class="form-control" id="resTomoPE15" placeholder = "100%"></label><br>
                            @error('TomoPE15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Legislativo:<input type="number" wire:model="TomoPL15" class="form-control" id="resTomoPL15" placeholder = "100%"></label><br>
                            @error('TomoPL15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Poder Judicial:<input type="number" wire:model="TomoPJ15" class="form-control" id="resTomoPJ15" placeholder = "100%"></label><br>
                            @error('TomoPJ15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo de Órganos Autónomos:<input type="number" wire:model="TomoOA15" class="form-control" id="resTomoOA15" placeholder = "100%"></label><br>
                            @error('TomoOA15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera Consolidada del Sector Paraestatal:<input type="number" wire:model="InfFin15" class="form-control" id="resInfFin15" placeholder = "100%"></label><br>
                            @error('InfFin15') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Sector Paraestatal:<input type="number" wire:model="TomoSP15" class="form-control" id="resTomoSP15" placeholder = "100%"></label><br>
                            @error('TomoSP15') <span style="color:red">{{ $message }}<br></span> @enderror

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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">
                            <label for="title">16.- Para el caso de los registros de Cuenta Pública Municipal, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?.</label><br>

                            <label>Resultados Generales y Consolidados:<input type="number" wire:model="ResGenCon16" class="form-control" id="resResGenCon16" placeholder = "100%"></label><br>
                            @error('ResGenCon16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera del Municipio:<input type="number" wire:model="InfFinMun16" class="form-control" id="resInfFinMun16" placeholder = "100%"></label><br>
                            @error('InfFinMun16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Tomo del Sector Paramunicipal:<input type="number" wire:model="TomoSP16" class="form-control" id="resTomoSP16" placeholder = "100%"></label><br>
                            @error('TomoSP16') <span style="color:red">{{ $message }}<br></span> @enderror

                            <label>Información Financiera Consolidada del Sector Paramunicipal:<input type="number" wire:model="InfFin16" class="form-control" id="resInfFin16" placeholder = "100%"></label><br>
                            @error('InfFin16') <span style="color:red">{{ $message }}<br></span> @enderror


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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">18.- ¿Cuenta con personas especializadas en TIC'S?</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">19.- ¿Cómo considera la calidad de la conexión a Internet? Siendo 1 muy malo y 10 excelente.</label><br>
                                <br><label>Muy malo</label><br><br>
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
                                <br><br><label>Excelente</label>

                                
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
                            <div class="form-group">

                                <label for="title">20.- ¿Cuáles son las fallas mas frecuentes?</label><br>
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
                    <h3> I. SISTEMA Y CONTENIDOS DE LA EVALUACIÓN DE LA CONTABILIDAD GUBERNAMENTAL.</h3>
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
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">
                                <label for="title">22.- En materia de contabilidad Gubernamental, del periodo de Octubre del 2021 a la fecha, ¿Cuantas capacitaciones ha recibido el ente público?</label><br>
                                
                                <label for="title">Cantidad: </label><br>
                                <input type="number" wire:model="Cantidad22" class="form-control" id="resCantidad22" placeholder="Cantidad">
                                @error('Cantidad22') <span style="color:red">{{ $message }}<br></span> @enderror<br>    

                                <label for="title">Temas: </label><br>
                                <input type="text" wire:model="Temas22" class="form-control" id="resTemas22" placeholder="Temas">
                                @error('Temas22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Impartidos por: </label><br>
                                <input type="text" wire:model="Impartido22" class="form-control" id="resImpartido22" placeholder="Empresa que lo impartio">
                                @error('Impartido22') <span style="color:red">{{ $message }}<br></span> @enderror<br>

                                <label for="title">Área capacitada: </label><br>
                                <input type="text" wire:model="Area22" class="form-control" id="resArea22" placeholder="Área capacitada">
                                @error('Area22') <span style="color:red">{{ $message }}<br></span> @enderror<br>
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
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">
                                <label for="title">23.- ¿Quién es el personal encargado de dar atención y cumplimiento a la plataforma del SEvAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="interno" {{ $pre23 = 'interno' ? "checked" : "" }}> Interno</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre23" value="externo" {{ $pre23 = 'externo' ? "checked" : "" }}> Externo</label><br>
                                @error('pre23') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">Para cualquier respuesta mencionar de que área del ente público o empresa. </label><br>
                                <input type="text" wire:model="area23" class="form-control" id="resarea23" placeholder="Área">
                                @error('area23') <span style="color:red">{{ $message }}<br></span> @enderror<br>
                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(27)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyeightStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 29 **************** -->
        <div class="row setup-content {{ $currentStep != 29 ? 'displayNone' : '' }}" id="step-29">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">

                                <label for="title">24.- ¿Consideras necesario reforzar la capacitación en el uso de la plataforma SEvAC, para la mejora de la evaluación?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="1" {{ $pre24 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre24" value="0" {{ $pre24 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre24') <span style="color:red">{{ $message }}</span> @enderror

                            </div>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(28)">Atras</button>
                            <button class="btn btn-primary" wire:click="twentyninethStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 30 **************** -->
        <div class="row setup-content {{ $currentStep != 30 ? 'displayNone' : '' }}" id="step-30">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">

                            <label for="title">25.- ¿Sobre qué temas de capacitación que se enlistan a continuación consideras que pudieran apoyarte para la mejora de la evaluación contable?</label><br>
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
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(29)">Atras</button>
                            <button class="btn btn-primary" wire:click="thirtiethStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 31 **************** -->
        <div class="row setup-content {{ $currentStep != 31 ? 'displayNone' : '' }}" id="step-31">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">

                                <label for="title">26.- ¿Es atendido oportunamente por el Ente Fiscalizador Local (ASM), para disipar sus dudas respecto a las observaciones de los reactivos evaluados?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="1" {{ $pre26 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre26" value="0" {{ $pre26 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre26') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque26" class="form-control" id="resporque26" placeholder="¿Por qué?">
                                @error('porque26') <span style="color:red">{{ $message }}<br></span> @enderror<br>

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
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">

                                <label for="title">27.- ¿Es atendido oportuna y satisfactoriamente en el tiempo de solventación en cuanto a las dudas de los reactivos observados por el Ente Fiscalizador Local (ASM)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="1" {{ $pre27 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre27" value="0" {{ $pre27 = '0' ? "checked" : "" }}> No</label><br>
                                @error('pre27') <span style="color:red">{{ $message }}</span> @enderror

                                <br><label for="title">¿Por qué?</label><br>
                                <input type="text" wire:model="porque27" class="form-control" id="resporque27" placeholder="¿Por qué?">
                                @error('porque27') <span style="color:red">{{ $message }}<br></span> @enderror<br>

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
                            <h3> II. CAPACITACIÓN Y EVALUACIÓN.</h3>
                            <div class="form-group">

                                <label for="title">28.- ¿Describa lo que sugiere que debería implementar el Ente Fiscalizador Local (ASM), para su mejor atención en cuanto a las evaluaciones relacionadas con el SEvAC?</label><br>
                                <textarea type="text" wire:model="pre28" class="form-control" id="resnoSys" placeholder="Sugerencias"> </textarea><br>
                                @error('pre28') <span style="color:red">{{ $message }}</span> @enderror


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
                            <h3> Formulario terminado</h3>
                            <center><div class="form-group">

                                <label for="title">Presione el botón de Enviar para terminar o revise de nuevo las preguntas.</label><br>


                            </div></center>
                            <center>
                            
                            <button class="btn btn-secondary" type="button" wire:click="back(33)">Atras</button>
                            <button class="btn btn-success" wire:click="submitForm" type="button">Enviar</button>
                            </center>
                    </div>
                </div>
            </div>

                    <!-- ************** STEP 35 **************** -->
                    <div class="row setup-content {{ $currentStep != 35 ? 'displayNone' : '' }}" id="step-35">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <center><h1> Gracias por tu participación.</h1></center>
                    </div>
                </div>
            </div>
















</div>

