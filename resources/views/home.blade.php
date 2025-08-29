<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feel Great System by Unicity</title>
    <meta name="description" content="Two products + one practice. Unimate + Balance with time-based eating to support energy, focus, and metabolic health.">
    <meta property="og:title" content="Feel Great System by Unicity">
    <meta property="og:description" content="Unimate + Balance + time-based eating. Simple daily routine; measurable results.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') ?? url('/') }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
<!-- Top bar with personal logo -->
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
<!-- Announcement -->
<div class="bg-emerald-600 text-white text-center py-2 text-sm">
    Two products + one practice = a simpler way to feel great.
</div>

<!-- Hero -->
<header class="relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-16 md:pt-24 md:pb-24">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                    The Feel Great System
                </h1>
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-2">
                    Kobi Montague
                </h1>
                <p class="mt-5 text-lg md:text-xl text-slate-700">
                    A simple daily routine that pairs <span class="font-semibold">Unimate</span> and <span class="font-semibold">Balance (Bios Life S)</span> with
                    time-based eating to support energy, focus, hunger control, and metabolic health for only A$5.66 a day*, the same price as a Melbourne Coffee!
                </p>
                <p class="text-slate-500 text-sm mt-4 ">* A$5.66 a day (based on 3 sachets a day) August 2025, using kobi's discount link.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#transformation" class="inline-flex items-center rounded-xl bg-emerald-600 px-5 py-3 font-semibold text-white shadow hover:bg-emerald-700">See my transformation</a>

                    <a href="{{ url('/science') }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-5 py-3 font-semibold text-white shadow hover:bg-indigo-700">Read the science</a>

                    <a href="#buy" class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold text-slate-800 hover:bg-white">Get started</a>
                </div>
                <ul class="mt-6 space-y-2 text-sm text-slate-600">
                    <li>• Morning focus without breaking your fast</li>
                    <li>• Pre-meal fiber matrix to blunt carb impact</li>
                    <li>• Designed to make intermittent fasting easier</li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl bg-gradient-to-br from-emerald-100 to-emerald-200 shadow-inner flex items-center justify-center">
                    <img src="{{ asset('images/Unicity/feel-great-lemon.png') }}" alt="Feel Great System product" class="max-h-[85%] object-contain">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Social proof / badges (optional) -->
<section class="py-8">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <p class="text-slate-500 text-sm">Backed by Unicity research & clinical validation.*</p>
    </div>
</section>

<!-- 🔥 Transformation FIRST -->
<section class="py-16 bg-slate-50" id="transformation">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center">My Transformation</h2>

        <!-- Main before/after (same size boxes + weights) -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-center">
            <!-- Before -->
            <div class="bg-white rounded-2xl shadow p-4 text-center flex flex-col items-center">
                <div class="w-72 h-96 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/transformation/before3.jpg') }}"
                         alt="Before photo"
                         class="w-full h-full object-cover">
                </div>
                <p class="mt-3 text-xl font-bold text-red-600">Before</p>
                <p class="mt-1 text-lg font-semibold text-slate-700">157 kg (330.6 lbs)</p>
            </div>

            <!-- After -->
            <div class="bg-white rounded-2xl shadow p-4 text-center flex flex-col items-center">
                <div class="w-72 h-96 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/transformation/After2.jpg') }}"
                         alt="After photo"
                         class="w-full h-full object-cover">
                </div>
                <p class="mt-3 text-xl font-bold text-emerald-600">After</p>
                <p class="mt-1 text-lg font-semibold text-slate-700">120 kg (264.5 lbs)</p>
            </div>
        </div>

        <!-- A1C / health summary -->
        <div class="mt-10 bg-slate-50 border border-slate-200 rounded-2xl p-6 md:p-8 text-center shadow-sm">
            <h3 class="text-xl font-bold">A1C 11.3 → 6.6 → <span class="text-emerald-600">5.8</span> — Type 2 Diabetes Reversed</h3>
            <p class="mt-3 text-slate-700">
                Triglycerides 3.8 → 1.5 • HDL 0.8 → 0.9 • LDL 3.4 → 2.8 • Non-HDL 5.1 → 3.5 • ALT 46 → 26
            </p>
        </div>

        <!-- Other before photos (matched sizing) -->
        <div class="mt-10">
            <h4 class="text-xl font-semibold text-center mb-6">Other Before Photos</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 justify-items-center">
                <div class="w-72 h-96 overflow-hidden rounded-xl shadow">
                    <img src="{{ asset('images/transformation/before1.jpg') }}" alt="Before photo 1" class="w-full h-full object-cover">
                </div>
                <div class="w-72 h-96 overflow-hidden rounded-xl shadow">
                    <img src="{{ asset('images/transformation/before2.PNG') }}" alt="Before photo 2" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🧃 Products (then) -->
