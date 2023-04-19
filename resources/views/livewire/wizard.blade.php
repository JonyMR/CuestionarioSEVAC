<div>
   
        @if(!empty($successMessage))
        <div class="alert alert-success">
        {{ $successMessage }}
        </div>
        @endif
        
        <div class="text-center">
            <!-- progressbar -->
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
            <li class="{{ $currentStep != 34 ? '' : 'active' }}"><a type="button"></a></li>
            </ul>
        </div>

        <!-- ************** STEP 1 **************** -->
            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                <div class="col-xs-12">
                <div class="col-md-12">
                        <h3> Step 1</h3>
                        <div class="form-group">

                            <label for="title">1.- Ingresa tu correo electrónico:</label>
                            <input type="text" wire:model="email" class="form-control" id="resemail" placeholder="Correo electrónico"><br>
                            @error('email') <span class="error">{{ $message }}<br></span> @enderror

                            <label for="title">2.- Ingresa tu nombre completo y cargo:</label>
                            <input type="text" wire:model="nombre" class="form-control" id="resnombre" placeholder="Nombre Completo">
                            @error('nombre') <span class="error">{{ $message }}<br></span> @enderror
                            <p></p><input type="text" wire:model="cargo" class="form-control" id="rescargo" placeholder="Cargo"><br>
                            @error('cargo') <span class="error">{{ $message }}<br></span> @enderror

                            <label for="title">3.- Ingresa tu área de adscripción:</label>
                            <input type="text" wire:model="area" class="form-control" id="resarea" placeholder="Área de adscripción"><br>
                            @error('area') <span class="error">{{ $message }}<br></span> @enderror

                            <label for="title">4.- Ingresa el Ente Público al que perteneces:</label>
                            <input type="text" wire:model="ente" class="form-control" id="resente" placeholder="Ente Público"><br>
                            @error('ente') <span class="error">{{ $message }}<br></span> @enderror

                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Siguiente</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 2 **************** -->
            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 2</h3>
                            <div class="form-group">
                                <label for="title">5.- ¿Cuenta actualmente con un Sistema que le ayude a realizar el proceso de la Contabilidad Gubernamental?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" value="1" {{ $pre5 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre5" value="0" {{ $pre5 = '0' ? "checked" : "" }}> No</label>
                                @error('pre5') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 3 **************** -->
            <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 3</h3>
                            <div class="form-group">

                                <label for="title">a. ¿Cuál es el nombre del Sistema que utiliza?</label><br>
                                <input type="text" wire:model="nameSys" class="form-control" id="resnameSys" placeholder="Nombre del Sistema">
                                @error('nameSys') <span class="error">{{ $message }}<br></span> @enderror<br>

                                <label for="title">b. Su sistema es: {{$cadp}}</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Comprado" {{ $cadp = 'Comprado' ? "checked" : "" }}> Comprado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Arrendado" {{ $cadp = 'Arrendado' ? "checked" : "" }}> Arrendado</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="cadp" value="Propio" {{ $cadp = 'Propio' ? "checked" : "" }}> Desarrollo Propio</label>
                                @error('cadp') <span class="error">{{ $message }}<br></span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">c. ¿Con qué documentación cuenta?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual" {{ $docsSys = 'manual' ? "checked" : "" }}> Manual de Usuario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="procesos" {{ $docsSys = 'procesos' ? "checked" : "" }}> Documentación de Procesos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="manual y procesos" {{ $docsSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="docsSys" value="ninguno" {{ $docsSys = 'ninguno' ? "checked" : "" }}> Ninguno</label>
                                @error('docsSys') <span class="error">{{ $message }}<br></span> @enderror   
                            </div>

                            <div class="form-group">
                                <label for="title">d. ¿Desde cuando usa este sistema?</label><br>
                                <input type="date" id="fstartSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="startSys"><br>
                                @error('startSys') <span class="error">{{ $message }}<br></span> @enderror

                                <br><label for="title">e. ¿cuándo fue la última vez que se realizaron acualizaciones al sistema apegadas a las normas emitidas por el LGCG?</label><br>
                                <input type="date" id="fupdSys" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="updSys">
                                @error('updSys') <span class="error">{{ $message }}<br></span> @enderror

                            </div>


                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="thirdStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 4 **************** -->
            <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 4</h3>
                            <div class="form-group">

                                <label for="title">a. ¿Por qué?</label><br>
                                <textarea type="text" wire:model="noSys" class="form-control" id="resnoSys" placeholder="Motivo por el que no cuenta con un Sistema"> </textarea><br>
                                @error('noSys') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="fourthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 5 **************** comprado -->
            <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 5</h3>
                            <div class="form-group">
                                <label for="title">a. Ingresa la empresa a la que le compraste el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="fifthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 6 **************** arrendado-->
            <div class="row setup-content {{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-6">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 6</h3>
                            <div class="form-group">
                                <label for="title">a. Ingresa la empresa a la que le arrendas el Sistema:</label><br>
                                <input type="text" wire:model="infSys" class="form-control" id="resinfSys" placeholder="Nombre de la Empresa"><br>
                                @error('infSys') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="sixthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 7 **************** propio-->
            <div class="row setup-content {{ $currentStep != 7 ? 'displayNone' : '' }}" id="step-7">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 5</h3>
                            <div class="form-group">
                                <label for="title">a. ¿Con que documentación de tu Sistema Propio cuentas?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="registro" {{ $infSys = 'registro' ? "checked" : "" }}> Registro</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="patente" {{ $infSys = 'patente' ? "checked" : "" }}> Patente</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ambos" {{ $infSys = 'ambos' ? "checked" : "" }}> Ambos</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="infSys" value="ninguno" {{ $infSys = 'ninguno' ? "checked" : "" }}> Ninguno</label>
                                @error('infSys') <span class="error">{{ $message }}<br></span> @enderror   
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="seventhStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 8 **************** -->
            <div class="row setup-content {{ $currentStep != 8 ? 'displayNone' : '' }}" id="step-8">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 8</h3>
                            <div class="form-group">

                                <label for="title">6.- ¿Cuenta con respaldos de la información generada por el Sistema?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="1" {{ $pre6 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre6" value="0" {{ $pre6 = '0' ? "checked" : "" }}> No</label>
                                @error('pre6') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="eigthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 9 **************** -->
            <div class="row setup-content {{ $currentStep != 9 ? 'displayNone' : '' }}" id="step-9">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 9</h3>
                            <div class="form-group">

                                <label for="title">a. ¿Con que periodicidad realizan los respaldos?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="diario" {{ $perioRes = 'diario' ? "checked" : "" }}> Diario</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="semanal" {{ $perioRes = 'semanal' ? "checked" : "" }}> Semanal</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="mensual" {{ $perioRes = 'mensual' ? "checked" : "" }}> Mensual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="anual" {{ $perioRes = 'anual' ? "checked" : "" }}> Anual</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="perioRes" value="evento" {{ $perioRes = 'evento' ? "checked" : "" }}> Por Evento</label>
                                @error('perioRes') <span class="error">{{ $message }}<br></span> @enderror 

                                <br><label for="title">b. ¿Cuándo fue la última vez que se realizó?</label><br>
                                <input type="date" id="flastRes" name="trip-start" value="2018-07-22" min="2018-01-01" max="2023-12-31" wire:model="lastRes">
                                @error('lastRes') <span class="error">{{ $message }}<br></span> @enderror
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="ninethStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(8)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 10 **************** -->
        <div class="row setup-content {{ $currentStep != 10 ? 'displayNone' : '' }}" id="step-10">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 10</h3>
                            <div class="form-group">

                                <label for="title">7.- ¿Realiza los respaldos en medios externos al sistema? (USB, Otro equipo, Nube, CD/DVD)?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="1" {{ $pre7 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre7" value="0" {{ $pre7 = '0' ? "checked" : "" }}> No</label>
                                @error('pre7') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="tenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(8)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 11 **************** -->
        <div class="row setup-content {{ $currentStep != 11 ? 'displayNone' : '' }}" id="step-11">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 11</h3>
                            <div class="form-group">
                            <label for="title">a. ¿Por qué?</label><br>
                                <textarea type="text" wire:model="noRes" class="form-control" id="resnoRes" placeholder="Motivo por el que no cuenta con un Sistema"> </textarea><br>
                                @error('noRes') <span class="error">{{ $message }}<br></span> @enderror                                

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="eleventhStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(10)">Atras</button>
                    </div>
                </div>
            </div>        
  
        <!-- ************** STEP 12 **************** -->
        <div class="row setup-content {{ $currentStep != 12 ? 'displayNone' : '' }}" id="step-12">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 12</h3>
                            <div class="form-group">
                            <label for="title">8.- ¿El Sistema contable que utiliza genera la información de conformidad a los Manuales de Evaluaciones de la Armonización Contable?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="1" {{ $pre8 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre8" value="0" {{ $pre8 = '0' ? "checked" : "" }}> No</label>
                                @error('pre7') <span class="error">{{ $message }}</span> @enderror    

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="twelfthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(10)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 13 **************** -->
        <div class="row setup-content {{ $currentStep != 13 ? 'displayNone' : '' }}" id="step-13">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 13</h3>
                            <div class="form-group">
                            <label for="title">9.- ¿El Sistema de contabilidad que genera la infomación le permite atender los apartados del SEvAC?</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="1" {{ $pre9 = '1' ? "checked" : "" }}> Si</label><br>
                                <label class="radio-inline"><input type="radio" wire:model="pre9" value="0" {{ $pre9 = '0' ? "checked" : "" }}> No</label>
                                @error('pre9') <span class="error">{{ $message }}</span> @enderror    

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="thirteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(12)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 14 **************** -->
        <div class="row setup-content {{ $currentStep != 14 ? 'displayNone' : '' }}" id="step-14">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 14</h3>
                            <div class="form-group">
                            <label for="title">a. Ingresa cual de los apartados y en que porcentaje:</label><br>

                            <label>Registros Contables:<input type="text" wire:model="RegCont9" class="form-control" id="resRegCont9" placeholder = "100%"></label><br>
                            @error('RegCont9') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestales:<input type="text" wire:model="RegPre9" class="form-control" id="resRegPre9" placeholder = "100%"></label><br>
                            @error('RegPre9') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Administrativos:<input type="text" wire:model="RegAdm9" class="form-control" id="resRegAdm9" placeholder = "100%"></label><br>
                            @error('RegAdm9') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Transparencia:<input type="text" wire:model="RegTra9" class="form-control" id="resRegTra9" placeholder = "100%"></label><br>
                            @error('RegTra9') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Cuenta Pública:<input type="text" wire:model="RegCP9" class="form-control" id="resRegCP9" placeholder = "100%"></label><br>
                            @error('RegCP9') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="fourteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(13)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 15 **************** -->
        <div class="row setup-content {{ $currentStep != 15 ? 'displayNone' : '' }}" id="step-15">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 15</h3>
                            <div class="form-group">
                            <label for="title">10.- Para el caso de los registros contables, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Instrumentos Contables:<input type="text" wire:model="InstC10" class="form-control" id="resInstC10" placeholder = "100%"></label><br>
                            @error('InstC10') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Contables:<input type="text" wire:model="RegCont10" class="form-control" id="resRegCont10" placeholder = "100%"></label><br>
                            @error('RegCont10') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Reportes Contables:<input type="text" wire:model="RepCont10" class="form-control" id="resRepCont10" placeholder = "100%"></label><br>
                            @error('RepCont10') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="fifteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(13)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 16 **************** -->
        <div class="row setup-content {{ $currentStep != 16 ? 'displayNone' : '' }}" id="step-16">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 16</h3>
                            <div class="form-group">
                            <label for="title">11.- Para el caso de los registros Presupuestales, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Clasificadores Presupuestales:<input type="text" wire:model="ClasP11" class="form-control" id="resClasP11" placeholder = "100%"></label><br>
                            @error('ClasP11') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Registros Presupuestarios:<input type="text" wire:model="RegPre11" class="form-control" id="resRegPre11" placeholder = "100%"></label><br>
                            @error('RegPre11') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Reportes Presupuestarios:<input type="text" wire:model="RepPre11" class="form-control" id="resRepPre11" placeholder = "100%"></label><br>
                            @error('RepPre11') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Reportes Programáticos:<input type="text" wire:model="PrePro11" class="form-control" id="PrePro11" placeholder = "100%"></label><br>
                            @error('PrePro11') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="sixteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(15)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 17 **************** -->
        <div class="row setup-content {{ $currentStep != 17 ? 'displayNone' : '' }}" id="step-17">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 17</h3>
                            <div class="form-group">
                            <label for="title">12.- Para el caso de los registros Administrativos, de la totalidad de sus reactivos señale de sus secciones ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Control de bienes y documentos soporte:<input type="text" wire:model="ContBie12" class="form-control" id="resContBie12" placeholder = "100%"></label><br>
                            @error('ContBie12') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Recursos Federales y Pagos Electrónicos:<input type="text" wire:model="RecFed12" class="form-control" id="resRecFed12" placeholder = "100%"></label><br>
                            @error('RecFed12') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="seventeenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(16)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 18 **************** -->
        <div class="row setup-content {{ $currentStep != 18 ? 'displayNone' : '' }}" id="step-18">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 18</h3>
                            <div class="form-group">
                            <label for="title">13.- Para el caso de los registros de Transparencia y Difusión de la información Financiera derivada del Título Quinto de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <label>Publicar Contenido Contable:<input type="text" wire:model="ContCont13" class="form-control" id="resContCont13" placeholder = "100%"></label><br>
                            @error('ContCont13') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Presupuestario:<input type="text" wire:model="ContPre13" class="form-control" id="resContPre13" placeholder = "100%"></label><br>
                            @error('ContPre13') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Publicar Contenido Programático:<input type="text" wire:model="ContProg13" class="form-control" id="resContProg13" placeholder = "100%"></label><br>
                            @error('ContProg13') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="eigteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(17)">Atras</button>
                    </div>
                </div>
            </div>

        <!-- ************** STEP 19 **************** -->
        <div class="row setup-content {{ $currentStep != 19 ? 'displayNone' : '' }}" id="step-19">
                <div class="col-xs-12">
                    <div class="col-md-12">
                            <h3> Step 19</h3>
                            <div class="form-group">
                            <label for="title">14.- Para el caso de los registros de Transparencia del Título Quinto y Otras Obligaciones de la LGCG, de la totalidad 
                                de sus reactivos señale de sus secciones, ¿Cuál es su nivel de cumplimiento?</label><br>

                            <h2>Publicar Título V</h2>

                            <label>Anuales:<input type="text" wire:model="TVAn14" class="form-control" id="resTVAn14" placeholder = "100%"></label><br>
                            @error('TVAn14') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="text" wire:model="TVTri14" class="form-control" id="resTVTri14" placeholder = "100%"></label><br>
                            @error('TVTri14') <span class="error">{{ $message }}<br></span> @enderror

                            <h2>Publicar Otras Obligaciones</h2>

                            <label>Anuales:<input type="text" wire:model="OtrAn14" class="form-control" id="resOtrAn14" placeholder = "100%"></label><br>
                            @error('OtrAn14') <span class="error">{{ $message }}<br></span> @enderror

                            <label>Trimestrales:<input type="text" wire:model="OtrTri14" class="form-control" id="resOtrTri14" placeholder = "100%"></label><br>
                            @error('OtrTri14') <span class="error">{{ $message }}<br></span> @enderror

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="nineteenthStepSubmit" type="button" >Siguiente</button>
                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(18)">Atras</button>
                    </div>
                </div>
            </div>












































</div>

