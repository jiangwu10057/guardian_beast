<?php
!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
var_dump(BASE_PATH);
require BASE_PATH.'/vendor/autoload.php';
use GuardianBeast\Daemon;

$pid = posix_getpid();
printf("主进程号: {$pid}\n");

$configPath = dirname(__DIR__).'/tests/config/daemon.ini';
$daemonMany = new Daemon($configPath);

$daemonMany->run();