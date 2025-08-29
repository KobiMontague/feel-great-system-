<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Science | Feel Great System</title>
    <meta name="description" content="Evidence and study results behind the Feel Great System (Unimate + Balance + time-based eating).">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">

<!-- Simple top bar (no partials needed) -->
<nav class="bg-white/80 backdrop-blur border-b sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-6 h-14 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo/kobi_logo.png') }}" alt="Kobi logo" class="h-8 w-auto rounded">
            <span class="font-semibold">Feel Great System</span>
        </a>
        <div class="flex items-center gap-3">
            <a href="{{ url('/science') }}" class="hidden sm:inline text-sm font-semibold text-emerald-700">Science</a>
            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
               class="inline-flex items-center rounded-lg bg-emerald-600 px-3 py-1.5 text-sm font-semibold text-white hover:bg-emerald-700">
                Order Now
            </a>
        </div>
    </div>
</nav>

<!-- Hero -->
<header class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-12 md:py-16">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">The Science</h1>
                <p class="mt-4 text-lg text-slate-700">
                    A quick summary of a pilot study evaluating the <span class="font-semibold">Feel Great System</span>
                    (Unimate + Balance (Bios Life S) + a 16:8 fasting window) and its effect on <span class="font-semibold">glycemic variability</span>.
                </p>
                <div class="mt-6 flex gap-3">
                    <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
                       class="inline-flex items-center rounded-xl bg-emerald-600 px-5 py-3 font-semibold text-white shadow hover:bg-emerald-700">
                        Try the System
                    </a>
                    {{-- Optional: host the PDF in /public/docs and link below --}}
                    <a href="{{ asset('docs/Feel_Great_2.0_Study.pdf') }}" target="_blank"  class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold hover:bg-white">
                        Download Study (PDF)
                    </a>
                </div>
            </div>
            <div class="rounded-3xl bg-gradient-to-br from-emerald-100 to-emerald-200 p-8">
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-slate-200">
                        <div class="text-xs uppercase tracking-wide text-slate-500">Primary Outcome</div>
                        <div class="mt-2 text-3xl font-extrabold text-emerald-700">-12%</div>
                        <div class="text-sm text-slate-700">Reduction in Glycemic Variability (GV)</div>
                        <div class="mt-1 text-xs text-slate-500">13.3% → 11.7% (p = 0.017)</div>
                    </div>
                    <div class="rounded-2xl bg-white p-5 shadow ring-1 ring-slate-200">
                        <div class="text-xs uppercase tracking-wide text-slate-500">Study Design</div>
                        <div class="mt-2 text-lg font-bold">n = 13</div>
                        <div class="text-sm text-slate-700">CGM over two 4-day periods (baseline vs program)</div>
                        <div class="mt-1 text-xs text-slate-500">Adherence ≈ 85%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- What is GV -->
<section class="py-14 bg-slate-50">
    <div class="mx-auto max-w-6xl px-6">
        <div class="rounded-3xl bg-white p-6 md:p-8 shadow ring-1 ring-slate-200">
            <h2 class="text-2xl md:text-3xl font-bold">What is Glycemic Variability (GV)?</h2>
            <p class="mt-3 text-slate-700">
                GV describes how much your blood sugar <em>swings</em> during the day. Lower swings are associated with
                less oxidative stress and inflammation, and with better cardiovascular and metabolic health. The study’s
                primary endpoint was reduction in GV (measured from continuous glucose monitoring data).
            </p>
        </div>
    </div>
</section>

<!-- Outcomes grid -->
<section class="py-14 bg-white">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-2xl md:text-3xl font-bold">Key Outcomes (4-day windows)</h2>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-sm text-slate-600">Glycemic Variability</div>
                <div class="mt-2 text-3xl font-extrabold text-emerald-700">13.3% → 11.7%</div>
                <div class="text-xs text-slate-500">12% reduction • p = 0.017</div>
            </div>
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-sm text-slate-600">Time in Range (70–140 mg/dL)</div>
                <div class="mt-2 text-3xl font-extrabold text-slate-900">95.6% → 96.8%</div>
                <div class="text-xs text-slate-500">Trend toward more stable glucose</div>
            </div>
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-sm text-slate-600">Max / Min Glucose</div>
                <div class="mt-2 text-xl font-bold">155.8 → 152.2 / 109.1 → 107.8</div>
                <div class="text-xs text-slate-500">Small improvements (pilot sample)</div>
            </div>
        </div>

        <div class="mt-8 rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
            <h3 class="text-lg font-semibold">Participant Experience</h3>
            <ul class="mt-3 list-disc list-inside text-slate-700 space-y-1">
                <li>Reported increases in physical and mental energy, improved mood.</li>
                <li>Protocol considered easy to follow; adherence ~85% across days.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Protocol -->
