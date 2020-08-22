<?php
function deltree($dirList){ 
chdir($dirList); 
$handle=opendir('.'); 
while (($file=readdir($handle))<>"") { 
if(is_file($file)) 
unlink($file); 
if(is_dir($file) && $file<>"." && $file<>".."){ 
deltree($file); 
chdir('..'); 
rmdir($file); 
} 
} 
closedir($handle); 
} 
deltree('cache');
?>
<h1><span id="begin">1</span>秒后缓存数据清理完毕</h1>  <h1>自动跳转回首页</h1> <h1>请每天访问一次本页面哦</h1>
<script>
    var t=1;
    var timer=setInterval(time,1000);
    var spans=document.getElementById("begin");
    function time(){
        t--;
        spans.innerHTML='<span>'+t+'</span>';
        if (t==0){
            clearInterval(timer);
            return window.location.href='./';
        }console.log(t);
    }
</script>