<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $developer['name'] }} | Developer Portfolio</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            500: '#06b6d4',
                            600: '#0891b2',
                            900: '#0e7490',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-cyan-500 selection:text-slate-900">

    <!-- Background Gradient Glows -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-40 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="text-xl font-bold tracking-tight text-white flex items-center gap-2">
                <span class="text-cyan-400">&lt;</span>{{ $developer['name'] }}<span class="text-cyan-400">/&gt;</span>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#about" class="hover:text-cyan-400 transition-colors">About</a>
                <a href="#education" class="hover:text-cyan-400 transition-colors">Education</a>
                <a href="#skills" class="hover:text-cyan-400 transition-colors">Skills</a>
                <a href="#certifications" class="hover:text-cyan-400 transition-colors">Certifications</a>
                <a href="#contact" class="px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-semibold rounded-lg transition-all shadow-lg shadow-cyan-500/20">Get in Touch</a>
            </nav>
        </div>
    </header>

    <main class="relative z-10 max-w-6xl mx-auto px-6 py-12 space-y-24">

        <!-- Hero / Header Section -->
        <section id="about" class="pt-8">
            <div class="grid md:grid-cols-12 gap-8 items-center bg-slate-900/50 border border-slate-800 rounded-2xl p-8 md:p-12 shadow-2xl backdrop-blur-xl">
                <div class="md:col-span-8 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-semibold uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                        {{ $developer['status'] }}
                    </div>
                    <div>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">
                            Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-indigo-400">{{ $developer['name'] }}</span>
                        </h1>
                        <p class="text-lg md:text-xl text-slate-400 font-medium mt-2">{{ $developer['title'] }}</p>
                    </div>
                    <p class="text-slate-300 leading-relaxed text-base max-w-2xl">
                        {{ $developer['bio'] }}
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="{{ $developer['contacts']['github'] }}" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 bg-slate-800 hover:bg-slate-700 text-white rounded-lg font-medium border border-slate-700 transition-all">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            GitHub Profile
                        </a>
                        <a href="mailto:{{ $developer['contacts']['email'] }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 rounded-lg font-semibold shadow-lg shadow-cyan-500/20 transition-all">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            Email Me
                        </a>
                    </div>
                </div>
                <div class="md:col-span-4 flex justify-center">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full blur opacity-50 group-hover:opacity-100 transition duration-300"></div>
                        <img src="{{ asset($developer['profile_picture']) }}" alt="{{ $developer['name'] }}" class="relative w-48 h-48 md:w-56 md:h-56 rounded-full object-cover border-4 border-slate-900 shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Timeline Section -->
        <section id="education" class="space-y-6">
            <div class="border-b border-slate-800 pb-4">
                <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight flex items-center gap-3">
                    <span class="text-cyan-400">01.</span> Academic Background
                </h2>
            </div>
            <div class="relative border-l-2 border-slate-800 ml-4 md:ml-6 space-y-8 pl-6 md:pl-8 py-2">
                @foreach($developer['education'] as $edu)
                    <div class="relative group">
                        <div class="absolute -left-[31px] md:-left-[39px] top-1.5 w-4 h-4 rounded-full bg-slate-900 border-2 border-cyan-400 group-hover:bg-cyan-400 transition-colors"></div>
                        <div class="bg-slate-900/40 border border-slate-800/80 hover:border-slate-700 p-6 rounded-xl transition-all shadow-md">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-2">
                                <span class="text-xs font-semibold text-cyan-400 tracking-wider uppercase">{{ $edu['level'] }}</span>
                                <span class="text-xs text-slate-400 font-mono bg-slate-800/80 px-2.5 py-1 rounded-md border border-slate-700/50 w-fit">{{ $edu['period'] }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-white">{{ $edu['school'] }}</h3>
                            <p class="text-sm font-medium text-slate-300 mt-1">{{ $edu['degree'] }}</p>
                            <p class="text-xs text-slate-400 mt-3 leading-relaxed">{{ $edu['highlights'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Technical Skills Section -->
        <section id="skills" class="space-y-6">
            <div class="border-b border-slate-800 pb-4">
                <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight flex items-center gap-3">
                    <span class="text-cyan-400">02.</span> Technical Expertise
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($developer['skills'] as $category => $skillList)
                    <div class="bg-slate-900/40 border border-slate-800 p-6 rounded-xl hover:border-slate-700 transition-all shadow-md">
                        <h3 class="text-md font-bold text-cyan-400 uppercase tracking-wider mb-4 border-b border-slate-800/80 pb-2">{{ $category }}</h3>
                        <ul class="space-y-3">
                            @foreach($skillList as $skill)
                                <li class="flex items-center gap-3 text-slate-300 text-sm">
                                    <svg class="w-4 h-4 text-cyan-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span>{{ $skill }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Certifications Section -->
        <section id="certifications" class="space-y-6">
            <div class="border-b border-slate-800 pb-4">
                <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight flex items-center gap-3">
                    <span class="text-cyan-400">03.</span> Certifications & Credentials
                </h2>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($developer['certifications'] as $cert)
                    <div class="bg-slate-900/40 border border-slate-800 p-6 rounded-xl hover:border-cyan-500/40 transition-all shadow-md flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-slate-400 mb-2 font-mono">
                                <span>Verified Credential</span>
                                <span class="text-cyan-400">{{ $cert['year'] }}</span>
                            </div>
                            <h3 class="text-md font-bold text-white mb-2 leading-snug">{{ $cert['title'] }}</h3>
                        </div>
                        <p class="text-xs text-slate-400 mt-4 pt-3 border-t border-slate-800/60">{{ $cert['issuer'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="space-y-6">
            <div class="bg-gradient-to-r from-slate-900 via-slate-900 to-slate-950 border border-slate-800 rounded-2xl p-8 md:p-12 text-center space-y-6 shadow-2xl relative overflow-hidden">
                <div class="max-w-xl mx-auto space-y-4 relative z-10">
                    <h2 class="text-3xl font-extrabold text-white">Let's Build Something Together</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Whether you have a question, project proposal, or want to connect—feel free to reach out directly through any channel below.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6 pt-4 text-sm text-slate-300">
                        <a href="mailto:{{ $developer['contacts']['email'] }}" class="flex items-center gap-2 hover:text-cyan-400 transition-colors">
                            <span class="text-cyan-400 font-bold">Email:</span> {{ $developer['contacts']['email'] }}
                        </a>
                        <span class="hidden sm:inline text-slate-700">|</span>
                        <a href="tel:{{ $developer['contacts']['phone'] }}" class="flex items-center gap-2 hover:text-cyan-400 transition-colors">
                            <span class="text-cyan-400 font-bold">Phone:</span> {{ $developer['contacts']['phone'] }}
                        </a>
                    </div>
                    <p class="text-xs text-slate-400 pt-2 font-mono">📍 Location: {{ $developer['contacts']['location'] }}</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer Section -->
    <footer class="border-t border-slate-800/80 py-8 bg-slate-950 text-center text-xs text-slate-400">
        <div class="max-w-6xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>&copy; {{ date('Y') }} {{ $developer['name'] }}. Built with Laravel & Tailwind CSS.</p>
            <p class="font-mono">Data Center College of the Philippines - Bangued</p>
        </div>
    </footer>

</body>
</html>