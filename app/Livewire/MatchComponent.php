<?php

namespace App\Livewire;

use App\Enum\MatchStatusEnum;
use App\Models\Game;
use Carbon\Carbon;
use Livewire\Component;

class MatchComponent extends Component
{
    public Game $match;

    public function mount(Game $match)
    {
        $this->match = $match;
    }

    public function getRemainingTime(): int
    {
        return Carbon::now()->diffInMinutes($this->match->utc_date);
    }

    public function shouldPoll(): bool
    {
        $diff = $this->getRemainingTime();

        return $this->match->status === MatchStatusEnum::LIVE || ($diff !== null && $diff <= 90 && $diff >= -180);
    }
    public function render()
    {
        return view('livewire.match-component');
    }
}
