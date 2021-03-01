<?php


class Candidate implements IObserverable
{
    private $name;
    private $email;
    private $experience;
    private $observers;
    private HeadHunter $vacancy;


    /**
     * Candidate constructor.
     * @param $name
     * @param $email
     * @param $experience
     */
    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer)
    {
        foreach ($this->observers as $obsrv) {
            if ($obsrv === $observer) {
                unset($obsrv);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle($this->vacancy);
        }
    }

}