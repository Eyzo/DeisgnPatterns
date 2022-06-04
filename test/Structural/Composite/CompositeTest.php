<?php
namespace App\Test\Structural\Composite;

use App\Structural\Composite\Form;
use App\Structural\Composite\Input;
use App\Structural\Composite\Text;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase {

    public function testIfRenderIsCorrect()
    {
        $form = new Form();
        $form->addElements(new Text('Nom'));
        $form->addElements(new Input());
        $form->addElements(new Text('Prenom'));
        $form->addElements(new Input());
        $this->assertEquals("<form>Nom: <input type='text'>Prenom: <input type='text'></form>", $form->render());
    }


}
