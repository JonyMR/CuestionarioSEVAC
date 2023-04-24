<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Respuesta;
use Illuminate\Support\Facades\DB;
  
class Wizard extends Component
{
    public $currentStep = 0;



    public $email, $nombre, $pre5, $cargo, $area, $ente, $nameSys, $cadp, $docsSys, $startSys, $updSys, $infSys, $noSys,
    $pre6, $perioRes, $lastRes, $pre7, $noRes, $pre8, $pre9, $RegCont9, $RegPre9, $RegAdm9, $RegTra9, $RegCP9,
    $InstC10, $RegCont10, $RepCont10, $ClasP11, $RegPre11, $RepPre11, $PrePro11, $ContBie12, $RecFed12, $ContCont13, $ContPre13, 
    $ContProg13, $TVAn14, $TVTri14, $OtrAn14, $OtrTri14, $ResGenCon15, $TomoPE15, $TomoPL15, $TomoPJ15, $TomoOA15, $InfFin15, $TomoSP15,   
    $ResGenCon16, $InfFinMun16, $TomoSP16, $InfFin16, $pre17, $pre18, $pre19, $pre20, $zoom, $meet, $skype, $teams, $nitropdf, $adobe, $anydesk, $teamviwer,
    $otrasHerramientas, $pre22, $link, $linklgcg, $motivo, $Cantidad22, $Temas22, $Impartido22, $Area22, $pre23, $area23, $pre24, $pre251, $pre252, $pre253, $pre254, $pre255, $pre256,
    $pre257, $pre258, $pre259, $pre2510, $pre2511, $pre26, $porque26, $pre27, $porque27, $pre28;

    public $successMessage = '', $mailMessage='';
  
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

            'email'  => 'required|email|unique:respuestas',            //Pregunta 1 de forms
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
        'ente.required' => 'Su ente es requerido.',
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
            
