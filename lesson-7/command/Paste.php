<?php


class Paste extends Command
{
    public function __construct(User $editor, $start){
        parent::__construct($editor, $start, 0);
    }

    public function execute(){
        $this->user->paste($this->start);
        $this->length = strlen($this->user->action());
    }

    public function unExecute() {
        $this->user->delete($this->start, $this->length);
    }
}
