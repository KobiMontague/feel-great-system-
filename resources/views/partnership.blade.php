@extends('layouts.app')

@section('title', 'Partnership Opportunity')

@section('content')
    <main class="py-16">
        <div class="mx-auto max-w-7xl px-6">
            @if(session('success'))
                <div class="mb-6 rounded-xl bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-10 items-start">
                {{-- Left: program & mentoring --}}
                <section>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900">Partner with Feel Great</h1>
                    <p class="mt-4 text-slate-700 leading-relaxed">
                        Build a flexible income helping others transform their health with the
                        <span class="font-semibold">Feel Great System</span>.
                        I’ll be your <span class="font-semibold">mentor</span> from day one,
                        with clear steps to launch, grow, and support your customers.
                    </p>
                    <p class="mt-4 text-sm text-slate-500">
                        We also have a short <span class="font-semibold">10-minute video</span>
                        that breaks it all down — happy to send it after you apply.
                    </p>
                </section>

                {{-- Right: form --}}
                <section>
                    <div class="bg-white rounded-2xl p-6 shadow ring-1 ring-slate-200">
                        <h2 class="text-xl font-bold text-slate-900">Apply to Become a Partner</h2>
                        <p class="mt-2 text-slate-600">Leave your details and I’ll reach out personally.</p>

                        <form action="{{ route('partnership.store') }}" method="POST"
                              class="mt-6 space-y-5"
                              onsubmit="handleSubmit(this)">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700">Full name</label>
                                <input id="name" name="name" type="text" required value="{{ old('name') }}"
                                       class="mt-2 block w-full rounded-xl border-slate-300 px-4 py-3 text-lg shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                                <input id="email" name="email" type="email" required value="{{ old('email') }}"
                                       class="mt-2 block w-full rounded-xl border-slate-300 px-4 py-3 text-lg shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-slate-700">Phone</label>
                                <input id="phone" name="phone" type="text" required placeholder="+61 000 000 000"
                                       value="{{ old('phone') }}"
                                       class="mt-2 block w-full rounded-xl border-slate-300 px-4 py-3 text-lg shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                                @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            {{-- Honeypot --}}
                            <div class="hidden">
                                <label for="company">Company</label>
                                <input id="company" name="company" type="text" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="pt-2">
                                <button type="submit" id="submitBtn"
                                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700 disabled:opacity-70 disabled:cursor-not-allowed">
                                    <span id="submitText">Submit</span>
                                    <svg id="spinner" class="hidden animate-spin h-5 w-5 text-white"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                              d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                    </svg>
                                </button>
                            </div>

                            <p class="mt-4 text-xs text-slate-500">
                                By submitting, you consent to be contacted about partnership information and resources.
                            </p>
                        </form>

                        <script>
                            function handleSubmit(form) {
                                const btn = document.getElementById('submitBtn');
                                const text = document.getElementById('submitText');
                                const spinner = document.getElementById('spinner');



                                // Show spinner + update text
                                text.textContent = 'Sending...';
                                spinner.classList.remove('hidden');
                            }
                        </script>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
