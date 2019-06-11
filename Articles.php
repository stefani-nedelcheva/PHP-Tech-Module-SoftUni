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
}

$article = explode(", ", readline());
$myArticle = new Articles($article[0], $article[1], $article[2]);

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $command = explode(": ", readline());

    switch ($command[0]) {
        case "Edit":
            $myArticle->setContent($command[1]);
            break;
        case "ChangeAuthor":
            $myArticle->setAuthor($command[1]);
            break;
        case "Rename":
            $myArticle->setTitle($command[1]);
            break;
    }
}

echo $myArticle;