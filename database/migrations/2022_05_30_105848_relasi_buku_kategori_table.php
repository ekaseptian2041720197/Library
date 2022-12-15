<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiBukuKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bukus', function(Blueprint $table){
            $table->dropColumn('kategori'); 
            $table->unsignedBigInteger('kategori_id')->nullable(); 
            $table->foreign('kategori_id')->references('id')->on('kategori'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bukus', function(Blueprint $table){
            $table->string('kategori');
            $table->dropForeign(['kategori_id']);
        });
    }
}
