<?php

class Articles
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $author;

    /**
     * Articles constructor.
     * @param string $title
     * @param string $content
     * @param string $author
     */
    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function __toString()
    {
        return $this->title . " - " . $this->content . ": " . $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

}

$n = intval(readline());
$articles = [];

for ($i = 0; $i < $n; $i++) {
    $article = explode(", ", readline());
    $myArticle = new Articles($article[0], $article[1], $article[2]);
    $articles[] = $myArticle;
}

$command = readline();
switch ($command) {
    case "title":
        usort($articles, function (Articles $a1, Articles $a2) {
            return $a1->getTitle() <=> $a2->getTitle();
        });
        break;
    case "content":
        usort($articles, function (Articles $a1, Articles $a2) {
            return $a1->getContent() <=> $a2->getContent();
        });
        break;
    case "author":
        usort($articles, function (Articles $a1, Articles $a2) {
            return $a1->getAuthor() <=> $a2->getAuthor();
        });
        break;
}

foreach ($articles as $art) {
    echo $art . PHP_EOL;
}
