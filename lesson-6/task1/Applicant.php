<?php


abstract class Applicant implements IVacancy
{
    protected $name = "";
    protected $email = "";
    protected $experience = 0;

    public function __construct(string $name, string $email, int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function subscribe(Vacancy $vacancy)
    {
        $vacancy->addSubscribers($this);
    }

    public function unsubscribe(Vacancy $vacancy)
    {
        $vacancy->removeSubscribers($this);
    }
}
