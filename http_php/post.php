<?php
/**
    1.请求行
        POST /http_php/post.php HTTP/1.1
    2.首部
        HOST:localhost 8000
        Content-type:application/x-www-form-urlencoded
        content-length:20

        act=query&name=ghost
*/
    $str = implode($_POST,"\n");
    echo $str;
 ?>
