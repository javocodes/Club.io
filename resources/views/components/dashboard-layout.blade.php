<div>
    <x-navbar />
    <x-app-layout>
        <x-slot name="header">
            <h2 class="whitespace-nowrap text-2xl font-bold text-purple-700 hover:text-gray-900">
                {{ __('Club And Event Management At Your Fingertips!') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-6 text-center font-bold bg-white border-b border-gray-200">
                        <span class="text-2xl"> Welcome to Club.io! </span> <br>
                        This application is made for anyone who loves clubs! <br>
                        Create a club and track your involvement in your club! <br>
                        Manage your club and post your events for everyone to see!
                    </div>
                    <div class="p-6 font-bold bg-white border-b border-gray-200">
                        <div class="flex-col">
                            <div class="flex flex-row flex-wrap items-center">
                                <div class="m-6 bg-blue-400 border-2 border-black border-solid rounded">
                                    <div class="px-2 py-2 text-center border-b-2 border-black">
                                        <p class="text-white">Go to Student Dashboard</p>
                                    </div>
                                    <div class="flex items-center justify">
                                        <div class="px-4 py-2 border-r-2 border-black">
                                            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512.005 512.005">
                                                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767"
                                                    height="50.502" transform="matrix(1,0,0,1,0,0)" />
                                                <path class="plane-take-off"
                                                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                                            </svg>
                                        </div>
                                        <div class="px-4 py-2">
                                            0
                                        </div>
                                    </div>
                                    <div class="px-2 py-1 text-xs text-center bg-white border-t-2 border-black">
                                        <a href="">
                                            <p class="text-black">More Details</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="m-6 bg-blue-400 border-2 border-black border-solid rounded">
                                    <div class="px-2 py-2 text-center border-b-2 border-black">
                                        <p class="text-white">Go to Advisor Dashboard</p>
                                    </div>
                                    <div class="flex items-center justify">
                                        <div class="px-4 py-2 border-r-2 border-black">
                                            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512.005 512.005">
                                                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767"
                                                    height="50.502" transform="matrix(1,0,0,1,0,0)" />
                                                <path class="plane-take-off"
                                                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                                            </svg>
                                        </div>
                                        <div class="px-4 py-2">
                                            0
                                        </div>
                                    </div>
                                    <div class="px-2 py-1 text-xs text-center bg-white border-t-2 border-black">
                                        <a href="">
                                            <p class="text-black">More Details</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="m-6 bg-blue-400 border-2 border-black border-solid rounded">
                                    <div class="px-2 py-2 text-center border-b-2 border-black">
                                        <a href="/advisor/create-organization/{user}"><p class="text-white">Create An Organization</p></a>
                                    </div>
                                    <div class="flex items-center justify">
                                        <div class="px-4 py-2 border-r-2 border-black">
                                            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512.005 512.005">
                                                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767"
                                                    height="50.502" transform="matrix(1,0,0,1,0,0)" />
                                                <path class="plane-take-off"
                                                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                                            </svg>
                                        </div>
                                        <div class="px-4 py-2">
                                            0
                                        </div>
                                    </div>
                                    <div class="px-2 py-1 text-xs text-center bg-white border-t-2 border-black">
                                        <a href="">
                                            <p class="text-black">More Details</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="m-6 bg-blue-400 border-2 border-black border-solid rounded">
                                    <div class="px-2 py-2 text-center border-b-2 border-black">
                                        <p class="text-white">Manage Events</p>
                                    </div>
                                    <div class="flex items-center justify">
                                        <div class="px-4 py-2 border-r-2 border-black">
                                            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512.005 512.005">
                                                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767"
                                                    height="50.502" transform="matrix(1,0,0,1,0,0)" />
                                                <path class="plane-take-off"
                                                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                                            </svg>
                                        </div>
                                        <div class="px-4 py-2">
                                            0
                                        </div>
                                    </div>
                                    <div class="px-2 py-1 text-xs text-center bg-white border-t-2 border-black">
                                        <a href="">
                                            <p class="text-black">More Details</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @auth('student')
                        yo
                    @endauth
                    {{-- @auth
        yo
    @endauth --}}

                                {{-- @php
                            $title = "yo gabba gabba";
                        @endphp

                           <h1>{{ $title }}</h1> {{ $title }} --}}


                                {{-- @if (Auth::guard('student')->check())
                            {{ "yo gabba gabba" }}yo gabba gabba
                        @endif
                        @if (Auth::guard('student')->user())
                            {{ "yo gabba gabba" }}yo gabba gabba
                        @endif --}}
                                {{-- @auth('admin')
                            yo
                        @endauth --}}



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
