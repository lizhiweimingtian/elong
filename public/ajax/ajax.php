<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //声明一个空数组
    $result=array();
    $handler=opendir('../photo');    
    
    while($file=readdir($handler)){
        if($file=="." || $file==".."){
            continue;
        }
        $result[]=$file;
    }
//    var_dump($result);
     echo json_encode($result);
