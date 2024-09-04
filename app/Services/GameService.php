<?php
namespace App\Services;

use App\Repositories\GameRepositoryInterface;

class GameService implements GameServiceInterface
{
    protected $repository;

    public function __construct(GameRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllGames()
    {
        return $this->repository->getAll();
    }

    public function getGameById($id)
    {
        return $this->repository->getById($id);
    }

    public function createGame(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateGame($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteGame($id)
    {
        $this->repository->delete($id);
    }

    public function getGamesByGenre($genre)
    {
        return $this->repository->getByGenre($genre);
    }
}
