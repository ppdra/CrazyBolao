<?php

namespace App\Livewire;

use App\Enum\MatchStatusEnum;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class NextGames extends Component
{
    public Collection $nextGames;

    public function render()
    {
        $this->nextGames = Game::whereIn('status', [MatchStatusEnum::SCHEDULED])
            ->whereDate('utc_date', '>=', Carbon::now()->toDateString())
            ->orderBy('utc_date')
            ->limit(4)
            ->get();

        return view('livewire.next-games');
    }
}
