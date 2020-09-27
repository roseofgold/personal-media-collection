<?php
declare(strict_types=1);

namespace App\Domain\Movie;

use App\Application\Actions\Movie\MovieAction;

interface MovieRepository
{
    /**
     * @return Movie[]
     */
    public function getMovies(): array;

    /**
     * @param int $id
     * @return MovieAction
     * @throws MovieNotFoundException
     */
    public function getMovieById(int $id): Movie;
}