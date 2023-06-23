@extends('layouts.header')

@section('title', 'Sidebar')
    
@section('content')
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="dashboard" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-14 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-1xl whitespace-nowrap dark:text-white">Diabeart Wellness</span>
          </a>
        </div>

        <!-- profile photo -->
        <div class="flex items-center">
            <div class="flex items-center ml-3">
            @if (Auth::check())
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-full text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            @if(Auth::user()->image_user)
                            <img class="w-10 h-10 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->image_user)}}" alt="">
                            @else
                            <img class="w-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="">
                            @endif
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
                        </div>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @endif
            </div>
          </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
           @yield('list-menu')
        </ul>
     </div>
  </aside>
  
  <div class="p-4 sm:ml-64">
        @yield('main')
     </div>
  </div>
  
@endsection