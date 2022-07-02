<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->integer('id_customer')->unsigned()->primary('id_customer');
            $table->string('r_sph');
            $table->string('l_sph');
            $table->string('r_cyl');
            $table->string('l_cyl');
            $table->string('r_axs');
            $table->string('l_axs');
            $table->string('r_add');
            $table->string('l_add');
            $table->string('r_mpd');
            $table->string('l_mpd');
            $table->string('r_pv');
            $table->string('l_pv');
            $table->string('r_sh');
            $table->string('l_sh');
            $table->timestamps();

            $table->foreign('id_customer')
                ->references('id')->on('customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resep');
    }
}
