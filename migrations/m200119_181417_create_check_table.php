<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%check}}`.
 */
class m200119_181417_create_check_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('check', [
            'id' => $this->primaryKey(),
            'organization_name' => $this->string(),
            'organization_name_short'=>$this->string(),
            'INN'=>$this->string(12),
            'director_fullname'=>$this->string(),
            'parser_version' => $this->string(),
            'status'=>$this->string(),
            'address'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('check');
    }
}
