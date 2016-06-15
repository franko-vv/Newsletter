<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 15.06.2016
 * Time: 16:10
 */
class Inchoo_DBScript_Model_Resource_Comment_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('inchoo_dbscript/comment');
    }
}