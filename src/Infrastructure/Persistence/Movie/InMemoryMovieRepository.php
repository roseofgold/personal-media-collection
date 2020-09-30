<?php


namespace App\Infrastructure\Persistence\Movie;


use App\Application\Actions\Movie\MovieAction;
use App\Domain\Movie\Movie;
use App\Domain\Movie\MovieNotFoundException;
use App\Domain\Movie\MovieRepository;
use phpDocumentor\Reflection\Types\This;

class InMemoryMovieRepository implements MovieRepository
{
    /**
     * @var Movie[]
     */
    private $movies;

    /**
     * InMemoryMovieRepository constructor.
     *
     * @param array|null $movies
     */
    public function __construct(array $movies = null)
    {
        $this->movies = $users ?? [
                1 => new Movie(1, 'Resident Evil: Apocalypse', 'Some description'),
                2 => new Movie(2, 'Young Guns', 'Some description'),
                3 => new Movie(3, 'The Expendables', 'Some description'),
            ];
    }

    /**
     * @inheritDoc
     */
    public function getMovies(): array
    {
        return array_values($this->movies);
    }

    /**
     * @inheritDoc
     */
    public function getMovieById(int $id): Movie
    {
        if(!isset($this->movies[$id])){
            throw new MovieNotFoundException();
        }

        return $this->movies[$id];
    }
}