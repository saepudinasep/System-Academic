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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->decimal('assignment_score', 5, 2);
            $table->decimal('mid_exam_score', 5, 2);
            $table->decimal('final_exam_score', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scores', function (Blueprint $table) {
            $table->dropForeign(['schedule_id']);
            $table->dropForeign(['student_id']);
        });
        Schema::dropIfExists('scores');
    }
};
