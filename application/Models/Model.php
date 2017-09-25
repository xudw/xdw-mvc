<?php
namespace Application\Models;

use Myphp\Sql;

class Model
{

    use Sql;

    protected $_model;
    protected $table;
    function __construct()
    {
        // 连接数据库
        $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);  
        // 获取模型名称
        $this->_model = get_class($this);
         $this->_model = rtrim($this->_model, 'Model');
        // 数据库表名与类名一致
        $this->_table = DB_PREFIX . $this->table;
    }
    function __destruct()
    {
    }
}