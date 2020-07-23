<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_accounts', function (Blueprint $table) {
            $table->id();
            $table->float('amount');
            $table->string('date');
            $table->string('rceipt_no');
            $table->string('academic_year');
            $table->string('semester');
            $table->string('student_name');
            $table->string('campus');
            $table->string('credited_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_accounts');
    }
}
