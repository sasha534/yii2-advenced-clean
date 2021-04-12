<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210412_131429_action
 */
class m210412_131429_action extends Migration
{
    public function up()
    {
        $this->createTable('actions',
        [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'percent' => Schema::TYPE_INTEGER,
            'level' => Schema::TYPE_INTEGER,
            'rules' => Schema::TYPE_INTEGER,
            'group' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'time_active' => Schema::TYPE_STRING,
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('actions');
    }
}
