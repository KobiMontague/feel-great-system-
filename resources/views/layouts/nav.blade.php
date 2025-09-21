<nav class="bg-white/80 backdrop-blur border-b sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-6 h-14 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo/kobi_logo.png') }}" alt="Kobi logo" class="h-8 w-auto rounded">
            <span class="font-semibold">Feel Great System</span>
        </a>

        <div class="flex items-center gap-3">
            <a href="{{ url('/science') }}" class="hidden sm:inline text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                Science
            </a>
            <a href="{{ url('/partnership') }}" class="hidden sm:inline text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                Partnership
            </a>
            <a href="{{ route('insulin-resistance') }}" class="hidden sm:inline text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                What is insulin resistance
            </a>

            <a href="{{ config('unicity.referral_link') }}" target="_blank" rel="noopener"
               class="inline-flex items-center rounded-lg bg-emerald-600 px-3 py-1.5 text-sm font-semibold text-white hover:bg-emerald-700">
                Order Now
            </a>
        </div>

        @auth
            @if(auth()->user()->is_admin ?? false)
                <a href="{{ route('admin.leads.index') }}" class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                    Leads
                </a>
            @endif
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button class="text-sm font-semibold text-slate-700 hover:text-emerald-700">
                    Log out
                </button>
            </form>
        @endauth
    </div>
</nav>
