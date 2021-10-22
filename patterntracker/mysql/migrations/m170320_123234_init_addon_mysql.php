<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

use yii\db\Migration;

class m170320_123234_init_addon_mysql extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%addon_mysql}}', [
            // Basic Settings
            'id' => $this->primaryKey(),
            'form_id' => $this->integer(11)->notNull(),
            'status' => $this->boolean()->notNull()->defaultValue(0),

            // MySQL DB Info
            'db_host' => $this->string(255)->notNull(),
            'db_port' => $this->integer()->notNull()->defaultValue(3306),
            'db_name' => $this->string(255)->notNull(),
            'db_user' => $this->string(255)->notNull(),
            'db_pass' => $this->string(255),
            'db_charset' => $this->string(255)->notNull()->defaultValue('utf8mb4'),
            'db_table' => $this->string(255)->notNull(),

            // Settings
            'opt_in' => $this->boolean()->defaultValue(0),
            'opt_in_field' => $this->string(255),

            'created_by' => $this->integer(11)->notNull(),
            'updated_by' => $this->integer(11)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%addon_mysql_field}}', [
            'id' => $this->primaryKey(),
            'form_id' => $this->integer(11),
            'form_field' => $this->string(255),
            'table_column' => $this->string(255),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%addon_mysql_field}}');
        $this->dropTable('{{%addon_mysql}}');
    }
}
