<?php


class PHPVacancy extends Vacancy
{

    public function updateVacancies()
    {
       $this->vacancies = [
           "Вакансия по PHP разработчика без опыта" => 0,
           "Вакансия по PHP профессионального разработчика" => 4
       ];
       $this->notify();
    }
}
