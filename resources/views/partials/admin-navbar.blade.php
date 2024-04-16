    <nav class="fixed top-0 z-50 w-full border-b border-gray-200 dark:bg-black dark:border-gray-700"
        style="background-color: #7a0000;">
        <div class="px-3 py-4 lg:px-5 lg:pl-3"> <!-- Increased padding here -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                            type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a href="" class="flex ms-2 md:me-24">
                            <img src="https://online.iuea.ac.ug/pluginfile.php/1/theme_remui/logo/1709968828/IUEA%20Logo%20-%20Moodle%201280x525.png"
                                class="h-12 me-3" alt="FlowBite Logo" /> <!-- Increased logo height here -->
                        </a>
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center ms-3">
                            <div>
                            <button type="button"
                                    class="flex items-center justify-center text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 4a4 4 0 100 8 4 4 0 000-8zM5 18a6.978 6.978 0 015-2c1.67 0 3.26.65 4.47 1.72A7.963 7.963 0 0010 20a7.963 7.963 0 00-4.47-1.28C6.74 17.65 8.33 18 10 18z" clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-800 dark:divide-gray-600"
                                id="dropdown-user">
                                @if(session('user_email'))
                                    <div class="px-4 py-3" role="none">
                                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                                            {{ session('user_firstName') }}
                                        </p>
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                            {{ session('user_email') }}
                                        </p>
                                    </div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <ul class="py-1" role="none">
                                            <li>
                                                <button type="submit"
                                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        role="menuitem">
                                                    Sign out
                                                </button>
                                            </li>
                                        </ul>
                                    </form>
                                @else
                                    <p>No user logged in.</p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-5 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-black sm:translate-x-0 dark:bg-black dark:border-black"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-black">
            <ul class="space-y-2 font-medium">

                <li>
                    <a href="{{route('admin.dashboard') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>


              

                <li>
                    <a href="{{route('admin.add-past-exams')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <!-- Icon representing reviewing past exams, like a magnifying glass over a document -->
                            <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            <path d="M12 9a1 1 0 11-2 0 1 1 0 012 0zm-6-1a1 1 0 100 2 1 1 0 000-2z" />
                            <path fill-rule="evenodd" d="M2.293 3.293A1 1 0 013 3h10a1 1 0 011 1v8a1 1 0 01-1 1H9.414A5.985 5.985 0 005 9.414V3a1 1 0 01.293-.707z" clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Add Past Exams</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('admin.view-past-exams')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19.5A2.5 2.5 0 016.5 17H20V4H6.5A2.5 2.5 0 014 6.5V19.5zm2 0V6.5a.5.5 0 01.5-.5H20v13H6.5a.5.5 0 01-.5-.5zM8 8h9m-9 4h9"></path>
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Review Past Exams</span>
                    </a>
                </li>

                          
                <li>
                    <a href="{{route('admin.ai-exam-generator')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <!-- Icon representing AI Generator, like a brain or circuit with a gear -->
                            <path d="M11 2a1 1 0 00-1 1v1H8V3a1 1 0 10-2 0v1H5V3a1 1 0 10-2 0v1a5 5 0 00-.995 9.9A3 3 0 005 18h10a3 3 0 002.995-3.1A5 5 0 0015 4h-1V3a1 1 0 10-2 0v1h-1V3a1 1 0 00-1-1zm1 4v1h-1V6h1zm-4 0h1v1H8V6zm1 2h1v1h-1V8zm2 0h1v1h-1V8zm-3 1h1v1H8v-1zm4 0v1h-1v-1h1zm-5 2H6v1h1v-1zm6 0v1h-1v-1h1zm-7 1H6v1h1v-1zm6 0v1h-1v-1h1zM4.5 5A3.5 3.5 0 018 1.5V0a4.5 4.5 0 100 9V7.5A3.5 3.5 0 014.5 5zm11 0A3.5 3.5 0 0012 1.5V0a4.5 4.5 0 110 9V7.5a3.5 3.5 0 003.5-2.5zM8 12v1H5a1 1 0 00-.993.883L4 14v1a1 1 0 00.883.993L5 16h3v-1H5v-1h3zm7 0H12v1h3v1h-3v1h3a1 1 0 00.993-.883L16 15v-1a1 1 0 00-.883-.993L15 13z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">AI Generator</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.add-courses')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <!-- Book symbol to represent courses -->
                            <path d="M4 2C2.9 2 2 2.9 2 4v12c0 1.1.9 2 2 2h12v-2H4V4h12V2H4zm6 7V6h5V4h-5v3H8V4H6v5h4z"/>
                            <!-- Plus sign for 'add' -->
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Add Courses</span>
                    </a>
                </li>



                <li>
                    <a href="{{route('admin.courses-list')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <!-- Simple book/list icon -->
                            <path d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm0 2h12v12H4V4zm2 1v2h8V5H6zm0 3v2h8V8H6zm0 3v2h8v-2H6z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Courses list </span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>