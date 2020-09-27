<?php
declare(strict_types=1);

namespace App\Application\Actions\Movie;

use Psr\Http\Message\ResponseInterface as Response;

class ListMoviesAction extends MovieAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $movies = $this->movie_repository->getMovies();

        $this->logger->info("Movies list was viewed.");

        return $this->respondWithData($movies);
    }
}