<?php
class Quiz {
    private $id;
    private $title;
    private $content;
    private $description;
    private $author_id;
    private $created_at;

    public function __construct($id, $title, $content, $description, $author_id, $created_at) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->description = $description;
        $this->author_id = $author_id;
        $this->created_at = $created_at;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAuthorId() {
        return $this->author_id;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }
}
?>
