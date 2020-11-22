<?php


abstract class Command
{
    protected $user;
    protected $start;
    protected $length;


    /**
     * Command constructor.
     * @param User $editor
     * @param $start
     * @param $length
     */
    public function __construct(User $user, $start, $length)
    {
        $this->user = $user;
        $this->start = $start;
        $this->length = $length;
    }

    public abstract function execute();
    public abstract function unExecute();
}
