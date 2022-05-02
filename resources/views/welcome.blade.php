<x-guest-layout>
   <x-navbar/>
            <nav class="flex justify-center">
                <div
                    class=" flex flex-col md:flex-row justify-center md:space-t-0 mt-4 space-t-4  text-center text-gray-500">
                    <a href="{{ route('guest.events') }}" class="mx-8 hover:text-purple-900 active" aria-current="page">
                        Events </a><a href="{{ route('guest.organizations') }}" class="mx-8 hover:text-purple-900"> Organizations </a><a href="{{ route('guest.news') }}"
                        class="mx-8 hover:text-purple-900"> News
                    </a><a href="{{ route('guest.forms') }}" class="mx-8 hover:text-purple-900"> Forms
                    </a></div>
            </nav>
        </div>
    </div>
    <div class="border-b-2 shadow-md bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 pt-2 border-gray-400">
        <div class="max-w-7xl mx-auto my-5 px-4 sm:px-6 ">
            <div class="border w-full h-auto py-44 bg-center bg-no-repeat object-fill"
                style="background-image: url('https://images.pexels.com/photos/10646602/pexels-photo-10646602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                <div class="bg-transparent flex p-8 items-center justify-center">
                    <div class="bg-transparent px-8">
                        <input id="search"
                        class="text-sm leading-none focus:outline-none  border-2 rounded hover:border-10 border-purple-800 "
                        type="text" placeholder="Search Events/Organizations.." />
                    </div>
                </div>
                {{-- <div class="mt-8 w-1/2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                        class="underline text-gray-900 dark:text-white">Events Happening Now!</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
    <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
            <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
              <p class="max-w-xs mt-4 text-sm text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
              </p>
              <div class="flex mt-8 space-x-6 text-gray-600">
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                  <span class="sr-only"> Facebook </span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                  </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                  <span class="sr-only"> Instagram </span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                  </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                  <span class="sr-only"> Twitter </span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                  </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                  <span class="sr-only"> GitHub </span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
                  </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                  <span class="sr-only"> Dribbble </span>
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clipRule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
              <div>
                <p class="font-medium">
                  Company
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                  <a class="hover:opacity-75" href> About </a>
                  <a class="hover:opacity-75" href> Meet the Team </a>
                  <a class="hover:opacity-75" href> History </a>
                  <a class="hover:opacity-75" href> Careers </a>
                </nav>
              </div>
              <div>
                <p class="font-medium">
                  Services
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                  <a class="hover:opacity-75" href> 1on1 Coaching </a>
                  <a class="hover:opacity-75" href> Company Review </a>
                  <a class="hover:opacity-75" href> Accounts Review </a>
                  <a class="hover:opacity-75" href> HR Consulting </a>
                  <a class="hover:opacity-75" href> SEO Optimisation </a>
                </nav>
              </div>
              <div>
                <p class="font-medium">
                  Helpful Links
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                  <a class="hover:opacity-75" href> Contact </a>
                  <a class="hover:opacity-75" href> FAQs </a>
                  <a class="hover:opacity-75" href> Live Chat </a>
                </nav>
              </div>
              <div>
                <p class="font-medium">
                  Legal
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                  <a class="hover:opacity-75" href> Privacy Policy </a>
                  <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                  <a class="hover:opacity-75" href> Returns Policy </a>
                  <a class="hover:opacity-75" href> Accessibility </a>
                </nav>
              </div>
            </div>
          </div>
          <p class="mt-8 text-xs text-gray-800">
            © 2022 Comany Name
          </p>
        </div>
      </footer>
    </x-guest-layout>
    {{-- <div
                class="flex md:flex-row min-w-full py-2 space-y-4 justify-center md:justify-between  md:space-x-10">
                    <div class="flex justify-center ">
                        <div class="flex justify-center items-center">
                            <img class="w-28 h-auto" src="/images/logo_transparent.png" alt="logo">
                            <span class=" pt-1 mx-3 whitespace-nowrap text-4xl font-light text-white hover:text-gray-900">Club.io</span>
                        </div>
                    </div>
                </a>
                <div class="flex justify-around">
                    <div class="flex justify-end ">
                        <div class="flex whitespace-nowrap pt-1  mx-3justify-center space-x-1 ">
                            @if (Route::has('login'))
                            <div>
                                @auth
                                <a href="{{ url('/dashboard') }}"
                                class="text-4xl font-bold text-white hover:text-gray-900">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-4xl font-bold text-white hover:text-gray-900">Log in</a>
                                    @if (Route::has('student.register'))
                                        <a href="{{ route('student.register') }}"
                                            class="ml-4 text-4xl font-bold text-white hover:text-gray-900">Student Register</a>
                                    @endif
                                    @if (Route::has('advisor.register'))
                                    <a href="{{ route('advisor.register') }}"
                                    class="ml-4 text-4xl font-bold text-white hover:text-gray-900">Advisor Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                        </div>
                    </div>
                    <div class="-my-2 md:hidden">
                        <button type="button" class="bg-purple-700 rounded-md p-2 inline-flex items-center justify-center text-gray-900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false"><span class="sr-only">Open menu</span><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
                    </div>
                </div>
            </div> --}}
    </div>

    </div>

    {{-- <div class="">
        <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}"
                class="text-4xl font-bold text-white hover:text-gray-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-4xl font-bold text-white hover:text-gray-900">Log in</a>
                    @if (Route::has('student.register'))
                        <a href="{{ route('student.register') }}"
                            class="ml-4 text-4xl font-bold text-white hover:text-gray-900">Student Register</a>
                    @endif
                    @if (Route::has('advisor.register'))
                    <a href="{{ route('advisor.register') }}"
                    class="ml-4 text-4xl font-bold text-white hover:text-gray-900">Advisor Register</a>
                    @endif
                    @endauth
                </div>
                @endif
                <div class="flex justify-center relative">
                    <div>
                        Home Logo
                    </div>
                    <div>
                        Events
                    </div>
                    <div>
                        Organizations
                </div>
                <div>
                    More Info
                </div>
                <div>
                    Main Body content
                </div>
                <div>
                    footer content
                </div>
            </div> --}}
    {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <nav>
                        <div class="flex justify-between">

                        </div>
                    </nav>
                </div>

            <div class="mt-8 bg-purple-700 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                            class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                        class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                    </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your
                                projects to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                                    more.
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>

                    <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                        Shop
                    </a>

                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                </path>
            </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div> --}}
    </div>


