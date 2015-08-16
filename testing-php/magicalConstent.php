<?php
/**
 * Created by PhpStorm.
 * User: Qasim
 * Date: 8/13/2015
 * Time: 5:07 PM
 */
class trick
{
    static function magiConstFun()
    {
        echo __FUNCTION__;
    }
    function magiConstMeth()
    {
        echo __METHOD__;
    }
    function fileAndLine(){
        echo __LINE__;
        echo "<pre>";
        echo __FILE__;
    }
    function magiConstDir(){
        echo __DIR__;
    }
}
//echo trick::fileAndLine();
$obj = new trick();
echo $obj->magiConstDir();
