<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('text_btn');
            $table->string('link_btn');

            $table->string('title_topics');
            $table->string('description_topics');

            $table->string('title_topic_one');
            $table->string('description_topic_one');

            $table->string('title_topic_two');
            $table->string('description_topic_two');

            $table->string('title_topic_three');
            $table->string('description_topic_three');

            $table->string('title_topic_four');
            $table->string('description_topic_four');

            $table->string('title_topic_five');
            $table->string('description_topic_five');

            $table->string('title_topic_six');
            $table->string('description_topic_six');

            $table->string('title_topic_seven');
            $table->string('description_topic_seven');

            $table->string('title_topic_eight');
            $table->string('description_topic_eight');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