            $this->currentStep = 3;
        }else {
            
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
        ], [//*********Validaciones*****************
            'pre6.required' => 'Por favor selecciona una opción',]);

        if ($this->pre6) {
            $this->currentStep = 9;
        }else {
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
        $validatedData = $this->validate([
            'pre7' => 'required',                              
        ], [//*********Validaciones*****************
            'pre7.required' => 'Por favor selecciona una opción',]);

        if ($this->pre7) {
            $this->currentStep = 12;
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
            'RegCP9' => 'required|numeric|min:0|max:100|integer'
        ],[//*********Validaciones*****************
            'RegCont9.required' => 'Este campo es obligatorio.',
            'Reg.Cont9.numeric' => 'Ingresa un valor numérico.',
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
            'RegCP9.integer' => 'Ingresa un número entero, sin decimales.']);

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
        ],[
            'ContBie12.required' => 'Este campo es obligatorio',
            'ContBie12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContBie12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContBie12.integer' => 'Ingresa un número entero, sin decimales.',

            'RecFed12.required' => 'Este campo es obligatorio',
            'RecFed12.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RecFed12.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'RecFed12.integer' => 'Ingresa un número entero, sin decimales.',
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
            'ContCont13' => 'required|numeric|min:0|max:100|integer',
            'ContPre13' => 'required|numeric|min:0|max:100|integer',
            'ContProg13' => 'required|numeric|min:0|max:100|integer',
        ],[
            'ContCont13.required' => 'Este campo es obligatorio',
            'ContCont13.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContCont13.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContCont13.integer' => 'Ingresa un número entero, sin decimales.',
            
            'ContPre13.required' => 'Este campo es obligatorio',
            'ContPre13.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContPre13.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContPre13.integer' => 'Ingresa un número entero, sin decimales.',

            'ContProg13.required' => 'Este campo es obligatorio',
            'ContProg13.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContProg13.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'ContProg13.integer' => 'Ingresa un número entero, sin decimales.',
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
            'TVAn14' => 'required|numeric|min:0|max:100|integer',
            'TVTri14' => 'required|numeric|min:0|max:100|integer',
            'OtrAn14' => 'required|numeric|min:0|max:100|integer',
            'OtrTri14' => 'required|numeric|min:0|max:100|integer',
        ],[
            'TVAn14.required' => 'Este campo es obligatorio',
            'TVAn14.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVAn14.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVAn14.integer' => 'Ingresa un número entero, sin decimales.',
            
            'TVTri14.required' => 'Este campo es obligatorio',
            'TVTri14.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTri14.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'TVTri14.integer' => 'Ingresa un número entero, sin decimales.',

            'OtrAn14.required' => 'Este campo es obligatorio',
            'OtrAn14.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OtrAn14.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OtrAn14.integer' => 'Ingresa un número entero, sin decimales.',

            'OtrTri14.required' => 'Este campo es obligatorio',
            'OtrTri14.min' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OtrTri14.max' => 'Ingresa un número del 0 al 100 según sea tu porcentaje de cumplimiento.',
            'OtrTri14.integer' => 'Ingresa un número entero, sin decimales.',
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
        ],['otrasHerramientas.required' => 'Por favor seleccione una opción.']);

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
                    'pre7' => $this->pre7,
                    'noRes' => $this->noRes,
                    'pre8' => $this->pre8,
                    'pre9' => $this->pre9,
                    'RegCont9' => $this->RegCont9,
                    'RegPre9' => $this->RegPre9,
                    'RegAdm9' => $this->RegAdm9,
                    'RegTra9' => $this->RegTra9,
                    'RegCP9' => $this->RegCP9,
                    'InstC10' => $this->InstC10,
                    'RegCont10' => $this->RegCont10,
                    'RepCont10' => $this->RepCont10,
                    'ClasP11' => $this->ClasP11,
                    'RegPre11' => $this->RegPre11,
                    'RepPre11' => $this->RepPre11,
                    'PrePro11' => $this->PrePro11,
                    'ContBie12' => $this->ContBie12,
                    'RecFed12' => $this->RecFed12,
                    'ContCont13' => $this->ContCont13,
                    'ContPre13' => $this->ContPre13,
                    'ContProg13' => $this->ContProg13,
                    'TVAn14' => $this->TVAn14,
                    'TVTri14' => $this->TVTri14,
                    'OtrAn14' => $this->OtrAn14,
                    'OtrTri14' => $this->OtrTri14,
                    'ResGenCon15' => $this->ResGenCon15,
                    'TomoPE15' => $this->TomoPE15,
                    'TomoPL15' => $this->TomoPL15,
                    'TomoPJ15' => $this->TomoPJ15,
                    'TomoOA15' => $this->TomoOA15,
                    'IntFin15' => $this->InfFin15,
                    'TomoSP15' => $this->TomoSP15,
                    'ResGenCon16' => $this->ResGenCon16,
                    'InfFinMun16' => $this->InfFinMun16,
                    'TomoSP16' => $this->TomoSP16,
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
                ]);
            
  
        $this->successMessage = 'Respuestas enviada correctamente.';
  
        $this->clearForm();
  
        $this->currentStep = 38;
    }
  
    /**
     * Navegación de steps
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
                $this->Temas22='';
                $this->Impartido22='';
                $this->Area22='';
                $this->currentStep=31;
            }else{
                
            }
        }
    }
//Validaciones de porcentajes
//Pregunta 9
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

//Pregunta 13
    public function updatedContCont13(){
        if($this->ContCont13 >= 0 && $this->ContCont13 < 101){
        }else{
            $this->ContCont13 = '';
        }
    }
    
    public function updatedContPre13(){
        if($this->ContPre13 >= 0 && $this->ContPre13 < 101){
        }else{
            $this->ContPre13 = '';
        }
    }

    public function updatedContProg13(){
        if($this->ContProg13 >= 0 && $this->ContProg13 < 101){
        }else{
            $this->ContProg13 = '';
        }
    }

//Pregunta 14
    public function updatedTVAn14(){
        if($this->TVAn14 >= 0 && $this->TVAn14 < 101){
        }else{
            $this->TVAn14 = '';
        }
    }
    
    public function updatedTVTri14(){
        if($this->TVTri14 >= 0 && $this->TVTri14 < 101){
        }else{
            $this->TVTri14 = '';
        }
    }

    public function updatedOtrAn14(){
        if($this->OtrAn14 >= 0 && $this->OtrAn14 < 101){
        }else{
            $this->OtrAn14 = '';
        }
    }

    public function updatedOtrTri14(){
        if($this->OtrTri14 >= 0 && $this->OtrTri14 < 101){
        }else{
            $this->OtrTri14 = '';
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
        $this->ClasP11 = '';
        $this->RegPre11 = '';
        $this->RepPre11 = '';
        $this->PrePro11 = '';
        $this->ContBie12 = '';
        $this->RecFed12 = '';
        $this->ContCont13 = '';
        $this->ContPre13 = '';
        $this->ContProg13 = '';
        $this->TVAn14 = '';
        $this->TVTri14 = '';
        $this->OtrAn14 = '';
        $this->OtrTri14 = '';
        $this->ResGenCon15 = '';
        $this->TomoPE15 = '';
        $this->TomoPL15 = '';
        $this->TomoPJ15 = '';
        $this->TomoOA15 = '';
        $this->InfFin15 = '';
        $this->TomoSP15 = '';
        $this->ResGenCon16 = '';
        $this->InfFinMun16 = '';
        $this->TomoSP16 = '';
        $this->InfFin16 = '';
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

}