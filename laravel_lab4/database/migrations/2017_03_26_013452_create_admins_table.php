<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //this function for run migration
    public function up()
    {   
        //creating table
        Schema::create("tasks", function(Blueprint $table){
            $table->increments("id");
            $table->string("taskName");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // this function for rollback migration
    public function down()
    {
        Schema::drop("tasks");
    }
}
