<?php
require_once 'Book.php';

class Library {
    private static $books = [];

    public static function addBook(Book $book) {
        self::$books[] = $book;
    }

    public static function borrowBook($title) {
        foreach (self::$books as $book) {
            if ($book->getTitle() === $title && !$book->isBorrowed()) {
                $book->borrowBook();
                echo "You have borrowed '{$title}'.\n";
                return;
            }
        }
        echo "Sorry, '{$title}' is not available for borrowing or already borrowed.\n";
    }

    public static function returnBook($title) {
        foreach (self::$books as $book) {
            if ($book->getTitle() === $title && $book->isBorrowed()) {
                $book->returnBook();
                echo "You have returned '{$title}'.\n";
                return;
            }
        }
        echo "Invalid book title '{$title}' or book is not borrowed.\n";
    }

    public static function printAvailableBooks() {
        if (empty(self::$books)) {
            echo "No books available in the library.\n";
        } else {
            echo "Available books in the library:\n";
            foreach (self::$books as $book) {
                if (!$book->isBorrowed()) {
                    echo "- {$book}\n";
                }
            }
        }
    }
}

?>
