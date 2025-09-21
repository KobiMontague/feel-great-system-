@extends('layouts.app')

@section('title', 'What is Insulin Resistance | Feel Great System (Australia)')
@section('meta_description', 'A simple guide to insulin resistance: why when you eat matters more than what you eat, how insulin works, why resistance develops, and how fasting and fibre can help.')
@section('og_title', 'What is Insulin Resistance')
@section('og_description', 'Plain English: how food becomes glucose, what insulin does, why eating too often keeps it high, and how fasting with support products helps.')
@section('twitter_title', 'What is Insulin Resistance')
@section('twitter_description', 'How insulin works in the body, why resistance happens, and how fasting and fibre can support better health.')

@section('content')
    <section class="relative overflow-hidden bg-emerald-50">
        <div class="mx-auto max-w-7xl px-6 pt-16 pb-16 md:pt-24 md:pb-24">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                        What is insulin resistance
                    </h1>
                    <p class="mt-5 text-lg md:text-xl text-slate-700">
                        It is not only about what you eat, it is also about <strong>when you eat</strong>.
                        This page explains in plain English what happens when you eat, why insulin resistance develops, and why managing insulin matters for health and weight.
                    </p>
                </div>
                <div class="relative">
                    <div class="aspect-[4/3] rounded-3xl bg-gradient-to-br from-emerald-100 to-emerald-200 shadow-inner flex items-center justify-center">
                        <img src="{{ asset('images/insulin resistance/IR.png')}}"      alt="University of Sydney study: blood glucose and insulin response with Bios Life"class="max-h-[85%] object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-bold">What happens when you eat</h2>
            <p class="mt-4 text-slate-700">
                Every time you eat, your body breaks down food into <strong>glucose</strong>. Glucose is a simple sugar that fuels your muscles, organs, and brain. It is not only carbohydrates. Even protein and fat can be converted into glucose if needed.
            </p>
            <p class="mt-4 text-slate-700">
                As glucose rises in the blood, the pancreas releases the hormone <strong>insulin</strong>. Insulin is often called a <em>fat-storing hormone</em> because its job is to move glucose out of the blood and into your cells for immediate energy or storage. Insulin touches almost every cell in the body.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-bold">When we eat too often</h2>
            <p class="mt-4 text-slate-700">
                If you eat meals and snacks too frequently, insulin never has a chance to drop. That means your body never fully switches into using stored energy.
                Over time, cells become less responsive to insulin. This is called <strong>insulin resistance</strong>.
            </p>
            <p class="mt-4 text-slate-700">
                At first, the pancreas simply produces more insulin to force glucose into cells. When blood sugar is still too high, the body begins storing it elsewhere:
            </p>
            <ul class="mt-4 space-y-2 list-disc list-inside text-slate-700">
                <li><strong>Liver fat (fatty liver):</strong> excess glucose is turned into fat and stored in the liver.</li>
                <li><strong>Visceral fat:</strong> fat stored around the organs. From Latin <em>viscera</em>, meaning “internal organs”.</li>
                <li><strong>Subcutaneous fat:</strong> fat stored under the skin. From Latin <em>sub</em> meaning under and <em>cutis</em> meaning skin.</li>
            </ul>
            <p class="mt-4 text-slate-700">
                This is why we gain weight. The body is constantly trying to find somewhere to store unused energy.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-bold">How diabetes develops</h2>
            <p class="mt-4 text-slate-700">
                When cells stop accepting insulin and storage sites are full, blood sugar rises dangerously high. To protect itself, the body starts flushing glucose out through the urine.
                That is why uncontrolled diabetes causes <strong>frequent urination</strong>, often with sweet-smelling urine.
            </p>
            <p class="mt-4 text-slate-700">
                The word <em>diabetes</em> comes from the Greek for “to pass through” because of constant urination.
                <em>Mellitus</em> means “honey-sweet” in Latin because ancient Indian doctors noticed ants and insects were drawn to the urine of patients.
                The constant urination also makes people very <strong>thirsty</strong> because the body is using fluid from tissues to get rid of the excess sugar.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-bold">How the Feel Great System helps</h2>
            <p class="mt-4 text-slate-700">
                You could practise fasting and fibre intake without products, but the system makes it simpler and more sustainable:
            </p>
            <ul class="mt-4 space-y-3 text-slate-700 list-disc list-inside">
                <li><strong>Unimate:</strong> A concentrated yerba mate drink. It supports focus and helps manage hunger during a fasting window, making it easier to go longer without food.</li>
                <li><strong>Balance (Bios Life S):</strong> A patented fibre matrix taken before meals. It slows how quickly food is turned into glucose so insulin does not have to spike as high.</li>
            </ul>
            <p class="mt-4 text-slate-700">
                To get the same fibre effect naturally, you would need to eat the equivalent of about <strong>two large bowls of vegetables</strong> before each meal. That is not realistic for most people.
                And while fasting without support is possible with plain water, tea, or black coffee, many find hunger and low energy make it hard to stick to.
                The Feel Great System simply makes the process smoother.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 text-center">
            <h3 class="text-2xl md:text-3xl font-bold">Ready to try?</h3>
            <p class="mt-3 text-slate-700">Support your fasting window and manage glucose impact with a simple, proven routine.</p>
            <div class="mt-8 flex justify-center gap-3">
                <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
                   class="inline-flex items-center rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700">Order Now</a>
                <a href="{{ url('/science') }}" class="inline-flex items-center rounded-xl border border-slate-300 px-6 py-3 font-semibold hover:bg-white">Read the Science</a>
            </div>
        </div>
    </section>
@endsection
