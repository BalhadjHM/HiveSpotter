<x-layout.app>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="content">
        {{--    Navbar    --}}
        <x-navbar-two/>
        <x-layout.dashboard>
            <x-slot name="title">
                Dashboard Trackers
            </x-slot>
            <div class="w-full flex flex-col justify-start items-stretch space-y-8">
                <div id="tracker-card" class="w-full px-6 flex flex-col justify-center items-start bg-white border-slate-200 border p-4 rounded-lg shadow-md">
                    <div class="pb-4 w-full flex justify-between items-center">
                        <h2 class="text-2xl montserrat-semibold text-dark">HiveDigit</h2>
                        <div id="drop-down" class="relative cursor-pointer">
                            <svg width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#40514E" d="M176 416a112 112 0 1 1 0 224 112 112 0 0 1 0-224zm336 0a112 112 0 1 1 0 224 112 112 0 0 1 0-224zm336 0a112 112 0 1 1 0 224 112 112 0 0 1 0-224z"></path></g></svg>
                            <div id="drop-menu" class="hidden absolute top-9 right-0">
                                <ul class="bg-white border border-slate-200 rounded-lg shadow-md overflow-hidden">
                                    <li id="edit-tracker" class="w-44 py-3 px-4 flex items-center gap-2 text-dark text-sm text-left montserrat-medium hover:bg-slate-50  duration-300 ease-out">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z" fill="#40514E"></path> </g></svg>
                                        Edit
                                    </li>
                                    <li id="delete-tracker" class="w-44 py-3 px-4 flex items-center gap-2 text-dark text-sm text-left montserrat-medium hover:bg-slate-50  duration-300 ease-out">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        Delete
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col md:flex-row justify-between items-start md:items-stretch gap-4">
                        <div class="md:basis-2/5 flex flex-col justify-between items-start space-y-4">
                            <a href="" class="md:pt-6 text-lg text-dark montserrat-medium border-b border-white duration-300 ease-out hover:text-accent hover:border-accent">www.hivedigit.com</a>
                            <div class="pb-0 md:pb-8 grid grid-flow-col gap-2">
                                <div>
                                    <p class="pb-1 text-sm sm:text-md text-dark montserrat-medium">Status</p>
                                    <div class="py-2 px-2 sm:px-4 text-center text-accent text-sm sm:text-xl border-2 border-accent montserrat-medium rounded-lg duration-300 ease-out hover:bg-accent hover:text-primary">Active</div>
                                </div>
                                <div>
                                    <p class="pb-1 text-sm sm:text-md text-dark montserrat-medium">Uptime</p>
                                    <div class="py-2 px-2 sm:px-4 text-center text-accent text-sm sm:text-xl border-2 border-accent montserrat-medium rounded-lg duration-300 ease-out hover:bg-accent hover:text-primary">99.5%</div>
                                </div>
                                <div>
                                    <p class="pb-1 text-sm sm:text-md text-dark montserrat-medium">Speed</p>
                                    <div class="py-2 px-2 sm:px-4 text-center text-accent text-sm sm:text-xl border-2 border-accent montserrat-medium rounded-lg duration-300 ease-out hover:bg-accent hover:text-primary">0.5s</div>
                                </div>
                            </div>
                            <a href="{{ route('dashboard.tracker') }}" class="hidden md:block py-2 px-8 bg-secondary montserrat-semibold text-md text-dark rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">View Details</a>
                        </div>
                        <div class="w-full md:w-[700px] h-64 bg-accent rounded-md overflow-hidden">
                            <iframe src="https://hivedigit.com/" class="w-full h-full" loading="lazy" allowfullscreen></iframe>
                        </div>
                        <a href="{{ route('dashboard.tracker') }}" class="block md:hidden py-2 px-8 bg-secondary montserrat-semibold text-md text-dark rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">View Details</a>
                    </div>
                </div>
            </div>
        </x-layout.dashboard>
    </x-slot>
</x-layout.app>
