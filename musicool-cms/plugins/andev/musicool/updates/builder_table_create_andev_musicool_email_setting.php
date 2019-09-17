<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolEmailSetting extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_email_setting', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sender_email');
            $table->string('sender_password');
            $table->string('forward_to');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_email_setting');
    }
}
