<div>
    <div class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 border-b-2 shadow-md border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 ">
            <div class="flex items-center justify-between">
                <a href="/"><img class="w-28 h-auto" src="/images/logo_transparent.png" alt="logo"></a>
                <a href="/"><span
                    class="text-center mx-3 whitespace-nowrap text-4xl font-mono font-bold text-purple-700 hover:text-gray-900">Club.io</span></a>
                @if (Route::has('login'))
                    <div class="flex">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-bold font-mono text-black hover:text-gray-900">Dashboard</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="px-2 text-sm font-bold font-mono text-black hover:text-gray-900" type="submit">
                                        {{ __('Logout') }}
                                    </button>
                                </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-mono font-bold text-white hover:text-gray-900">
                                <div class="bg-purple-700 border border-gray-600 p-2 rounded">
                                    Log in
                                </div>
                            </a>
                            @if (Route::has('student.register'))
                                <a href="{{ route('student.register') }}"
                                    class="ml-4 text-sm font-mono font-bold text-white hover:text-gray-900"><div class="bg-purple-700 border border-gray-600 p-2 rounded">Student
                                    Register</div></a>
                            @endif
                            @if (Route::has('advisor.register'))
                                <a href="{{ route('advisor.register') }}"
                                    class="ml-4 text-sm font-mono font-bold text-white hover:text-gray-900"><div class="bg-purple-700 border border-gray-600 p-2 rounded">Advisor
                                    Register</div></a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
</div>
