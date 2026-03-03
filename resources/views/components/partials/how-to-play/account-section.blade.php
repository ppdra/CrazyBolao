<section id="{{ $id }}" class="rounded-2xl border border-(--color-card-border) bg-(--color-card) p-6 md:p-8">
    <!-- Header -->
    <div>
        <h2 class="text-xl md:text-2xl font-extrabold text-(--color-primary)">
            👤 {{ __('instructions.sections.account.title') }}
        </h2>

        <p class="mt-2 text-sm text-(--color-muted) max-w-2xl">
            {{ __('instructions.sections.account.description') }}

        </p>
    </div>

    <!-- Step 1 -->
    <div class="mt-8 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">

        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg)
                            grid place-items-center text-sm font-bold">
                1
            </div>

            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.account.step_1.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.account.step_1.description') }}
            <a href="{{ route('account') }}"
                class="font-semibold text-(--color-primary)">{{ __('instructions.sections.account.step_1.account_label') }}</a>.
        </p>

        <!-- Screenshots -->
        {{-- <div class="mt-5 grid md:grid-cols-2 gap-4">
            <!-- Mobile -->
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Mobile
                </p>

                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border)
                                grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.account.labels.mobile_access') }}
                </div>
            </div>

            <!-- Desktop -->
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Desktop
                </p>

                <img src="{{ asset('images/how-to/account.png') }}" alt="">
            </div>

        </div> --}}

        <div class="mt-5 grid grid-cols-1 gap-4">
            <!-- Mobile -->
            <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Mobile
                </p>

                <div class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                    <img src="{{ asset('images/how-to/account-mobile.png') }}" class="w-full h-auto object-contain"
                        alt="Mobile - Conta" />
                </div>
            </div>

            <!-- Desktop -->
            <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Desktop
                </p>

                <div class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                    <img src="{{ asset('images/how-to/account.png') }}" class="w-full h-auto object-contain"
                        alt="Desktop - Conta" />
                </div>
            </div>
        </div>

    </div>

    <!-- Step 2 -->
    <div class="mt-6 rounded-2xl border border-(--color-card-border) bg-(--color-background) p-5">

        <div class="flex items-center gap-3">
            <div
                class="h-8 w-8 rounded-full bg-(--color-btn) text-(--color-btn-fg)
                            grid place-items-center text-sm font-bold">
                2
            </div>

            <h3 class="text-sm md:text-base font-semibold text-(--color-primary)">
                {{ __('instructions.sections.account.step_2.title') }}
            </h3>
        </div>

        <p class="mt-3 text-sm text-(--color-muted)">
            {{ __('instructions.sections.account.step_2.description') }}
            <span
                class="font-semibold text-(--color-primary)">{{ __('instructions.sections.account.step_2.save_label') }}</span>.
        </p>

        <!-- Screenshots -->
        <div class="mt-5 grid md:grid-cols-2 gap-4">

            <!-- Mobile -->
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Mobile
                </p>

                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border)
                                grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.account.labels.mobile_fields') }}
                </div>
            </div>

            <!-- Desktop -->
            <div class="rounded-xl border border-(--color-card-border) p-4">
                <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                    Desktop
                </p>

                <div
                    class="mt-3 h-56 rounded-xl border border-(--color-card-border)
                                grid place-items-center text-xs text-(--color-muted)">
                    {{ __('instructions.sections.account.labels.desktop_fields') }}
                </div>
            </div>

        </div>

    </div>

</section>
