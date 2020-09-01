<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('Название фильма');
            $table->string('image')->comment('Постер фильма')->nullable();
            $table->string('meta_title')->comment('Название фильма для поисковой системы')->nullable();
            $table->string('meta_description')->comment('Описание для поисковой системы')->nullable();
            $table->string('keywords')->comment('Ключевые слова для поисковой системы')->nullable();
            $table->string('slug')->comment('Название фильма транслитом для ЧПУ');
            $table->string('status')->comment('Опубликовано или нет');
            $table->text('content')->comment('Описание фильма')->nullable();
            $table->string('year')->comment('Год фильма');
            $table->integer('kinopoisk_id')->comment('Id кинопоиска')->default(1);
            $table->string('iframe')->comment('Ссылка на iframe')->nullable();
            $table->string('country_create')->comment('Страна фильма')->nullable();
            $table->string('count_time')->comment('Длительность фильма')->nullable();
            $table->string('kinopoisk_raiting')->comment('Рейтинг кинопоиска')->default(0)->nullable();
            $table->string('imdb_raiting')->comment('Рейтинг IMDB')->default(0)->nullable();
            $table->string('kinopoisk_voite')->comment('Голоса кинопоиска')->default(0)->nullable();
            $table->string('imdb_voite')->comment('Голоса IMDB')->default(0)->nullable();
            $table->boolean('display_in_slider')->comment('Отображать в слайдере на главной')->default(0);
            $table->integer('type')->comment('из справочника типы фильма')->default(1);
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
        Schema::dropIfExists('films');

    }
}
