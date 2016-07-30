<?php
/**
 * Created by PhpStorm.
 * User: longmin
 * Date: 16/7/30
 * Time: 下午12:33
 */
class ConcreteObserver implements Observer {

    /**
     * 观察者的名称
     * @var <type>
     */
    private $_name;

    public function __construct($name) {
        $this->_name = $name;
    }

    /**
     * 更新方法
     */
    public function update() {
        echo 'Observer', $this->_name, ' has notified.<br />';
    }

}