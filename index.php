<?php

use Acme\Book;
use Acme\BookInterface;
use Acme\eReaderAdapter;

require __DIR__ . "/vendor/autoload.php";

class User
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

$user = new User();
$user->read(new Book());
$user->read(new eReaderAdapter(new \Acme\Kindle()));
$user->read(new eReaderAdapter(new \Acme\Nook()));