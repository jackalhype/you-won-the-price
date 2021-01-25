<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateWinningsTable extends AbstractMigration
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
        $table = $this->table('winnings', ['signed' => false]);
        $table->addColumn('user_id', 'integer', ['signed' => false, 'null' => false])
            ->addColumn('status', 'integer', ['null' => false, 'default' => '1'])
            ->addColumn('price_type', 'integer', ['null' => false])
            ->addColumn('cash_sum', 'integer', ['null' => true])
            ->addColumn('loyalty_points', 'integer', ['null' => true])
            ->addColumn('gift_object_id', 'integer', ['null' => true])

            ->addColumn('date_won', 'datetime', ['null' => false])

            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'RESTRICT', 'update' => 'CASCADE'])
            ->create();
    }
}