<section class="py-14 bg-slate-50">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid md:grid-cols-2 gap-6">
            <div class="rounded-3xl bg-white p-6 md:p-8 shadow ring-1 ring-slate-200">
                <h2 class="text-2xl font-bold">Program Protocol</h2>
                <ul class="mt-3 space-y-2 text-slate-700 list-disc list-inside">
                    <li><span class="font-semibold">Unimate (AM):</span> supports focus & satiety during the fast.</li>
                    <li><span class="font-semibold">Balance (Bios Life S) - (pre-meal):</span> 10–15 minutes before the largest meal.</li>
                    <li><span class="font-semibold">Time-based eating:</span> 16:8 fasting window (adjust to lifestyle).</li>
                    <li>Hydration encouraged; plain tea/coffee allowed while fasting.</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white p-6 md:p-8 shadow ring-1 ring-slate-200">
                <h2 class="text-2xl font-bold">Limitations (Pilot)</h2>
                <ul class="mt-3 space-y-2 text-slate-700 list-disc list-inside">
                    <li>Small sample size (n=13), short observation windows.</li>
                    <li>Generally healthy adults; results may differ in clinical populations.</li>
                    <li>Secondary endpoints trended positive but were not powered for significance.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Glycemic Variability Study -->
<section class="py-16 bg-slate-50" id="glycemic-variability">
    <div class="mx-auto max-w-6xl px-6 grid md:grid-cols-2 gap-10 items-center">
        <!-- Image -->
        <div class="flex justify-center">
            <img src="{{ asset('images/science/glucose_study_graph.png') }}"
                 alt="Glycemic Variability Reduction with Feel Great"
                 class="rounded-xl shadow-lg w-full max-w-md">
        </div>

        <!-- Text -->
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900">
                Feel Great Improves Glycemic Variability
            </h2>
            <p class="mt-4 text-slate-700 leading-relaxed">
                In this acute study, participants following the Feel Great System reduced their
                baseline glycemic variability by <span class="font-semibold text-emerald-600">12%</span>
                (from 13.3% → 11.7%).
            </p>
            <p class="mt-3 text-slate-600">
                Reducing glycemic variability is a therapeutic target in diabetes and may contribute
                to improved outcomes in oxidative stress, inflammation, and long-term cardiovascular health.
            </p>

            <div class="mt-6">
                <a href="{{ asset('docs/Feel_Great_2.0_Study.pdf') }}" target="_blank" rel="noopener"
                   class="inline-flex items-center rounded-xl bg-emerald-600 px-5 py-3 font-semibold text-white shadow hover:bg-emerald-700">
                    View Full Study
                </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA -->
<section class="py-16 bg-white">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h3 class="text-3xl font-extrabold">Ready to try the protocol?</h3>
        <p class="mt-3 text-slate-700">Unimate in the morning, Balance before your biggest meal, and a fasting window that fits you.</p>
        <div class="mt-8 flex justify-center gap-3">
            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
               class="inline-flex items-center rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700">Order the System</a>
            <a href="{{ url('/') }}" class="inline-flex items-center rounded-xl border border-slate-300 px-6 py-3 font-semibold hover:bg-white">Back to Home</a>
        </div>
        <p class="mt-6 text-xs text-slate-500">*This summary is informational and not medical advice. Always consult your healthcare professional.</p>
    </div>
</section>

<footer class="py-10 text-center text-sm text-slate-500">
    © {{ date('Y') }} Feel Great System Australia. All rights reserved.
</footer>
</body>
</html>
