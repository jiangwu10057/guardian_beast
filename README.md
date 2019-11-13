# guardian_beast

swoole 实现守护进程

实现参考“使用 swoole 实现进程的守护”系列文章
https://segmentfault.com/a/1190000019927916
https://segmentfault.com/a/1190000020038282
https://segmentfault.com/a/1190000020254600

安装

```
composer require jiangwu10057/guardian_beast:dev-master
```

使用方法

```
$pid = posix_getpid();
printf("主进程号: {$pid}\n");

$configPath = dirname(__DIR__) . "/config/daemon.ini";

$daemonMany = new Daemon($configPath);
$daemonMany->run();

```

重载

```
kill -HUP pid

```

# 测试问题

1正在运行的设置为暂停会失败，还会产生孤儿进程
2主进程被kill了，守护的进程没有一起关闭
3如果主进程主动ctrl+c子进程会一起被销毁