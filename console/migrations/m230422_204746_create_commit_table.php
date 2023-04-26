<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%commit}}`.
 */
class m230422_204746_create_commit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%commit}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'topic' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'message' => $this->text(),
            'status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%commit}}');
    }
}
