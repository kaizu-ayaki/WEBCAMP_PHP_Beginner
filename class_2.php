<?php

class MyClass{
    const HOGE='stirng';
    
    public function __construct(){
        echo "コンストラクタ\n";
    }
    
    public function __destruct(){
        echo "デストラクタ\n";
    }
}

var_dump(MyClass::HOGE);

$obj=new MyClass();