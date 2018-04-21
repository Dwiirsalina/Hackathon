<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'videos';

    /**
     * Run the migrations.
     * @table videos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id');
            $table->primary('id');
            $table->string('file', 250)->nullable();
            $table->string('url', 250)->nullable();
            $table->integer('viewer')->nullable()->default('0');
            $table->integer('like')->nullable()->default('0');
            $table->char('users_id', 36);
            $table->longText('descriptions')->nullable();

            $table->index(["users_id"], 'fk_videos_users_idx');

            $table->unique(["url"], 'url_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_videos_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
