<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'goods';

    /**
     * Run the migrations.
     * @table goods
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
            $table->string('name', 45)->nullable();
            $table->string('details', 100)->nullable();
            $table->integer('price')->nullable();
            $table->char('videos_id', 36);

            $table->index(["videos_id"], 'fk_goods_videos1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('videos_id', 'fk_goods_videos1_idx')
                ->references('id')->on('videos')
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
