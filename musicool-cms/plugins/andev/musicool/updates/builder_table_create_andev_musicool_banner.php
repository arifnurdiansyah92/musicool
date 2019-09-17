<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolBanner extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('slogan')->nullable();
            $table->smallInteger('is_main')->default(0);
            $table->smallInteger('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_banner');
    }
}
