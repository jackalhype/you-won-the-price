<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

final class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('users', ['signed' => false]);
        $table->addColumn('email', 'string', ['limit' => 127, 'null' => false])
            ->addColumn('email_confirmed', 'integer', ['limit' => MysqlAdapter::INT_TINY, 'default' => 0, 'null' => false])
            ->addColumn('name', 'string', ['limit' => 127, 'null' => false])
            ->addColumn('passwd', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('passwd_reset_token', 'string', ['null' => true])
            ->addColumn('passwd_reset_token_expiry', 'timestamp', ['null' => true])
            ->addColumn('active', 'integer', ['limit' => MysqlAdapter::INT_TINY, 'default' => 0])
            ->addColumn('session_token', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('session_token_expiry', 'timestamp', ['null' => true])
            ->addColumn('address', 'text')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addIndex(['email'], ['unique' => true])
            ->create();
    }
}
