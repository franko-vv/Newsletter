<?php

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('newsletter/subscriber'),
        'subscrName',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_VARCHAR,
            'length' => 50,
            'nullable' => true,
            'default' => null,
            'comment' => 'subscrName'
        )
    );

$installer->endSetup();