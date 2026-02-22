<?php

namespace App\Livewire;

use App\Enum\MatchStatusEnum;
use App\Models\Game;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class MatchesList extends Component
{
    use WithPagination;
    
    public array $countryOptsList;
    public array $groupOptsList;
    public array $stageOptsList;
    public array $statusOptsList;
    public array $selectedCountry;
    public array $selectedStatus;
    public array $selectedGroup;

    
    public ?string $selectedStage = '';


    public function mount()
    {
        $this->countryOptsList = $this->getCountryOptsList();
        $this->groupOptsList = $this->getGroupOptsList();
        $this->stageOptsList = $this->getStageOptsList();
        $this->statusOptsList = MatchStatusEnum::cases();

    }

    public function updatedSelectedCountry(): void
    {
        $this->loadGames();
    }
    public function updatedSelectedGroup(): void
    {
        $this->loadGames();
    }
    public function updatedSelectedStage(): void
    {
        $this->loadGames();
    }
     public function updatedSelectedStatus(): void
    {
        $this->loadGames();
    }

    private function loadGames()
    {
        return Game::query()
            ->with(['homeTeam', 'awayTeam', 'gameResult'])
            ->when($this->selectedCountry ?? null, function ($q) {
                $q->where(function ($qq) {
                    $qq->whereIn('home_id', $this->selectedCountry)
                        ->orWhereIn('away_id', $this->selectedCountry);
                });
            })
            ->when($this->selectedStatus ?? null, fn($q) => $q->whereIn('status', $this->selectedStatus))
            ->when($this->selectedGroup ?? null, fn($q) => $q->whereIn('group_name', $this->selectedGroup))
            ->when($this->selectedStage, fn($q) => $q->where('stage', $this->selectedStage))
            ->orderBy('utc_date')
            ->paginate(10);

    }

    // todo refactor to use cache
    public function getCountryOptsList(): array
    {
        return Team::query()
            ->orderBy('name')
            ->pluck('name', 'id')
            ->all();
    }

    // todo refactor to use cache
    public function getGroupOptsList(): array
    {
        return Game::query()
            ->whereNotNull('group_name')
            ->select('group_name')
            ->distinct()
            ->orderBy('group_name')
            ->pluck('group_name')
            ->all();
    }

    // todo refactor to use cache
    public function getStageOptsList(): array
    {
        return Game::query()
            ->whereNotNull('stage')
            ->select('stage')
            ->distinct()
            ->orderBy('stage')
            ->pluck('stage')
            ->all();
    }


    public function render()
    {
        $gamesList = $this->loadGames();

        return view('livewire.matches-list', compact('gamesList'));
    }
}
