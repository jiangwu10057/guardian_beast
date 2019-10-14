# guardian_beast

swoole 实现守护进程

实现参考“使用 swoole 实现进程的守护”系列文章
https://segmentfault.com/a/1190000019927916
https://segmentfault.com/a/1190000020038282
https://segmentfault.com/a/1190000020254600

使用方法

```
$pid = posix_getpid();
printf("主进程号: {$pid}\n");

$configPath = dirname(__DIR__) . "/config/daemon.ini";

$daemonMany = new Daemon($configPath);
$daemonMany->run();

```

热加载

```
kill -usr1 pid
```
