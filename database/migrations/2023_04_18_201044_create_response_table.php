<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            /*$table->string('email')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('stock')->default(0);*/

            $table -> string('email')->nullable();
            $table -> string('nombre')->nullable();
            $table -> string('cargo')->nullable();
            $table -> string('area')->nullable();
            $table -> string('ente')->nullable();
            
            $table -> boolean('pre5')->default(0);
            //preguntas si en la 5 responde que sí:
            $table -> string('nameSys')->nullable();
            $table -> string('cadp')->nullable();
            $table -> string('docsSys')->nullable();
            $table -> date('startSys')->nullable();
            $table -> date('updSys')->nullable();
            $table -> string('infSys')->nullable(); //En este campo se guardaría la empresa que vende o arrenda, o en su defecto los documentos con los que cuentan de desarrollo propio.
            //preguntas si en la 5 responde que no:
            $table -> longText('noSys')->nullable();
            
            $table -> boolean('pre6')->default(0);
            //Preguntas si en la 6 responde que si:
            $table -> string('perioRes')->nullable();
            $table -> date('lastRes')->nullable();

            $table -> boolean('pre7')->default(0);
            //Preguntas si en la 7 responde que no:
            $table -> longText('noRes')->nullable();

            $table -> boolean('pre8')->default(0);

            $table -> boolean('pre9')->default(0);
            //Campos a llenar si en la 9 responde que si:
            $table -> integer('9RegCont')->default(0);
            $table -> integer('9RegPre')->default(0);
            $table -> integer('9RegAdm')->default(0);
            $table -> integer('9RegTra')->default(0);
            $table -> integer('9RegCP')->default(0);

            $table -> integer('10InstC')->default(0);
            $table -> integer('10RegCont')->default(0);
            $table -> integer('10RepCont')->default(0);

            $table -> integer('11ClasP')->default(0);
            $table -> integer('11RegPre')->default(0);
            $table -> integer('11RepPre')->default(0);
            $table -> integer('11PrePro')->default(0);

            $table -> integer('12ContBie')->default(0);
            $table -> integer('12RecFed')->default(0);

            $table -> integer('13ContCont')->default(0);
            $table -> integer('13ContPre')->default(0);
            $table -> integer('13ContProg')->default(0);

            $table -> integer('14TVAn')->default(0);
            $table -> integer('14TVTri')->default(0);
            $table -> integer('14OtrAn')->default(0);
            $table -> integer('14OtrTri')->default(0);

            $table -> integer('15ResGenCon')->default(0);
            $table -> integer('15TomoPE')->default(0);
            $table -> integer('15TomoPL')->default(0);
            $table -> integer('15TomoPJ')->default(0);
            $table -> integer('15TomoOA')->default(0);
            $table -> integer('15InfFin')->default(0);
            $table -> integer('15TomoSP')->default(0);

            $table -> integer('16ResGenCon')->default(0);
            $table -> integer('16InfFinMun')->default(0);
            $table -> integer('16TomoSP')->default(0);
            $table -> integer('16InfFin')->default(0);

            $table -> string('pre17')->nullable();
            $table -> string('pre18')->nullable();
            $table -> integer('pre19')->default(0);
            $table -> longText('pre20')->nullable();
            $table -> string('platVideo')->nullable();
            $table -> string('convPDF')->nullable();
            $table -> string('sopRem')->nullable();
            $table -> string('otrasHerramientas')->nullable();

            $table -> integer('22Cantidad')->default(0);
            $table -> string('22Temas')->nullable();
            $table -> string('22Impartido')->nullable();
            $table -> string('22Area')->nullable();

            $table -> string('pre23')->nullable();
            $table -> string('23area')->nullable();

            $table -> boolean('pre24')->default(0);
            $table -> longText('pre25')->nullable();

            $table -> boolean('pre26')->default(0);
            $table -> longText('26porque')->nullable();

            $table -> boolean('pre27')->default(0);
            $table -> longText('27porque')->nullable();

            $table -> longText('pre28')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};