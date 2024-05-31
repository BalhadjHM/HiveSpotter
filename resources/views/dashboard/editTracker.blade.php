<x-layout.app>
    <x-slot name="title">
        Dashboard | Edit Tracker
    </x-slot>

    <x-slot name="content">
        {{--    Navbar    --}}
        <x-navbar-two/>
        <x-layout.dashboard>
            <x-slot name="title">
                Edit Trackers
            </x-slot>
            <div class="w-full lg:w-4/5">
                <form action="" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-col space-y-2">
                            <label for="name" class="text-sm text-dark montserrat-semibold">Name:</label>
                            <input type="text" name="name" id="name" class="w-full py-2 px-4 border border-slate-300 rounded-md montserrat-regular focus:outline-none focus:ring-1 focus:ring-accent focus:border-accent" required>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="url" class="text-sm text-dark montserrat-semibold">URL:</label>
                            <input type="url" name="url" id="url" class="w-full py-2 px-4 border border-slate-300 rounded-md montserrat-regular focus:outline-none focus:ring-1 focus:ring-accent focus:border-accent" required>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="url" class="text-sm text-dark montserrat-semibold">A Record:</label>
                            <input type="url" name="url" id="url" class="w-full py-2 px-4 border border-slate-300 rounded-md montserrat-regular focus:outline-none focus:ring-1 focus:ring-accent focus:border-accent" required>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="url" class="text-sm text-dark montserrat-semibold">NS Record 1:</label>
                            <input type="url" name="url" id="url" class="w-full py-2 px-4 border border-slate-300 rounded-md montserrat-regular focus:outline-none focus:ring-1 focus:ring-accent focus:border-accent" required>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="url" class="text-sm text-dark montserrat-semibold">NS Record 2:</label>
                            <input type="url" name="url" id="url" class="w-full py-2 px-4 border border-slate-300 rounded-md montserrat-regular focus:outline-none focus:ring-1 focus:ring-accent focus:border-accent" required>
                        </div>
                        <div class="pt-4 flex justify-end gap-2">
                            <button type="submit" class="px-8 py-2 bg-accent text-white montserrat-semibold rounded-full">Update</button>
                            <button type="reset" class="px-8 py-2 bg-transparent text-accent montserrat-semibold border-2 border-accent rounded-full">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </x-layout.dashboard>
    </x-slot>
</x-layout.app>
