<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        Schema::create("video", function (Blueprint $table) {
            $table->increments("id");
            $table->string("youtube_id")->index();
            $table->string("youtube_title");
            $table->timestamp("youtube_published_at")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        Schema::dropIfExists("video");
    }
}
