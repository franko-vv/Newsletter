<?php

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('newsletter/subscriber'),
        'subscriber_nam',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_VARCHAR,
            'length' => 50,
            'nullable' => true,
            'default' => null,
        )
    );

$installer->endSetup();