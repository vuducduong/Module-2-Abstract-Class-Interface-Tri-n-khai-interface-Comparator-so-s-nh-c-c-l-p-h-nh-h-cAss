<?php
include "Comparator.php";
include "Circle.php";

include "CircleComparator.php";

$circle1 = new Circle(8,"black");
$circle2 = new Circle(7,"red");
$circleComparator = new CircleComparator();
echo $circleComparator->comparator($circle1,$circle2);