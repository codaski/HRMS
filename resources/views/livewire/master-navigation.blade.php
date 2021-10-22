<div>
    <nav>
        <ul class="hidden xl:flex items-center w-full justify-between">
            <li class="flex items-center w-3/4">
                <div>
                    <img class="h-12" src="{{ asset('storage/hrms-logo.svg') }}" alt="{{ env('APP_NAME') }}">
                </div>
                <div class="2xl:ml-14">
                    <ul class="flex items-center">
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <span class="pr-2"><x-heroicon-o-template class="w-5 h-5 hover:text-yellow-400"/></span>
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('department.index') }}" :active="request()->routeIs('department.*')">
                            <span class="pr-2"><x-heroicon-o-server class="w-5 h-5 hover:text-yellow-400"/></span>
                            {{ __('Departments') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('job.index') }}" :active="request()->routeIs('job.*')">
                            <span class="pr-2"><x-heroicon-o-briefcase class="w-5 h-5 hover:text-yellow-400"/></span>
                            {{ __('Jobs') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('employee.index') }}" :active="request()->routeIs('employee')">
                            <span class="pr-2"><x-heroicon-o-user-group class="w-5 h-5 hover:text-yellow-400"/></span>
                            {{ __('Employees') }}
                        </x-jet-nav-link>
                    </ul>
                </div>
            </li>
            <li class="w-1/5 flex justify-end">
                <ul class="flex items-center">
                    <li>
                        <button aria-label="show notifications" class="relative cursor-pointer pb-1 border-transparent border-b hover:border-white focus:ring-2 focus:outline-none focus:ring-offset-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5"
                                    stroke="#FAFAFA"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="w-4 h-4 rounded-full bg-gray-800 flex items-center justify-center absolute top-0 right-0 -mr-1.5 -mt-0.5">
                                <p class="text-xs font-bold text-center text-gray-50">1</p>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button aria-label="open settings" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white xl:ml-6 2xl:ml-9 ">
                            <div class="pb-1 border-transparent border-b hover:border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z"
                                        stroke="#FAFAFA"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button aria-label="show menu" class="pb-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white xl:ml-6 2xl:ml-9" >
                            <div class=" border-transparent border-b hover:border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5 6C5.55228 6 6 5.55228 6 5C6 4.44772 5.55228 4 5 4C4.44772 4 4 4.44772 4 5C4 5.55228 4.44772 6 5 6Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 6C19.5523 6 20 5.55228 20 5C20 4.44772 19.5523 4 19 4C18.4477 4 18 4.44772 18 5C18 5.55228 18.4477 6 19 6Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 20C5.55228 20 6 19.5523 6 19C6 18.4477 5.55228 18 5 18C4.44772 18 4 18.4477 4 19C4 19.5523 4.44772 20 5 20Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 20C19.5523 20 20 19.5523 20 19C20 18.4477 19.5523 18 19 18C18.4477 18 18 18.4477 18 19C18 19.5523 18.4477 20 19 20Z" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </button>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <nav>
        <div class="flex items-center xl:hidden w-full justify-between">
            <div>
                <a href="./dashboard.html">
                    <img class="h-10" src="{{ asset('storage/hrms-logo.svg') }}" alt="{{ env('APP_NAME') }}">
                </a>
            </div>
            <div>
                <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-white rounded" onclick="mobMenu1(true)">
                    <svg aria-label="open menu" xmlns="http://www.w3.org/2000/svg" id="open" class="icon icon-tabler icon-tabler-menu-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                    <svg aria-label="close menu" xmlns="http://www.w3.org/2000/svg" id="close" class="hidden icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>

                <ul class="hidden transition duration-300 opacity-100 ease-out bg-white shadow rounded py-1 w-full top-0 left-0 mt-16 z-20 absolute" id="mob-menu">
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)" class="flex items-center" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M15.8333 7.2583L11.3892 3.80164C10.9992 3.49823 10.5191 3.3335 10.025 3.3335C9.53087 3.3335 9.05085 3.49823 8.66084 3.80164L4.21584 7.2583C3.94871 7.46604 3.73258 7.73208 3.58397 8.03609C3.43535 8.34011 3.35818 8.67407 3.35834 9.01247V15.0125C3.35834 15.4545 3.53393 15.8784 3.84649 16.191C4.15905 16.5035 4.58298 16.6791 5.025 16.6791H15.025C15.467 16.6791 15.891 16.5035 16.2035 16.191C16.5161 15.8784 16.6917 15.4545 16.6917 15.0125V9.01247C16.6917 8.32664 16.375 7.67914 15.8333 7.2583Z"
                                        stroke="currentColor"
                                        stroke-width="1.25"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M13.3334 12.5C11.4917 13.6108 8.50669 13.6108 6.66669 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Dashboard</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M15 4.16669H4.99998C4.07951 4.16669 3.33331 4.91288 3.33331 5.83335V15.8334C3.33331 16.7538 4.07951 17.5 4.99998 17.5H15C15.9205 17.5 16.6666 16.7538 16.6666 15.8334V5.83335C16.6666 4.91288 15.9205 4.16669 15 4.16669Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.3333 2.5V5.83333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66669 2.5V5.83333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.33331 9.16669H16.6666" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.33331 13.3333H11.6666" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="mx-1.5">Calendar</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M0.12428 0.125877C0.163576 0.0859754 0.210257 0.0543181 0.261651 0.0327181C0.313045 0.0111181 0.368141 0 0.423784 0C0.479426 0 0.534522 0.0111181 0.585916 0.0327181C0.63731 0.0543181 0.683991 0.0859754 0.723287 0.125877L5.50011 4.96493L10.2769 0.125877C10.3163 0.0860399 10.363 0.0544397 10.4143 0.0328803C10.4657 0.0113209 10.5208 0.000224329 10.5764 0.000224329C10.6321 0.000224329 10.6871 0.0113209 10.7385 0.0328803C10.7899 0.0544397 10.8366 0.0860399 10.8759 0.125877C10.9153 0.165713 10.9465 0.213006 10.9678 0.265055C10.989 0.317104 11 0.37289 11 0.429228C11 0.485565 10.989 0.541351 10.9678 0.5934C10.9465 0.645449 10.9153 0.692742 10.8759 0.732579L5.79961 5.87412C5.76032 5.91402 5.71364 5.94568 5.66224 5.96728C5.61085 5.98888 5.55575 6 5.50011 6C5.44447 6 5.38937 5.98888 5.33798 5.96728C5.28659 5.94568 5.2399 5.91402 5.20061 5.87412L0.12428 0.732579C0.0848852 0.692779 0.0536295 0.645497 0.0323035 0.593443C0.0109774 0.541389 0 0.485585 0 0.429228C0 0.37287 0.0109774 0.317066 0.0323035 0.265012C0.0536295 0.212958 0.0848852 0.165677 0.12428 0.125877Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M3.33331 17.5V6.66669C3.33331 6.00365 3.59671 5.36776 4.06555 4.89892C4.53439 4.43008 5.17027 4.16669 5.83331 4.16669H14.1666C14.8297 4.16669 15.4656 4.43008 15.9344 4.89892C16.4033 5.36776 16.6666 6.00365 16.6666 6.66669V11.6667C16.6666 12.3297 16.4033 12.9656 15.9344 13.4345C15.4656 13.9033 14.8297 14.1667 14.1666 14.1667H6.66665L3.33331 17.5Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 9.16669V9.17502" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66669 9.16669V9.17502" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.3333 9.16669V9.17502" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Chats</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M15 3.33331H4.99998C4.07951 3.33331 3.33331 4.07951 3.33331 4.99998V15C3.33331 15.9205 4.07951 16.6666 4.99998 16.6666H15C15.9205 16.6666 16.6666 15.9205 16.6666 15V4.99998C16.6666 4.07951 15.9205 3.33331 15 3.33331Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.33331 10.8333H5.83331L8.33331 13.3333H11.6666L14.1666 10.8333H16.6666" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Invoice</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.33333 10H7.5V14.1667H8.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.6667 10H12.5V14.1667H11.6667" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.6667 2.5V5.83333C11.6667 6.05435 11.7545 6.26631 11.9107 6.42259C12.067 6.57887 12.279 6.66667 12.5 6.66667H15.8333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.1667 17.5H5.83332C5.3913 17.5 4.96737 17.3244 4.65481 17.0118C4.34225 16.6993 4.16666 16.2754 4.16666 15.8333V4.16667C4.16666 3.72464 4.34225 3.30072 4.65481 2.98816C4.96737 2.67559 5.3913 2.5 5.83332 2.5H11.6667L15.8333 6.66667V15.8333C15.8333 16.2754 15.6577 16.6993 15.3452 17.0118C15.0326 17.3244 14.6087 17.5 14.1667 17.5Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Projects</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M9.99999 9.16667C11.8409 9.16667 13.3333 7.67428 13.3333 5.83333C13.3333 3.99238 11.8409 2.5 9.99999 2.5C8.15904 2.5 6.66666 3.99238 6.66666 5.83333C6.66666 7.67428 8.15904 9.16667 9.99999 9.16667Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 17.5V15.8333C5 14.9493 5.35119 14.1014 5.97631 13.4763C6.60143 12.8512 7.44928 12.5 8.33333 12.5H11.6667C12.5507 12.5 13.3986 12.8512 14.0237 13.4763C14.6488 14.1014 15 14.9493 15 15.8333V17.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Profile</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M7.5 5H16.6667" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 10H16.6667" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 15H16.6667" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16667 5V5.00833" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16667 10V10.0083" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.16667 15V15.0083" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="mx-1.5">Tasks</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M0.12428 0.125877C0.163576 0.0859754 0.210257 0.0543181 0.261651 0.0327181C0.313045 0.0111181 0.368141 0 0.423784 0C0.479426 0 0.534522 0.0111181 0.585916 0.0327181C0.63731 0.0543181 0.683991 0.0859754 0.723287 0.125877L5.50011 4.96493L10.2769 0.125877C10.3163 0.0860399 10.363 0.0544397 10.4143 0.0328803C10.4657 0.0113209 10.5208 0.000224329 10.5764 0.000224329C10.6321 0.000224329 10.6871 0.0113209 10.7385 0.0328803C10.7899 0.0544397 10.8366 0.0860399 10.8759 0.125877C10.9153 0.165713 10.9465 0.213006 10.9678 0.265055C10.989 0.317104 11 0.37289 11 0.429228C11 0.485565 10.989 0.541351 10.9678 0.5934C10.9465 0.645449 10.9153 0.692742 10.8759 0.732579L5.79961 5.87412C5.76032 5.91402 5.71364 5.94568 5.66224 5.96728C5.61085 5.98888 5.55575 6 5.50011 6C5.44447 6 5.38937 5.98888 5.33798 5.96728C5.28659 5.94568 5.2399 5.91402 5.20061 5.87412L0.12428 0.732579C0.0848852 0.692779 0.0536295 0.645497 0.0323035 0.593443C0.0109774 0.541389 0 0.485585 0 0.429228C0 0.37287 0.0109774 0.317066 0.0323035 0.265012C0.0536295 0.212958 0.0848852 0.165677 0.12428 0.125877Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)"  class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M7.5 9.16667C9.34095 9.16667 10.8333 7.67428 10.8333 5.83333C10.8333 3.99238 9.34095 2.5 7.5 2.5C5.65905 2.5 4.16666 3.99238 4.16666 5.83333C4.16666 7.67428 5.65905 9.16667 7.5 9.16667Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.5 17.5V15.8333C2.5 14.9493 2.85119 14.1014 3.47631 13.4763C4.10143 12.8512 4.94928 12.5 5.83333 12.5H9.16667C10.0507 12.5 10.8986 12.8512 11.5237 13.4763C12.1488 14.1014 12.5 14.9493 12.5 15.8333V17.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.3333 2.60834C14.0503 2.79192 14.6859 3.20892 15.1397 3.7936C15.5935 4.37827 15.8399 5.09736 15.8399 5.8375C15.8399 6.57765 15.5935 7.29674 15.1397 7.88141C14.6859 8.46609 14.0503 8.88309 13.3333 9.06667" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.5 17.5V15.8333C17.4958 15.0976 17.2483 14.384 16.7961 13.8037C16.3439 13.2233 15.7124 12.8089 15 12.625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-1.5">Users</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)">
                                <p>Notification</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)">
                                <p>Settings</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center text-sm text-gray-900 p-4">
                            <a href="javascript:void(0)">
                                <p>Options</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
