<?php
namespace App\Behavioral\Iterator;

class Book {

    public function __construct(protected string $title, protected string $author)
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->author." ".$this->title;
    }

}
