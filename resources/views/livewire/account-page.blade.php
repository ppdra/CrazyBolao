@use('App\Enum\MatchStageEnum')
<div class="p-2">

    <div class="w-full bg-(--color-background) rounded-2xl p-4">
        <x-ui.heading level="h2" size="md">Account</x-ui.heading>

        <form method="POST" action="" class="space-y-4 mt-5">
            @csrf
            <div class="grid grid-cols-1 ">
                <x-ui.input name="email" wire:model="email" placeholder="Digite seu email..." type="text" 
                    class="bg-white/10 backdrop-blur text-white border-white/20" />

                <x-ui.error name="email" />

                
            </div>

            <div class="grid grid-cols-2 gap-2 ">
                <div>
                    <x-ui.input name="password" wire:model="password" placeholder="Digite sua senha..." type="password" revealable
                        class="bg-white/10 backdrop-blur text-white border-white/20" />

                    <x-ui.error name="password" />
                </div>

                <div>
                    <x-ui.input name="passwordConfirmation" wire:model="passwordConfirmation" placeholder="Digite sua senha..." type="password"
                        revealable class="bg-white/10 backdrop-blur text-white border-white/20" />

                    <x-ui.error name="passwordConfirmation" />
                </div>

            </div>

            <button wire:click.prevent="save" type="button"
                class="w-full rounded-xl py-3 font-semibold bg-(--color-accent) backdrop-blur text-white hover:opacity-90 transition">
                Save
            </button>
        </form>
    </div>

</div>
