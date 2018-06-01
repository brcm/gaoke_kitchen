<?php
system('rm /www/*.tar -rf');
system('rm /www/*.bin -rf');
system('rm /www/*.img -rf');
system('rm /www/*.web -rf');
system('rm /www/*.iso -rf');
system('rm /www/*.cpt -rf');
system('poweroff');
$msgbox['title'] = "正在关机";
$msgbox['content'] = '正在关闭高恪固件开发工具包虚拟机 ...';
include 'msgbox.php';
?>