<section class="py-16 bg-white" id="products">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-8 md:gap-10 md:grid-cols-2">

            <!-- Unimate -->
            <article class="group rounded-3xl bg-white/90 p-6 md:p-8 shadow ring-1 ring-slate-200 transition hover:shadow-xl hover:ring-slate-300">
                <div class="md:grid md:grid-cols-[110px,1fr] md:items-center md:gap-6">
                    <!-- Image -->
                    <div class="flex justify-center md:block">
                        <div class="h-28 w-20 md:h-32 md:w-24">
                            <img src="{{ asset('images/Unicity/Unimate.png') }}" alt="Unicity Unimate"
                                 class="h-full w-full object-contain" />
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="mt-4 md:mt-0">
                        <h3 class="text-xl md:text-2xl font-bold text-slate-900">
                            Unimate — Focus without breaking your fast
                        </h3>
                        <ul class="mt-3 space-y-2 text-slate-700 list-disc list-inside">
                            <li>Highly concentrated yerba mate; rich in chlorogenic acids & antioxidants</li>
                            <li>No sugar; convenient single-serve packets</li>
                            <li>Enjoy hot or cold, morning or between meals</li>
                        </ul>

                        <div class="mt-5">
                            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
                               class="inline-flex items-center rounded-xl bg-emerald-600 px-4 py-2 text-white font-semibold shadow-sm hover:bg-emerald-700">
                                Order Unimate
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Balance (Bios Life S) -->
            <article class="group rounded-3xl bg-white/90 p-6 md:p-8 shadow ring-1 ring-slate-200 transition hover:shadow-xl hover:ring-slate-300">
                <div class="md:grid md:grid-cols-[110px,1fr] md:items-center md:gap-6">
                    <!-- Image -->
                    <div class="flex justify-center md:block">
                        <div class="h-28 w-20 md:h-32 md:w-24">
                            <img src="{{ asset('images/Unicity/Bios_Life_S.png') }}" alt="Unicity Balance (Bios Life S)"
                                 class="h-full w-full object-contain" />
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="mt-4 md:mt-0">
                        <h3 class="text-xl md:text-2xl font-bold text-slate-900">
                            Balance (Bios Life S) — Pre-meal fiber matrix
                        </h3>
                        <ul class="mt-3 space-y-2 text-slate-700 list-disc list-inside">
                            <li>Patented blend of soluble fibers, micronutrients & plant compounds</li>
                            <li>Helps slow carbohydrate absorption; supports healthy cholesterol/glucose</li>
                            <li>Take 10–15 minutes before your largest meal</li>
                        </ul>

                        <div class="mt-5">
                            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
                               class="inline-flex items-center rounded-xl bg-emerald-600 px-4 py-2 text-white font-semibold shadow-sm hover:bg-emerald-700">
                                Order Balance
                            </a>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- ⚙️ How it works (after products) -->
