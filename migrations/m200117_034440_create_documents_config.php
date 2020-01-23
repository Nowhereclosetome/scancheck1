<?php

use yii\db\Migration;

/**
 * Class m200117_034440_create_documents_config
 */
class m200117_034440_create_documents_config extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('docsconfig', [
            'id' => $this->primaryKey(),
            'organization_type' => $this->string(10),
            'document' => $this->string(255),
            'mark_words' => $this->string(400)->notNull(),
            'mark_fields' => $this->string(400)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200117_034440_create_documents_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200117_034440_create_documents_config cannot be reverted.\n";

        return false;
    }
    */
}
