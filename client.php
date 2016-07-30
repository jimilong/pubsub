<?php
/**
 * Created by PhpStorm.
 * User: longmin
 * Date: 16/7/30
 * Time: 下午12:33
 */
/**
 * 客户端
 */
class Client {

    /**
     * Main program.
     */
    public static function main() {
        $subject = new ConcreteSubject();

        /* 添加第一个观察者 */
        $observer1 = new ConcreteObserver('Martin');
        $subject->attach($observer1);

        echo '<br /> The First notify:<br />';
        $subject->notifyObservers();

        /* 添加第二个观察者 */
        $observer2 = new ConcreteObserver('phppan');
        $subject->attach($observer2);

        echo '<br /> The Second notify:<br />';
        $subject->notifyObservers();

        /* 删除第一个观察者 */
        $subject->detach($observer1);

        echo '<br /> The Third notify:<br />';
        $subject->notifyObservers();
    }

}

Client::main();