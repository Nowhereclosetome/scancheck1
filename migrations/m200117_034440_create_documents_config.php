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
            'selector' => $this->string(20),
            'mark_words' => $this->string(400)->notNull(),
            'mark_fields' => $this->string(400)->notNull()
        ]);
        $this->insert('docsconfig', [
            'id' => 1,
            'organization_type' => 'ООО',
            'document' => 'Устав',
            'selector' => 'ooo_ustav',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 2,
            'organization_type' => 'ООО',
            'document' => 'Решение/Протокол',
            'selector' => 'ooo_prot',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 3,
            'organization_type' => 'ООО',
            'document' => 'Карточка с образцами подписей',
            'selector' => 'ooo_karta',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 4,
            'organization_type' => 'ООО',
            'document' => 'Выписка из ЕГРЮЛ',
            'selector' => 'ooo_egryul',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 5,
            'organization_type' => 'ООО',
            'document' => 'Заявление на открытие счета',
            'selector' => 'ooo_zayavlenie',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 6,
            'organization_type' => 'ИП',
            'document' => 'Устав',
            'selector' => 'ip_ustav',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 7,
            'organization_type' => 'ИП',
            'document' => 'Решение/Протокол',
            'selector' => 'ip_prot',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 8,
            'organization_type' => 'ИП',
            'document' => 'Карточка с образцами подписей',
            'selector' => 'ip_karta',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 9,
            'organization_type' => 'ИП',
            'document' => 'Выписка из ЕГРЮЛ',
            'selector' => 'ip_egryul',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 10,
            'organization_type' => 'ИП',
            'document' => 'Заявление на открытие счета',
            'selector' => 'ip_zayavlenie',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 11,
            'organization_type' => 'АО',
            'document' => 'Устав',
            'selector' => 'ao_ustav',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 12,
            'organization_type' => 'АО',
            'document' => 'Решение/Протокол',
            'selector' => 'ao_prot',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 13,
            'organization_type' => 'АО',
            'document' => 'Карточка с образцами подписей',
            'selector' => 'ao_karta',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 14,
            'organization_type' => 'АО',
            'document' => 'Выписка из ЕГРЮЛ',
            'selector' => 'ao_egryul',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 15,
            'organization_type' => 'АО',
            'document' => 'Заявление на открытие счета',
            'selector' => 'ao_zayavlenie',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 16,
            'organization_type' => 'ПАО',
            'document' => 'Устав',
            'selector' => 'pao_ustav',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 17,
            'organization_type' => 'ПАО',
            'document' => 'Решение/Протокол',
            'selector' => 'pao_prot',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 18,
            'organization_type' => 'ПАО',
            'document' => 'Карточка с образцами подписей',
            'selector' => 'pao_karta',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 19,
            'organization_type' => 'ПАО',
            'document' => 'Выписка из ЕГРЮЛ',
            'selector' => 'pao_egryul',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
        ]);
        $this->insert('docsconfig', [
            'id' => 20,
            'organization_type' => 'ПАО',
            'document' => 'Заявление на открытие счета',
            'selector' => 'pao_zayavlenie',
            'mark_words' => 'Нажмите на кнопку изменить и введите маркеры',
            'mark_fields' => 'Нажмите на кнопку изменить и введите маркеры'
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
