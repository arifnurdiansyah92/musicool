<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolContact extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_contact', function($table)
        {
            $table->dropColumn('email');
            $table->dropColumn('no_telfon');
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_contact', function($table)
        {
            $table->string('email', 255)->nullable();
            $table->string('no_telfon', 255)->nullable();
        });
    }
}
