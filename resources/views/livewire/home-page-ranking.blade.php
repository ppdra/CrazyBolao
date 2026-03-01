<section wire:poll.300s class="rounded-2xl border border-(--color-card-border) bg-(--color-card) p-5 md:p-6">
    <!-- Header -->
    <div class="flex items-start justify-between gap-3">
        <div>
            <div class="flex items-center gap-2">
                <span
                    class="inline-grid h-8 w-8 place-items-center rounded-xl border border-(--color-card-border) bg-transparent">
                    🏆
                </span>
                <h2 class="text-base font-bold text-(--color-primary)">Ranking Geral</h2>
            </div>
            <p class="mt-1 text-sm text-(--color-muted)">Top 3 da classificação atual</p>
        </div>

        <a href="{{ route('ranking') }}"
            class="inline-flex items-center justify-center rounded-xl border border-(--color-card-border)
                      bg-transparent px-4 py-2 text-sm font-semibold text-(--color-primary) transition hover:opacity-90">
            Ver completo
        </a>
    </div>

    <!-- Table-ish -->
    <div class="mt-5 overflow-hidden rounded-2xl border border-(--color-card-border)">
        <!-- Head row -->
        <div
            class="grid grid-cols-12 gap-3 bg-transparent px-4 py-3 text-[11px] font-semibold uppercase tracking-wide text-(--color-muted)">
            <div class="col-span-1">#</div>
            <div class="col-span-6">Usuário</div>
            <div class="col-span-3 text-right">Pontos</div>
        </div>

        <div class="divide-y divide-(--color-card-border)">
            @forelse ($rankings as $row)
                @php
                    $isTop1 = $row->position === 1;
                    $badge = match ($row->position) {
                        1 => '🥇',
                        2 => '🥈',
                        3 => '🥉',
                        default => null,
                    };
                @endphp

                <div class="grid grid-cols-12 items-center gap-3 px-4 py-3 transition"
                    style="{{ $isTop1 ? 'background: color-mix(in oklab, var(--color-btn) 10%, transparent);' : '' }}">
                    <!-- Pos -->
                    <div class="col-span-1">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-extrabold text-(--color-primary)">
                                {{ $row->position }}
                            </span>
                            @if ($badge)
                                <span class="text-sm">{{ $badge }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- User -->
                    <div class="col-span-6 min-w-0">
                        <div class="flex items-center gap-3">
                            <div class="min-w-0">
                                <div class="flex items-center gap-2">
                                    <p class="truncate text-sm font-semibold text-(--color-primary)">
                                        {{ $row->user->name }}
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Points -->
                    <div class="col-span-3 text-right">
                        <p class="text-sm font-bold text-(--color-primary)">
                            {{ number_format($row->points, 0, ',', '.') }}
                        </p>
                        <p class="text-xs text-(--color-muted)">pts</p>
                    </div>


                </div>
            @empty
                <div class="px-6 py-10 text-center">
                    <div class="flex flex-col items-center gap-3">
                        <div
                            class="inline-grid h-12 w-12 place-items-center rounded-2xl border border-(--color-card-border)">
                            🏆
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-(--color-primary)">
                                Ranking ainda não disponível
                            </p>
                            <p class="mt-1 text-xs text-(--color-muted)">
                                Ainda não há dados suficientes para gerar a classificação.
                            </p>
                        </div>

                        
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Footer action -->
    <div class="mt-4 flex items-center justify-between gap-3">
        <p class="text-xs text-(--color-muted)">
            Atualiza automaticamente conforme as partidas são validadas.
        </p>
    </div>
    <div>
        <p class="text-xs text-(--color-muted)">
            Última Atualização: {{ now()->tz(session('tz')) }}
        </p>
    </div>
</section>
