<?php
/**
 * 事件产生类，用来联系观察者模式
*/
namespace IMooc;

abstract class EventGenerator{

    private $observers = array();

    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }
    function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}