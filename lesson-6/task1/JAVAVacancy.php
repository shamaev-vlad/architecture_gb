<?php


class JAVAVacancy extends Vacancy
{

    public function updateVacancies()
    {
        $this->vacancies = [
            "Вакансия по JAVA Профессиональная разработка" => 2,
            "Вакансия по JAVA без опыта работы" => 0
        ];
        $this->notify();
    }
}