<section id="how" class="py-16 bg-emerald-50">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-3xl md:text-4xl font-bold">How it works</h2>
        <p class="mt-4 text-slate-600 max-w-3xl">
            Two products + one practice. Drink <span class="font-semibold">Unimate</span> in the morning to support focus and energy during your fast.
            Take <span class="font-semibold">Balance (Bios Life S)</span> 10–15 minutes before your largest meal to slow carbohydrate impact and help control hunger.
            Keep a daily fasting window (commonly 16:8) that fits your lifestyle.
        </p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-emerald-700 font-semibold">Step 1</div>
                <h3 class="mt-1 font-bold text-xl">Unimate (AM)</h3>
                <p class="mt-2 text-slate-600">Highly concentrated yerba mate extract; supports morning focus without breaking your fast.</p>
            </div>
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-emerald-700 font-semibold">Step 2</div>
                <h3 class="mt-1 font-bold text-xl">Balance (Bios Life S) - (Pre-meal)</h3>
                <p class="mt-2 text-slate-600">Patented fiber matrix formulated to blunt post-meal glucose/insulin spikes and keep you fuller.</p>
            </div>
            <div class="rounded-2xl bg-slate-50 p-6 shadow-sm">
                <div class="text-emerald-700 font-semibold">Step 3</div>
                <h3 class="mt-1 font-bold text-xl">Time-based Eating</h3>
                <p class="mt-2 text-slate-600">Aim for a fasting window (e.g., 16 hours). Adjust the window to your routine.</p>
            </div>
        </div>
        <section class="py-12">
            <div class="mx-auto max-w-7xl px-6 flex ">
                <img src="{{ asset('images/Unicity/practice_image.png') }}"
                     alt="Unimate + Balance (Bios Life S) + Time-based eating"
                     class="max-w-md md:max-w-xl w-full h-auto mx-auto">
            </div>
        </section>
    </div>
</section>

<!-- 📊 Blood Marker Explanations (responsive) -->
<section id="markers" class="py-16 bg-white">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center">Understanding the Blood Markers</h2>
        <p class="mt-4 text-slate-600 text-center max-w-3xl mx-auto">
            What each marker means, why it matters, and how it relates to long-term health.
        </p>

        <!-- Mobile: cards -->
        <div class="mt-10 space-y-4 md:hidden">
            <!-- A1C -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">A1C</h3>
                    <span class="text-xs text-slate-500">Hemoglobin A1c (HbA1c)</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    Average blood glucose over ~3 months (based on sugar attaching to hemoglobin).
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: Key indicator for pre/Type 2 diabetes; check every 3–6 months.
                </p>
            </div>

            <!-- Triglycerides -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">Triglycerides</h3>
                    <span class="text-xs text-slate-500">Serum Triglycerides</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    Main form of fat in the blood.
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: High levels raise risk of heart disease & metabolic syndrome.
                </p>
            </div>

            <!-- HDL -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">HDL</h3>
                    <span class="text-xs text-slate-500">High-Density Lipoprotein</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    “Good” cholesterol that carries cholesterol away from arteries.
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: Higher HDL is protective against heart disease.
                </p>
            </div>

            <!-- LDL -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">LDL</h3>
                    <span class="text-xs text-slate-500">Low-Density Lipoprotein</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    “Bad” cholesterol that contributes to plaque in arteries.
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: High LDL raises risk of heart attack & stroke.
                </p>
            </div>

            <!-- Non-HDL -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">Non-HDL</h3>
                    <span class="text-xs text-slate-500">Total Cholesterol − HDL</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    Captures all atherogenic (“bad”) particles like LDL/VLDL.
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: Often a stronger predictor of cardiovascular risk than LDL alone.
                </p>
            </div>

            <!-- ALT -->
            <div class="rounded-xl border border-slate-200 p-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900">ALT</h3>
                    <span class="text-xs text-slate-500">Alanine Aminotransferase</span>
                </div>
                <p class="mt-2 text-sm text-slate-700">
                    Liver enzyme; elevated values indicate liver stress/damage.
                </p>
                <p class="mt-2 text-sm text-emerald-700">
                    Why it matters: Lowering suggests improved liver health / less fatty liver.
                </p>
            </div>
        </div>

        <!-- Desktop: table -->
        <div class="mt-10 overflow-x-auto hidden md:block">
            <table class="min-w-full divide-y divide-slate-200 border border-slate-200 rounded-lg">
                <thead class="bg-slate-100">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Marker</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Technical Name</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">What it Measures</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-slate-700">Why it Matters</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 text-sm">
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">A1C</td>
                    <td class="px-4 py-4">Hemoglobin A1c (HbA1c)</td>
                    <td class="px-4 py-4">Average blood glucose over ~3 months (sugar bound to hemoglobin).</td>
                    <td class="px-4 py-4">Primary indicator for pre/Type 2 diabetes; track every 3–6 months.</td>
                </tr>
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">Triglycerides</td>
                    <td class="px-4 py-4">Serum Triglycerides</td>
                    <td class="px-4 py-4">Main fat circulating in blood.</td>
                    <td class="px-4 py-4">High levels raise risk of heart disease & metabolic syndrome.</td>
                </tr>
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">HDL</td>
                    <td class="px-4 py-4">High-Density Lipoprotein Cholesterol</td>
                    <td class="px-4 py-4">“Good” cholesterol that removes excess cholesterol.</td>
                    <td class="px-4 py-4">Higher HDL is protective against heart disease.</td>
                </tr>
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">LDL</td>
                    <td class="px-4 py-4">Low-Density Lipoprotein Cholesterol</td>
                    <td class="px-4 py-4">“Bad” cholesterol contributing to plaque build-up.</td>
                    <td class="px-4 py-4">Higher LDL increases risk of atherosclerosis & stroke.</td>
                </tr>
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">Non-HDL</td>
                    <td class="px-4 py-4">Total Cholesterol − HDL</td>
                    <td class="px-4 py-4">All atherogenic particles (LDL, VLDL, etc.).</td>
                    <td class="px-4 py-4">Strong overall predictor of cardiovascular risk.</td>
                </tr>
                <tr>
                    <td class="px-4 py-4 font-medium text-slate-800">ALT</td>
                    <td class="px-4 py-4">Alanine Aminotransferase</td>
                    <td class="px-4 py-4">Liver enzyme indicating liver cell injury when elevated.</td>
                    <td class="px-4 py-4">Improvement suggests better liver function / less fatty liver.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 📖 My Story -->
