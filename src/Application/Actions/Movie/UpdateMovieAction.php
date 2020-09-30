<?php
declare(strict_types=1);

namespace App\Application\Actions\Movie;

use App\Domain\DomainException\DomainRecordNotFoundException;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\HttpBadRequestException;

class UpdateMovieAction extends MovieAction
{

    /**
     * @inheritDoc
     */
    protected function action(): Response
    {
        $movie_id = (int) $this->resolveArg('id');
        $movie = $this->movie_repository->getMovieById($movie_id);

        $this->logger->info("Movie of id `${movie_id}` was updated.");

        return $this->respondWithData($movie);
    }
}