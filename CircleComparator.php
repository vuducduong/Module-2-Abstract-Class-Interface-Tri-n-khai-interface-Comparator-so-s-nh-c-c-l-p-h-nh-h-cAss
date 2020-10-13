<?php

class CircleComparator implements Comparator
{
public function comparator($object1, $object2)
{
    $radius1=$object1->getRadius();
    $radius2=$object2->getRadius();
    if($radius1>$radius2){
        return "lớn hơn";
    }
    else if($radius1<$radius2){
        return "nhỏ hơn";
    }
    else{
        return "bằng nhau";
    }
}
}