<?php
class Book
{

    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook()
    {
        $this->availableCopies++;
    }
}
class Member
{

    private $name;

    public function __construct($name)
    {

        $this->name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function borrowBook(Book $book)
    {
        if ($book->borrowBook()) {
            return "{$this->name} borrowed {$book->getTitle()}" . PHP_EOL;
        } else {
            return "No copies available for {$book->getTitle()}" . PHP_EOL;
        }
    }
    //Add returnBook method
    public function returnBook(Book $book)
    {
        return $book->returnBook();
    }
}

//Book 1 - Name: The Great Gatsby, Available Copies: 5.
$book1 = new Book("The Great Gatsby", 5);
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book2 = new Book("To Kill a Mockingbird", 3);

//Member 1 - Name: John Doe
$member1 = new Member("John Doe");
//Member 2 - Name: Jane Smith
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

//Print Available Copies with their names:
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}" . PHP_EOL;
