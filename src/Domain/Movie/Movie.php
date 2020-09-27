<?php
declare(strict_types=1);

namespace App\Domain\Movie;

use JsonSerializable;

class Movie implements JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @param int|null $id
     * @param string $title
     * @param string $description
     */
    public function __construct(
        ?int $id,
        string $title,
        string $description
    )
    {
        $this->id = $id;
        $this->title = ucfirst($title);
        $this->description= $description;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
          'id' => $this->id,
          'title' => $this->title,
          'description' => $this->description
        ];
    }
}