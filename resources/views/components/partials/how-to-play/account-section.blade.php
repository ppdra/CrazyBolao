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


        <div class="mt-5 grid grid-cols-1 gap-4">
            <x-ui.tabs activeTab="desktop">
                <x-ui.tab.group class="justify-start">
                    <x-ui.tab label="Desktop" name="desktop" icon="computer-desktop" />
                    <x-ui.tab label="Mobile" name="mobile" icon="device-phone-mobile" />
                </x-ui.tab.group>

                <x-ui.tab.panel name="mobile">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Mobile
                        </p>

                        <x-mobile-mockup src="images/how-to/account-mobile.png" />
                    </div>


                </x-ui.tab.panel>

                <x-ui.tab.panel name="desktop">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Desktop
                        </p>

                        <div
                            class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                            <img src="{{ asset('images/how-to/account.png') }}" class="w-full h-auto object-contain"
                                alt="Desktop - Conta" />
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

        <div class="mt-5 grid grid-cols-1 gap-4">
            <x-ui.tabs activeTab="desktop">
                <x-ui.tab.group class="justify-start">
                    <x-ui.tab label="Desktop" name="desktop" icon="computer-desktop" />
                    <x-ui.tab label="Mobile" name="mobile" icon="device-phone-mobile" />
                </x-ui.tab.group>

                <x-ui.tab.panel name="mobile">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Mobile
                        </p>

                        <x-mobile-mockup src="images/how-to/account-change-settings-mobile.png" />
                    </div>


                </x-ui.tab.panel>

                <x-ui.tab.panel name="desktop">
                    <div class="rounded-xl border border-(--color-card-border) bg-(--color-background) p-4">
                        <p class="text-xs font-semibold text-(--color-muted) uppercase tracking-wide">
                            Desktop
                        </p>

                        <div
                            class="mt-3 overflow-hidden rounded-xl border border-(--color-card-border) bg-(--color-card)">
                            <img src="{{ asset('images/how-to/account-change-settings.png') }}" class="w-full h-auto object-contain"
                                alt="Desktop - Conta" />
                        </div>
                    </div>
                </x-ui.tab.panel>

            </x-ui.tabs>
        </div>

    </div>

</section>
