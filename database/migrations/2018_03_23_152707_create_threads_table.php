<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->boolean('fixed')->default(false);
            $table->boolean('closed')->default(false);
            $table->integer('replies_count')->default(0); 
            $table->integer('user_id')->unsigned(); // Aceita apenas valores positivos. Como nao aceita valores negativos, passa a aceitar o dobro de possibilidades, pois o Int vai de numeros negativos a positivos: ex -1000 a +1000
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints(); // 
        Schema::dropIfExists('threads');
    }
}
