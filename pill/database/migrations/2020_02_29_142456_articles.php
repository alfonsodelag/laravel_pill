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
            $table->bigIncrements('article_ID');
            $table->char('article_title',100);
            $table->char('article_summary',100);
            $table->string('article_content',2000);
            $table->char('textarea',100);
            $table->timestamps();
        });
    }
    }

