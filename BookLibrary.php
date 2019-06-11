<?php

class Library
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $listOfBooks;

    /**
     * Library constructor.
     * @param string $name
     * @param array $listOfBooks
     */
    public function __construct(string $name, array $listOfBooks)
    {
        $this->name = $name;
        $this->listOfBooks = $listOfBooks;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getListOfBooks(): array
    {
        return $this->listOfBooks;
    }

    /**
     * @param array $listOfBooks
     */
    public function setListOfBooks(array $listOfBooks): void
    {
        $this->listOfBooks = $listOfBooks;
    }
}

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbn;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $publisher
     * @param $releaseDate
     * @param $isbn
     * @param $price
     */
    public function __construct($title, $author, $publisher, $releaseDate, $isbn, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
        $this->isbn = $isbn;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
}

$n = readline();
$listOfBooks = [];
$libraryList = [];

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $title = $input[0];
    $author = $input[1];
    $publisher = $input[2];
    $date = $input[3];
    $isbn = $input[4];
    $price = $input[5];

    $book = new Book($title, $author, $publisher, $date, $isbn, $price);
    $listOfBooks[] = $book;
}

foreach ($listOfBooks as $value) {
    $author = $value->getAuthor();
    $price = $value->getPrice();

    if (!key_exists($author, $libraryList)) {
        $libraryList[$author] = 0;
    }
    $libraryList[$author] += $price;
}

uksort($libraryList, function ($a, $b) use ($libraryList) {
    if ($libraryList[$a] < $libraryList[$b]) return 1;
    elseif ($libraryList[$a] > $libraryList[$b]) return -1;
    else return strcmp($a, $b);
});

foreach ($libraryList as $key => $value) {
    echo $key . " -> " . number_format($value, 2, ".", "") . PHP_EOL;
}