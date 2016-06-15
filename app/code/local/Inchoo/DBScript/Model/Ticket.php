<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 15.06.2016
 * Time: 16:07
 */
class Inchoo_DBScript_Model_Ticket extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('inchoo_dbscript/ticket');
    }
}