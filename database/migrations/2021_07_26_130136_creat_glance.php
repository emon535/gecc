<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatGlance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glances', function (Blueprint $table) {
            $table->id();
            $table->string('global_offices')->nullable();
            $table->string('global_counsellors')->nullable();
            $table->string('education_fair')->nullable();
            $table->string('virtual_events')->nullable();
            $table->string('courses_offered')->nullable();
            $table->string('students_served')->nullable();
            $table->string('free_service')->nullable();
            $table->string('student_satisfaction')->nullable();
            $table->timestamps();
        });
        DB::table('glances')
                ->insert([
                    'global_offices'=>'56',
                    'global_counsellors'=>'435',
                    'education_fair'=>'5',
                    'virtual_events'=>'10',
                    'courses_offered'=>'35',
                    'students_served'=>'154',
                    'free_service'=>'100%',
                    'student_satisfaction'=>'98%',
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glances');
    }
}
