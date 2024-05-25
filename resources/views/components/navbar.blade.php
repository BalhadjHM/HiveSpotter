<nav {{ $attributes->merge(['class' => 'bg-primary shadow z-50 md:sticky md:top-0']) }}>
    <div class="py-2 sm:py-3 px-6 lg:px-28 container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="z-50">
            <img src="{{ asset('images/HiveSpotter.png') }}" alt="logo" class="h-12 hidden sm:block">
            <img src="{{ asset('images/HiveSpotter2.png') }}" alt="logo" class="h-12 block sm:hidden">
        </a>
        <ul class="hidden md:flex space-x-4 lg:space-x-8 montserrat-bold text-md">
            <li><a href="#services" class="hover:text-secondary">Services</a></li>
            <li><a href="#about" class="hover:text-secondary">About</a></li>
            <li><a href="#contact" class="hover:text-secondary">Contact</a></li>
            <li><a href="{{ route('user.login') }}" class="py-2 px-8 bg-secondary text-dark rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">Login</a></li>
        </ul>
        <svg id="burger" class="block md:hidden z-50" width="50px" height="50px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Menu_Alt_01"> <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#40514E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
        <div id="burger-menu" class="z-40 absolute top-[-100%] left-0 w-full h-full flex md:hidden justify-center items-center bg-primary duration-500 ease-in-out">
            <ul class="relative flex flex-col justify-center items-center space-y-8 lg:space-x-8 montserrat-bold text-md">
                <li><a href="#services" class="hover:text-secondary">Services</a></li>
                <li><a href="#about" class="hover:text-secondary">About</a></li>
                <li><a href="#contact" class="hover:text-secondary">Contact</a></li>
                <li><a href="{{ route('user.login') }}" class="py-2 px-8 bg-secondary text-dark rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
