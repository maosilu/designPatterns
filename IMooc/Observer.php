<?php
/**
 * 这是一个观察者
 * User: maosilu
 * Date: 2017/12/27
 * Time: 下午3:11
 */

namespace IMooc;


interface Observer
{
    function update($event_info = null);
}