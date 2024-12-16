<?php

use yii\db\Migration;

/**
 * Class m241212_091402_update_family_member_table
 */
class m241212_091402_update_family_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table = 'family_member';


        //$this->db->getTableSchema($table)->dropColumn();
        // Check and rename column 'current_address_or_burial' to 'current_address'
        if ($this->db->getTableSchema($table)->getColumn('current_address_or_burial') !== null) {
            $this->renameColumn($table, 'current_address_or_burial', 'current_address');
        }

        // Check and add column 'burial_address' if it does not exist
        if ($this->db->getTableSchema($table)->getColumn('burial_address') === null) {
            $this->addColumn($table, 'burial_address', $this->string()->null()->after('current_address'));
        }

        // Check and rename column 'alive_deceased' to 'living_status'
        if ($this->db->getTableSchema($table)->getColumn('alive_deceased') !== null) {
            $this->renameColumn($table, 'alive_deceased', 'living_status');
        }

        // Alter 'living_status' column only if it exists
        if ($this->db->getTableSchema($table)->getColumn('living_status') !== null) {
            $this->alterColumn($table, 'living_status', "ENUM('Alive', 'dead', 'Deceased') NOT NULL DEFAULT 'Alive'");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $table = 'family_member';

        // Revert column name 'current_address' to 'current_address_or_burial'
        if ($this->db->getTableSchema($table)->getColumn('current_address') !== null) {
            $this->renameColumn($table, 'current_address', 'current_address_or_burial');
        }

        // Drop 'burial_address' column if it exists
        if ($this->db->getTableSchema($table)->getColumn('burial_address') !== null) {
            $this->dropColumn($table, 'burial_address');
        }

        // Alter 'living_status' column back to original type if it exists
        if ($this->db->getTableSchema($table)->getColumn('living_status') !== null) {
            $this->alterColumn($table, 'living_status', "ENUM('Alive', 'Deceased')");
        }

        // Rename column 'living_status' back to 'alive_deceased' if it exists
        if ($this->db->getTableSchema($table)->getColumn('living_status') !== null) {
            $this->renameColumn($table, 'living_status', 'alive_deceased');
        }
    }
}
