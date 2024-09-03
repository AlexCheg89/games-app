<?php

namespace App\Repositories;

use App\Models\Game;

class GameRepository implements GameRepositoryInterface
{
    public function getAll()
    {
        return Game::all();
    }
    public function getById($id)
    {
        return Game::find($id);
    }

    public function create(array $data)
    {
        return Game::create($data);
    }

    public function update($id, array $data)
    {
        $game = Game::find($id);
        if ($game) {
            $game->update($data);
        }
        return $game;
    }

    public function delete($id)
    {
        $game = Game::find($id);
        if ($game) {
            $game->delete();
        }
    }
    public function getByGenre($genre)
    {
        return  Game::whereJsonContains('genres', $genre)->get();
    }

}
