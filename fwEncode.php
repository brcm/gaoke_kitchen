<?php
if ($_FILES["image"]["error"] > 0)
{
    $msgbox['title'] = "加密失败";
    $msgbox['content'] = "上传固件时发生未知错误";
    include 'msgbox.php';
    die();
}
else
{
    $allowedExts = array("bin", "web", "tar");
    $temp = explode(".", $_FILES["image"]["name"]);
    $extension = end($temp);
    
    if (!in_array($extension, $allowedExts))
    {
        $msgbox['title'] = "加密失败";
        $msgbox['content'] = "固件类型不匹配";
        include 'msgbox.php';
        die();
    }
    
    system('rm /www/*.tar -rf');
    system('rm /www/*.bin -rf');
    system('rm /www/*.img -rf');
    system('rm /www/*.web -rf');
    system('rm /www/*.iso -rf');
    system('rm /www/*.cpt -rf');
    
    $newfile = "gaoke_encoded_".time().".bin.web";
    move_uploaded_file($_FILES["image"]["tmp_name"], "/www/".$newfile);
    system('ccrypt -e -K kingshengxia /www/'.$newfile);
    system("mv /www/$newfile.cpt /www/$newfile");
    
    $msgbox['title'] = "加密完成";
    $msgbox['content'] = '固件加密完成，点击 <a href="/'.$newfile.'">'.$newfile.'</a> 保存至本地';
    include 'msgbox.php';
}
?>