<?php

use App\Models\Game;
use App\Models\Team;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('teams', function () {
    $uri = 'http://api.football-data.org/v4/competitions/WC/teams/';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: ' . env('FOOTBALL_DATA_API_KEY');
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);

    foreach ($matches->teams as $match) {
        Team::updateOrCreate([
            'external_id' => $match->id,
        ], [
            'name' => $match->name,
            'slug' => $match->tla,
            'logo_url' => $match->crest,
        ]);
    }
})->purpose('Fetch and update teams from the World Cup API');


Artisan::command('matches', function () {
    $uri = 'http://api.football-data.org/v4/competitions/WC/matches/';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: ' . env('FOOTBALL_DATA_API_KEY');
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);

    foreach ($matches->matches as $match) {
        Game::updateOrCreate([
            'external_id' => $match->id,
        ], [
            'home_id' => Team::where('external_id', $match->homeTeam->id)->first()->id ?? null,
            'away_id' => Team::where('external_id', $match->awayTeam->id)->first()->id ?? null,
            'group_name' => $match->group,
            'matchday' => $match->matchday,
            'stage' => $match->stage,
            'utc_date' => $match->utcDate,
            'status' => $match->status,
        ]);
    }
})->purpose('Fetch and update teams from the World Cup API');
