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

        <div class="mt-5 grid grid-cols-1 gap-4">
            <x-ui.tabs activeTab="desktop">
                <x-ui.tab.group class="justify-start">
                    <x-ui.tab label="Desktop" name="desktop" icon="computer-desktop" />
                </x-ui.tab.group>


                <x-ui.tab.panel name="desktop">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Desktop
                        </p>

                        <div
                            class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                            <video autoplay muted loop playsinline class="w-full h-auto object-cover">
                                <source src="{{ asset('videos/how-to/bet-success.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </x-ui.tab.panel>

            </x-ui.tabs>



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

        <div class="mt-5 grid grid-cols-1 gap-4">
            <x-ui.tabs activeTab="desktop">
                <x-ui.tab.group class="justify-start">
                    <x-ui.tab label="Desktop" name="desktop" icon="computer-desktop" />
                </x-ui.tab.group>


                <x-ui.tab.panel name="desktop">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Desktop
                        </p>

                        <div
                            class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                            <video autoplay muted loop playsinline class="w-full h-auto object-cover">
                                <source src="{{ asset('videos/how-to/bet-remove-success.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </x-ui.tab.panel>

            </x-ui.tabs>



        </div>
    </div>

    

</section>
