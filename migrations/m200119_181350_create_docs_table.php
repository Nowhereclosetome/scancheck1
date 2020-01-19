<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%docs}}`.
 */
class m200119_181350_create_docs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%docs}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%docs}}');
    }
}
