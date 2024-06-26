<?php

class Book {
    private $title;
    private $author;
    private $year;
    private $isBorrowed;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isBorrowed = false;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }

    public function isBorrowed() {
        return $this->isBorrowed;
    }

    public function borrowBook() {
        $this->isBorrowed = true;
    }

    public function returnBook() {
        $this->isBorrowed = false;
    }

    public function __toString() {
        return $this->title . ' by ' . $this->author . ' (' . $this->year . ')';
    }
}

?>
