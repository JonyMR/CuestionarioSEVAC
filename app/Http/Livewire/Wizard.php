<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Respuesta;
use Illuminate\Support\Facades\DB;
use App\Models\Entes;
  
class Wizard extends Component
{
    public $currentStep = 0;



    public $email, $nombre, $cargo, $area, $ente, $pre5, $nameSys, $cadp, $docsSys, $startSys, $updSys, $infSys, $noSys,
    $pre6, $perioRes, $lastRes, $NoResSys, $pre7, $noRes, $pre8, $pre9, $RegCont9, $RegPre9, $RegAdm9, $RegTra9, $RegCP9,  $SInstC10, $InstC10,  $SRegCont10, $RegCont10,  $SRepCont10, 
    $RepCont10, $SClasP11,  $ClasP11,  $SRegPre11, $RegPre11,  $SRepPre11, $RepPre11,  $SPrePro11, $PrePro11,
    $SContBie12, $ContBie12, $SRecFed12, $RecFed12,
    
    $ContSP113, $ContEP113, $ContSP213,$ContEP213, $PresSP113, $PresEP113,$PresSP213, $PresEP213,$ProgSP113, $ProgEP113, $ProgSP213, $ProgEP213,
       $TVASP114, $TVACP114, $TVASP214, $TVACP214, $TVTSP114, $TVTCP114, $TVTSP214, $TVTCP214, $OASP114, $OACP114, $OASP214, $OACP214, $OTSP114, $OTCP114,
       $OTSP214, $OTCP214,
    
    $SResGenCon15, $ResGenCon15, $STomoPE15, $TomoPE15, $STomoPL15, $TomoPL15, $STomoPJ15, $TomoPJ15, $STomoOA15, $TomoOA15, 
    $SInfFin15, $InfFin15, $STomoSP15, $TomoSP15, $SResGenCon16, $ResGenCon16, $SInfFinMun16, $InfFinMun16, $STomoSP16, $TomoSP16, $SInfFin16, $InfFin16, 
    $pre17, $pre18, $pre19, $pre20, $zoom, $meet, $skype, $teams, $nitropdf, $adobe, $anydesk, $teamviwer,
    $otrasHerramientas, $pre22, $link, $linklgcg, $motivo, $Cantidad22, $Temas22, $Impartido22, $Area22, $pre23, $area23, $pre24, $pre251, 
    $pre252, $pre253, $pre254, $pre255, $pre256, $usb, $ddext, $cddvd, $nube, $otroequipo,
    $pre257, $pre258, $pre259, $pre2510, $pre2511, $pre26, $porque26, $pre27, $porque27, $pre28;

    public $successMessage = '', $mailMessage='', $alert='';
  
    /**
     * Vista
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    //****************************AQUI EMPIEZAN LOS STEPS******************************************************

        /**********************************************************************************************************
     * Step 0
     *
     * @return response()
     */
    public function ceroStepSubmit()
    {

 
        $this->currentStep = 1;
    }

