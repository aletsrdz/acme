<?php

use yii\db\Migration;

/**
 * Class m190304_223922_create_table_place
 */
class m190304_223922_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */

        public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->string(45)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'is_country' => $this->boolean()->notNull()
        ]);

    }

    public function down()
    {
         $this->dropTable('place');
    }



    /*
    // Use up()/down() to run migration code without a transaction.

    public function safeUp()
    {

    }


    public function safeDown()
    {
        echo "m190304_223922_create_table_place cannot be reverted.\n";

        return false;
    }

    */
}
