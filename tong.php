<?php
//桶排序算法
$arrBeSort = array(11,5,9,7,2,6,1,4,80);
function bucket($parameter)
{
    //循环遍历一遍数字，找出最大值，算出桶的数量
    for ($i=0;$i<count($parameter);$i++){
        $a = -1;
        if($a<$parameter[$i]){
            $a = $parameter[$i];
        }
    }
    //$t数组初始化为零，用php定义新的数组
    $t=array();
    for ($i=0;$i<=$a;$i++){
        $t[$i]=0;
    }
    //装进桶
    for ($i=0;$i<count($parameter);$i++){
        $t[$parameter[$i]]++;
    }
    //输出结果
    for ($i=0;$i<=$a;$i++){
        if ($t[$i]>0){
            $pa[] = $i;
        }
    }
    return $pa;
}
$a = bucket($arrBeSort);
var_dump($a);

