<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('gender'); 
            $table->string('hobby'); 
            $table->string('introduction'); 
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
        Schema::dropIfExists('profiles');
    }
};


//【応用】 create_profiles_table というMigrationのひな形ファイルを作成し、 
//profilesというテーブル名で名前(name)、性別(gender)、趣味(hobby)、自己紹介(introduction)を
//保存できるように修正して、 migrateしてテーブルを作成しましょう