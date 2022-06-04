<?php
namespace App\Behavioral\Mediator;

use App\Behavioral\Mediator\MediatorInterface;

class MediatorUserRepoUi implements MediatorInterface {

    public function __construct(protected UserRepository $userRepository, protected Ui $ui)
    {
        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function getUserName(): string
    {
        return 'Je suis la class Mediator';
    }

    /**
     * @return UserRepository
     */
    public function getUserRepository(): UserRepository
    {
        return $this->userRepository;
    }

    /**
     * @param UserRepository $userRepository
     */
    public function setUserRepository(UserRepository $userRepository): void
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return Ui
     */
    public function getUi(): Ui
    {
        return $this->ui;
    }

    /**
     * @param Ui $ui
     */
    public function setUi(Ui $ui): void
    {
        $this->ui = $ui;
    }

}
