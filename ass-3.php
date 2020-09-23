<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
    printf("Input size : ");
    fscanf(STDIN, "%d", $n);

    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++) {
            printf("%s", ($i <= $j)? "*" : " ");
        }
        printf("\n");
    }
    ?>