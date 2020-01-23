<?php

use yii\db\Migration;

/**
 * Class m200123_165922_create_files_result
 */
class m200123_165922_create_files_result extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'check_id'=> $this->integer(),
            'document' => $this->string()->notNull(),
            'status' => $this->string()->defaultValue("не найдено"),
            'text_check' => $this->string()->defaultValue("ошибка")
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200123_165922_create_files_result cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200123_165922_create_files_result cannot be reverted.\n";

        return false;
    }
    */
}
