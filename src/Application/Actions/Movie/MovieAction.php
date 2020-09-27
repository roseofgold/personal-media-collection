<?php
declare(strict_types=1);

namespace App\Application\Actions\Movie;

use App\Application\Actions\Action;
use App\Domain\Movie\MovieRepository;
use Psr\Log\LoggerInterface;

abstract class MovieAction extends Action
{
    /**
     * @var MovieRepository
     */
    protected $movie_repository;

    /**
     * @param LoggerInterface $logger
     * @param MovieRepository $movie_repository
     */
    public function __construct(LoggerInterface $logger, MovieRepository $movie_repository)
    {
        parent::__construct($logger);

        $this->movie_repository = $movie_repository;
    }
}