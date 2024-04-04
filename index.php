<?php
require_once 'Library.php';

$book1 = new Book('The Great Gatsby', 'F. Scott Fitzgerald', 1925);
$book2 = new Book('To Kill a Mockingbird', 'Harper Lee', 1960);
$book3 = new Book('1984', 'George Orwell', 1949);

Library::addBook($book1);
Library::addBook($book2);
Library::addBook($book3);

Library::borrowBook('To Kill a Mockingbird');
Library::returnBook('To Kill a Mockingbird');

Library::printAvailableBooks();
?>