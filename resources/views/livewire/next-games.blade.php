<div wire:poll.120s>
    <section class="rounded-2xl border border-(--color-card-border) bg-(--color-card) p-5 md:p-6">
        <!-- Header -->
        <div class="flex items-start justify-between gap-3">
            <div>
                <div class="flex items-center gap-2">
                    <span class="inline-grid h-8 w-8 place-items-center rounded-xl border border-(--color-card-border)">
                        ⚽
                    </span>
                    <h2 class="text-base font-bold text-(--color-primary)">Próximos Jogos</h2>
                </div>
                <p class="mt-1 text-sm text-(--color-muted)">Aposte e acompanhe as próximas partidas</p>
            </div>

            <a href="{{ route('matches') }}"
                class="inline-flex items-center justify-center rounded-xl border border-(--color-card-border)
                  bg-transparent px-4 py-2 text-sm font-semibold text-(--color-primary) transition hover:opacity-90">
                Ver agenda
            </a>
        </div>

        <!-- List -->
        <div class="mt-5 space-y-3">
            @forelse ($nextGames as $game)
                @php
                    $isAuthUserBeted = $game->bets->where('user_id', Auth::id())->where('status', true)->first();

                @endphp

                <div
                    class="group rounded-2xl border border-(--color-card-border) bg-transparent p-4 transition
                        hover:-translate-y-0.5 hover:shadow-[0_20px_60px_-45px_rgba(0,0,0,0.85)]">
                    <!-- Top row: league + time + pill -->
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div class="flex items-center gap-2 text-xs text-(--color-muted)">
                            <span>{{ $game->utc_date->tz(session('tz')) }}</span>

                        </div>
                    </div>

                    <!-- Teams row -->
                    <div class="mt-3 flex items-center justify-between gap-3">
                        <!-- Home -->
                        <div class="flex min-w-0 items-center gap-3">
                            <img src="{{ $game->homeTeam->logo_url }}" alt="{{ $game->homeTeam->name }}"
                                class="h-10 w-10 rounded-2xl object-cover" onerror="this.style.display='none';" />
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-(--color-primary)">
                                    {{ $game->homeTeam->slug }}</p>
                            </div>
                        </div>

                        <!-- VS -->
                        <div
                            class="shrink-0 rounded-2xl border border-(--color-card-border) px-3 py-2 text-xs font-bold text-(--color-muted)">
                            VS
                        </div>

                        <!-- Away -->

                        <div class="flex min-w-0 items-center gap-3">
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-(--color-primary)">
                                    {{ $game->awayTeam->slug }}</p>
                            </div>
                            <img src="{{ $game->awayTeam->logo_url }}" alt="{{ $game->awayTeam->name }}"
                                class="h-10 w-10 rounded-2xl object-cover" onerror="this.style.display='none';" />
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-4 flex items-center justify-between">

                        @if ($isAuthUserBeted)
                            <span
                                class="inline-flex items-center gap-2 rounded-xl border px-4 py-2 text-sm font-semibold"
                                style="background: color-mix(in oklab, var(--color-success) 12%, transparent);
                                    border-color: color-mix(in oklab, var(--color-success) 35%, transparent);
                                    color: color-mix(in oklab, var(--color-success) 85%, white 15%);">
                                ✅ Palpite realizado
                            </span>
                            <p class="text-xs text-(--color-muted)">
                                Seu Palpite: {{ $isAuthUserBeted->result->home_score }} x
                                {{ $isAuthUserBeted->result->away_score }}
                            </p>
                        @else
                            <span
                                class="inline-flex items-center gap-2 rounded-xl border px-4 py-2 text-sm font-semibold"
                                style="background: color-mix(in oklab, var(--color-warning) 12%, transparent);
                                    border-color: color-mix(in oklab, var(--color-warning) 35%, transparent);
                                    color: color-mix(in oklab, var(--color-warning) 85%, white 15%);">
                                ⚠️ Sem palpite para partida
                            </span>
                        @endif

                    </div>
                </div>
            @empty
                <div class="rounded-2xl border border-(--color-card-border) bg-transparent p-8 text-center">
                    <div class="flex flex-col items-center gap-3">
                        <div
                            class="inline-grid h-12 w-12 place-items-center rounded-2xl border border-(--color-card-border)">
                            ⚽
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-(--color-primary)">
                                Nenhum jogo disponível
                            </p>
                            <p class="mt-1 text-xs text-(--color-muted)">
                                Ainda não há partidas programadas.
                            </p>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>

        <!-- Footer -->
        <div class="mt-4 flex items-center justify-between gap-3">
            <p class="text-xs text-(--color-muted)">
                Dica: palpites podem fechar automaticamente poucos minutos antes do jogo.
            </p>
        </div>
        <div>
            <p class="text-xs text-(--color-muted)">
                Última Atualização: {{ now()->tz(session('tz')) }}

            </p>
        </div>
    </section>
</div>
