# 高恪固件开发工具包
高恪固件开发工具包是一款高恪固件修改工具包，可以加密或者解密高恪固件。当解密高恪固件后，其本身为 OpenWRT 固件，可以使用 OpenWRT 的固件修改方式来修改高恪固件。

高恪固件采用 squashfs 4.0 分区与 jffs2 分区结合，即 OpenWRT 的 squashfs 固件结构。

### 下载地址
All-in-One 集成包：链接: https://pan.baidu.com/s/1dwYmwlkAjxqGC86ZpxtJWg 密码: u92k    
虚拟机导入包：链接: https://pan.baidu.com/s/1OU1ri6PqtcCdChRw4zLgQQ 密码: 6fvj

# 打包方法
1. 准备一份高恪系统；
2. 破解 SSH 权限；
3. 将 vtysh 替换到 /usr/sbin/vtysh；
4. 将 /www 清空
5. 将本代码克隆至 /www 目录；
6. 搭建 Lighttpd + PHP 环境；
7. 删除 /etc/init.d 多余服务；
8. 关闭 SSH 和 TELNET 打包发行；
