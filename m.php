<?php
ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
$interval=24*60;// 每隔一小时运行一次
$i=1;
include 'go.php';
$db=new  db();
  die;
do{
$run = include 'config.php';
#判断值
if(!$run) die('process abort');
  #sql
  $sql="insert into  one values(null,".date('h:i:s').")";
  $db->uidRst($sql);
  sleep($interval);// 让程序睡一小时
}while(true);