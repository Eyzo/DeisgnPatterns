<?php
namespace App\Test\Behavioral\Mediator;

use App\Behavioral\Mediator\MediatorUserRepoUi;
use App\Behavioral\Mediator\Ui;
use App\Behavioral\Mediator\UserRepository;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase {

    public function testIfMediatorForUiIsWorking()
    {
        $mediator = new MediatorUserRepoUi(new UserRepository(), new Ui());
        $this->assertEquals('Je suis la class Mediator', $mediator->getUserName());
        $this->assertEquals('Je suis la class Mediator', $mediator->getUi()->getUserName());
        $this->assertEquals('Je suis la class Mediator', $mediator->getUserRepository()->getUserName());
    }

}
