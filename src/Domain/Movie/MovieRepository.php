<?php
declare(strict_types=1);

namespace App\Domain\Movie;

interface MovieRepository
{
    /**
     * @return Movie[]
     */
    public function getMovies(): array;

    /**
     * @param int $id
     * @return Movie
     * @throws MovieNotFoundException
     */
    public function getMovieById(int $id): Movie;
}