<section id="{{ $id }}" class="rounded-2xl border border-(--color-card-border) bg-(--color-card) p-6 md:p-8">
    <!-- Header -->
    <div>
        <h2 class="text-xl md:text-2xl font-extrabold text-(--color-primary)">
            🎮 {{ __('instructions.sections.how_to_play.title') }}
        </h2>

        <p class="mt-2 text-sm text-(--color-muted) max-w-2xl">
            {{ __('instructions.sections.how_to_play.description') }}
        </p>
    </div>

    <!-- Step 1 -->
    <div class="mt-8 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">
        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg) grid place-items-center text-sm font-bold">
                1
            </div>
            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.how_to_play.step_1.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.how_to_play.step_1.description') }}
            <span class="font-semibold text-(--color-primary)">+</span> e
            <span class="font-semibold text-(--color-primary)">−</span>.
        </p>

        <!-- Screenshots placeholders -->
        <div class="mt-5 grid md:grid-cols-2 gap-4">
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">Mobile</p>
                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border) grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.how_to_play.step_1.mobile_hint') }}
                </div>
            </div>

            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">Desktop</p>
                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border) grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.how_to_play.step_1.desktop_hint') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="mt-6 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">
        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg) grid place-items-center text-sm font-bold">
                2
            </div>
            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.how_to_play.step_2.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.how_to_play.step_2.description') }}
        </p>

        <div class="mt-5 grid md:grid-cols-2 gap-4">
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">Mobile</p>
                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border) grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.how_to_play.step_2.mobile_hint') }}
                </div>
            </div>

            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">Desktop</p>
                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border) grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.how_to_play.step_2.desktop_hint') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="mt-6 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">
        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg) grid place-items-center text-sm font-bold">
                3
            </div>
            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.how_to_play.step_3.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.how_to_play.step_3.description') }}
        </p>

        <div class="mt-4 rounded-xl border border-(--color-card-border) bg-transparent p-4">
            <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">{{ __('instructions.sections.how_to_play.labels.messages_examples') }}
            </p>

            <div class="mt-3 grid gap-2">
                <div class="rounded-xl border border-(--color-card-border) px-4 py-3 text-sm"
                    style="background: color-mix(in oklab, var(--color-success) 12%, transparent);
                                border-color: color-mix(in oklab, var(--color-success) 35%, transparent);
                                color: color-mix(in oklab, var(--color-success) 85%, white 15%);">
                    ✅ {{ __('instructions.sections.how_to_play.step_3.success_example') }}
                </div>

                <div class="rounded-xl border border-(--color-card-border) px-4 py-3 text-sm"
                    style="background: color-mix(in oklab, var(--color-warning) 12%, transparent);
                                border-color: color-mix(in oklab, var(--color-warning) 35%, transparent);
                                color: color-mix(in oklab, var(--color-warning) 85%, white 15%);">
                    ⚠️ {{ __('instructions.sections.how_to_play.step_3.error_example') }}
                </div>
            </div>
        </div>
    </div>

</section>
