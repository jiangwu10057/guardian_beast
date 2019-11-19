<?php

declare(strict_types=1);

namespace GuardianBeast\Bean;

class Worker
{
    /**
     * @var Command
     */
    private $command;

    /**
     * @var int
     */
    private $pid;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * Get the value of enabled.
     *
     * @return bool
     */
    public function isEnabled()
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

    /**
     * Get the value of pid.
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set the value of pid.
     *
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get the value of command.
     *
     * @return Command
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set the value of command.
     *
     * @param Command $command
     *
     * @return self
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;

        return $this;
    }
}
