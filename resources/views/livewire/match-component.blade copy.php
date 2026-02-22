@use('App\Enum\MatchStatusEnum')
<x-ui.accordion class="rounded-2xl backdrop-blur-md border border-(--color-border) bg-(--color-background)">
    <x-ui.accordion.item>
        <x-ui.accordion.trigger>
            <div class="">
            </div>

            {{-- <div class="flex items-center justify-between rounded-2xl p-2">
                <!-- Match info -->
                <div class="flex flex-col gap-2 w-1/4">
                    <!-- Status -->
                    @if ($match->status === MatchStatusEnum::LIVE)
                        <span class="text-xs font-bold text-red-500 flex items-center gap-2">
                            <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse">
                            </span>
                            LIVE
                        </span>
                    @else
                        <span class="text-xs font-bold text-{{ $match->status->color() }} flex items-center gap-2">
                            {{ $match->status->value }}
                        </span>
                    @endif <!-- Time --> <span class="text-sm text-(--color-primary)">
                        {{ $match->utc_date }} </span>
                    <!-- Round / Stadium -->
                    @if ($match->stage === 'GROUP_STAGE')
                        <span class="text-xs text-(--color-muted)">
                            {{ $match->group_name->label() }}
                        </span>
                        <span class="text-xs text-(--color-muted)">
                            Matchday {{ $match->matchday }}
                            {{ str_replace('_', ' ', $match->group) }}
                        </span>
                    @else
                        <span class="text-xs text-(--color-muted)"> {{ str_replace('_', ' ', $match->stage->name) }}
                        </span>
                    @endif
                </div>
                <div class="flex items-center justify-between w-3/4">
                    <!-- Home Team -->
                    <div class="flex flex-col items-center gap-2 w-1/3">
                        <img src="{{ $match->homeTeam->logo_url ?? 'https://media.istockphoto.com/id/2212375124/vector/tba-to-be-announced-sign-sticker-icon-symbol-vector.jpg?s=612x612&w=0&k=20&c=2-s3i4olILrA7mcLTFrpdPGSXfSUFDYLD1A8NKhnmQI=' }}"
                            class="w-14 h-14 object-contain"> <span
                            class="font-semibold text-lg text-center hidden sm:inline">
                            {{ $match->homeTeam->name ?? 'TBA' }} </span>
                        <span class="font-semibold text-sm text-center sm:hidden">
                            {{ $match->homeTeam->slug ?? 'TBA' }}
                        </span>
                    </div>
                    <!-- Placar -->
                    <div class="flex items-center gap-4 text-4xl font-extrabold">
                        <span>0</span>
                        <span class="text-(--color-primary) text-2xl font-medium">x</span>
                        <span>0</span>
                    </div>
                    <!-- Time Visitante -->
                    <div class="flex flex-col items-center gap-2 w-1/3">
                        <img src="{{ $match->awayTeam->logo_url ?? 'https://media.istockphoto.com/id/2212375124/vector/tba-to-be-announced-sign-sticker-icon-symbol-vector.jpg?s=612x612&w=0&k=20&c=2-s3i4olILrA7mcLTFrpdPGSXfSUFDYLD1A8NKhnmQI=' }}"
                            class="w-14 h-14 object-contain">
                        <span class="font-semibold text-lg text-center hidden sm:inline">
                            {{ $match->awayTeam->name ?? 'TBA' }}
                        </span>
                        <span class="font-semibold text-sm text-center sm:hidden">
                            {{ $match->awayTeam->slug ?? 'TBA' }}
                        </span>
                    </div>
                </div>
            </div> --}}
        </x-ui.accordion.trigger>

        <x-ui.accordion.content>

            <x-ui.separator class="my-2 bg-(--color-border)" />
            <x-ui.tabs activeTab="bet">
                <x-ui.tab.group class="justify-start">
                    <x-ui.tab label="Bet" name="bet" icon="pencil" />
                    <x-ui.tab label="Results" name="results" icon="document-chart-bar" />
                    <x-ui.tab label="Joker" name="joker" icon="cog-6-tooth" />
                </x-ui.tab.group>

                <x-ui.tab.panel name="bet">

                    <div class="flex items-center justify-center gap-8">

                        <!-- 🔹 Time da Casa -->
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex items-center gap-2">
                                <!-- Botão diminuir -->
                                <x-ui.button color='red' icon='minus' variant="outline" size="sm"
                                    wire:click="decrementHome">

                                </x-ui.button>

                                <x-ui.input class="w-16 text-center" wire:model="homeScore" type="text"
                                    min="0">

                                </x-ui.input>

                                <x-ui.button color='emerald' icon='plus' variant="outline" size="sm"
                                    wire:click="incrementHome">
                                </x-ui.button>
                            </div>
                        </div>

                        <!-- separador -->
                        <span class="text-2xl font-bold text-(--color-primary)">x</span>


                        <div class="flex flex-col items-center gap-3">
                            <div class="flex items-center gap-2">

                                <x-ui.button color='red' icon='minus' variant="outline" size="sm"
                                    wire:click="decrementAway">
                                </x-ui.button>

                                <x-ui.input class="w-16 text-center" wire:model="awayScore" type="text"
                                    min="0">

                                </x-ui.input>

                                <x-ui.button color='emerald' icon='plus' variant="outline" size="sm"
                                    wire:click="incrementAway">
                                </x-ui.button>

                            </div>
                        </div>

                    </div>

                </x-ui.tab.panel>

                <x-ui.tab.panel name='results'>
                    @php
                        $bets = [
                            ['name' => 'Carlos', 'prediction' => '2 x 1', 'points' => 3],
                            ['name' => 'Mariana', 'prediction' => '1 x 1', 'points' => 1],
                            ['name' => 'João', 'prediction' => '3 x 0', 'points' => 0],
                            ['name' => 'Fernanda', 'prediction' => '2 x 1', 'points' => 3],
                            ['name' => 'Rafael', 'prediction' => '0 x 2', 'points' => 0],
                        ];
                    @endphp

                    <div class="bg-(--color-background) border border-(--color-border)/10 rounded-2xl overflow-hidden">

                        <!-- Cabeçalho -->
                        <div
                            class="grid grid-cols-3 px-6 py-3 bg-(--color-surface) text-sm font-semibold text-(--color-primary)">
                            <span>Participante</span>
                            <span class="text-center">Palpite</span>
                            <span class="text-right">Pontos</span>
                        </div>

                        <!-- Linhas -->
                        @foreach ($bets as $bet)
                            <div
                                class="grid grid-cols-3 px-6 py-4 items-center border-t border-(--color-border) hover:bg-(--color-accent) transition">

                                <!-- Nome -->
                                <span class="font-medium">
                                    {{ $bet['name'] }}
                                </span>

                                <!-- Resultado -->
                                <span class="text-center font-semibold">
                                    {{ $bet['prediction'] }}
                                </span>

                                <!-- Pontos -->
                                <span
                                    class="text-right font-bold 
                    {{ $bet['points'] > 0 ? 'text-green-400' : 'text-(--color-muted)' }}">
                                    {{ $bet['points'] }}
                                </span>

                            </div>
                        @endforeach

                    </div>
                </x-ui.tab.panel>
                <x-ui.tab.panel>
                    <h3 class="text-lg font-semibold mb-2">Third Tab</h3>
                    <p>This is the third tab content.</p>
                </x-ui.tab.panel>
            </x-ui.tabs>
        </x-ui.accordion.content>
    </x-ui.accordion.item>

</x-ui.accordion>
