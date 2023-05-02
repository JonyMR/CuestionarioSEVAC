<?php

namespace App\Http\Livewire;

use App\Models\Respuesta;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};
use Illuminate\Http\Request;
use App\Exports\RespuestasExport;
use Maatwebsite\Excel\Facades\Excel;


final class PowerTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;


    public string $sortField = 'created_at';
    
    


    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        //$this->showCheckBox('email');
        $this->persist(['columns', 'filters']);

        return [
            Exportable::make('respuestas')
               ->striped()
               ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(mode: 'full'),
        ];
    }
    



    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Respuesta>
     */
    public function datasource(): Builder
    {
        return Respuesta::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('email')

           /** Example of custom column using a closure **/
            ->addColumn('email_lower', fn (Respuesta $model) => strtolower(e($model->email)))
            ->addColumn('nombre')
            ->addColumn('cargo')
            ->addColumn('area')
            ->addColumn('ente')
            ->addColumn('pre5')
            ->addColumn('nameSys')
            ->addColumn('cadp')
            ->addColumn('docsSys')
            ->addColumn('startSys_formatted', fn (Respuesta $model) => Carbon::parse($model->startSys)->format('d/m/Y'))
            ->addColumn('updSys_formatted', fn (Respuesta $model) => Carbon::parse($model->updSys)->format('d/m/Y'))
            ->addColumn('infSys')
            ->addColumn('noSys')
            ->addColumn('pre6')
            ->addColumn('perioRes')
            ->addColumn('lastRes_formatted', fn (Respuesta $model) => Carbon::parse($model->lastRes)->format('d/m/Y'))
            ->addColumn('NoResSys')
            ->addColumn('pre7')
            ->addColumn('usb')
            ->addColumn('ddext')
            ->addColumn('cddvd')
            ->addColumn('nube')
            ->addColumn('otroequipo')
            ->addColumn('noRes')
            ->addColumn('pre8')
            ->addColumn('pre9')
            ->addColumn('RegCont9')
            ->addColumn('RegPre9')
            ->addColumn('RegAdm9')
            ->addColumn('RegTra9')
            ->addColumn('RegCP9')
            ->addColumn('SInstC10')
            ->addColumn('InstC10')
            ->addColumn('SRegCont10')
            ->addColumn('RegCont10')
            ->addColumn('SRepCont10')
            ->addColumn('RepCont10')
            ->addColumn('SClasP11')
            ->addColumn('ClasP11')
            ->addColumn('SRegPre11')
            ->addColumn('RegPre11')
            ->addColumn('SRepPre11')
            ->addColumn('RepPre11')
            ->addColumn('SPrePro11')
            ->addColumn('PrePro11')
            ->addColumn('SContBie12')
            ->addColumn('ContBie12')
            ->addColumn('SRecFed12')
            ->addColumn('RecFed12')
            ->addColumn('ContSP113')
            ->addColumn('ContEP113')
            ->addColumn('ContSP213')
            ->addColumn('ContEP213')
            ->addColumn('PresSP113')
            ->addColumn('PresEP113')
            ->addColumn('PresSP213')
            ->addColumn('PresEP213')
            ->addColumn('ProgSP113')
            ->addColumn('ProgEP113')
            ->addColumn('ProgSP213')
            ->addColumn('ProgEP213')
            ->addColumn('TVASP114')
            ->addColumn('TVACP114')
            ->addColumn('TVASP214')
            ->addColumn('TVACP214')
            ->addColumn('TVTSP114')
            ->addColumn('TVTCP114')
            ->addColumn('TVTSP214')
            ->addColumn('TVTCP214')
            ->addColumn('OASP114')
            ->addColumn('OACP114')
            ->addColumn('OASP214')
            ->addColumn('OACP214')
            ->addColumn('OTSP114')
            ->addColumn('OTCP114')
            ->addColumn('OTSP214')
            ->addColumn('OTCP214')
            ->addColumn('SResGenCon15')
            ->addColumn('ResGenCon15')
            ->addColumn('TomoPE15')
            ->addColumn('STomoPE15')
            ->addColumn('STomoPL15')
            ->addColumn('TomoPL15')
            ->addColumn('STomoPJ15')
            ->addColumn('TomoPJ15')
            ->addColumn('STomoOA15')
            ->addColumn('TomoOA15')
            ->addColumn('SInfFin15')
            ->addColumn('InfFin15')
            ->addColumn('STomoSP15')
            ->addColumn('TomoSP15')
            ->addColumn('SResGenCon16')
            ->addColumn('ResGenCon16')
            ->addColumn('SInfFinMun16')
            ->addColumn('InfFinMun16')
            ->addColumn('STomoSP16')
            ->addColumn('TomoSP16')
            ->addColumn('SInfFin16')
            ->addColumn('InfFin16')
            ->addColumn('pre17')
            ->addColumn('pre18')
            ->addColumn('pre19')
            ->addColumn('pre20')
            ->addColumn('zoom')
            ->addColumn('meet')
            ->addColumn('skype')
            ->addColumn('teams')
            ->addColumn('nitropdf')
            ->addColumn('adobe')
            ->addColumn('anydesk')
            ->addColumn('teamviwer')
            ->addColumn('otrasHerramientas')
            ->addColumn('pre22')
            ->addColumn('link')
            ->addColumn('linklgcg')
            ->addColumn('motivo')
            ->addColumn('Cantidad22')
            ->addColumn('Temas22')
            ->addColumn('Impartido22')
            ->addColumn('Area22')
            ->addColumn('pre23')
            ->addColumn('area23')
            ->addColumn('pre24')
            ->addColumn('pre251')
            ->addColumn('pre252')
            ->addColumn('pre253')
            ->addColumn('pre254')
            ->addColumn('pre255')
            ->addColumn('pre256')
            ->addColumn('pre257')
            ->addColumn('pre258')
            ->addColumn('pre259')
            ->addColumn('pre2510')
            ->addColumn('pre2511')
            ->addColumn('pre26')
            ->addColumn('porque26')
            ->addColumn('pre27')
            ->addColumn('porque27')
            ->addColumn('pre28')
            ->addColumn('created_at_formatted', fn (Respuesta $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    

     /**
      * PowerGrid Columns.
      *
      * @return array<int, Column>
      */
    public function columns(): array
    {
        return [
            Column::make('Email', 'email')
                ->searchable()
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Nombre', 'nombre')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Cargo', 'cargo')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Area de Adscripción', 'area')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Ente Público', 'ente')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('---Pregunta 5---', 'pre5')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Nombre del Sistema', 'nameSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Origen del Sistema', 'cadp')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Documentación del Sistema', 'docsSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),

            Column::make('Fecha de Inicio', 'startSys_formatted', 'startSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Fecha de Última Actualización', 'updSys_formatted', 'updSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Empresa / Documentos', 'infSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->searchable(),
            Column::make('Motivo No usa Sistema', 'noSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('---Pregunta 6---', 'pre6')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Periodo de Respaldos', 'perioRes')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Fecha de Último Respaldo', 'lastRes_formatted', 'lastRes')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Motivo no Respaldar Sistema', 'NoResSys')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('---Pregunta 7---', 'pre7')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Usb como medio externo', 'usb')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('HDD como medio externo', 'ddext')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('CD/DVD como medio externo', 'cddvd')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Nube como medio externo', 'nube')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Otro equipo como medio externo', 'otroequipo')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Motivo de no tener respaldos', 'noRes')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('---Pregunta 8---', 'pre8')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('---Pregunta 9---', 'pre9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('% Registros Contables (9)', 'RegCont9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('% Registros Presupuestales (9)', 'RegPre9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('% Registros Administrativos (9)', 'RegAdm9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('% Registros Transparencia (9)', 'RegTra9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('% Registros Cuenta Pública (9)', 'RegCP9')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('SEvAC P-1-2022 Instrumentos Contables (10)', 'SInstC10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Instrumentos Contables (10)', 'InstC10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Registros Contables (10)', 'SRegCont10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Registros Contables (10)', 'RegCont10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Reportes Contables (10)', 'SRepCont10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Reportes Contables (10)', 'RepCont10')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Clasif. Presupuestales (11)', 'SClasP11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Clasif. Presupuestales (11)', 'ClasP11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Registros Presupuestarios (11)', 'SRegPre11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Registros Presupuestarios (11)', 'RegPre11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Reportes Presupuestarios (11)', 'SRepPre11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Reportes Presupuestarios (11)', 'RepPre11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Reportes Programáticos (11)', 'SPrePro11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Reportes Programáticos (11)', 'PrePro11')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Control de Bienes (12)', 'SContBie12')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Control de Bienes (12)', 'ContBie12')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Recursos Federales (12)', 'SRecFed12')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Recursos Federales (12)', 'RecFed12')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Contenido Contable (13)', 'ContSP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Contenido Contable (13)', 'ContEP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Contenido Contable (13)', 'ContSP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Contenido Contable (13)', 'ContEP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Contenido Presupuestario (13)', 'PresSP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Contenido Presupuestario (13)', 'PresEP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Contenido Presupuestario (13)', 'PresSP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Contenido Presupuestario (13)', 'PresEP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Contenido Programático (13)', 'ProgSP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Contenido Programático (13)', 'ProgEP113')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Contenido Programático (13)', 'ProgSP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Contenido Programático (13)', 'ProgEP213')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Título V Anual (14)', 'TVASP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Título V Anual (14)', 'TVACP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Título V Anual (14)', 'TVASP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Título V Anual(14)', 'TVACP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Título V Trimestral (14) ', 'TVTSP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Título V Trimestral (14)', 'TVTCP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Título V Trimestral (14)', 'TVTSP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Título V Trimestral (14)', 'TVTCP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Otras Obligaciones Anual (14)', 'OASP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Otras Obligaciones Anual (14)', 'OACP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Otras Obligaciones Anual (14)', 'OASP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Otras Obligaciones Anual (14)', 'OACP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-1-2022 Otras Obligaciones Trimestral (14)', 'OTSP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-1-2022 Otras Obligaciones Trimestral (14)', 'OTCP114')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Otras Obligaciones Trimestral (14)', 'OTSP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Otras Obligaciones Trimestral (14)', 'OTCP214')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Resultados Generales y Consolidados (15)', 'SResGenCon15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Resultados Generales y Consolidados (15)', 'ResGenCon15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo del Poder Ejecutivo (15)', 'TomoPE15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Tomo del Poder Ejecutivo (15)', 'STomoPE15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo del Poder Legislativo (15)', 'STomoPL15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Tomo del Poder Legislativo (15)', 'TomoPL15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo del Poder Judicial (15)', 'STomoPJ15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Tomo del Poder Judicial (15)', 'TomoPJ15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo de Órganos Autónomos (15)', 'STomoOA15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Tomo de Órganos Autónomos (15)', 'TomoOA15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Inf. Financiera Paraestatal (15)', 'SInfFin15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Inf. Financiera Paraestatal (15)', 'InfFin15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo del Sector Paraestatal (15)', 'STomoSP15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Tomo del Sector Paraestatal (15)', 'TomoSP15')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Resultados Generales y Consolidados (16)', 'SResGenCon16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Resultados Generales y Consolidados (16)', 'ResGenCon16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Inf. Financiera del Municipio (16)', 'SInfFinMun16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 Inf. Financiera del Municipio (16)', 'InfFinMun16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC P-2-2022 Tomo del Sector Paramunicipal (16)', 'STomoSP16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente P-2-2022 tomo del Sector Paramunicipal (16)', 'TomoSP16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('SEvAC Inf. Financiera Consolidada Paramunicipal (16)', 'SInfFin16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('Ente Inf. Financiera Consolidada Paramunicipal (16)', 'InfFin16')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black')
                ->withAvg('Promedio', false, true),
            Column::make('---Pregunta 17---', 'pre17')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('---Pregunta 18---', 'pre18')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Pregunta 19', 'pre19')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Pregunta 20', 'pre20')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Zoom? (21)', 'zoom')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Meet? (21)', 'meet')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Skype? (21)', 'skype')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Teams? (21)', 'teams')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Nitro PDF? (21)', 'nitropdf')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Adobe? (21)', 'adobe')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa AnyDesk? (21)', 'anydesk')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa Team Viewer? (21)', 'teamviwer')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('¿Usa otras herramientas?', 'otrasHerramientas')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
                

            Column::make('---Pregunta 22---', 'pre22')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
                

            Column::make('Link Página Oficial', 'link')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Link apartado de transparencia', 'linklgcg')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Motivo no cuenta con sitio oficial', 'motivo')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('# de capacitaciones recibidas', 'Cantidad22')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),
            Column::make('Temas vistos en las capacitaciones', 'Temas22')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Capacitaciones impartidas por:', 'Impartido22')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Área(s) capacitada(s)', 'Area22')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('---Pregunta 24---', 'pre23')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Área / Empresa', 'area23')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('---Pregunta 25---', 'pre24')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 1', 'pre251')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 2', 'pre252')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 3', 'pre253')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 4', 'pre254')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 5', 'pre255')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 6', 'pre256')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 7', 'pre257')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 8', 'pre258')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 9', 'pre259')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 10', 'pre2510')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Tema 11', 'pre2511')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('---Pregunta 27---', 'pre26')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Motivo Pregunta 27', 'porque26')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('---Pregunta 28---', 'pre27')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Motivo Pregunta 28', 'porque27')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Pregunta 29', 'pre28')
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

            Column::make('Fecha de registro', 'created_at_formatted', 'created_at')
                ->sortable()
                ->bodyAttribute('text-center')
                ->headerAttribute('text-center', 'color:black'),

        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            /*Filter::inputText('email')->operators(['contains']),
            Filter::inputText('nombre')->operators(['contains']),
            Filter::inputText('cargo')->operators(['contains']),
            Filter::inputText('area')->operators(['contains']),*/
            Filter::inputText('ente')->operators(['contains']),
            Filter::boolean('pre5'),
            Filter::inputText('nameSys')->operators(['contains']),
            /*Filter::inputText('cadp')->operators(['contains']),
            Filter::inputText('docsSys')->operators(['contains']),
            Filter::datepicker('startSys'),
            Filter::datepicker('updSys'),
            Filter::inputText('infSys')->operators(['contains']),*/
            Filter::boolean('pre6'),
            /*Filter::inputText('perioRes')->operators(['contains']),
            Filter::datepicker('lastRes'),*/
            Filter::boolean('pre7'),
            Filter::boolean('pre8'),
            Filter::boolean('pre9'),
            Filter::boolean('pre17'),
            Filter::select('pre18', 'pre18')
                    ->dataSource(Respuesta::select('pre18')->distinct()->get())
                    ->optionValue('pre18')
                    ->optionLabel('pre18'),
            /*Filter::boolean('zoom'),
            Filter::boolean('meet'),
            Filter::boolean('skype'),
            Filter::boolean('teams'),
            Filter::boolean('nitropdf'),
            Filter::boolean('adobe'),
            Filter::boolean('anydesk'),
            Filter::boolean('teamviwer'),*/
            Filter::inputText('otrasHerramientas')->operators(['contains']),
            Filter::boolean('pre22'),
            /*Filter::inputText('link')->operators(['contains']),
            Filter::inputText('linklgcg')->operators(['contains']),
            Filter::inputText('motivo')->operators(['contains']),
            Filter::inputText('Temas22')->operators(['contains']),
            Filter::inputText('Impartido22')->operators(['contains']),
            Filter::inputText('Area22')->operators(['contains']),*/
            //Filter::inputText('pre23')->operators(['contains']),
            //Filter::inputText('area23')->operators(['contains']),
            Filter::select('pre23', 'pre23')
                    ->dataSource(Respuesta::select('pre23')->distinct()->get())
                    ->optionValue('pre23')
                    ->optionLabel('pre23'),
            Filter::boolean('pre24'),
            /*Filter::inputText('pre251')->operators(['contains']),
            Filter::inputText('pre252')->operators(['contains']),
            Filter::inputText('pre253')->operators(['contains']),
            Filter::inputText('pre254')->operators(['contains']),
            Filter::inputText('pre255')->operators(['contains']),
            Filter::inputText('pre256')->operators(['contains']),
            Filter::inputText('pre257')->operators(['contains']),
            Filter::inputText('pre258')->operators(['contains']),
            Filter::inputText('pre259')->operators(['contains']),
            Filter::inputText('pre2510')->operators(['contains']),
            Filter::inputText('pre2511')->operators(['contains']),*/
            Filter::boolean('pre26'),
            Filter::boolean('pre27'),
            /*Filter::boolean('usb'),
            Filter::boolean('ddext'),
            Filter::boolean('cddvd'),
            Filter::boolean('nube'),
            Filter::boolean('otroequipo'),
            Filter::datetimepicker('created_at'),*/
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Respuesta Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('respuesta.edit', function(\App\Models\Respuesta $model) {
                    return $model->id;
               }),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('respuesta.destroy', function(\App\Models\Respuesta $model) {
                    return $model->id;
               })
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Respuesta Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($respuesta) => $respuesta->id === 1)
                ->hide(),
        ];
    }
    */

}

