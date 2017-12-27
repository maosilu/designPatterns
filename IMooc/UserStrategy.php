<?php
/**
 * 策略模式的实现
 * 应用举例：假如一个电商网站系统，针对男性女性用户要各自跳转到不同的商品类目，并且所有广告位展示不同的广告
 * User: maosilu
 * Date: 2017/12/27
 * Time: 上午10:28
 */

namespace IMooc;

interface UserStrategy
{
    function showAD(); //显示广告
    function showCategory(); //显示类目

}