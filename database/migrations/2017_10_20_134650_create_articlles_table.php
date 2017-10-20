<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticllesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articlles', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name',30)->comment('文章标题');
            $table->mediumInteger('uid')->comment('作者id');
            $table->string('intro',255)->comment('文章简介');
            $table->string('img',100)->comment('封面图片');
            $table->text( 'content')->comment('文章内容');
            $table->mediumInteger('look_num')->comment('文章浏览次数');
            $table->mediumInteger('like')->comment('文章点赞数量');
            $table->mediumInteger('cate_id')->comment('分类id');
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
        Schema::dropIfExists('articlles');
    }
}
