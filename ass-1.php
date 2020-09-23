<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
do{
    printf("input menu number(3 for quit): ");
    fscanf(STDIN, "%d", $menu);
    if($menu==1) {printf("input numbers(number1,number2):");
    fscanf(STDIN,"%d%d",$a,$b);(printf("price %d, discount %.2f,net %.2f",$a,$b=$a*$b/100,$c=$a-$b));
    }
   if($menu==2){printf("input numbers(number1,number2):");
    fscanf(STDIN,"%d%d",$c,$d);
        if ($c==$d) printf("$c equal $d");
        else if($c< $d) printf( "$c less than $d"); 
        else printf( "$c greater $d");
    };
    if($menu!=1&&$menu!=2&&$menu!=3) printf("invalid menu number!!! ");
}
while ($menu!=3);
