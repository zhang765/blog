<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->mediumInteger('id');
            $table->string('account')->comment('账号');
            $table->string('pwd')->comment('密码');
            $table->string('nickname')->comment('昵称');
            $table->string('head_img')->comment('头像');
            $table->string('phone')->comment('手机');
            $table->string('email')->comment('邮箱');

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
        Schema::dropIfExists('members');
    }
}
