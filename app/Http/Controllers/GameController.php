<?php

namespace App\Http\Controllers;

use App\Services\GameServiceInterface;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $service;

    public function __construct(GameServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->getAllGames());
    }

    public function show($id)
    {
        $game = $this->service->getGameById($id);
        return $game ? response()->json($game) : response() -> json(['message' => 'Not Found'], 404);
    }

    public function store(Request $request)
    {
        $game = $this->service->createGame($request->all());
        return response()->json($game, 201);
    }

    public function update(Request $request, $id) {
        $game = $this->service->updateGame($id, $request->all());
        return $game ? response()->json($game) : response()->json(['message' => 'Not Found'], 404);
    }

    public function destroy($id)
    {
        $this->service->deleteGame($id);
        return response()->json(null, 204);
    }

    public function getByGenre($genre)
    {
        return response()->json($this->service->getGamesByGenre($genre));
    }
}
