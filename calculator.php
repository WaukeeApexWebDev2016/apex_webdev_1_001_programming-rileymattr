<?php
echo "Shapes Calculator" . "\n";
$shape = readline("Please Enter Shape Here: ");
if ($shape == "square"){
    $SquSide = readline("What is the Side Length? ");
    echo "the area is " . $SquSide * $SquSide . "\n";
}
if ($shape == "circle"){
    $radius = readline("What is the radius? ");
    echo "the area is " . $radius * $radius * round(M_PI, 3) . "\n";
}
if ($shape == "rectangle"){
    $RectLength = readline("What is the length? ");
    $RectWidth = readline("What is the width? ");
    echo "the area is " . $RectLength * $RectWidth . "\n";
}
if ($shape == "trapezoid"){
    $TrapBase1 = readline ("What is the length of base 1? ");
    $TrapBase2 = readline ("What is the length of base 2? ");
    $TrapHeight = readline ("What is the heigth? ");
    $TrapBaseAvg = $TrapBase1 * $TrapBase2;
    echo "the area is " . $TrapBaseAvg * $TrapHeight . "\n";
}
if ($shape == "triangle"){
    $TriBase = readline ("What is the length of the base? ");
    $TriHeight = readline ("What is the height? ");
    $Area = $TriBase * $TriHeight;
    echo "the area is " . $Area / 2 . "\n";
}
?>
