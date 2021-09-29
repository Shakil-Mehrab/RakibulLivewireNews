<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('user_id')->unsigned()->index()->constrained('users');
            $table->string('kicker')->nullable();
            $table->string('headline')->index();
            $table->string('slug')->unique()->index();
            $table->text('teaser')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('pinned')->default(false);
            $table->boolean('highlighted')->default(false);
            $table->foreignId('publisher_id')->nullable()->unsigned()->index()->constrained('users');
            $table->dateTime('published_at')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
