<?php


class User
{
    protected $text;
    protected $action;


    public function __construct($text){
        $this->text = $text;
    }

    public function getText() : string {
        return $this->text;
    }

    public function action() : string {
        return $this->action;
    }

    public function cut(int $start, int $length){
        $this->copy($start, $length);
        $this->text = substr(
            $this->text,
            $start + $length,
            strlen($this->text) - $start - $length
        );
    }

    public function copy(int $start, int $length){
        $this->action= substr(
            $this->text,
            $start,
            $length
        );
    }

    public function paste(int $start){
        $this->text = substr_replace(
            $this->text,
            $this->action,
            $start,
            0
        );
    }

    public function delete(int $start, int $length){
        $this->text= substr_replace($this->text,
            "",
            $start,
            $length);
    }
}
