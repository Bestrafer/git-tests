<?php

namespace App\Entity

class Feedback
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $message;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Feedback
     */
    public function setId(int $id): Feedback
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return Feedback
     */
    public function setCategory(string $category): Feedback
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Feedback
     */
    public function setMessage(string $message): Feedback
    {
        $this->message = $message;
        return $this;
    }
}
