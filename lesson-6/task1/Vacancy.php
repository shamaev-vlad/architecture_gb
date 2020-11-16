<?php


abstract class Vacancy
{
    protected $vacancies = [];
    protected $subscribers = [];

    public function getVacancies(): array
    {
        return $this->vacancies;
    }

    public function addSubscribers(IVacancy $subscriber)
    {
        if (!in_array($subscriber, $this->subscribers))
        {
            $this->subscribers[] = $subscriber;
        }
    }

    public function removeSubscribers(IVacancy $subscriber)
    {
        $sub = array_search($subscriber, $this->subscribers);
        if ($sub !== FALSE)
        {
            array_splice($this->subscribers, $sub, 1);
        }
    }

    protected function notify()
    {
        foreach ($this->subscribers as $subscriber)
        {
            $subscriber->update($this);
        }
    }

    public abstract function updateVacancies();
}
