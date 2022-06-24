<?php

use App\Models\Formation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_formations', function (Blueprint $table) {
            $table->id();
            $table->string('niveau', 255);
            $table->string('code_rome', 255)->nullable();
            $table->string('public_vise', 150)->nullable();
            $table->text('presentation_du_metier')->nullable();
            $table->text('objectifs_de_la_formation')->nullable();
            $table->text('aptitudes')->nullable();
            $table->text('programme')->nullable();
            $table->text('certification')->nullable();
            $table->string('debouches', 255)->nullable();
            $table->string('passerelles', 255)->nullable();
            $table->string('equivalences', 255)->nullable();
            $table->string('suite_de_parcours_possibles', 255)->nullable();
            $table->timestamps();
            
            $table->foreignIdFor(Formation::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_formations');
    }
}
