<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-800 antialiased">
    <main class="relative flex min-h-screen items-center justify-center overflow-hidden px-4 py-12 sm:px-6">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
        <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl"></div>
        <div class="absolute -right-20 bottom-10 h-80 w-80 rounded-full bg-cyan-400/10 blur-3xl"></div>

        <div class="relative grid w-full max-w-5xl overflow-hidden rounded-3xl border border-white/10 bg-white shadow-2xl shadow-black/30 lg:grid-cols-2">
            <section class="hidden bg-slate-900 p-10 text-white lg:flex lg:flex-col lg:justify-between">
                <div>
                    <div class="mb-8 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-2xl font-black shadow-lg shadow-blue-600/30">S</div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.3em] text-blue-300">SIM-Surat</p>
                    <h1 class="max-w-md text-4xl font-black leading-tight tracking-tight">Kelola administrasi surat dengan lebih rapi dan terkontrol.</h1>
                    <p class="mt-5 max-w-md leading-7 text-slate-300">Masuk menggunakan akun petugas atau pembaca untuk mengakses sistem sesuai hak akses masing-masing.</p>
                </div>
                <p class="text-sm text-slate-500">Laravel 12 · Tailwind CSS · Vite</p>
            </section>

            <section class="p-7 sm:p-10 lg:p-12">
                <div class="mx-auto max-w-md">
                    <div class="mb-8 lg:hidden">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white">S</div>
                    </div>

                    <p class="text-sm font-bold uppercase tracking-[0.22em] text-blue-600">Selamat datang</p>
                    <h2 class="mt-2 text-3xl font-black tracking-tight text-slate-950">Login SIM-Surat</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-500">Masukkan email dan password untuk melanjutkan ke sistem.</p>

                    <form method="POST" action="{{ route('login.submit') }}" class="mt-8 space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="nama@example.com">
                            @error('email')
                                <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
                            <input id="password" type="password" name="password" autocomplete="current-password"
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                                placeholder="Masukkan password">
                            @error('password')
                                <p class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
                            Masuk ke Sistem
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
