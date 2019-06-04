<?php

use think\migration\db\Column;
use think\migration\Migrator;

class Articles extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('wd_articles', array('engine' => 'MyISAM'));
        $table->addColumn('cid', 'integer', array('limit' => 10, 'default' => 0))
            ->addColumn('title', 'string', array('limit' => 255, 'default' => ''))
            ->addColumn('desc', 'string', array('limit' => 255, 'default' => ''))
            ->addColumn('thumb', 'string', array('limit' => 255, 'default' => ''))
            ->addColumn('content', 'text')
            ->addColumn('status', 'integer', array('limit' => 1, 'default' => 1))
            ->addColumn('addtime', 'integer', array('limit' => 10, 'default' => 0))
            ->addColumn('updatetime', 'integer', array('limit' => 10, 'default' => 1))
            ->addColumn('deltime', 'integer', array('limit' => 10, 'default' => 1))
            ->addIndex(array('id'), array('unique' => true))
            ->create();
    }

    public function down()
    {
        $this->dropTable('wd_articles');
    }
}
