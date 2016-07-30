<?php
/**
 * Created by PhpStorm.
 * User: longmin
 * Date: 16/7/30
 * Time: 下午12:32
 */
/**
 * 抽象观察者角色-SplObserver
 */
interface Observer {

    /**
     * 更新方法
     */
    public function update();
}