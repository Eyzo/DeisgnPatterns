<?php
namespace App\Behavioral\Iterator;

class BookList implements \Countable, \Iterator {

    protected array $books;
    protected int $currentIndex = 0;

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $book): void
    {
        $key = array_search($book, $this->books);
        if ($key) {
            unset($this->books[$key]);
        }
        $this->books = array_values($this->books);
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

}
