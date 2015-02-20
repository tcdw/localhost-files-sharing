# Downloader v2.0

### 功能
通过这个程序，能让多台手机在局域网间互传分享文件。

### 要求
**1、设备必须在同一局域网内。**
**2、其中一台设备必须安装服务器应用程序。**这个程序是用PHP编写的，您可以把这个程序放在安装有服务器应用程序且带有PHP模块的计算机上使用，亦可以在手机里安装服务器应用程序，然后通过Wi-Fi或手机热点（AP）访问。

## 安装
这个程序相当于一个动态网站。只要把程序放到您自己的服务器里面的Web根目录（/htdocs）就能使用了。

### 具体操作如下：

**若用电脑作服务器**
1. 在电脑里安装服务器应用程序，如Apache。现在大多数集合安装包能帮助您快速配置好服务器环境。如XMAPP, WAMP（在Windows里使用）和MAMP（在MAC里使用）

2. 完成第一步后，打开Web根目录（视您安装的服务器应用程序而定），把Downloader程序放进去。

3. 让手机和电脑在同一网段（同一局域网内），通过手机的浏览器访问 "http://您电脑的IP地址(:端口号)/downloader-v2/"（端口号视您安装的服务器应用程序而定，一般不用填写）

**若用Android手机作服务器**
1. 在手机里安装服务器应用程序，如Lighttpd。可通过"AndroPHP"等程序快速配置Lighttpd。

2. 完成第一步后，打开Web根目录（视您安装的服务器应用程序而定），把Downloader程序放进去。

3. 让各台手机连接上同一个Wi-Fi，然后通过手机浏览器访问"http://您手机的IP地址(:端口号)/downloader-v2/"（端口号视您安装的服务器应用程序而定，一般不用填写）

4. 或者开启安装有服务器应用程序的手机的Wi-Fi热点（AP），让其他设备连入网络，然后通过浏览器访问"http://192.168.43.1(:端口号)/downloader-v2/"（端口号视您安装的服务器应用程序而定，一般不用填写）