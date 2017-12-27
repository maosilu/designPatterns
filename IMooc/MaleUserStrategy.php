<?php
/**
 * 策略模式
 * 应用举例中：男性用户策略
 * User: maosilu
 * Date: 2017/12/27
 * Time: 上午10:39
 */

namespace IMooc;


class MaleUserStrategy implements UserStrategy
{
    function showAD(){
        echo 'IPhone6';
    }

    function showCategory(){
       echo '电子产品';
    }
}