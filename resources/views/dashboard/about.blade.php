<x-layout.app>
    <x-slot name="title">
        Dashboard | Overview
    </x-slot>

    <x-slot name="content">
        {{--    Navbar    --}}
        <x-navbar/>
        <x-layout.dashboard>
            <x-slot name="title">
                Dashboard Overview
            </x-slot>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md">
                    <h2 class="text-xl text-dark montserrat-bold">Total Trackers</h2>
                    <p class="text-3xl text-dark montserrat-bold">12</p>
                </div>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md">
                    <h2 class="text-xl text-dark montserrat-bold">Websites ON</h2>
                    <p class="text-3xl text-dark montserrat-bold">10</p>
                </div>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md">
                    <h2 class="text-xl text-dark montserrat-bold">Average Uptime</h2>
                    <p class="text-3xl text-dark montserrat-bold">92%</p>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl text-dark montserrat-bold">Recent Activities</h2>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl text-dark montserrat-bold">HiveDigit</h3>
                    <p class="text-dark montserrat-regular">Website <a href="#" class="text-accent">www.hivedigit.com</a> is down since 10:00 AM</p>
                </div>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl text-dark montserrat-bold">HiveSpotter</h3>
                    <p class="text-dark montserrat-regular">Website <a href="#" class="text-accent">www.hivespotter.com</a> is up since 10:00 AM</p>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl text-dark montserrat-bold">Recent Downtime</h2>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl text-dark montserrat-bold">HiveDigit</h3>
                    <p class="text-dark montserrat-regular">Website <a href="#" class="text-accent">www.hivedigit.com</a> is down since 10:00 AM</p>
                </div>
                <div class="bg-white border-slate-200 border p-4 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl text-dark montserrat-bold">HiveLocker</h3>
                    <p class="text-dark montserrat-regular">Website <a href="#" class="text-accent">www.hivelocker.com</a> is down since 10:00 AM</p>
                </div>
            </div>
        </x-layout.dashboard>
    </x-slot>
</x-layout.app>
