<?php
$array = array('a',2,3);
var_dump( in_array (0,$array) );
var_dump( in_array (0,$array,true) );


/**
    in_array — 检查数组中是否存在某个值

    bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )

    在 haystack 中搜索 needle，如果没有设置 strict 则使用宽松的比较。

    @link   http://cn2.php.net/manual/zh/function.in-array.php
 */


/**
    不属于BUG,使用函数的时候,还是要多注意.

 */
