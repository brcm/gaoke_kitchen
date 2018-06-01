<?php
if ($_FILES["image"]["error"] > 0)
{
    $msgbox['title'] = "解密失败";
    $msgbox['content'] = "上传固件时发生未知错误";
    include 'msgbox.php';
    die();
}
else
{
    $allowedExts = array("bin", "web");
    $temp = explode(".", $_FILES["image"]["name"]);
    $extension = end($temp);
    
    if (!in_array($extension, $allowedExts))
    {
        $msgbox['title'] = "解密失败";
        $msgbox['content'] = "固件类型不匹配";
        include 'msgbox.php';
        die();
    }
    
    system('rm /www/*.tar -rf');
    system('rm /www/*.bin -rf');
    system('rm /www/*.img -rf');
    system('rm /www/*.web -rf');
    system('rm /www/*.iso -rf');
    
    $newfile = "gaoke_decoded_".time().".tar";
    move_uploaded_file($_FILES["image"]["tmp_name"], "/www/".$newfile);
    system('ccrypt -d -K kingshengxia /www/'.$newfile);
    
    $msgbox['title'] = "解密完成";
    $msgbox['content'] = '固件解密完成，点击 <a href="/'.$newfile.'">'.$newfile.'</a> 保存至本地';
    include 'msgbox.php';
}
?>