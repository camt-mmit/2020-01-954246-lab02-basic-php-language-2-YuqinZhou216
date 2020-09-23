<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
    printf("Input size : ");
    fscanf(STDIN, "%d", $n);

    for($i=0; $i<$n; $i++){
        for($j=$n; $j>=0; $j--){
            if($i>=$j) 
            printf("*");
            else printf(" ");
        }printf("\n");
    }