<section class="py-16 bg-slate-50" id="story">
    <div class="mx-auto max-w-4xl px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center">My Story</h2>

        <div class="mt-8 space-y-6 text-slate-700 leading-relaxed">
            <p>Hi, I’m <strong>Kobi </strong>from Melbourne, Australia.</p>

            <p>For most of my life I have battled with my weight and the heaviest I reached
                <strong>157 kg (346 lbs) </strong>in 2022 due mostly to the COVID lockdowns. I was wearing <strong>8XL clothes</strong>, relying on a seatbelt extender on planes and felt bad for anyone who sat next to me.
                I had limited mobility and constantly feeling embarrassed and self-conscious about my weight and appearance.
                I tried diets and exercise and even lost up to 10 kg, but whenever I stopped, the weight returned, sometimes i'd gain back even more.</p>

            <p>The weight was only part of the problem and I knew my health was deteriorating in ways that were impossible to ignore,
                I had <strong>Inflammation/Swollen ankles</strong> (if i pressed on them they would indent),
                <strong>Gout</strong> (so painful) I would get it in my feet and it would last a few days I had medication to control the onsets,
                <strong>Vertigo</strong> (so scary, my eyes would roll in my head and I couldn't stop them or control them, make you so dizzy you feel sick, the scariest thing I've experienced),
                            <strong>Sleep Apnea</strong> requiring a CPAP machine (still use out habit now),  <strong>IBS</strong> (I though I was allergic to eggs, but I actually had IBS),
                                    <strong>Constant Urination</strong>, and a cloud of  <strong>Depression</strong>
                that left me feeling trapped and helpless.</p>

            <p>In early <strong>2025</strong>, a loss in my immediate family became the wake-up call I desperately needed.
                I went to the doctor for a full check-up and I had all my blood work done, and my weight was taken and my doctor was concerned for me.
                When the blood results come back, the doctor wanted to go over the results in person, i knew that wasn't a good sign. He was concerned and told me that I was being diagnosed with <strong>Type 2 Diabetes</strong>.
                My <strong>A1C was 11.3</strong> which was extremely high. The doctor said if i didnt make immediate lifestyle changes my organs and other crucial parts of my body will start to shutdown.
                I was placed on a care plan and I was prescribed Metformin. Hearing those results was sobering,
                but it was also the push I needed to take control.</p>

            <p>I remembered seeing the <strong>Feel Great System</strong> on TikTok and decided it was time to give it a chance.
                I ordered the products and committed fully to the protocol. The first time I tried <strong>Unimate tea</strong>,
                I felt something shift, it gave me a lot of energy and a sense of hope. Fasting was intimidating at first, but with the Unimate tea supping during the fasting period
                i didnt get intense hunger pains. I was hungry, but it was manageable and I knew it was working. Now after 6 months I'm actually down to one meal a day as I'm not hungry at dinnertime.
                The weight started coming off almost pretty much straight away.</p>

            <p>I stopped all snacks, which I though would be hard because I liked watching movie with a bag of potato chips and a chocolate, but I was determined, so I've cut out all snacks in between meals.
                I dont actually miss them tbh. If I do want to have a snack I just have it directly after my meal. So I moved to a two meals a day plan,
                lunch at 12pm and dinner around 6pm having the fibre matrix (Bios Life S) before each meal, effectively skipping breakfast.
                I purchased a glucose meter and each day watched my numbers steadily improve.</p>

            <p>Six months later, the results have been life-changing. My <strong>Type 2 Diabetes has been reversed</strong>,
                <strong> A1C down from 11.3 (Jan) → 6.6 (May) → now 5.8 (Aug)</strong>. I’ve lost <strong>37 kg (81.5 lbs)</strong>,
                gone from <strong>8XL to 2XL</strong>, and the conditions that once held me back, Gout, Vertigo, IBS,
                and Constant Urination, are gone. My depression has lifted and I have more energy than ever, I actually <em>enjoy</em> going to the gym,
                and for the first time in years, I no longer feel self-conscious.</p>

            <!-- Health & Bloodwork Table -->
            <div class="mt-8">
                <h3 class="text-xl font-bold text-center mb-4">The changes show clearly in my health and blood work:</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200 border border-slate-200 rounded-lg">
                        <thead class="bg-slate-100">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-slate-700">Marker</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-slate-700">Jan 25</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-slate-700">Aug 25</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-slate-700">What it means</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 text-sm">
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">Weight</td>
                            <td class="px-4 py-3">157 kg (346 lbs)</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">120 kg (264 lbs)</td>
                            <td class="px-4 py-3 text-slate-600">Losing 37 kg (81.5 lbs) reduced strain on joints, heart, and overall health.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">A1C (Blood sugar)</td>
                            <td class="px-4 py-3">11.3</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">5.8</td>
                            <td class="px-4 py-3 text-slate-600">Key diabetes marker. Normal is below 5.7. Shows reversal of Type 2 Diabetes.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">Triglycerides</td>
                            <td class="px-4 py-3">3.8</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">1.5</td>
                            <td class="px-4 py-3 text-slate-600">High levels increase risk of heart disease. Lower is better.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">HDL (Good cholesterol)</td>
                            <td class="px-4 py-3">0.8</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">0.9</td>
                            <td class="px-4 py-3 text-slate-600">Helps remove excess cholesterol from blood. Higher is protective.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">LDL (Bad cholesterol)</td>
                            <td class="px-4 py-3">3.4</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">2.8</td>
                            <td class="px-4 py-3 text-slate-600">High levels can clog arteries. Lowering reduces risk of heart disease.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">Non-HDL</td>
                            <td class="px-4 py-3">5.1</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">3.5</td>
                            <td class="px-4 py-3 text-slate-600">Total cholesterol minus HDL. A strong predictor of cardiovascular risk.</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 font-medium text-slate-800">ALT (Liver enzyme)</td>
                            <td class="px-4 py-3">46</td>
                            <td class="px-4 py-3 text-emerald-600 font-bold">26</td>
                            <td class="px-4 py-3 text-slate-600">Measures liver health. Lower values suggest normal liver function.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="mt-6"><strong>Today, I feel incredible.</strong> I haven’t just improved my health, I’ve regained my confidence, my energy, and my life.</p>
        </div>
    </div>
