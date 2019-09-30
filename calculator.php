<?php
print("plus type 1\n");
print("minus type 2\n");
$option = (int) fgets(STDIN);
if($option == 1){
    print("number1 ");
    $A = (float) fgets(STDIN);
    print("number2 ");
    $B = (float) fgets(STDIN);
    print("the awnser is: ");
    print($A + $B);
} elseif($option == 2){
    print("number1 ");
    $A = (float) fgets(STDIN);
    print("number2 ");
    $B = (float) fgets(STDIN);
    print("the awnser is: ");
    print($A - $B);
}
?>