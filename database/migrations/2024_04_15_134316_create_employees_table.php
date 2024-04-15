<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('emp_id');
            $table->integer('uid');
            $table->string('name');
            $table->string('department');
            $table->string('position');
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('personal_mail')->nullable();
            $table->string('official_mail')->nullable();
            $table->date('doj')->nullable();
            $table->date('doe')->nullable();
            $table->string('blood_group')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
