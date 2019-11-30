<?php
/*
 * 链表基础操作
 *
 */
require 'Node.php';
class LinkList
{
    private $header; //头节点

    public function __construct($value = null, $next = null)
    {
        $this->header = new Node($value, $next);
    }

    /**
     * 增加节点
     * @param $point 插入位置
     * @param $node 插入节点
     */
    public function addLink($node, $point = null)
    {
        $current = $this->header;
        $i = 1;
        while ($current->next != null) {
            if ($point != null && $point != 0 && $point <= $i) {
                //按$point插入
                if ($point == $i) {
                    break;
                }
            }
            $current = $current->next;
            $i++;
        }

        $node->next = $current->next;
        $current->next = $node;
    }

    /**
     * 删除指定节点
     */
    public function delLink($point)
    {
        if ($point == null || $point == 0) {
            echo "非法节点<br>";exit;
        }
        $i = 1;
        $current = $this->header;
        while ($current->next != null) {
            if ($point == $i) {
                break;
            }
            $current = $current->next;
            $i++;
        }

        //当前节点为删除节点的前节点
        if ($point < $i) {
            $current->next = $current->next->next;
        } else {
            echo "非法节点<br>";exit;
        }
    }

    /**
     * 遍历节点
     */
    public function getLinkList()
    {
        $current = $this->header;
        $i = 1;
        while ($current->next != null) {
            echo "当前第{$i}节点值为：{$current->next->value}<br>";
            $current = $current->next;
            $i++;
        }
    }

    /**
     * 获取链表长度
     * @param $node 链表
     */
    public function getLinkLength()
    {
        $i = 0;
        $current = $this->header;
        while ($current->next != null) {
            $i++;
            $current = $current->next;
        }
        return $i;
    }

    /**
     * 反转链表
     */
    public function reverseList($link) {
        $current = $link->header->next;
        if ($current == null) {
            return null;
        }
        $pre = null;

        while ($current != null) {
            $tmp = $current->next;
            $current->next = $pre;
            $pre = $current;
            $current = $tmp;
        }
    }

}

$link = new LinkList();
$link->addLink(new Node(1));
$link->addLink(new Node(2));
$link->addLink(new Node(3));
// $link->addLink(new Node('css'), 3);
// $link->getLinkList();
$link->ReverseList($link);