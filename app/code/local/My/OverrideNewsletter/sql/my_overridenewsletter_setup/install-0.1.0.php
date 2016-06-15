<?php

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('newsletter_subscriber'),
        'subscriber_name',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_VARCHAR,
            'length' => 50,
            'default' => null,
            'comment' => 'Subscriber Name'
        )
    );

$installer->endSetup();