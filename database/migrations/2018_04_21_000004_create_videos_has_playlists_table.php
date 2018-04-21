<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosHasPlaylistsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'videos_has_playlists';

    /**
     * Run the migrations.
     * @table videos_has_playlists
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('videos_id');
            $table->char('playlists_id', 36);

            $table->index(["videos_id"], 'fk_videos_has_playlists_videos1_idx');

            $table->index(["playlists_id"], 'fk_videos_has_playlists_playlists1_idx');


            $table->foreign('videos_id', 'fk_videos_has_playlists_videos1_idx')
                ->references('id')->on('videos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('playlists_id', 'fk_videos_has_playlists_playlists1_idx')
                ->references('id')->on('playlists')
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
