<?php


class HeadHunter implements IObserver
{
    private $vacancy;

  public function getVacancy()
    {
        return $this->vacancy;
    }

    /**
     * @param mixed $vacancy
     */
    public function setVacancy($vacancy): void
    {
        $this->vacancy = $vacancy;
    }

    public function headhunterVacancy($vacancy)
    {
        echo 'Вакансии с сайта';
    }


}