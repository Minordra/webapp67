<?php
    echo test("Red")."\n";
    echo test("Green"."\n");
    echo test("1"."\n");

    function test($str){
        $s = substr($str, strlen($str)-1);
        return $s.$str.$s;
    }
?>