</section>

<!-- Results teaser -->
<section class="py-16 bg-white">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h3 class="text-2xl md:text-3xl font-bold">Simple routine. Measurable changes.</h3>
        <p class="mt-4 text-slate-700 max-w-3xl mx-auto">
            Unicity reports improvements in key cardiometabolic markers (e.g., triglycerides and HbA1c) in program participants alongside intermittent fasting.
            Individual results vary. Always consult your healthcare professional.
        </p>
        <div class="mt-8">
            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
               class="inline-flex items-center rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700">Start Today</a>
        </div>
    </div>
</section>

<!-- How to use -->
<section class="py-16 bg-slate-50" id="use">
    <div class="mx-auto max-w-5xl px-6">
        <h3 class="text-2xl font-bold">How to use</h3>
        <ol class="mt-6 space-y-4 text-slate-700 list-decimal pl-6">
            <li><span class="font-semibold">Morning:</span> Mix Unimate with water (hot or cold) and sip during your fast.</li>
            <li><span class="font-semibold">Pre-meal:</span> Mix Balance (Bios Life S) in water and drink 10–15 minutes before your largest meal.</li>
            <li><span class="font-semibold">Window:</span> Keep a fasting window (e.g., 16 hours) between dinner and your first meal.</li>
        </ol>
    </div>
