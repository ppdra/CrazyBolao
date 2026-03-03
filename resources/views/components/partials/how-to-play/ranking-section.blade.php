<section id="{{ $id }}" class="rounded-2xl border border-(--color-card-border) bg-(--color-card) p-6 md:p-8">

    <!-- Header -->
    <div>
        <h2 class="text-xl md:text-2xl font-extrabold text-(--color-primary)">
            🏆 {{ __('instructions.sections.ranking.title') }}
        </h2>

        <p class="mt-2 text-sm text-(--color-muted) max-w-2xl">
            {{ __('instructions.sections.ranking.description') }}
        </p>
    </div>

    <!-- Parte 1 -->
    <div class="mt-8 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">

        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg)
                            grid place-items-center text-sm font-bold">
                1
            </div>

            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.ranking.step_1.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.ranking.step_1.intro') }}
        </p>

        @php
            $ptsPossibilities = [
                [
                    'label' => __('instructions.sections.ranking.step_1.points.0.label'),
                    'description' => __('instructions.sections.ranking.step_1.points.0.description'),
                ],
                [
                    'label' => __('instructions.sections.ranking.step_1.points.1.label'),
                    'description' => __('instructions.sections.ranking.step_1.points.1.description'),
                ],
                [
                    'label' => __('instructions.sections.ranking.step_1.points.2.label'),
                    'description' => __('instructions.sections.ranking.step_1.points.2.description'),
                ],
                [
                    'label' => __('instructions.sections.ranking.step_1.points.3.label'),
                    'description' => __('instructions.sections.ranking.step_1.points.3.description'),
                ],
                [
                    'label' => __('instructions.sections.ranking.step_1.points.4.label'),
                    'description' => __('instructions.sections.ranking.step_1.points.4.description'),
                ],
            ];
        @endphp
        <div class="mt-4 grid md:grid-cols-3 gap-3">
            @foreach ($ptsPossibilities as $opts)
                <div class="rounded-xl border border-(--color-card-border) p-4">
                    <p class="text-sm font-semibold text-(--color-primary)">{{ $opts['label'] }}</p>
                    <p class="mt-1 text-xs text-(--color-muted)">
                        {{ $opts['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <div class="mt-5 rounded-xl border border-(--color-card-border) bg-transparent p-4">
            <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                {{ __('instructions.sections.ranking.step_1.example_title') }}
            </p>

            <div class="mt-2 text-sm text-(--color-muted) space-y-1">
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.bet') }}:</span>
                    2 x 1</p>
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.final_result') }}:</span>
                    2 x 1 → 7 pts
                </p>
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.final_result') }}:</span>
                    2 x 0 → 5 pts
                </p>
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.final_result') }}:</span>
                    3 x 2 → 3 pts
                </p>
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.final_result') }}:</span>
                    0 x 1 → 2 pts
                </p>
                <p><span
                        class="font-semibold text-(--color-primary)">{{ __('instructions.sections.ranking.step_1.example.final_result') }}:</span>
                    0 x 1 → 0 ponto
                </p>
            </div>
        </div>

    </div>

    <!-- Parte 2 -->
    <div class="mt-6 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">

        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg)
                            grid place-items-center text-sm font-bold">
                2
            </div>

            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.ranking.step_2.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.ranking.step_2.description') }}

        </p>

        <div class="mt-4 rounded-xl border border-(--color-card-border) p-4">
            <p class="text-sm font-semibold text-(--color-primary)">
                {{ __('instructions.sections.ranking.step_2.auto_update_title') }}
            </p>

            <p class="mt-2 text-sm text-(--color-muted)">
                {{ __('instructions.sections.ranking.step_2.auto_update_description') }}
            </p>
        </div>

    </div>

</section>
