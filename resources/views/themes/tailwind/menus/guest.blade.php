<nav class="flex items-center justify-end flex-1 hidden w-full h-full space-x-10 md:flex">
    <div @mouseenter="dropdown = true" @mouseleave="dropdown=false" @click.away="dropdown=false" x-data="{ dropdown: false }" class="relative h-full select-none">
        <div :class="{ 'text-wave-600': dropdown, 'text-gray-500': !dropdown }" class="inline-flex items-center h-full space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out cursor-pointer select-none group hover:text-wave-600 focus:outline-none focus:text-wave-600">
            <span>Community</span>
            <svg class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-wave-600 group-focus:text-wave-600" x-bind:class="{ 'text-wave-600': dropdown, 'text-gray-400': !dropdown }" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </div>

        <div x-show="dropdown"
            x-transition:enter="duration-200 ease-out scale-95"
            x-transition:enter-start="opacity-50 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition duration-100 ease-in scale-100"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed w-full transform -translate-x-1/2 xl:w-screen xl:max-w-6xl xl:px-2 xl:absolute sm:px-0 lg:ml-0 left-1/2" x-cloak>

            <div class="overflow-hidden shadow-lg xl:rounded-xl">
                <div class="flex items-stretch justify-center overflow-hidden bg-white shadow-xs xl:rounded-xl">

                    <div class="flex flex-col">
                        <div class="flex h-full">
                            <div class="relative flex flex-col items-start justify-start hidden w-full h-full max-w-xs bg-center bg-cover lg:block">
                                <div class="relative flex flex-col items-start justify-center w-full h-full px-16 py-8">

                                    <img src="/storage/FreeTON-logo-WHITE-outlined-ai.png" class="z-20 w-auto h-10">
                                    <h3 class="z-30 mt-1 mt-3 text-lg font-thin text-wave-200">Become part of the community. </h3>

                                    <span class="relative z-20 inline-flex mt-5 rounded-md shadow-sm">
                                        <a href="https://forum.freeton.org/" target="_blank" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out bg-white border border-transparent rounded-md text-wave-500 hover:bg-gray-100 focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-100">
                                            Community forum
                                        </a>
                                    </span>
                                </div>
                                <div class="absolute inset-0 w-full h-full opacity-75 bg-wave-600"></div>
                                <div class="absolute inset-0 w-full h-full opacity-75 bg-gradient-to-br from-wave-600 to-indigo-600"></div>
                            </div>
                            <div class="relative z-20 grid gap-6 px-5 pt-6 pb-8 bg-white border-t border-b border-transparent xl:border-gray-200 sm:gap-8 sm:p-8">
                                <a href="https://gov.freeton.org/main" target="_blank" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                        <svg class="relative flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-base font-medium leading-6 text-gray-900">
                                            Free TON Governance
                                        </p>
                                        <p class="text-sm leading-5 text-gray-500">
                                            Blockchain contests Free TON.
                                        </p>
                                    </div>
                                </a>
                                <a href="https://tonsurf.org/" target="_blank" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                        <svg class="relative flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-base font-medium leading-6 text-gray-900">
                                            TON Surf
                                        </p>
                                        <p class="text-sm leading-5 text-gray-500">
                                        All-in-one crypto wallet browser blockchain and secure chat.
                                        </p>
                                    </div>
                                </a>
                                <a href="/contests" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                        <svg class="relative flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-base font-medium leading-6 text-gray-900">
                                            Free TON contests winners
                                        </p>
                                        <p class="text-sm leading-5 text-gray-500">
                                            Free TON Community Contest Winners.
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="relative z-20 grid gap-6 px-5 pt-6 pb-8 bg-white border-t border-b border-r border-transparent rounded-r-xl xl:border-gray-200 sm:gap-8 sm:p-8">
                            <a href="https://dod.freeton.org/main" target="_blank" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                    <svg class="relative flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path></svg>

                                </div>
                                <div class="space-y-1">
                                    <p class="text-base font-medium leading-6 text-gray-900">
                                        Born Free!
                                    </p>
                                    <p class="text-sm leading-5 text-gray-500">
                                    The Declaration of Decentralization.
                                    </p>
                                </div>
                            </a>
                            <a href="https://freeton.wiki/" target="_blank" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                        <svg class="relative flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-base font-medium leading-6 text-gray-900">
                                            Free TON Wiki community
                                        </p>
                                        <p class="text-sm leading-5 text-gray-500">
                                            Free TON Public Encyclopedia powered by the community.
                                        </p>
                                    </div>
                                </a>

                            <a href="https://freeton.org/" target="_blank" class="flex items-start inline-block p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg group">
                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mt-1 mr-3 transition duration-300 ease-in-out transform scale-100 bg-indigo-100 rounded-full text-wave-600 group-hover:text-white group-hover:bg-wave-600 group-hover:scale-110 group-hover:rotate-3 -rotate-3">
                                <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.12536 0.326878C5.30053 0.120272 5.56574 0 5.84616 0H18.1538C18.4343 0 18.6995 0.120272 18.8746 0.326878L23.7977 6.13333C24.0915 6.47988 24.0622 6.97947 23.7296 7.29329L12.6527 17.7449C12.2922 18.085 11.7078 18.085 11.3473 17.7449L0.270369 7.29329C-0.0622204 6.97947 -0.0915458 6.47988 0.202281 6.13333L5.12536 0.326878ZM5.53335 2.63413L6.73411 5.80645H2.84366L5.53335 2.63413ZM3.15159 7.54839L9.75004 13.7744L7.39345 7.54839H3.15159ZM9.35381 7.54839L12 14.5395L14.6462 7.54839H9.35381ZM16.6066 7.54839L14.25 13.7743L20.8484 7.54839H16.6066ZM21.1563 5.80645H17.2659L18.4666 2.63413L21.1563 5.80645ZM16.844 1.74194H13.6908L15.7178 4.71716L16.844 1.74194ZM14.2653 5.80645L12 2.48161L9.73472 5.80645H14.2653ZM8.28216 4.71716L10.3092 1.74194H7.15601L8.28216 4.71716Z" fill="#20262A"></path></svg></div>
                                <div class="space-y-1">
                                    <p class="text-base font-medium leading-6 text-gray-900">
                                        Free TON Network
                                    </p>
                                    <p class="text-sm leading-5 text-gray-500">
                                        Community-driven blockchain.
                                    </p>
                                </div>
                            </a>
                        </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <a href="/contests" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-wave-600 focus:outline-none focus:text-wave-600">
        Contests
    </a>
    <a href="{{ route('wave.blog') }}" class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-wave-600 focus:outline-none focus:text-wave-600">
        News
    </a>

    

    <div class="w-1 h-5 mx-10 border-r border-gray-300"></div>
    <a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap hover:text-wave-600 focus:outline-none focus:text-gray-900">
        Sign in
    </a>
    <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-wave active:bg-wave-700">
            Sign up
        </a>
    </span>
</nav>
