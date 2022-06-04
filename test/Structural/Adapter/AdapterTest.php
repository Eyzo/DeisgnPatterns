<?php
namespace App\Test\Structural\Adapter;

use App\Structural\Adapter\EBookAdapter;
use App\Structural\Adapter\Kindle;
use App\Structural\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase {

    public function testPaperBookCurrentPageAfterTurnPage()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    public function testEBookCurrentPageAfterTurnPage()
    {
        $ebook = new EBookAdapter(new Kindle());
        $ebook->open();
        $ebook->turnPage();
        $this->assertEquals(2, $ebook->getPage());
    }

}
