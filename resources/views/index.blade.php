@extends('layouts.main')

@section('content')

    <!--<section class="tabs">
        <div class="container mx-auto">
            <div class="grid grid-cols-2">
                <div id="tab-1" class="tab-item border-b-2 border-gray-600 py-5">
                    <i class="fas fa-door-open fa-3x"></i>
                    <h2 class="uppercase text-center tracking-wider text-teal-500 text-2xl font-semibold">popular-movies</h2>
                </div>
                <div id="tab-2" class="tab-item py-5">
                    <i class="fas fa-tablet-alt fa-3x"></i>
                    <h2 class="uppercase text-center tracking-wider text-teal-500 text-2xl font-semibold">latest movies</h2>
                </div>
            </div>
        </div>
    </section>-->
    <section class="tab-content">
        <div class="container px-12 mx-auto pt-10">
            <div id="tab-1-content" class="tab-content-item popular-movies pb-5 border-b border-gray-500 show">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="tab-2-content" class="tab-content-item latest-movies py-10">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Latest Movies</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/frozen2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">frozen2</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/joker.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">joker</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/sonic.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">sonic</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="http://">
                            <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="mt-2">
                            <a href="http://" class="text-lg mt-2 text-gray-800 hover:text-gray:300">parasite</a>
                            <div class="flex items-center text-gray-600 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-600 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<script>
        const tabItems = document.querySelectorAll(".tab-item");
        const tabContentItems = document.querySelectorAll(".tab-content-item");

        // Select tab content item
        function selectItem(e) {
        // Remove all show and border classes
        removeBorder();
        removeShow();
        // Add border to current tab item
        this.classList.add("border-b-2", "border-gray-600");
        // Grab content item from DOM
        const tabContentItem = document.querySelector(`#${this.id}-content`);
        // Add show class
        tabContentItem.classList.add("show");
        }

        // Remove bottom borders from all tab items
        function removeBorder() {
        tabItems.forEach((item) => {
            item.classList.remove("border-b-2","border-gray-600");
        });
        }

        // Remove show class from all content items
        function removeShow() {
        tabContentItems.forEach((item) => {
            item.classList.remove("show");
        });
        }

        // Listen for tab item click
        tabItems.forEach((item) => {
        item.addEventListener("click", selectItem);
        });
    </script>-->

@endsection