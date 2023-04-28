<?php

namespace App\Http\Livewire;

use App\Models\Respuesta;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PowerTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    public string $primaryKey = 'email';

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
        //$this->showToggleColumns();

        return [
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
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
                ->visibleInExport(true),

            Column::make('Nombre', 'nombre')
                ->searchable(),

            Column::make('Cargo', 'cargo')
                ->searchable(),

            Column::make('Area de Adscripción', 'area')
                ->searchable(),

            Column::make('Ente Público', 'ente')
                ->searchable(),

            Column::make('---Pregunta 5---', 'pre5'),

            Column::make('Nombre del Sistema', 'nameSys')
                ->searchable(),

            Column::make('Origen del Sistema', 'cadp')
                ->searchable(),

            Column::make('Documentación del Sistema', 'docsSys')
                ->searchable(),

            Column::make('Fecha de Inicio', 'startSys_formatted', 'startSys'),
            Column::make('Fecha de Última Actualización', 'updSys_formatted', 'updSys'),
            Column::make('Empresa / Documentos', 'infSys')
                ->searchable(),
            Column::make('Motivo No usa Sistema', 'noSys'),
            Column::make('Pregunta 6', 'pre6'),
            Column::make('Periodo de Respaldos', 'perioRes'),
            Column::make('Fecha de Último Respaldo', 'lastRes_formatted', 'lastRes'),
            Column::make('Motivo no Respaldar Sistema', 'NoResSys'),
            Column::make('Pregunta 7', 'pre7'),
            Column::make('Usb como medio externo', 'usb'),
            Column::make('HDD como medio externo', 'ddext'),
            Column::make('CD/DVD como medio externo', 'cddvd'),
            Column::make('Nube como medio externo', 'nube'),
            Column::make('Otro equipo como medio externo', 'otroequipo'),
            Column::make('Motivo de no tener respaldos', 'noRes'),
            Column::make('Pregunta 8', 'pre8'),
            Column::make('Pregunta 9', 'pre9'),
            Column::make('% Registros Contables (9)', 'RegCont9'),
            Column::make('% Registros Presupuestales (9)', 'RegPre9'),
            Column::make('% Registros Administrativos (9)', 'RegAdm9'),
            Column::make('% Registros Transparencia (9)', 'RegTra9'),
            Column::make('% Registros Cuenta Pública (9)', 'RegCP9'),
            Column::make('SEvAC P-1-2022 Instrumentos Contables (10)', 'SInstC10'),
            Column::make('Ente P-1-2022 Instrumentos Contables (10)', 'InstC10'),
            Column::make('SEvAC P-1-2022 Registros Contables (10)', 'SRegCont10'),
            Column::make('Ente P-1-2022 Registros Contables (10)', 'RegCont10'),
            Column::make('SEvAC P-1-2022 Reportes Contables (10)', 'SRepCont10'),
            Column::make('Ente P-1-2022 Reportes Contables (10)', 'RepCont10'),
            Column::make('SEvAC P-1-2022 Clasif. Presupuestales (11)', 'SClasP11'),
            Column::make('Ente P-1-2022 Clasif. Presupuestales (11)', 'ClasP11'),
            Column::make('SEvAC P-1-2022 Registros Presupuestarios (11)', 'SRegPre11'),
            Column::make('Ente P-1-2022 Registros Presupuestarios (11)', 'RegPre11'),
            Column::make('SEvAC P-1-2022 Reportes Presupuestarios (11)', 'SRepPre11'),
            Column::make('Ente P-1-2022 Reportes Presupuestarios (11)', 'RepPre11'),
            Column::make('SEvAC P-1-2022 Reportes Programáticos (11)', 'SPrePro11'),
            Column::make('Ente P-1-2022 Reportes Programáticos (11)', 'PrePro11'),
            Column::make('SEvAC P-1-2022 Control de Bienes (12)', 'SContBie12'),
            Column::make('Ente P-1-2022 Control de Bienes (12)', 'ContBie12'),
            Column::make('SEvAC P-1-2022 Recursos Federales (12)', 'SRecFed12'),
            Column::make('Ente P-1-2022 Recursos Federales (12)', 'RecFed12'),
            Column::make('SEvAC P-1-2022 Contenido Contable (13)', 'ContSP113'),
            Column::make('Ente P-1-2022 Contenido Contable (13)', 'ContEP113'),
            Column::make('SEvAC P-2-2022 Contenido Contable (13)', 'ContSP213'),
            Column::make('Ente P-2-2022 Contenido Contable (13)', 'ContEP213'),
            Column::make('SEvAC P-1-2022 Contenido Presupuestario (13)', 'PresSP113'),
            Column::make('Ente P-1-2022 Contenido Presupuestario (13)', 'PresEP113'),
            Column::make('SEvAC P-2-2022 Contenido Presupuestario (13)', 'PresSP213'),
            Column::make('Ente P-2-2022 Contenido Presupuestario (13)', 'PresEP213'),
            Column::make('SEvAC P-1-2022 Contenido Programático (13)', 'ProgSP113'),
            Column::make('Ente P-1-2022 Contenido Programático (13)', 'ProgEP113'),
            Column::make('SEvAC P-2-2022 Contenido Programático (13)', 'ProgSP213'),
            Column::make('Ente P-2-2022 Contenido Programático (13)', 'ProgEP213'),
            Column::make('SEvAC P-1-2022 Título V Anual (14)', 'TVASP114'),
            Column::make('Ente P-1-2022 Título V Anual (14)', 'TVACP114'),
            Column::make('SEvAC P-2-2022 Título V Anual (14)', 'TVASP214'),
            Column::make('Ente P-2-2022 Título V Anual(14)', 'TVACP214'),
            Column::make('SEvAC P-1-2022 Título V Trimestral (14) ', 'TVTSP114'),
            Column::make('Ente P-1-2022 Título V Trimestral (14)', 'TVTCP114'),
            Column::make('SEvAC P-2-2022 Título V Trimestral (14)', 'TVTSP214'),
            Column::make('Ente P-2-2022 Título V Trimestral (14)', 'TVTCP214'),
            Column::make('SEvAC P-1-2022 Otras Obligaciones Anual (14)', 'OASP114'),
            Column::make('Ente P-1-2022 Otras Obligaciones Anual (14)', 'OACP114'),
            Column::make('SEvAC P-2-2022 Otras Obligaciones Anual (14)', 'OASP214'),
            Column::make('Ente P-2-2022 Otras Obligaciones Anual (14)', 'OACP214'),
            Column::make('SEvAC P-1-2022 Otras Obligaciones Trimestral (14)', 'OTSP114'),
            Column::make('Ente P-1-2022 Otras Obligaciones Trimestral (14)', 'OTCP114'),
            Column::make('SEvAC P-2-2022 Otras Obligaciones Trimestral (14)', 'OTSP214'),
            Column::make('Ente P-2-2022 Otras Obligaciones Trimestral (14)', 'OTCP214'),
            Column::make('SEvAC P-2-2022 Resultados Generales y Consolidados (15)', 'SResGenCon15'),
            Column::make('Ente P-2-2022 Resultados Generales y Consolidados (15)', 'ResGenCon15'),
            Column::make('SEvAC P-2-2022 Tomo del Poder Ejecutivo (15)', 'TomoPE15'),
            Column::make('Ente P-2-2022 Tomo del Poder Ejecutivo (15)', 'STomoPE15'),
            Column::make('SEvAC P-2-2022 Tomo del Poder Legislativo (15)', 'STomoPL15'),
            Column::make('Ente P-2-2022 Tomo del Poder Legislativo', 'TomoPL15'),
            Column::make('SEvAC P-2-2022 Tomo del Poder Judicial (15)', 'STomoPJ15'),
            Column::make('Ente P-2-2022 Tomo del Poder Judicial (15)', 'TomoPJ15'),
            Column::make('SEvAC P-2-2022 Tomo de Órganos Autónomos (15)', 'STomoOA15'),
            Column::make('Ente P-2-2022 Tomo de Órganos Autónomos (15)', 'TomoOA15'),
            Column::make('SEvAC P-2-2022 Inf. Financiera Paraestatal (15)', 'SInfFin15'),
            Column::make('Ente P-2-2022 Inf. Financiera Paraestatal (15)', 'InfFin15'),
            Column::make('SEvAC P-2-2022 Tomo del Sector Paraestatal (15)', 'STomoSP15'),
            Column::make('Ente P-2-2022 Tomo del Sector Paraestatal (15)', 'TomoSP15'),
            Column::make('SEvAC P-2-2022 Resultados Generales y Consolidados (16)', 'SResGenCon16'),
            Column::make('Ente P-2-2022 Resultados Generales y Consolidados (16)', 'ResGenCon16'),
            Column::make('SEvAC P-2-2022 Inf. Financiera del Municipio (16)', 'SInfFinMun16'),
            Column::make('Ente P-2-2022 Inf. Financiera del Municipio (16)', 'InfFinMun16'),
            Column::make('SEvAC P-2-2022 Tomo del Sector Paramunicipal (16)', 'STomoSP16'),
            Column::make('Ente P-2-2022 tomo del Sector Paramunicipal (16)', 'TomoSP16'),
            Column::make('SEvAC Inf. Financiera Consolidada Paramunicipal (16)', 'SInfFin16'),
            Column::make('Ente Inf. Financiera Consolidada Paramunicipal (16)', 'InfFin16'),
            Column::make('Pregunta 17', 'pre17'),

            Column::make('Pregunta 18', 'pre18'),

            Column::make('Pregunta 19', 'pre19'),
            Column::make('Pregunta 20', 'pre20'),

            Column::make('¿Usa Zoom? (21)', 'zoom'),

            Column::make('¿Usa Meet? (21)', 'meet'),

            Column::make('¿Usa Skype? (21)', 'skype'),

            Column::make('¿Usa Teams? (21)', 'teams'),

            Column::make('¿Usa Nitro PDF? (21)', 'nitropdf'),

            Column::make('¿Usa Adobe? (21)', 'adobe'),

            Column::make('¿Usa AnyDesk? (21)', 'anydesk'),

            Column::make('¿Usa Team Viewer? (21)', 'teamviwer'),

            Column::make('¿Usa otras herramientas?', 'otrasHerramientas'),

            Column::make('Pregunta 22', 'pre22'),

            Column::make('Link Página Oficial', 'link'),

            Column::make('Link apartado de transparencia', 'linklgcg'),

            Column::make('Motivo no cuenta con sitio oficial', 'motivo'),

            Column::make('# de capacitaciones recibidas', 'Cantidad22'),
            Column::make('Temas vistos en las capacitaciones', 'Temas22'),

            Column::make('Capacitaciones impartidas por:', 'Impartido22'),

            Column::make('Área(s) capacitada(s)', 'Area22'),

            Column::make('Pregunta 24', 'pre23'),

            Column::make('Área / Empresa', 'area23'),

            Column::make('Pregunta 25', 'pre24'),

            Column::make('Tema 1', 'pre251'),

            Column::make('Tema 2', 'pre252'),

            Column::make('Tema 3', 'pre253'),

            Column::make('Tema 4', 'pre254'),

            Column::make('Tema 5', 'pre255'),

            Column::make('Tema 6', 'pre256'),

            Column::make('Tema 7', 'pre257'),

            Column::make('Tema 8', 'pre258'),

            Column::make('Tema 9', 'pre259'),

            Column::make('Tema 10', 'pre2510'),

            Column::make('Tema 11', 'pre2511'),

            Column::make('Pregunta 27', 'pre26'),

            Column::make('Motivo Pregunta 27', 'porque26'),

            Column::make('Pregunta 28', 'pre27'),

            Column::make('Motivo Pregunta 28', 'porque27'),

            Column::make('Pregunta 29', 'pre28'),

            Column::make('Fecha de registro', 'created_at_formatted', 'created_at')
                ->sortable(),

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
            Filter::inputText('area')->operators(['contains']),
            Filter::inputText('ente')->operators(['contains']),*/
            Filter::boolean('pre5'),
            /*Filter::inputText('nameSys')->operators(['contains']),
            Filter::inputText('cadp')->operators(['contains']),
            Filter::inputText('docsSys')->operators(['contains']),
            Filter::datepicker('startSys'),
            Filter::datepicker('updSys'),
            Filter::inputText('infSys')->operators(['contains']),
            Filter::boolean('pre6'),
            Filter::inputText('perioRes')->operators(['contains']),
            Filter::datepicker('lastRes'),
            Filter::boolean('pre7'),
            Filter::boolean('pre8'),
            Filter::boolean('pre9'),
            Filter::inputText('pre17')->operators(['contains']),
            Filter::inputText('pre18')->operators(['contains']),
            Filter::boolean('zoom'),
            Filter::boolean('meet'),
            Filter::boolean('skype'),
            Filter::boolean('teams'),
            Filter::boolean('nitropdf'),
            Filter::boolean('adobe'),
            Filter::boolean('anydesk'),
            Filter::boolean('teamviwer'),
            Filter::inputText('otrasHerramientas')->operators(['contains']),
            Filter::boolean('pre22'),
            Filter::inputText('link')->operators(['contains']),
            Filter::inputText('linklgcg')->operators(['contains']),
            Filter::inputText('motivo')->operators(['contains']),
            Filter::inputText('Temas22')->operators(['contains']),
            Filter::inputText('Impartido22')->operators(['contains']),
            Filter::inputText('Area22')->operators(['contains']),
            Filter::inputText('pre23')->operators(['contains']),
            Filter::inputText('area23')->operators(['contains']),
            Filter::boolean('pre24'),
            Filter::inputText('pre251')->operators(['contains']),
            Filter::inputText('pre252')->operators(['contains']),
            Filter::inputText('pre253')->operators(['contains']),
            Filter::inputText('pre254')->operators(['contains']),
            Filter::inputText('pre255')->operators(['contains']),
            Filter::inputText('pre256')->operators(['contains']),
            Filter::inputText('pre257')->operators(['contains']),
            Filter::inputText('pre258')->operators(['contains']),
            Filter::inputText('pre259')->operators(['contains']),
            Filter::inputText('pre2510')->operators(['contains']),
            Filter::inputText('pre2511')->operators(['contains']),
            Filter::boolean('pre26'),
            Filter::boolean('pre27'),
            Filter::boolean('usb'),
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

    public function export()
    {
        return Storage::disk('exports')->download('export.csv');
    }
}