    /**********************************************************************************************************
     * Step 1
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([

            'email'  => 'required|email|unique:respuestas',     //Pregunta 1 de forms
            'nombre' => 'required',                             //Pregunta 2 de forms
            'cargo' => 'required',                              //Pregunta 2 de forms
            'area' => 'required',                               //Pregunta 3 de forms
            'ente' => 'required',                               //Pregunta 4 de forms
        ],[//*********Validaciones*****************
        'email.required' => 'El correo electronico es requerido.', 
        'email.email' => 'Use un formato valido de correo electrónico.',
        'nombre.required' => 'Su nombre completo es requerido.',
        'cargo.required' => 'Su cargo es requerido.',
        'area.required' => 'Su área de adscripción es requerida.',
        'ente.required' => 'Seleccione un ente de la lista.',
    ]);  
            
            $this->currentStep = 2;
    }
  
    /**********************************************************************************************************
     * Step 2 Pregunta 5 de forms
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre5' => 'required',                               
        ],[//*********Validaciones*****************
            'pre5.required' => 'Por favor elige una de las opciones']);
        
        if ($this->pre5) {

            $this->noSys = '';
            $this->currentStep = 3;
            
        }else {

            $this->nameSys = '';
            $this->cadp = '';
            $this->docsSys = '';
            $this->startSys = null;
            $this->updSys = null;
            $this->infSys = '';
            $this->currentStep = 4;
        }
        
    }

     /**********************************************************************************************************
     * Step 3 Si en la pregunta 5 responden que si, se les pregunta todo esto
     *
     * @return response()
     */
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'nameSys' => 'required',
            'cadp' => 'required',
            'docsSys' => 'required',
            'startSys' => 'required',
            'updSys' => 'required',                            
        ],[//*********Validaciones*****************
            'nameSys.required' => 'Ingresa el nombre del Sistema',
            'cadp.required' => 'Por favor elige una de las opciones',
            'docsSys.required' => 'Por favor elige una de las opciones',
            'startSys.required' => 'Por favor selecciona una fecha',
            'updSys.required' => 'Por favor selecciona una fecha',
    ]);

        if ($this->cadp == 'Comprado') {
            $this->currentStep = 5;
        }else if($this->cadp == 'Arrendado'){
            $this->currentStep = 6;
        }else{
            $this->currentStep = 7;
        }
        
    }


     /**********************************************************************************************************
     * Step 4 Si en la pregunta 5 responden que no se les pregunta el por que
     *
     * @return response()
     */
    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'noSys' => 'required',                               
        ],[//*********Validaciones*****************
            'noSys.required' => 'Por favor explica el por que no cuentas con un sistema.',]);

        $this->currentStep = 8;
    }


     /**********************************************************************************************************
     * Step 5 si el software es comprado
     *
     * @return response()
     */
    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                               
        ], [//*********Validaciones*****************
            'infSys.required' => 'Ingresa el nombre de la empresa a la que le compraste el Sistema.',]);

        $this->currentStep = 8;
    }



     /**********************************************************************************************************
     * Step 6 si el software es arrendado
     *
     * @return response()
     */
    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                                
        ], [//*********Validaciones*****************
            'infSys.required' => 'Ingresa el nombre de la empresa a la que le arrendaste el Sistema.',]);

        $this->currentStep = 8;
    }



     /**********************************************************************************************************
     * Step 7 si el software es propio
     *
     * @return response()
     */
    public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                                
        ], [//*********Validaciones*****************
            'infSys.required' => 'Por favor selecciona una opción',]);

        $this->currentStep = 8;
    }

    /**********************************************************************************************************
     * Step 8 pregunta 6
     *
     * @return response()
     */
    public function eigthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre6' => 'required',
            'NoResSys' => 'required',                                
        ], [//*********Validaciones*****************
            'pre6.required' => 'Por favor selecciona una opción',
            'NoResSys.required' => 'Este campo es obligatorio',
        ]);

        if ($this->pre6) {
            
            $this->currentStep = 9;
        }else {
            $this->perioRes = '';
            $this->lastRes = null;
            $this->currentStep = 10;
        }
        
    }

    /**********************************************************************************************************
     * Step 9 si en la pregunta 6 responden que si
     *
     * @return response()
     */
    public function ninethStepSubmit()
    {
        $validatedData = $this->validate([
            'perioRes' => 'required',
            'lastRes' => 'required',                               
        ], [//*********Validaciones*****************
            'perioRes.required' => 'Por favor selecciona una opción',
            'lastRes.required' => 'Por favor selecciona una fecha.',]);

        $this->currentStep = 10;
    }

    /**********************************************************************************************************
     * Step 10 pregunta 7
     *
     * @return response()
     */
    public function tenthStepSubmit()
    {
        $this->alert = '';
        $validatedData = $this->validate([
            'pre7' => 'required',
            'usb' => 'nullable',
            'ddext' => 'nullable',
            'cddvd' => 'nullable',
            'nube' => 'nullable',
            'otroequipo' => 'nullable',                              
        ], [//*********Validaciones*****************
            'pre7.required' => 'Por favor selecciona una opción',]);

        if ($this->pre7) {
            $this->noRes='';
            if($this->usb != 0 || $this->ddext != 0 || $this->cddvd != 0 || $this->nube != 0 || $this->otroequipo != 0){
                $this->currentStep = 12;
            }else{
                $this->currentStep = 10;
                $this->alert = "Selecciona un medio externo o la opción no.";
            }
            
        }else {
            $this->currentStep = 11;
        }
    }

    /**********************************************************************************************************
     * Step 11 si en la pregunta 11 dice que no
     *
     * @return response()
     */
    public function eleventhStepSubmit()
    {
        $validatedData = $this->validate([
            'noRes' => 'required',                              
        ],[//*********Validaciones*****************
            'noRes.required' => 'Explica el motivo por el que no hacen respaldos en medios externos.']);

            $this->currentStep = 12;
    }

     /**********************************************************************************************************
     * Step 12 pregunta 8
     *
     * @return response()
     */
    public function twelfthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre8' => 'required',                               
        ], [//*********Validaciones*****************
            'pre8.required' => 'Por favor selecciona una opción',]);

        $this->currentStep = 13;
    }

     /**********************************************************************************************************
     * Step 13 Pregunta 9
     *
     * @return response()
     */
    public function thirteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre9' => 'required',                               
        ], [//*********Validaciones*****************
            'pre9.required' => 'Por favor selecciona una opción',]);

        if ($this->pre9) {
            $this->currentStep = 14;
        }else {
            $this->currentStep = 15;
        }
    }


     /**********************************************************************************************************
     * Step 14 Si responde que si a la pregunta 9
     *
     * @return response()
     */
    public function fourteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'RegCont9' => 'required|numeric|min:0|max:100|integer',
            'RegPre9' => 'required|numeric|min:0|max:100|integer',
            'RegAdm9' => 'required|numeric|min:0|max:100|integer',
            'RegTra9' => 'required|numeric|min:0|max:100|integer',
            'RegCP9' => 'required|numeric|min:0|max:100|integer',
        ],[//*********Validaciones*****************
            'RegCont9.required' => 'Este campo es obligatorio.',
            'RegCont9.numeric' => 'Ingresa un valor numérico.',
            'RegCont9.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCont9.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCont9.integer' => 'Ingresa un número entero, sin decimales.',

            'RegPre9.required' => 'Este campo es obligatorio.',
            'RegPre9.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegPre9.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegPre9.integer' => 'Ingresa un número entero, sin decimales.',

            'RegAdm9.required' => 'Este campo es obligatorio',
            'RegAdm9.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegAdm9.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegAdm9.integer' => 'Ingresa un número entero, sin decimales.',

            'RegTra9.required' => 'Este campo es obligatorio.',
            'RegTra9.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegTra9.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegTra9.integer' => 'Ingresa un número entero, sin decimales.',

            'RegCP9.required' => 'Este campo es obligatorio.',
            'RegCP9.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCP9.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCP9.integer' => 'Ingresa un número entero, sin decimales.',
        ]);

        $this->currentStep = 15;
    }


     /**********************************************************************************************************
     * Step 15 Pregunta 10
     *
     * @return response()
     */
    public function fifteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'InstC10' => 'required|numeric|min:0|max:100|integer',
            'RegCont10' => 'required|numeric|min:0|max:100|integer',
            'RepCont10' => 'required|numeric|min:0|max:100|integer',
            'SInstC10' => 'required|numeric|min:0|max:100|integer',
            'SRegCont10' => 'required|numeric|min:0|max:100|integer',
            'SRepCont10' => 'required|numeric|min:0|max:100|integer',                                  
        ],[//*********Validaciones*****************

            'InstC10.required' => 'Este campo es obligatorio.',
            'InstC10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InstC10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InstC10.integer' => 'Ingresa un número entero, sin decimales.',

            'RegCont10.required' => 'Este campo es obligatorio',
            'RegCont10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCont10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegCont10.integer' => 'Ingresa un número entero, sin decimales.',

            'RepCont10.required' => 'Este campo es obligatorio',
            'RepCont10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RepCont10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RepCont10.integer' => 'Ingresa un número entero, sin decimales.',

            'SInstC10.required' => 'Este campo es obligatorio.',
            'InstC10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InstC10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InstC10.integer' => 'Ingresa un número entero, sin decimales.',

            'SRegCont10.required' => 'Este campo es obligatorio',
            'SRegCont10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRegCont10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRegCont10.integer' => 'Ingresa un número entero, sin decimales.',

            'SRepCont10.required' => 'Este campo es obligatorio',
            'SRepCont10.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRepCont10.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRepCont10.integer' => 'Ingresa un número entero, sin decimales.',

        ]);

        $this->currentStep = 16;
    }


     /**********************************************************************************************************
     * Step 16 Pregunta 11
     *
     * @return response()
     */
    public function sixteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ClasP11' => 'required|numeric|min:0|max:100|integer',
            'RegPre11' => 'required|numeric|min:0|max:100|integer',
            'RepPre11' => 'required|numeric|min:0|max:100|integer',                                 
            'PrePro11' => 'required|numeric|min:0|max:100|integer',
            'SClasP11' => 'required|numeric|min:0|max:100|integer',
            'SRegPre11' => 'required|numeric|min:0|max:100|integer',
            'SRepPre11' => 'required|numeric|min:0|max:100|integer',                                 
            'SPrePro11' => 'required|numeric|min:0|max:100|integer',
        ],[//*********Validaciones*****************
            'ClasP11.required' => 'Este campo es obligatorio',
            'ClasP11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ClasP11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ClasP11.integer' => 'Ingresa un número entero, sin decimales.',
            
            'RegPre11.required' => 'Este campo es obligatorio',
            'RegPre11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegPre11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RegPre11.integer' => 'Ingresa un número entero, sin decimales.',

            'RepPre11.required' => 'Este campo es obligatorio',
            'RepPre11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RepPre11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RepPre11.integer' => 'Ingresa un número entero, sin decimales.',

            'PrePro11.required' => 'Este campo es obligatorio',
            'PrePro11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PrePro11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PrePro11.integer' => 'Ingresa un número entero, sin decimales.',

            'SClasP11.required' => 'Este campo es obligatorio',
            'SClasP11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SClasP11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SClasP11.integer' => 'Ingresa un número entero, sin decimales.',
            
            'SRegPre11.required' => 'Este campo es obligatorio',
            'SRegPre11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRegPre11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRegPre11.integer' => 'Ingresa un número entero, sin decimales.',

            'SRepPre11.required' => 'Este campo es obligatorio',
            'SRepPre11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRepPre11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRepPre11.integer' => 'Ingresa un número entero, sin decimales.',

            'SPrePro11.required' => 'Este campo es obligatorio',
            'SPrePro11.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SPrePro11.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SPrePro11.integer' => 'Ingresa un número entero, sin decimales.',
        ]);

        $this->currentStep = 17;
    }

     /********************************************************************************************************
     * Step 17 Pregunta 12
     *
     * @return response()
     */
    public function seventeenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ContBie12' => 'required|numeric|min:0|max:100|integer',
            'RecFed12' => 'required|numeric|min:0|max:100|integer',
            'SContBie12' => 'required|numeric|min:0|max:100|integer',
            'SRecFed12' => 'required|numeric|min:0|max:100|integer',
        ],[
            'ContBie12.required' => 'Este campo es obligatorio',
            'ContBie12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContBie12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContBie12.integer' => 'Ingresa un número entero, sin decimales.',

            'RecFed12.required' => 'Este campo es obligatorio',
            'RecFed12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RecFed12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RecFed12.integer' => 'Ingresa un número entero, sin decimales.',

            'SContBie12.required' => 'Este campo es obligatorio',
            'SContBie12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SContBie12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SContBie12.integer' => 'Ingresa un número entero, sin decimales.',

            'SRecFed12.required' => 'Este campo es obligatorio',
            'SRecFed12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRecFed12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SRecFed12.integer' => 'Ingresa un número entero, sin decimales.',
        ]);

        $this->currentStep = 18;
    }    

     /********************************************************************************************************
     * Step 18 Pregunta 13
     *
     * @return response()
     */
    public function eigteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ContSP113' => 'required|numeric|min:0|max:100|integer',
            'ContEP113' => 'required|numeric|min:0|max:100|integer',
            'ContSP213' => 'required|numeric|min:0|max:100|integer',
            'ContEP213' => 'required|numeric|min:0|max:100|integer',

            'PresSP113' => 'required|numeric|min:0|max:100|integer',
            'PresEP113' => 'required|numeric|min:0|max:100|integer',
            'PresSP213' => 'required|numeric|min:0|max:100|integer',
            'PresEP213' => 'required|numeric|min:0|max:100|integer',

            'ProgSP113' => 'required|numeric|min:0|max:100|integer',
            'ProgEP113' => 'required|numeric|min:0|max:100|integer',
            'ProgSP213' => 'required|numeric|min:0|max:100|integer',
            'ProgEP213' => 'required|numeric|min:0|max:100|integer',
        
        ],[
            'ContSP113.required' => 'Este campo es obligatorio',
            'ContSP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP113.integer' => 'Ingresa un número entero, sin decimales.',

            'ContEP113.required' => 'Este campo es obligatorio',
            'ContEP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContEP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContEP113.integer' => 'Ingresa un número entero, sin decimales.',

            'ContSP213.required' => 'Este campo es obligatorio',
            'ContSP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP213.integer' => 'Ingresa un número entero, sin decimales.',

            'ContEP213.required' => 'Este campo es obligatorio',
            'ContEP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContEP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContEP213.integer' => 'Ingresa un número entero, sin decimales.',

            'PresSP113.required' => 'Este campo es obligatorio',
            'PresSP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresSP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresSP113.integer' => 'Ingresa un número entero, sin decimales.',

            'PresEP113.required' => 'Este campo es obligatorio',
            'PresEP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresEP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresEP113.integer' => 'Ingresa un número entero, sin decimales.',

            'PresSP213.required' => 'Este campo es obligatorio',
            'PresSP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresSP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresSP213.integer' => 'Ingresa un número entero, sin decimales.',

            'PresEP213.required' => 'Este campo es obligatorio',
            'PresEP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresEP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'PresEP213.integer' => 'Ingresa un número entero, sin decimales.',

            'ProgSP113.required' => 'Este campo es obligatorio',
            'ProgSP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgSP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgSP113.integer' => 'Ingresa un número entero, sin decimales.',

            'ProgEP113.required' => 'Este campo es obligatorio',
            'ProgEP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgEP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgEP113.integer' => 'Ingresa un número entero, sin decimales.',

            'ContSP113.required' => 'Este campo es obligatorio',
            'ContSP113.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP113.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContSP113.integer' => 'Ingresa un número entero, sin decimales.',

            'ProgSP213.required' => 'Este campo es obligatorio',
            'ProgSP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgSP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgSP213.integer' => 'Ingresa un número entero, sin decimales.',

            'ProgEP213.required' => 'Este campo es obligatorio',
            'ProgEP213.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgEP213.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ProgEP213.integer' => 'Ingresa un número entero, sin decimales.',
            

        ]);

        $this->currentStep = 19;
    }  

     /********************************************************************************************************
     * Step 19 Pregunta 14
     *
     * @return response()
     */
    public function nineteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'TVASP114'=> 'required|numeric|min:0|max:100|integer',
            'TVACP114'=> 'required|numeric|min:0|max:100|integer',
            'TVASP214'=> 'required|numeric|min:0|max:100|integer',
            'TVACP214'=> 'required|numeric|min:0|max:100|integer',

            'TVTSP114'=> 'required|numeric|min:0|max:100|integer',
            'TVTCP114'=> 'required|numeric|min:0|max:100|integer',
            'TVTSP214'=> 'required|numeric|min:0|max:100|integer',
            'TVTCP214'=> 'required|numeric|min:0|max:100|integer',
            
            'OASP114'=> 'required|numeric|min:0|max:100|integer',
            'OACP114'=> 'required|numeric|min:0|max:100|integer',
            'OASP214'=> 'required|numeric|min:0|max:100|integer',
            'OACP214'=> 'required|numeric|min:0|max:100|integer',
            
            'OTSP114'=> 'required|numeric|min:0|max:100|integer',
            'OTCP114'=> 'required|numeric|min:0|max:100|integer',
            'OTSP214'=> 'required|numeric|min:0|max:100|integer',
            'OTCP214'=> 'required|numeric|min:0|max:100|integer',

        ],[
            'TVASP114.required' => 'Este campo es obligatorio',
            'TVASP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVASP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVASP114.integer' => 'Ingresa un número entero, sin decimales.',

            'TVACP114.required' => 'Este campo es obligatorio',
            'TVACP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVACP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVACP114.integer' => 'Ingresa un número entero, sin decimales.',

            'TVASP214.required' => 'Este campo es obligatorio',
            'TVASP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVASP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVASP214.integer' => 'Ingresa un número entero, sin decimales.',

            'TVACP214.required' => 'Este campo es obligatorio',
            'TVACP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVACP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVACP214.integer' => 'Ingresa un número entero, sin decimales.',

            'TVTSP114.required' => 'Este campo es obligatorio',
            'TVTSP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTSP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTSP114.integer' => 'Ingresa un número entero, sin decimales.',
            
            'TVTCP114.required' => 'Este campo es obligatorio',
            'TVTCP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTCP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTCP114.integer' => 'Ingresa un número entero, sin decimales.',

            'TVTSP214.required' => 'Este campo es obligatorio',
            'TVTSP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTSP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTSP214.integer' => 'Ingresa un número entero, sin decimales.',

            'TVTCP214.required' => 'Este campo es obligatorio',
            'TVTCP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTCP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTCP214.integer' => 'Ingresa un número entero, sin decimales.',

            'OASP114.required' => 'Este campo es obligatorio',
            'OASP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OASP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OASP114.integer' => 'Ingresa un número entero, sin decimales.',

            'OACP114.required' => 'Este campo es obligatorio',
            'OACP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OACP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OACP114.integer' => 'Ingresa un número entero, sin decimales.',

            'OASP214.required' => 'Este campo es obligatorio',
            'OASP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OASP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OASP214.integer' => 'Ingresa un número entero, sin decimales.',

            'OACP214.required' => 'Este campo es obligatorio',
            'OACP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OACP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OACP214.integer' => 'Ingresa un número entero, sin decimales.',

            'OTSP114.required' => 'Este campo es obligatorio',
            'OTSP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTSP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTSP114.integer' => 'Ingresa un número entero, sin decimales.',

            'OTCP114.required' => 'Este campo es obligatorio',
            'OTCP114.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTCP114.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTCP114.integer' => 'Ingresa un número entero, sin decimales.',

            'OTSP214.required' => 'Este campo es obligatorio',
            'OTSP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTSP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTSP214.integer' => 'Ingresa un número entero, sin decimales.',

            'OTCP214.required' => 'Este campo es obligatorio',
            'OTCP214.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTCP214.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OTCP214.integer' => 'Ingresa un número entero, sin decimales.',
            
        ]);

        $this->currentStep = 20;
    }  

     /********************************************************************************************************
     * Step 20 Pregunta 15
     *
     * @return response()
     */
    public function twentiethStepSubmit()
    {
        $validatedData = $this->validate([
            'ResGenCon15' => 'required|numeric|min:0|max:100|integer',
            'TomoPE15' => 'required|numeric|min:0|max:100|integer',
            'TomoPL15' => 'required|numeric|min:0|max:100|integer',
            'TomoPJ15' => 'required|numeric|min:0|max:100|integer',
            'TomoOA15' => 'required|numeric|min:0|max:100|integer',
            'InfFin15' => 'required|numeric|min:0|max:100|integer',
            'TomoSP15' => 'required|numeric|min:0|max:100|integer',
            'SResGenCon15' => 'required|numeric|min:0|max:100|integer',
            'STomoPE15' => 'required|numeric|min:0|max:100|integer',
            'STomoPL15' => 'required|numeric|min:0|max:100|integer',
            'STomoPJ15' => 'required|numeric|min:0|max:100|integer',
            'STomoOA15' => 'required|numeric|min:0|max:100|integer',
            'SInfFin15' => 'required|numeric|min:0|max:100|integer',
            'STomoSP15' => 'required|numeric|min:0|max:100|integer',
        ],[
            'ResGenCon15.required' => 'Este campo es obligatorio',
            'ResGenCon15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ResGenCon15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ResGenCon15.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoPE15.required' => 'Este campo es obligatorio',
            'TomoPE15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPE15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPE15.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoPL15.required' => 'Este campo es obligatorio',
            'TomoPL15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPL15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPL15.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoPJ15.required' => 'Este campo es obligatorio',
            'TomoPJ15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPJ15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoPJ15.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoOA15.required' => 'Este campo es obligatorio',
            'TomoOA15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoOA15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoOA15.integer' => 'Ingresa un número entero, sin decimales.',

            'InfFin15.required' => 'Este campo es obligatorio',
            'InfFin15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFin15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFin15.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoSP15.required' => 'Este campo es obligatorio',
            'TomoSP15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoSP15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoSP15.integer' => 'Ingresa un número entero, sin decimales.',

            'SResGenCon15.required' => 'Este campo es obligatorio',
            'SResGenCon15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SResGenCon15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SResGenCon15.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoPE15.required' => 'Este campo es obligatorio',
            'STomoPE15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPE15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPE15.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoPL15.required' => 'Este campo es obligatorio',
            'STomoPL15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPL15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPL15.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoPJ15.required' => 'Este campo es obligatorio',
            'STomoPJ15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPJ15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoPJ15.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoOA15.required' => 'Este campo es obligatorio',
            'STomoOA15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoOA15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoOA15.integer' => 'Ingresa un número entero, sin decimales.',

            'SInfFin15.required' => 'Este campo es obligatorio',
            'SInfFin15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFin15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFin15.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoSP15.required' => 'Este campo es obligatorio',
            'STomoSP15.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoSP15.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoSP15.integer' => 'Ingresa un número entero, sin decimales.',
        ]);

        $this->currentStep = 21;
    }  

     /********************************************************************************************************
     * Step 21 Pregunta 16
     *
     * @return response()
     */
    public function twentyfirstStepSubmit()
    {
        $validatedData = $this->validate([
            'ResGenCon16' => 'required|numeric|min:0|max:100|integer',
            'InfFinMun16' => 'required|numeric|min:0|max:100|integer',
            'TomoSP16' => 'required|numeric|min:0|max:100|integer',
            'InfFin16' => 'required|numeric|min:0|max:100|integer',
            'SResGenCon16' => 'required|numeric|min:0|max:100|integer',
            'SInfFinMun16' => 'required|numeric|min:0|max:100|integer',
            'STomoSP16' => 'required|numeric|min:0|max:100|integer',
            'SInfFin16' => 'required|numeric|min:0|max:100|integer',
        ],[
            'ResGenCon16.required' => 'Este campo es obligatorio',
            'ResGenCon16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ResGenCon16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ResGenCon16.integer' => 'Ingresa un número entero, sin decimales.',
            
            'InfFinMun16.required' => 'Este campo es obligatorio',
            'InfFinMun16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFinMun16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFinMun16.integer' => 'Ingresa un número entero, sin decimales.',

            'TomoSP16.required' => 'Este campo es obligatorio',
            'TomoSP16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoSP16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TomoSP16.integer' => 'Ingresa un número entero, sin decimales.',

            'InfFin16.required' => 'Este campo es obligatorio',
            'InfFin16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFin16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'InfFin16.integer' => 'Ingresa un número entero, sin decimales.',

            'SResGenCon16.required' => 'Este campo es obligatorio',
            'SResGenCon16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SResGenCon16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SResGenCon16.integer' => 'Ingresa un número entero, sin decimales.',
            
            'SInfFinMun16.required' => 'Este campo es obligatorio',
            'SInfFinMun16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFinMun16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFinMun16.integer' => 'Ingresa un número entero, sin decimales.',

            'STomoSP16.required' => 'Este campo es obligatorio',
            'STomoSP16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoSP16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'STomoSP16.integer' => 'Ingresa un número entero, sin decimales.',

            'SInfFin16.required' => 'Este campo es obligatorio',
            'SInfFin16.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFin16.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'SInfFin16.integer' => 'Ingresa un número entero, sin decimales.',
        ]);

        $this->currentStep = 22;
    } 


     /********************************************************************************************************
     * Step 22 Pregunta 17
     *
     * @return response()
     */
    public function twentysecondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre17' => 'required',
        ],[
            'pre17.required' => 'Por favor elige una opción.'
        ]);

        $this->currentStep = 23;
    } 

     /********************************************************************************************************
     * Step 23 Pregunta 18
     *
     * @return response()
     */
    public function twentythirdStepSubmit()
    {
        $validatedData = $this->validate([
            'pre18' => 'required',
        ],[
            'pre18.required' => 'Por favor elige una opción.'
        ]);

        $this->currentStep = 24;
    } 


     /********************************************************************************************************
     * Step 24 Pregunta 19
     *
     * @return response()
     */
    public function twentyfourthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre19' => 'required',
        ],[
            'pre19.required' => 'Por favor elige una opción.'
        ]);

        $this->currentStep = 25;
    } 


     /********************************************************************************************************
     * Step 25 Pregunta 20
     *
     * @return response()
     */
    public function twentyfifthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre20' => 'required',
        ],[
            'pre20.required' => 'Por favor mencione las fallas de internet que presente de manera mas frecuente.'
        ]);

        $this->currentStep = 26;
    } 


     /********************************************************************************************************
     * Step 26 Pregunta 21
     *
     * @return response()
     */
    public function twentysixthStepSubmit()
    {
        $validatedData = $this->validate([

            'zoom' => 'nullable',
            'meet' => 'nullable',
            'skype' => 'nullable',
            'teams' => 'nullable',
            'nitropdf' => 'nullable',
            'adobe' => 'nullable',
            'anydesk' => 'nullable',
            'teamviwer' => 'nullable',
            'otrasHerramientas' => 'required',
        ],['otrasHerramientas.required' => 'Este campo es obligatorio.']);

        $this->currentStep = 27;
    }
    
     /********************************************************************************************************
     * Step 27 Pregunta 22
     *
     * @return response()
     */
    public function twentyseventhStepSubmit()
    {
        $validatedData = $this->validate([

            'pre22' => 'required',

        ],['pre22.required' => 'Por favor seleccione una opción.']);

        if ($this->pre22) {
            
            $this->currentStep = 28;
        }else {
            
            $this->currentStep = 29;
        }
    }

     /********************************************************************************************************
     * Step 28 si en pregunta 22 dijo que si
     *
     * @return response()
     */
    public function twentyeigthStepSubmit()
    {
        $validatedData = $this->validate([

            'link' => 'required|url',
            'linklgcg' => 'required|url',
            

        ],[
        'link.required' => 'Este campo es obligatorio.',
        'link.url' => 'Por favor ingrese un link válido.',
        'linklgcg.required' => 'Este campo es obligatorio.',
        'link.linklgcg' => 'Por favor ingrese un link válido.'
    ]);

        $this->currentStep = 30;
    }
         /********************************************************************************************************
     * Step 29 si en pregunta 22 dijo que no
     *
     * @return response()
     */
    public function twentyninethStepSubmit()
    {
        $validatedData = $this->validate([

            'motivo' => 'required',

        ],['motivo.required' => 'Por favor ingresa el motivo.']);

        $this->currentStep = 30;
    }  

     /********************************************************************************************************
     * Step 30 Pregunta 22
     *
     * @return response()
     */
    public function thirtiesthStepSubmit()
    {
        $validatedData = $this->validate([
            'Cantidad22' => 'required|numeric',
            'Temas22' => 'required',
            'Impartido22' => 'required',
            'Area22' => 'required',
        ],[
            'Cantidad22.required' => 'Por favor ingrese el número de capacitaciones recibidas.',
            'Cantidad22.numeric' => 'Por favor ingrese el número de capacitaciones recibidas.',
            'Temas22.required' => 'Este campo es obligatorio',
            'Impartido22.required' => 'Este campo es obligatorio',
            'Area22.required' => 'Este campo es obligatorio',
        ]);

        $this->currentStep = 31;
    }

     /********************************************************************************************************
     * Step 31 Pregunta 23
     *
     * @return response()
     */
    public function thirtyfirstStepSubmit()
    {
        $validatedData = $this->validate([
            'pre23' => 'required',
            'area23' => 'required',
        ],[
            'pre23.required' => 'Por favor selecciona una opción.',
            'area23.required' => 'Este campo es obligatorio.',
        ]);

        $this->currentStep = 32;
    }

     /********************************************************************************************************
     * Step 32 Pregunta 24
     *
     * @return response()
     */
    public function thirtysecondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre24' => 'required',
        ],[
            'pre24.required' => 'Por favor selecciona una opción.'
        ]);

        $this->currentStep = 33;
    }

     /********************************************************************************************************
     * Step 33 Pregunta 25
     *
     * @return response()
     */
    public function thirtythirdStepSubmit()
    {
        $validatedData = $this->validate([

            'pre251' => 'nullable',
            'pre252' => 'nullable',
            'pre253' => 'nullable',
            'pre254' => 'nullable',
            'pre255' => 'nullable',
            'pre256' => 'nullable',
            'pre257' => 'nullable',
            'pre258' => 'nullable',
            'pre259' => 'nullable',
            'pre2510' => 'nullable',
            'pre2511' => 'nullable',

        ]);

        $this->currentStep = 34;
    }

     /********************************************************************************************************
     * Step 34 Pregunta 26
     *
     * @return response()
     */
    public function thirtyfourthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre26' => 'required',
            'porque26' => 'required',
        ],[
            'pre26.required' => 'Por favor selecciona una opción.',
            'porque26.required' => 'Este campo es obligatorio.'
        ]);

        $this->currentStep = 35;
    }

     /********************************************************************************************************
     * Step 35 Pregunta 27
     *
     * @return response()
     */
    public function thirtyfifthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre27' => 'required',
            'porque27' => 'required',
        ],[
            'pre27.required' => 'Por favor selecciona una opción.',
            'porque27.required' => 'Este campo es obligatorio.'
        ]);

        $this->currentStep = 36;
    }

     /********************************************************************************************************
     * Step 36 Pregunta 28
     *
     * @return response()
     */
    public function thirtysixthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre28' => 'required',
        ],[
            'pre28.required' => 'Este campo es obligatorio.'
        ]);

        $this->currentStep = 37;
    }


        /**********************************************************************************************************
     * Step 37
     *
     * @return response()
     */
    public function thirtyseventhStepSubmit()
    {

        $this->currentStep = 0;
    }

    //******************AQUI TERMINAN LOS STEPS****************************************************************


    /**
     * Metodo submit del formulario
     *
     * @return response()
     */
    public function resetSteps(){
        $this -> currentStep = 0;
        $this -> email = '';
    }
    


    /**
     * Metodo submit del formulario
     *
     * @return response()
     */
    public function submitForm(){

                Respuesta::create([
                    'email' => $this->email,
                    'nombre' =>$this->nombre,
                    'cargo' => $this->cargo,
                    'area' => $this->area,
                    'ente' => $this->ente,
                    'pre5' => $this->pre5,
                    'nameSys' => $this->nameSys,
                    'cadp' => $this->cadp,
                    'docsSys' => $this->docsSys,
                    'startSys' => $this->startSys,
                    'updSys' => $this->updSys,
                    'infSys' => $this->infSys,
                    'noSys' => $this->noSys,
                    'pre6' => $this->pre6,
                    'perioRes' => $this->perioRes,
                    'lastRes' => $this->lastRes,
                    'NoResSys' => $this->NoResSys,
                    'pre7' => $this->pre7,
                    'noRes' => $this->noRes,
                    'pre8' => $this->pre8,
                    'pre9' => $this->pre9,
                    'RegCont9' => $this->RegCont9,
                    'RegPre9' => $this->RegPre9,
                    'RegAdm9' => $this->RegAdm9,
                    'RegTra9' => $this->RegTra9,
                    'RegCP9' => $this->RegCP9,
                    'SInstC10' => $this->SInstC10,
                    'InstC10' => $this->InstC10,
                    'SRegCont10' => $this->SRegCont10,
                    'RegCont10' => $this->RegCont10,
                    'SRepCont10' => $this->SRepCont10,
                    'RepCont10' => $this->RepCont10,
                    'SClasP11' => $this->SClasP11,                  
                    'ClasP11' => $this->ClasP11,
                    'SRegPre11' => $this->SRegPre11,
                    'RegPre11' => $this->RegPre11,
                    'SRepPre11' => $this->SRepPre11,
                    'RepPre11' => $this->RepPre11,
                    'SPrePro11' => $this->SPrePro11,
                    'PrePro11' => $this->PrePro11,
                    'SContBie12' => $this->SContBie12,
                    'ContBie12' => $this->ContBie12,
                    'SRecFed12' => $this->SRecFed12,
                    'RecFed12' => $this->RecFed12,               
                    'ContSP113' => $this->ContSP113,
                    'ContEP113' => $this->ContEP113,
                    'ContSP213' => $this->ContSP213,
                    'ContEP213' => $this->ContEP213,        
                    'PresSP113' => $this->PresSP113,
                    'PresEP113' => $this->PresEP113,
                    'PresSP213' => $this->PresSP213,
                    'PresEP213' => $this->PresEP213,       
                    'ProgSP113' => $this->ProgSP113,
                    'ProgEP113' => $this->ProgEP113,
                    'ProgSP213' => $this->ProgSP213,
                    'ProgEP213' => $this->ProgEP213,                   
                    'TVASP114' => $this->TVASP114,
                    'TVACP114' => $this->TVACP114,
                    'TVASP214' => $this->TVASP214,
                    'TVACP214' => $this->TVACP214,        
                    'TVTSP114' => $this->TVTSP114,
                    'TVTCP114' => $this->TVTCP114,
                    'TVTSP214' => $this->TVTSP214,
                    'TVTCP214' => $this->TVTCP214,                   
                    'OASP114' => $this->OASP114,
                    'OACP114' => $this->OACP114,
                    'OASP214' => $this->OASP214,
                    'OACP214' => $this->OACP214,
                    'OTSP114' => $this->OTSP114,
                    'OTCP114' => $this->OTCP114,
                    'OTSP214' => $this->OTSP214,
                    'OTCP214' => $this->OTCP214,
                     'SResGenCon15' => $this->SResGenCon15,
                    'ResGenCon15' => $this->ResGenCon15,
                    'STomoPE15' => $this->STomoPE15,
                    'TomoPE15' => $this->TomoPE15,
                    'STomoPL15' => $this->STomoPL15,
                    'TomoPL15' => $this->TomoPL15,
                    'STomoPJ15' => $this->STomoPJ15,
                    'TomoPJ15' => $this->TomoPJ15,
                    'STomoOA15' => $this->STomoOA15,
                    'TomoOA15' => $this->TomoOA15,
                    'SInfFin15' => $this->SInfFin15,
                    'InfFin15' => $this->InfFin15,
                    'STomoSP15' => $this->STomoSP15,
                    'TomoSP15' => $this->TomoSP15,
                    'SResGenCon16' => $this->SResGenCon16,
                    'ResGenCon16' => $this->ResGenCon16,
                    'SInfFinMun16' => $this->SInfFinMun16,
                    'InfFinMun16' => $this->InfFinMun16,
                    'STomoSP16' => $this->STomoSP16,
                    'TomoSP16' => $this->TomoSP16,
                    'SInfFin16' => $this->SInfFin16,
                    'InfFin16' => $this->InfFin16,
                    'pre17' => $this->pre17,
                    'pre18' => $this->pre18,
                    'pre19' => $this->pre19,
                    'pre20' => $this->pre20,
                    'zoom' => $this->zoom,
                    'meet' => $this->meet,
                    'skype' => $this->skype,
                    'teams' => $this->teams,
                    'nitropdf' => $this->nitropdf,
                    'adobe' => $this->adobe,
                    'anydesk' => $this->anydesk,
                    'teamviwer' => $this->teamviwer,
                    'otrasHerramientas' => $this->otrasHerramientas,
                    'pre22' => $this->pre22,
                    'link' => $this->link,
                    'linklgcg' => $this->linklgcg,
                    'motivo' => $this ->motivo,
                    'Cantidad22' => $this->Cantidad22,
                    'Temas22' => $this->Temas22,
                    'Impartido22' => $this->Impartido22,
                    'Area22' => $this->Area22,
                    'pre23' => $this->pre23,
                    'area23' => $this->area23,
                    'pre24' => $this->pre24,
                    'pre251' => $this->pre251,
                    'pre252' => $this->pre252,
                    'pre253' => $this->pre253,
                    'pre254' => $this->pre254,
                    'pre255' => $this->pre255,
                    'pre256' => $this->pre256,
                    'pre257' => $this->pre257,
                    'pre258' => $this->pre258,
                    'pre259' => $this->pre259,            
                    'pre2510' => $this->pre2510,
                    'pre2511' => $this->pre2511,
                    'pre26' => $this->pre26,
                    'porque26' => $this->porque26,
                    'pre27' => $this->pre27,
                    'porque27' => $this->porque27,
                    'pre28' => $this->pre28,
                    'usb' => $this->usb,
                    'ddext' => $this->ddext,
                    'cddvd' => $this->cddvd,
                    'nube' => $this->nube,
                    'otroequipo' => $this->otroequipo,
                ]);

        $this->successMessage="Respuesta enviada correctamente";
  
        $this->clearForm();
  
        $this->currentStep = 38;
    }
  
    /**
     * Volver en steps
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function checkMail(){
        if(DB::table('respuestas')->where('email', $this->email)->exists()){
            $this -> mailMessage = 'Este correo ya respondio la encuesta';
            $this->currentStep = 38;
        }
    }

    public function statCap(){
        $this -> mailMessage = '';
        if(empty($this->Cantidad22) && $this->Cantidad22==''){
            //nada
        }else{
            if($this->Cantidad22==0){
                $this->Cantidad22=0;
                $this->Temas22='-';
                $this->Impartido22='-';
                $this->Area22='-';
                $this->currentStep=31;
            }else{
                
            }
        }
    }


//UPDATED de variables

//Pregunta 9

public function updatedpre9(){
    if($this->pre9 != 0){

    }else{
        $this->RegCont9 = null;
        $this->RegPre9 = null;
        $this->RegAdm9 = null;
        $this->RegTra9 = null;      
        $this->RegCP9 = null;
    }
}

    public function updatedRegCont9(){
        if($this->RegCont9 >= 0 && $this->RegCont9 < 101){
        }else{
            $this->RegCont9 = '';
        }
    }

    public function updatedRegPre9(){
        if($this->RegPre9 >= 0 && $this->RegPre9 < 101){
        }else{
            $this->RegPre9 = '';
        }
    }

    public function updatedRegAdm9(){
        if($this->RegAdm9 >= 0 && $this->RegAdm9 < 101){
        }else{
            $this->RegAdm9 = '';
        }
    }

    public function updatedRegTra9(){
        if($this->RegTra9 >= 0 && $this->RegTra9 < 101){
        }else{
            $this->RegTra9 = '';
        }
    }

    public function updatedRegCP9(){
        if($this->RegCP9 >= 0 && $this->RegCP9 < 101){
        }else{
            $this->RegCP9 = '';
        }
    }

//Pregunta 10
    public function updatedInstC10(){
        if($this->InstC10 >= 0 && $this->InstC10 < 101){
        }else{
            $this->InstC10 = '';
        }
    }

    public function updatedRegCont10(){
        if($this->RegCont10 >= 0 && $this->RegCont10 < 101){
        }else{
            $this->RegCont10 = '';
        }
    }

    public function updatedRepCont10(){
        if($this->RepCont10 >= 0 && $this->RepCont10 < 101){
        }else{
            $this->RepCont10 = '';
        }
    }

    public function updatedSInstC10(){
        if($this->SInstC10 >= 0 && $this->SInstC10 < 101){
        }else{
            $this->SInstC10 = '';
        }
    }

    public function updatedSRegCont10(){
        if($this->SRegCont10 >= 0 && $this->SRegCont10 < 101){
        }else{
            $this->SRegCont10 = '';
        }
    }

    public function updatedSRepCont10(){
        if($this->SRepCont10 >= 0 && $this->SRepCont10 < 101){
        }else{
            $this->SRepCont10 = '';
        }
    }

//Pregunta 11
    public function updatedClasP11(){
        if($this->ClasP11 >= 0 && $this->ClasP11 < 101){
        }else{
            $this->ClasP11 = '';
        }
    }

    public function updatedRegPre11(){
        if($this->RegPre11 >= 0 && $this->RegPre11 < 101){
        }else{
            $this->RegPre11 = '';
        }
    }

    public function updatedRepPre11(){
        if($this->RepPre11 >= 0 && $this->RepPre11 < 101){
        }else{
            $this->RepPre11 = '';
        }
    }
    
    public function updatedPrePro11(){
        if($this->PrePro11 >= 0 && $this->PrePro11 < 101){
        }else{
            $this->PrePro11 = '';
        }
    } 

    public function updatedSClasP11(){
        if($this->SClasP11 >= 0 && $this->SClasP11 < 101){
        }else{
            $this->SClasP11 = '';
        }
    }

    public function updatedSRegPre11(){
        if($this->SRegPre11 >= 0 && $this->SRegPre11 < 101){
        }else{
            $this->SRegPre11 = '';
        }
    }

    public function updatedSRepPre11(){
        if($this->SRepPre11 >= 0 && $this->SRepPre11 < 101){
        }else{
            $this->SRepPre11 = '';
        }
    }
    
    public function updatedSPrePro11(){
        if($this->SPrePro11 >= 0 && $this->SPrePro11 < 101){
        }else{
            $this->SPrePro11 = '';
        }
    }

//Pregunta 12
    public function updatedContBie12(){
        if($this->ContBie12 >= 0 && $this->ContBie12 < 101){
        }else{
            $this->ContBie12 = '';
        }
    }
    
    public function updatedRecFed12(){
        if($this->RecFed12 >= 0 && $this->RecFed12 < 101){
        }else{
            $this->RecFed12 = '';
        }
    }

    public function updatedSContBie12(){
        if($this->SContBie12 >= 0 && $this->SContBie12 < 101){
        }else{
            $this->SContBie12 = '';
        }
    }
    
    public function updatedSRecFed12(){
        if($this->SRecFed12 >= 0 && $this->SRecFed12 < 101){
        }else{
            $this->SRecFed12 = '';
        }
    }


//Pregunta 15
    public function updatedResGenCon15(){
        if($this->ResGenCon15 >= 0 && $this->ResGenCon15 < 101){
        }else{
            $this->ResGenCon15 = '';
        }
    }

    public function updatedTomoPE15(){
        if($this->TomoPE15 >= 0 && $this->TomoPE15 < 101){
        }else{
            $this->TomoPE15 = '';
        }
    }

    public function updatedTomoPL15(){
        if($this->TomoPL15 >= 0 && $this->TomoPL15 < 101){
        }else{
            $this->TomoPL15 = '';
        }
    }

    public function updatedTomoPJ15(){
        if($this->TomoPJ15 >= 0 && $this->TomoPJ15 < 101){
        }else{
            $this->TomoPJ15 = '';
        }
    }

    public function updatedTomoOA15(){
        if($this->TomoOA15 >= 0 && $this->TomoOA15 < 101){
        }else{
            $this->TomoOA15 = '';
        }
    }

    public function updatedInfFin15(){
        if($this->InfFin15 >= 0 && $this->InfFin15 < 101){
        }else{
            $this->InfFin15 = '';
        }
    }

    public function updatedTomoSP15(){
        if($this->TomoSP15 >= 0 && $this->TomoSP15 < 101){
        }else{
            $this->TomoSP15 = '';
        }
    }

    public function updatedSResGenCon15(){
        if($this->SResGenCon15 >= 0 && $this->SResGenCon15 < 101){
        }else{
            $this->SResGenCon15 = '';
        }
    }

    public function updatedSTomoPE15(){
        if($this->STomoPE15 >= 0 && $this->STomoPE15 < 101){
        }else{
            $this->STomoPE15 = '';
        }
    }

    public function updatedSTomoPL15(){
        if($this->STomoPL15 >= 0 && $this->STomoPL15 < 101){
        }else{
            $this->STomoPL15 = '';
        }
    }

    public function updatedSTomoPJ15(){
        if($this->STomoPJ15 >= 0 && $this->STomoPJ15 < 101){
        }else{
            $this->STomoPJ15 = '';
        }
    }

    public function updatedSTomoOA15(){
        if($this->STomoOA15 >= 0 && $this->STomoOA15 < 101){
        }else{
            $this->STomoOA15 = '';
        }
    }

    public function updatedSInfFin15(){
        if($this->SInfFin15 >= 0 && $this->SInfFin15 < 101){
        }else{
            $this->SInfFin15 = '';
        }
    }

    public function updatedSTomoSP15(){
        if($this->STomoSP15 >= 0 && $this->STomoSP15 < 101){
        }else{
            $this->STomoSP15 = '';
        }
    }

//Pregunta 16

    public function updatedResGenCon16(){
        if($this->ResGenCon16 >= 0 && $this->ResGenCon16 < 101){
        }else{
            $this->ResGenCon16 = '';
        }
    }

    public function updatedInfFinMun16(){
        if($this->InfFinMun16 >= 0 && $this->InfFinMun16 < 101){
        }else{
            $this->InfFinMun16 = '';
        }
    }

    public function updatedTomoSP16(){
        if($this->TomoSP16 >= 0 && $this->TomoSP16 < 101){
        }else{
            $this->TomoSP16 = '';
        }
    }

    public function updatedInfFin16(){
        if($this->InfFin16 >= 0 && $this->InfFin16 < 101){
        }else{
            $this->InfFin16 = '';
        }
    }

    public function updatedSResGenCon16(){
        if($this->SResGenCon16 >= 0 && $this->SResGenCon16 < 101){
        }else{
            $this->SResGenCon16 = '';
        }
    }

    public function updatedSInfFinMun16(){
        if($this->SInfFinMun16 >= 0 && $this->SInfFinMun16 < 101){
        }else{
            $this->SInfFinMun16 = '';
        }
    }

    public function updatedSTomoSP16(){
        if($this->STomoSP16 >= 0 && $this->STomoSP16 < 101){
        }else{
            $this->STomoSP16 = '';
        }
    }

    public function updatedSInfFin16(){
        if($this->InfFin16 >= 0 && $this->SInfFin16 < 101){
        }else{
            $this->SInfFin16 = '';
        }
    }


    public function updatedCantidad22(){
        if($this->Cantidad22 != 0){
        }else{
            $this->Cantidad22='0';
                $this->Temas22='';
                $this->Impartido22='';
                $this->Area22='';
                $this->currentStep=31;
        }
    }

    public function updatedpre7(){
        if($this->pre7 != 0){
                $this->noRes='';
                $this->usb=0;
                $this->ddext=0;
                $this->cddvd=0;
                $this->nube=0;
                $this->otroequipo=0;
        }else{
                $this->usb=0;
                $this->ddext=0;
                $this->cddvd=0;
                $this->nube=0;
                $this->otroequipo=0;
        }
    }

    public function updatedusb(){
        if($this->usb != 0){
            $this->usb = 1;
            $this->pre7=1;
        }else{
            $this->usb = 0;
        }
    }
    public function updatedddext(){
        if($this->ddext != 0){
            $this->ddext = 1;
            $this->pre7=1;
        }else{
            $this->ddext = 0;
        }
        
    }
    public function updatedcddvd(){
        if($this->cddvd != 0){
            $this->cddvd = 1;
            $this->pre7=1;
        }else{
            $this->cddvd = 0;
        }
        
    }
    public function updatednube(){
        if($this->nube != 0){
            $this->nube = 1;
            $this->pre7=1;
        }else{
            $this->nube = 0;
        }
        
    }
    public function updatedotroequipo(){
        if($this->otroequipo != 0){
            $this->otroequipo = 1;
            $this->pre7=1;
        }else{
            $this->otroequipo = 0;
        }
        
    }

    public function updatedpre22(){
        if($this->pre22 != 0){
            $this->motivo='';
        }else{
            $this->link = '';
            $this->linklglcg = '';
        }     
    }

    public function updatedImpartido22(){
        if($this->Cantidad22 != 0){
        }else{
            $this->Cantidad22='';
                $this->Temas22='';
                $this->Impartido22='';
                $this->Area22='';
                $this->currentStep=31;
        }
    }

    public function updatedArea22(){
        if($this->Cantidad22 != 0){
        }else{
            $this->Cantidad22='';
                $this->Temas22='';
                $this->Impartido22='';
                $this->Area22='';
                $this->currentStep=31;
        }
    }

    public function updatedTemas22(){
        if($this->Cantidad22 != 0){
        }else{
            $this->Cantidad22='';
                $this->Temas22='';
                $this->Impartido22='';
                $this->Area22='';
                $this->currentStep=31;
        }
    }

    public function updatedsearch(){
        if(DB::table('entes')->where('ente', $this->search)->exists()){
            $this->ente=$this->search;           
        }else{
            
            $this->ente='';
        $this->currentStep=1;
        $this -> mailMessage = 'Selecciona un ente de la lista';
        }

        if(empty($this->search)){
            $this->ente='';
        }
    }

    public function updatedContSP113(){
        if($this->ContSP113 >= 0 && $this->ContSP113 < 101){
        }else{
            $this->ContSP113 = '';
        }
    }

    public function updatedContEP113(){
        if($this->ContEP113 >= 0 && $this->ContEP113 < 101){
        }else{
            $this->ContEP113 = '';
        }
    }

    public function updatedContSP213(){
        if($this->ContSP213 >= 0 && $this->ContSP213 < 101){
        }else{
            $this->ContSP213 = '';
        }
    }

    public function updatedContEP213(){
        if($this->ContEP213 >= 0 && $this->ContEP213 < 101){
        }else{
            $this->ContEP213 = '';
        }
    }

    public function updatedPresSP113(){
        if($this->PresSP113 >= 0 && $this->PresSP113 < 101){
        }else{
            $this->PresSP113 = '';
        }
    }

    public function updatedPresEP113(){
        if($this->PresEP113 >= 0 && $this->PresEP113 < 101){
        }else{
            $this->PresEP113 = '';
        }
    }

    public function updatedPresSP213(){
        if($this->PresSP213 >= 0 && $this->PresSP213 < 101){
        }else{
            $this->PresSP213 = '';
        }
    }

    public function updatedPresEP213(){
        if($this->PresEP213 >= 0 && $this->PresEP213 < 101){
        }else{
            $this->PresEP213 = '';
        }
    }

    public function updatedProgSP113(){
        if($this->ProgSP113 >= 0 && $this->ProgSP113 < 101){
        }else{
            $this->ProgSP113 = '';
        }
    }

    public function updatedProgEP113(){
        if($this->ProgEP113 >= 0 && $this->ProgEP113 < 101){
        }else{
            $this->ProgEP113 = '';
        }
    }

    public function updatedProgSP213(){
        if($this->ProgSP213 >= 0 && $this->ProgSP213 < 101){
        }else{
            $this->ProgSP213 = '';
        }
    }

    public function updatedProgEP213(){
        if($this->ProgEP213 >= 0 && $this->ProgEP213 < 101){
        }else{
            $this->ProgEP213 = '';
        }
    }

    public function updatedTVASP114(){
        if($this->TVASP114 >= 0 && $this->TVASP114 < 101){
        }else{
            $this->TVASP114 = '';
        }
    }

    public function updatedTVACP114(){
        if($this->TVACP114 >= 0 && $this->TVACP114 < 101){
        }else{
            $this->TVACP114 = '';
        }
    }

    public function updatedTVASP214(){
        if($this->TVASP214 >= 0 && $this->TVASP214 < 101){
        }else{
            $this->TVASP214 = '';
        }
    }

    public function updatedTVACP214(){
        if($this->TVACP214 >= 0 && $this->TVACP214 < 101){
        }else{
            $this->TVACP214 = '';
        }
    }

    public function updatedTVTSP114(){
        if($this->TVTSP114 >= 0 && $this->TVTSP114 < 101){
        }else{
            $this->TVTSP114 = '';
        }
    }

    public function updatedTVTCP114(){
        if($this->TVTCP114 >= 0 && $this->TVTCP114 < 101){
        }else{
            $this->TVTCP114 = '';
        }
    }

    public function updatedTVTSP214(){
        if($this->TVTSP214 >= 0 && $this->TVTSP214 < 101){
        }else{
            $this->TVTSP214 = '';
        }
    }

    public function updatedTVTCP214(){
        if($this->TVTCP214 >= 0 && $this->TVTCP214 < 101){
        }else{
            $this->TVTCP214 = '';
        }
    }

    public function updatedOASP114(){
        if($this->OASP114 >= 0 && $this->OASP114 < 101){
        }else{
            $this->OASP114 = '';
        }
    }

    public function updatedOACP114(){
        if($this->OACP114 >= 0 && $this->OACP114 < 101){
        }else{
            $this->OACP114 = '';
        }
    }

    public function updatedOASP214(){
        if($this->OASP214 >= 0 && $this->OASP214 < 101){
        }else{
            $this->OASP214 = '';
        }
    }

    public function updatedOACP214(){
        if($this->OACP214 >= 0 && $this->OACP214 < 101){
        }else{
            $this->OACP214 = '';
        }
    }

    public function updatedOTSP114(){
        if($this->OTSP114 >= 0 && $this->OTSP114 < 101){
        }else{
            $this->OTSP114 = '';
        }
    }

    public function updatedOTCP114(){
        if($this->OTCP114 >= 0 && $this->OTCP114 < 101){
        }else{
            $this->OTCP114 = '';
        }
    }

    public function updatedOTSP214(){
        if($this->OTSP214 >= 0 && $this->OTSP214 < 101){
        }else{
            $this->OTSP214 = '';
        }
    }

    public function updatedOTCP214(){
        if($this->OTCP214 >= 0 && $this->OTCP214 < 101){
        }else{
            $this->OTCP214 = '';
        }
    }

    public function updatedpre6(){
        if($this->pre6 == 0){
            $this->NoResSys = '';
        }else{
            $this->NoResSys = '-';
        }
    }

    public function updatedNoResSys(){
        $this->pre6=0;
    }


    /**
     * Limpiar Formulario
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->email = '';
        $this->nombre = '';
        $this->cargo = '';
        $this->area = '';
        $this->ente = '';
        $this->pre5 = '';
        $this->nameSys = '';
        $this->cadp = '';
        $this->docsSys = '';
        $this->startSys = '';
        $this->updSys = '';
        $this->infSys = '';
        $this->noSys = '';
        $this->pre6 = '';
        $this->perioRes = '';
        $this->lastRes = '';
        $this->pre7 = '';
        $this->noRes = '';
        $this->pre8 = '';
        $this->pre9 = '';
        $this->RegCont9 = '';
        $this->RegPre9 = '';
        $this->RegAdm9 = '';
        $this->RegTra9 = '';
        $this->RegCP9 = '';
        $this->InstC10 = '';
        $this->RegCont10 = '';
        $this->RepCont10 = '';
        $this->SInstC10 = '';
        $this->SRegCont10 = '';
        $this->SRepCont10 = '';
        $this->ClasP11 = '';
        $this->RegPre11 = '';
        $this->RepPre11 = '';
        $this->PrePro11 = '';
        $this->SClasP11 = '';
        $this->SRegPre11 = '';
        $this->SRepPre11 = '';
        $this->SPrePro11 = '';
        $this->ContBie12 = '';
        $this->RecFed12 = '';
        $this->SContBie12 = '';
        $this->SRecFed12 = '';
        $this->ContSP113 = '';
        $this->ContEP113 = '';
        $this->ContSP213 = '';
        $this->ContEP213 = '';        
        $this->PresSP113 = '';
        $this->PresEP113 = '';
        $this->PresSP213 = '';
        $this->PresEP213 = '';       
        $this->ProgSP113 = '';
        $this->ProgEP113 = '';
        $this->ProgSP213 = '';
        $this->ProgEP213 = '';                   
        $this->TVASP114 = '';
        $this->TVACP114 = '';
        $this->TVASP214 = '';
        $this->TVACP214 = '';        
        $this->TVTSP114 = '';
        $this->TVTCP114 = '';
        $this->TVTSP214 = '';
        $this->TVTCP214 = '';                   
        $this->OASP114 = '';
        $this->OACP114 = '';
        $this->OASP214 = '';
        $this->OACP214 = '';
        $this->OTSP114 = '';
        $this->OTCP114 = '';
        $this->OTSP214 = '';
        $this->OTCP214 = '';
        $this->ResGenCon15 = '';
        $this->TomoPE15 = '';
        $this->TomoPL15 = '';
        $this->TomoPJ15 = '';
        $this->TomoOA15 = '';
        $this->InfFin15 = '';
        $this->TomoSP15 = '';
        $this->SResGenCon15 = '';
        $this->STomoPE15 = '';
        $this->STomoPL15 = '';
        $this->STomoPJ15 = '';
        $this->STomoOA15 = '';
        $this->SInfFin15 = '';
        $this->STomoSP15 = '';
        $this->ResGenCon16 = '';
        $this->InfFinMun16 = '';
        $this->TomoSP16 = '';
        $this->InfFin16 = '';
        $this->SResGenCon16 = '';
        $this->SInfFinMun16 = '';
        $this->STomoSP16 = '';
        $this->SInfFin16 = '';
        $this->pre17 = '';
        $this->pre18 = '';
        $this->pre19 = '';
        $this->pre20 = '';
        $this->zoom = '';
        $this->meet = '';
        $this->skype = '';
        $this->teams = '';
        $this->nitropdf = '';
        $this->adobe = '';
        $this->anydesk = '';
        $this->teamviwer = '';
        $this->otrasHerramientas = '';
        $this->pre22 = '';
        $this->link = '';
        $this->linklgcg = '';
        $this->motivo = '';
        $this->Cantidad22 = '';
        $this->Temas22 = '';
        $this->Impartido22 = '';
        $this->Area22 = '';
        $this->pre23 = '';
        $this->area23 = '';
        $this->pre24 = '';
        $this->pre251 = '';
        $this->pre252 = '';
        $this->pre253 = '';
        $this->pre254 = '';
        $this->pre255 = '';
        $this->pre256 = '';
        $this->pre257 = '';
        $this->pre258 = '';
        $this->pre259 = '';
        $this->pre2510 = '';
        $this->pre2511 = '';
        $this->pre26 = '';
        $this->porque26 = '';
        $this->pre27 = '';
        $this->porque27 = '';
        $this->pre28 = '';
        $this->successMessage = '';
    }

    public $showdiv = false;
    public $search = "";
    public $records;
    public $empDetails;

    // Fetch records
    public function searchResult(){

        if(!empty($this->search)){

            $this->records = Entes::select('*')
                      ->where('ente','like','%'.$this->search.'%')
                      ->limit(5)
                      ->get();

            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchEntesDetail($id = 0){

        $record = Entes::select('ente')
                    ->where('id',$id)
                    ->first();

        $this->search = $record->ente;
        $this->ente = $record->ente;

        $this->showdiv = false;
    }

    

}