<div>
   
@if(!empty($successMessage))
<div class="alert alert-success">
   {{ $successMessage }}
</div>
@endif
  
<div class="text-center">
    <!-- progressbar -->
	<ul class="progressbar">
		<li class="{{ $currentStep != 1 ? '' : 'active' }}"><a type="button">Step 1</a></li>
        <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a type="button">Step 2</a></li>
        <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a type="button">Step 3</a></li>
        <li class="{{ $currentStep != 4 ? '' : 'active' }}"><a type="button">Step 4</a></li>
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

                    <label for="title">5.- Ingresa el Ente Público al que perteneces:</label>
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

                        <label class="radio-inline"><input type="radio" wire:model="pre5" value="1"> Si</label><br>
                        <label class="radio-inline"><input type="radio" wire:model="pre5" value="0"> No</label>
                        @error('pre5') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button" >Siguiente</button>
                </div>
            </div>
        </div>
    </div>

<!-- ************** STEP 3 **************** -->
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <div class="form-group">

                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button" >Siguiente</button>
                </div>
            </div>
        </div>
    </div>
        
<!-- ************** STEP 4 **************** -->
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
            <div class="col-xs-12">
            <div class="col-md-12">
                    <h3> Step 4</h3>
                    <div class="form-group">
                    <label for="title">5.- ¿Cuenta actualmente con un Sistema que le ayude a realizar el proceso de la Contabilidad Gubernamental?</label><br>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button" >Siguiente</button>
                </div>
            </div>
        </div>
    </div>