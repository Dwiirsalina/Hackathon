<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'transactions';

    /**
     * Run the migrations.
     * @table transactions
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
            $table->integer('total')->nullable();
            $table->integer('is_delivered')->nullable()->default('0');
            $table->integer('is_sent')->nullable()->default('0');
            $table->timestamp('date_transactions')->nullable();
            $table->string('receipt', 200)->nullable();
            $table->string('unique_payment', 45)->nullable();
            $table->char('goods_id', 36);
            $table->char('users_id', 36);

            $table->index(["users_id"], 'fk_transactions_users1_idx');

            $table->index(["goods_id"], 'fk_transactions_goods1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('goods_id', 'fk_transactions_goods1_idx')
                ->references('id')->on('goods')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_transactions_users1_idx')
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
