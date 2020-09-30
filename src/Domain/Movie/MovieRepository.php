<?php
declare(strict_types=1);

namespace App\Domain\Movie;

interface MovieRepository
{
    /**
     * Retrieve all Movies
     *
     * @return Movie[]
     */
    public function getMovies(): array;

    /**
     * Retrieve a specific movie by id.
     *
     * @param int $id
     *
     * @return Movie
     *
     * @throws MovieNotFoundException
     */
    public function getMovieById(int $id): Movie;
}