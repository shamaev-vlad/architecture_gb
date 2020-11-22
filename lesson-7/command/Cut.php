<?php


class Cut extends Command
{
    public function __construct(User $editor, $start, $length){
        parent::__construct($editor, $start, $length);
    }

    public function execute(){
        $this->user->cut($this->start, $this->length);
    }

    public function unExecute() {
        $this->user->paste($this->start);
    }
}
