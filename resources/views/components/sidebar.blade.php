<!-- Sidebar -->
<div class="w-1/5 p-4 hidden lg:flex flex-col justify-start items-center space-y-8 bg-dark text-primary">
    <ul class="w-full flex flex-col justify-center space-y-4">
        <div class="w-full px-2 flex justify-center items-center montserrat-medium text-md bg-primary text-dark rounded-md border border-accent">
            <input type="search" class="py-2 w-full bg-transparent border-none focus:outline-0 focus:ring-0 text-left" placeholder="Search">
            <a class="py-1 pl-2 bg-transparent text-dark border-accent border-l-2">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 17L21 21" stroke="#11999E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#11999E" stroke-width="2"></path> </g></svg>
            </a>
        </div>
        <li class="py-2 px-2 bg-secondary rounded-md text-center text-primary montserrat-semibold text-md duration-300 ease-out hover:text-primary hover:bg-accent"><a href="{{ route('dashboard.index') }}">Show All Trackers</a></li>
        <li class="py-2 px-2 bg-secondary rounded-md text-center text-primary montserrat-semibold text-md duration-300 ease-out hover:text-primary hover:bg-accent"><a href="#">Add Tracker</a></li>
        <li class="py-2 px-2 bg-secondary rounded-md text-center text-primary montserrat-semibold text-md duration-300 ease-out hover:text-primary hover:bg-accent"><a href="#">Download Records</a></li>
    </ul>
    <ul  class="w-full flex flex-col justify-center items-stretch border-accent border-b">
        <a href="#" class="w-full py-3 px-4 bg-transparent text-center text-primary montserrat-medium text-sm border-t border-accent duration-300 ease-out hover:text-accent hover:bg-primary">HiveDigit</a>
        <a href="#" class="w-full py-3 px-4 bg-transparent text-center text-primary montserrat-medium text-sm border-t border-accent duration-300 ease-out hover:text-accent hover:bg-primary">HiveSpotter</a>
        <a href="#" class="w-full py-3 px-4 bg-transparent text-center text-primary montserrat-medium text-sm border-t border-accent duration-300 ease-out hover:text-accent hover:bg-primary">HiveTracker</a>
        <a href="#" class="w-full py-3 px-4 bg-transparent text-center text-primary montserrat-medium text-sm border-t border-accent duration-300 ease-out hover:text-accent hover:bg-primary">HiveSaver</a>
    </ul>
</div>
