<?php

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('newsletter/subscriber'),
        'subscriber_name',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'default' => null,
            'nullable' => true,
            'comment' => 'Subscriber Name'
        )
    );

$installer->endSetup();