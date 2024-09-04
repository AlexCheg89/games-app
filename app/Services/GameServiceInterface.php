<?php
namespace App\Services;

interface GameServiceInterface
{
    public function getAllGames();
    public function getGameById($id);
    public function createGame(array $data);
    public function updateGame($id, array $data);
    public function deleteGame($id);
    public function getGamesByGenre($genre);
}
