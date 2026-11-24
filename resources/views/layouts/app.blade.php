<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistem Informasi Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="min-h-screen">
        <header class="border-b border-slate-800 bg-slate-950 text-white shadow-lg shadow-slate-950/10">
            <div class="mx-auto flex max-w-7xl flex-col gap-5 px-4 py-5 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black shadow-lg shadow-blue-600/20">
                        S
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.28em] text-blue-300">Administrasi</p>
                        <h1 class="text-lg font-bold tracking-tight sm:text-xl">Sistem Informasi Surat</h1>
                    </div>
                </div>

                <nav class="flex flex-wrap items-center gap-2 text-sm font-semibold">
                    <a href="{{ route('dashboard') }}" class="rounded-xl px-4 py-2.5 text-slate-200 transition hover:bg-white/10 hover:text-white">
                        Dashboard
                    </a>
                    <a href="{{ route('surat-masuk.index') }}" class="rounded-xl px-4 py-2.5 text-slate-200 transition hover:bg-white/10 hover:text-white">
                        Surat Masuk
                    </a>
                    <a href="{{ route('surat-keluar.index') }}" class="rounded-xl px-4 py-2.5 text-slate-200 transition hover:bg-white/10 hover:text-white">
                        Surat Keluar
                    </a>

                    @auth
                        <div class="ml-0 flex flex-wrap items-center gap-2 border-slate-700 pt-2 sm:ml-2 sm:border-l sm:pl-4 sm:pt-0">
                            <span class="rounded-xl bg-slate-800 px-3 py-2 text-xs font-medium text-slate-300">
                                {{ auth()->user()->name }} · {{ ucfirst(auth()->user()->role) }}
                            </span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="rounded-xl bg-red-500 px-4 py-2.5 text-sm font-bold text-white shadow-sm transition hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-400/20">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    @endauth
                </nav>
            </div>
        </header>

        <main class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-10">
            @yield('content')
        </main>

        <footer class="mt-8 border-t border-slate-200 bg-white">
            <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-6 text-sm text-slate-500 sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8">
                <p class="font-semibold text-slate-700">Sistem Informasi Surat</p>
                <p>Laravel · Tailwind CSS · Vite</p>
            </div>
        </footer>
    </div>
</body>
</html>
