<?php
/*
 * 定义节点
 *
 */
class Node {
    public $value;//节点值
    public $next;//下一个节点
    public $pre;//上一个节点
    public function __construct($value=null) {
        $this->value = $value;
    }
}

