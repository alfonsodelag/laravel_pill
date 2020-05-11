<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',100)->nullable();
            $table->string('article_title',100);
            $table->string('article_summary',100);
            $table->string('slug_article',100);
            $table->string('article_content',2000);
            $table->timestamps();
        });
    }
    }

