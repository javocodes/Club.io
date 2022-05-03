<div>
    <div class="flex items-center">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5">
            <!-- search icon -->
            <span>
                <svg
                class="w-5 h-5 text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
            </svg>
        </span>
        <input
          type="text"
          placeholder="Search"
          class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border"
          />
        </div>

        <!-- Navbar right -->
        <div class="relative flex items-center space-x-3">
            <!-- Search button -->
            <button
            @click="isSearchBoxOpen = true"
            class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200"
            >
            <svg
            class="w-6 h-6 text-gray-500"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            />
        </svg>
    </button>

    <div class="items-center hidden space-x-3 md:flex">
        <!-- Notification Button -->
        <div class="relative" x-data="{ isOpen: false }">
            <!-- red dot -->
            <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
            <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
            <button
            @click="isOpen = !isOpen"
            class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring"
            >
            <svg
            class="w-6 h-6 text-gray-500"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
        </svg>
    </button>
</div>
</div>
