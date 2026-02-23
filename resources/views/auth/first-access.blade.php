<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
</head>

<body class="min-h-screen flex items-center justify-center bg-black">

    <div class="relative w-full max-w-lg mx-4">

        <!-- Card -->
        <div class="relative overflow-hidden rounded-2xl border border-(--color-border) shadow-xl">

            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="https://preview.redd.it/why-is-joaquin-phoenixs-joker-not-really-the-joker-v0-qba4x491zqvd1.jpeg?width=640&crop=smart&auto=webp&s=c880ed19380b5aa495ac418b253c07a0e51931ac"
                    alt="Login Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 p-8 space-y-6">

                <h1 class="text-2xl font-semibold text-white text-center">
                    Welcome To {{ config('app.name') }}
                </h1>

                <form method="POST" action="{{ route('login.create_password') }}" class="space-y-4">
                    @csrf

                    <x-ui.input name="email" placeholder="Digite seu email..." type="text" :value="old('email', $email)"
                        class="bg-white/10 backdrop-blur text-white border-white/20" />

                    <x-ui.error name="email" />

                    <x-ui.input name="password" placeholder="Digite sua senha..." type="password" :value="old('password')"
                        revealable class="bg-white/10 backdrop-blur text-white border-white/20" />

                    <x-ui.error name="password" />

                    <x-ui.input name="password_confirmation" placeholder="Confirme sua senha..." type="password"
                        :value="old('password_confirmation')" revealable class="bg-white/10 backdrop-blur text-white border-white/20" />

                    <x-ui.error name="password_confirmation" />

                    <input type="hidden" name="timezone" id="timezone">

                    <button type="submit"
                        class="w-full rounded-xl py-3 font-semibold
                               bg-(--color-accent) backdrop-blur
                               text-white
                               hover:opacity-90 transition">
                        Sign In
                    </button>
                </form>



                <p class="text-xs text-center text-white/60">
                    Primeiro acesso? Você poderá definir sua senha após continuar.
                </p>

            </div>
        </div>

    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            document.getElementById('timezone').value = timezone;
        });
    </script>
</body>

</html>
