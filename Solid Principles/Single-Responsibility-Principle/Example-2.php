<?php

class BookDetails {

    public function getTitle() {
        return "The Mirage";
    }

    public function getAuthor() {
        return "Noah Osuolale";
    }

}

class BookCount {

    function getPage() {
        return "The book has 120 pages";
    }

}


$book = new BookDetails('latest');
var_dump($book->getAuthor());

$bookcount = new BookCount('abc');
var_dump($bookcount->getPage());