<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Admin\FAQ\FrequentlyAskQuestion;

class CreateFrequentlyAskQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequently_ask_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->unique();
            $table->text('answer')->nullable();
            $table->integer('position')->default(1);
            $table->string('status')->default(FrequentlyAskQuestion::ACTIVE);
            $table->foreignId('created_by')->nullable()->contrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->contrained('users')->onDelete('set null');
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
        Schema::dropIfExists('frequently_ask_questions');
    }
}