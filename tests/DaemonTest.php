<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class DaemonTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $pid = posix_getpid();
        printf("主进程号: {$pid}\n");

        $configPath = dirname(__DIR__).'/config/daemon.ini';

        $daemonMany = new Daemon($configPath);
        $daemonMany->run();
    }
}