</section>

<!-- Daily Timeline (Feel Great System) -->
<section id="timeline" class="py-16 bg-white">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center">Daily Timeline (16:8 Example)</h2>
        <p class="mt-2 text-center text-slate-600">
            Adjust the times to suit your routine. Balance (Bios Life S) before meals, Unimate in your fasting window.
        </p>

        <div class="mt-10 relative">
            <!-- Day/Night gradient bar -->
            <div class="absolute left-4 top-0 bottom-0 w-2 rounded-full bg-gradient-to-b from-[#0b1e3a] via-[#93c5fd] to-[#fde68a]"></div>

            <ul class="space-y-8">
                <!-- 5–7pm -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">5–7pm</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Balance (Bios Life S) + dinner</p>
                            <p class="text-sm text-slate-600">Take <span class="font-medium">Balance</span> 10–15 minutes before dinner.</p>
                        </div>
                    </div>
                </li>

                <!-- 8pm -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">8pm</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Fasting starts</p>
                            <p class="text-sm text-slate-600">Begin your overnight fast (water, plain tea/coffee as desired).</p>
                        </div>
                    </div>
                </li>

                <!-- Midnight -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">Midnight</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Blood sugar normalises</p>
                            <p class="text-sm text-slate-600">Your body continues shifting from fed to fasted state.</p>
                        </div>
                    </div>
                </li>

                <!-- 2am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">2am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Insulin levels drop</p>
                            <p class="text-sm text-slate-600">Lower insulin supports access to stored energy.</p>
                        </div>
                    </div>
                </li>

                <!-- 4am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">4am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Glucagon is released</p>
                            <p class="text-sm text-slate-600">Signals your body to mobilise stored fuel.</p>
                        </div>
                    </div>
                </li>

                <!-- 6am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">6am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Digestive system resets</p>
                            <p class="text-sm text-slate-600">Fasting window continues; hydration encouraged.</p>
                        </div>
                    </div>
                </li>

                <!-- 7–9am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">7–9am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Unimate (Lemon)</p>
                            <p class="text-sm text-slate-600">Sip during your fast to support focus and satiety.</p>
                        </div>
                    </div>
                </li>

                <!-- 8am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">8am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Fat burning ramps up</p>
                            <p class="text-sm text-slate-600">Growth hormone rises; your body leans on stored fuel.</p>
                        </div>
                    </div>
                </li>

                <!-- 10am -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">10am</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Body intensifies fat burning</p>
                            <p class="text-sm text-slate-600">Stay hydrated; enjoy Unimate if desired.</p>
                        </div>
                    </div>
                </li>

                <!-- Noon -->
                <li class="relative pl-16">
                    <span class="absolute left-4 -translate-x-1/2 top-1 h-3 w-3 rounded-full bg-emerald-600 ring-4 ring-emerald-100"></span>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-6">
                        <div class="w-28 shrink-0 text-sm font-semibold text-slate-600">Noon</div>
                        <div class="rounded-2xl bg-slate-50 p-4 shadow">
                            <p class="font-semibold">Balance (Bios Life S) + lunch (fasting ends)</p>
                            <p class="text-sm text-slate-600">Take <span class="font-medium">Balance (Bios Life S)</span> 10–15 minutes before your first meal.</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <p class="mt-6 text-center text-xs text-slate-500">
            This timeline illustrates a typical 16:8 schedule. Not medical advice; consult your healthcare professional.
        </p>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 bg-slate-50" id="faq">
    <div class="mx-auto max-w-5xl px-6">
        <h3 class="text-2xl font-bold">FAQ</h3>
        <div class="mt-6 space-y-6">
            <div>
                <h4 class="font-semibold">Does Unimate break a fast?</h4>
                <p class="text-slate-700">No, Unimate is designed to be taken during your fast.</p>
            </div>
            <div>
                <h4 class="font-semibold">When do I take Balance (Bios Life S)?</h4>
                <p class="text-slate-700">10–15 minutes before your largest meal; you can also use it before other meals as needed.</p>
            </div>
            <div>
                <h4 class="font-semibold">Is there caffeine?</h4>
                <p class="text-slate-700">Unimate contains naturally occurring caffeine from yerba mate.</p>
            </div>
        </div>
    </div>
