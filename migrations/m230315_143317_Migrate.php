<?php

use yii\db\Migration;

/**
 * Class m230315_143317_Migrate
 */
class m230315_143317_Migrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->insert('list', [
            'username' => 'opy1',
            'title' => 'Задача1',
        ]);
        $this->insert('list', [
            'username' => 'opy1',
            'title' => 'Задача2',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача3',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача4',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача5',
        ]);
        $this->insert('list', [
            'username' => 'opy1',
            'title' => 'Задача6',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача7',
        ]);
        $this->insert('list', [
            'username' => 'opy1',
            'title' => 'Задача8',
        ]);
        $this->insert('list', [
            'username' => 'opy1',
            'title' => 'Задача9',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача10',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача11',
        ]);
        $this->insert('list', [
            'username' => 'Nar',
            'title' => 'Задача12',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230315_143317_Migrate cannot be reverted.\n";
        $this->delete('list', ['id' => 0]);
        return false;
    }

}
