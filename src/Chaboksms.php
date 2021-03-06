<?php
namespace Chaboksms\Yii2;

use yii\base\Component;
use yii\base\InvalidConfigException;


class Chaboksms extends Component
{
    public $username;
    public $password;
    private $_api = null;
    public function init()
    {
        if (!$this->username || !$this->password) {
            throw new InvalidConfigException('username & password is required');
        }
    }	
    public function Api()
    {
        if ($this->_api === null) {
           $this->_api = new \Chaboksms\ChaboksmsApi($this->username,$this->password);
        }
        return $this->_api;
    }
} 