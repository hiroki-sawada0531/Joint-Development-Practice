<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('my_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');//ユーザー情報
            $table->string('age');//年齢
            $table->string('finalEducation');//最終学歴
            $table->string('annualIncome');//年収
            $table->string('height');//身長
            $table->string('bodyType');//体型
            $table->string('birthPlace');//出身
            $table->string('holiday');//休日
            $table->string('bloodType');//血液型
            $table->string('profession');//職業
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('my_profiles');
    }
}
