<?php
/**
 * 策略模式
 * 应用举例中：女性用户策略
 * User: maosilu
 * Date: 2017/12/27
 * Time: 上午10:34
 */

namespace IMooc;

class FemaleUserStrategy implements UserStrategy
{
    function showAD()
    {
        // TODO: Implement showAD() method.
        echo '2014年新款女装';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女装';
    }

}