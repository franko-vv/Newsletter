<?php
$installer = $this;
$installer->startSetup();
$installer->run("
	ALTER TABLE {$this->getTable('newsletter/subscriber')}
	ADD COLUMN 'subscriber_name' VARCHAR(45);
	");
$installer->endSetup();