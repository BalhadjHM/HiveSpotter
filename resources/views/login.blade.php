<x-layout.app>

    <x-slot name="title">
        HiveSpotter | Login
    </x-slot>

    <x-slot name="content">
        <main class="h-full w-full bg-primary flex items-center justify-center overflow-hidden">
            <div id="login" class=" w-full sm:w-[800px] flex flex-col-reverse sm:flex-row justify-center items-stretch bg-white rounded-xl shadow-md">
                <div class="w-full h-full py-12 px-8 sm:basis-1/2">
                    <h1 class="mb-8 text-2xl sm:text-3xl text-dark montserrat-bold">Login</h1>
                    <form action="" method="post" class="space-y-4">
                        <div class="flex flex-col justify-center items-start gap-1 text-dark">
                            <label for="username" class="text-md montserrat-semibold">Username</label>
                            <input type="text" name="username" id="username" class="w-full py-1 px-2  border-2 border-accent rounded-md focus:ring-0 focus:outline-0">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-1">
                            <label for="password" class="text-md montserrat-semibold">Password</label>
                            <input type="password" name="password" id="password" class="w-full py-1 px-2  border-2 border-accent rounded-md focus:ring-0 focus:outline-0">
                        </div>
                        <div class="flex flex-col justify-center items-start text-sm text-dark montserrat-medium">
                            <a href="" class="hover:text-accent">Forget your password?</a>
                            <a href="{{ route('user.signup') }}" class="hover:text-accent">You don't have an account?</a>
                        </div>
                        <div class="flex flex-row justify-between items-center">
                            <button type="submit" class="py-2 px-12 bg-secondary text-dark montserrat-semibold rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">Login</button>
                            <button type="reset" class="py-2 px-12 bg-transparent text-secondary montserrat-semibold rounded-full border-secondary border-2 hover:bg-secondary hover:text-primary duration-300 ease-in-out">Reset</button>
                        </div>
                    </form>
                    <div id="icons" class="mt-12 flex justify-center items-center gap-4">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#11999E"></path> </g></svg>
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z" fill="#11999E"></path> <path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" fill="#11999E"></path> <path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" fill="#11999E"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#11999E"></path> </g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 50 50">
                            <path d="M 11 4 C 7.1456661 4 4 7.1456661 4 11 L 4 39 C 4 42.854334 7.1456661 46 11 46 L 39 46 C 42.854334 46 46 42.854334 46 39 L 46 11 C 46 7.1456661 42.854334 4 39 4 L 11 4 z M 11 6 L 39 6 C 41.773666 6 44 8.2263339 44 11 L 44 39 C 44 41.773666 41.773666 44 39 44 L 11 44 C 8.2263339 44 6 41.773666 6 39 L 6 11 C 6 8.2263339 8.2263339 6 11 6 z M 13.085938 13 L 22.308594 26.103516 L 13 37 L 15.5 37 L 23.4375 27.707031 L 29.976562 37 L 37.914062 37 L 27.789062 22.613281 L 36 13 L 33.5 13 L 26.660156 21.009766 L 21.023438 13 L 13.085938 13 z M 16.914062 15 L 19.978516 15 L 34.085938 35 L 31.021484 35 L 16.914062 15 z" style="fill: #11999E;"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 50 50">
                            <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z" fill="#11999E"></path>
                        </svg>
                    </div>
                </div>
                <div class="py-12 px-4 w-full hidden sm:flex sm:basis-1/2 flex-col justify-between items-center bg-accent rounded-r-xl">
                    <img src="{{ asset('images/HiveSpotter3.png') }}" alt="polygon">
                    <div class="pb-20 flex flex-col justify-center items-center space-y-4 text-center text-[1.63rem] montserrat-bold">
                        <h1>Empowering performance, ensuring uptime</h1>
                        <h1>Your <span class="text-primary">sites</span>, our <span class="text-primary">watch</span></h1>
                    </div>
                    <p class="text-sm montserrat-semibold text-primary">©HiveSpotter 2024</p>
                </div>
            </div>
        </main>
    </x-slot>

</x-layout.app>
