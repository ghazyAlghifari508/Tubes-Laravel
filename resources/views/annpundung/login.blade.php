<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <div class="min-h-screen flex flex-col md:flex-row">
        <div class="rain"></div>
        <div
            class="w-full min-h-screen md:w-1/2 flex items-center justify-center md:bg-gradient-to-r from-cyan-700 to-sky-300 bg-gradient-to-b from-cyan-700 to-sky-300 p-6">
            <div class="w-full max-w-md">
                <div class="flex items-center justify-center mb-8">
                    <img src="{{ asset('images/Logo Jaga Pontianak.svg') }}">
                    <div class="flex text-white text-3xl font-bold">ANNPUNDUNG</div>
                </div>

                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    <div>
                        <label class="flex text-white mb-2">Email</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:border-white">
                    </div>

                    <div>
                        <label class="flex text-white mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" required
                                class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:border-white">
                            <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2">
                                <i class="ti ti-eye text-2xl text-white"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="ml-2 text-white">Remember Me</label>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-3 rounded-lg bg-white text-cyan-700 font-semibold hover:bg-white/90 transition-colors">
                            Log in
                        </button>
                    </div>
                    <div class="text-center text-white">
                        Belum punya akun? <a href="{{ route('annpundung.register') }}" class="underline">Daftar disini</a>
                    </div>
                </form>
            </div>
        </div>



        <div
            class="md:w-1/2 md:bg-gradient-to-r from-sky-300 to-sky-200  bg-gradient-to-b from-cyan-700 to-sky-200 flex items-center justify-center p-12">
            <div class="w-full max-w">
                <img src="{{ asset('images/login.svg') }}">
            </div>
        </div>
    </div>
    <script>
        const rainContainer = document.querySelector('.rain');

        function createRain() {
            const numberOfDrops = 7;

            for (let i = 0; i < numberOfDrops; i++) {
                const drop = document.createElement('div');
                drop.className = 'drop';
                drop.style.left = `${i * 15 + 5}vw`;
                drop.style.animationDuration = `${Math.random() * 10 + 5}s`;
                drop.style.opacity = Math.random();
                drop.style.height = `${Math.random() * 20 + 15}px`;
                drop.style.width = `${Math.random() * 2 + 2}px`;
                rainContainer.appendChild(drop);
            }
        }

        createRain();
    </script>
</body>

</html>