</section>

<!-- 📄 Feel Great Brochure -->
<section class="py-16 bg-white" id="brochure">
    <div class="mx-auto max-w-5xl px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
            Learn More About the Feel Great System
        </h2>
        <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
            A simple daily routine with two products + one practice. Here’s a quick guide that explains
            how Unimate and Balance work together with intermittent fasting.
        </p>

        <div class="mt-10">
            <img src="{{ asset('images/Unicity/AUS_34305_info_english.jpg') }}"
                 alt="Feel Great System Brochure"
                 class="rounded-2xl shadow-lg mx-auto w-full max-w-4xl object-contain">
        </div>
    </div>
</section>
<!-- 📱 QR Code Section -->
<section class="py-16 bg-emerald-50" id="qr">
    <div class="mx-auto max-w-4xl px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
            Quick Access — Order with a Scan
        </h2>
        <p class="mt-3 text-slate-700 max-w-2xl mx-auto">
            Simply scan the QR code below with your phone’s camera to go directly to purchase the products.
        </p>

        <div class="mt-8 flex justify-center">
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/Unicity/feel-great-system-qr-code.png') }}"
                     alt="Feel Great System QR Code"
                     class="w-48 h-48 md:w-64 md:h-64 object-contain mx-auto">
            </div>
        </div>
    </div>
</section>
<!-- CTA -->
<section id="buy" class="py-16 bg-white">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h3 class="text-3xl font-extrabold">Ready to Feel Great?</h3>
        <p class="mt-3 text-slate-700">Keep it simple: Unimate in the morning, Balance (Bios Life S) before your biggest meal.</p>
        <div class="mt-8 flex justify-center gap-3">
            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
               class="inline-flex items-center rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700">Order the System</a>
            <a href="#how" class="inline-flex items-center rounded-xl border border-slate-300 px-6 py-3 font-semibold hover:bg-white">Learn more</a>
        </div>
        <p class="mt-6 text-xs text-slate-500">*Statements not evaluated by the TGA/FDA. Not intended to diagnose, treat, cure, or prevent any disease.</p>
    </div>
</section>
<!-- 🌐 Socials -->
<section class="py-12 bg-slate-50" id="socials">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Follow Me</h2>
        <p class="mt-3 text-slate-600">Follow me on TikTok for updates, tips, and my journey with the Feel Great System.</p>

        <div class="mt-6 flex justify-center gap-6">
            <!-- TikTok -->
            <a href="https://www.tiktok.com/@feel_great_system_au" target="_blank" rel="noopener"
               class="group flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2 text-slate-700 shadow hover:bg-emerald-50 hover:border-emerald-300 transition">
                <img src="{{ asset('images/socials/tiktok-brands-solid-full.svg') }}"
                     alt="TikTok Logo"
                     class="h-5 w-5">
                <span class="font-semibold group-hover:text-emerald-700">TikTok</span>
            </a>
        </div>
    </div>
</section>
<footer class="py-10 text-center text-sm text-slate-500">
    © {{ date('Y') }} Feel Great System Australia. All rights reserved.
</footer>
</body>
</html>
