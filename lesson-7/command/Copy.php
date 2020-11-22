<?php


class Copy extends Command
{
    public function __construct(User $user, $start, $length){
        parent::__construct($user, $start, $length);
    }

    public function execute(){
        $this->user->copy($this->start, $this->length);
    }

    public function unExecute() { }
}
