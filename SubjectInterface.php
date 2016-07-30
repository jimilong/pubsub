<?php
/**
 * Created by PhpStorm.
 * User: longmin
 * Date: 16/7/30
 * Time: 下午12:29
 */
/**
 * 抽象主题角色-SplSubject
 */
interface Subject {

    /**
     * 增加一个新的观察者对象
     * @param Observer $observer
     */
    public function attach(Observer $observer);

    /**
     * 删除一个已注册过的观察者对象
     * @param Observer $observer
     */
    public function detach(Observer $observer);

    /**
     * 通知所有注册过的观察者对象
     */
    public function notifyObservers();
}