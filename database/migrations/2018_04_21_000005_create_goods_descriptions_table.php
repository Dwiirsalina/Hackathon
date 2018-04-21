<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsDescriptionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'goods_descriptions';

    /**
     * Run the migrations.
     * @table goods_descriptions
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
            $table->string('name', 250)->nullable();
            $table->char('goods_id', 36);

            $table->index(["goods_id"], 'fk_goods_descriptions_goods1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('goods_id', 'fk_goods_descriptions_goods1_idx')
                ->references('id')->on('goods')
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
