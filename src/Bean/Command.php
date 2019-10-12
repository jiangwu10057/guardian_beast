<?php

declare(strict_types=1);

namespace GuardianBeast\Bean;

class Command
{
    /**
     * 工作进程 id.
     *
     * @var string
     */
    private $id;

    /**
     * 真正执行的 command 命令.
     *
     * @var string
     */
    private $command;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * Get 工作进程 id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 工作进程 id.
     *
     * @param string $id 工作进程 id
     *
     * @return self
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get 真正执行的 command 命令.
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set 真正执行的 command 命令.
     *
     * @param string $command 真正执行的 command 命令
     *
     * @return self
     */
    public function setCommand(string $command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get the value of enabled.
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }
}
