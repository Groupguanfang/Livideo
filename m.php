<?php
ignore_user_abort();//�ص��������PHP�ű�Ҳ���Լ���ִ��.
set_time_limit(0);// ͨ��set_time_limit(0)�����ó��������Ƶ�ִ����ȥ
$interval=24*60;// ÿ��һСʱ����һ��
$i=1;
include 'go.php';
$db=new  db();
  die;
do{
$run = include 'config.php';
#�ж�ֵ
if(!$run) die('process abort');
  #sql
  $sql="insert into  one values(null,".date('h:i:s').")";
  $db->uidRst($sql);
  sleep($interval);// �ó���˯һСʱ
}while(true);