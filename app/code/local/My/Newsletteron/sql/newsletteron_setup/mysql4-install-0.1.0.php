<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 15.06.2016
 * Time: 15:14
 */
$installer = $this;
$installer->startSetup();
$installer->run("
    ALTER TABLE `{$installer->getTable('newsletter/subscriber')}`
    ADD subscName varchar(100);
");
$installer->endSetup();