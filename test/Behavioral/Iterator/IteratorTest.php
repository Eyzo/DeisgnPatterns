<?php
namespace App\Test\Behavior\Command;

use App\Behavioral\Iterator\Book;
use App\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase {

    public function testIfIteratorCorrectlyWork()
    {
        $bookList = new BookList();
        $books = [];
        for ($i = 0; $i < 10; $i++) {
            $book = new Book("Title $i", "Author $i");
            $books[] = $book;
            $bookList->addBook($book);
        }
        $this->assertSame($books[0], $bookList->current());
    }

}
