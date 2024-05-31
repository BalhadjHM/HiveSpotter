<x-layout.app>
    <x-slot name="title">
        Dashboard | Tracker Details
    </x-slot>

    <x-slot name="content">
        {{--    Navbar    --}}
        <x-navbar-two/>
        <x-layout.dashboard>
            <x-slot name="title">
                Tracker Details
            </x-slot>
            <div class="flex flex-col items-start justify-start gap-10">
                <div class="w-full lg:w-4/5 flex flex-col justify-start items-start border border-slate-200 rounded-md overflow-hidden">
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">Website Name:</h4>
                        <p class="text-md text-dark montserrat-semibold">HiveDigit</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">Website URL:</h4>
                        <p class="text-md text-dark montserrat-semibold">www.hivedigit.com</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">A Record:</h4>
                        <p class="text-md text-dark montserrat-semibold">125.153.445.112</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2 ">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">NS Record 1:</h4>
                        <p class="text-md text-dark montserrat-semibold">ns1.hivedigit.com</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">NS Record 2:</h4>
                        <p class="text-md text-dark montserrat-semibold">ns1.hivedigit.com</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">Uptime:</h4>
                        <p class="text-md text-dark montserrat-semibold">90%</p>
                    </div>
                    <div class="w-full px-4 py-6 flex flex-col sm:flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                        <h4 class="basis-2/5 text-md text-dark montserrat-bold">Status:</h4>
                        <p class="text-md text-dark montserrat-semibold">Active</p>
                    </div>
                </div>
                <div class="w-full">
                    <h3 class="mb-4 text-xl text-dark text-left montserrat-bold">Website Screenshot</h3>
                    <div class="w-full lg:w-4/5 h-96 bg-accent rounded-md overflow-hidden">
                        <iframe src="" class="w-full h-full" loading="lazy" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="w-full mb-10">
                    <div class="mb-6 flex flex-col justify-start gap-2">
                        <h3 class="text-xl text-dark text-left montserrat-bold">Website Records</h3>
                        <p class="text-sm text-dark text-left montserrat-medium">List of latest five taken Records for this website</p>
                    </div>
                    <div class="w-full lg:w-4/5 mb-6 flex flex-col justify-start items-start border border-slate-200 rounded-md overflow-y-hidden overflow-x-auto lg:overflow-x-visible">
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">Response Time</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">Code Status</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">A Record</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">NS Record</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">String Checker</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-bold">Time</div>
                        </div>
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2">
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">0.1s</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">200</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path><path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">10:00 PM</div>
                        </div>
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">0.1s</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">200</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path><path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">10:00 PM</div>
                        </div>
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2">
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">0.1s</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">200</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path><path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">10:00 PM</div>
                        </div>
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2 bg-slate-50 rounded-lg">
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">0.1s</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">200</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path><path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">10:00 PM</div>
                        </div>
                        <div class="w-full px-4 py-6 flex flex-row justify-start sm:items-center gap-2">
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">0.1s</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">200</div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path><path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">
                                <svg fill="#40514E" width="24px" height="24px" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Zm25-91.5-29,35L76,94c-4.5-3.5-10.5-2.5-14,2s-2.5,10.5,2,14c6,4.5,12.5,9,18.5,13.5,4.5,3,8.5,7.5,14,8,1.5,0,3.5,0,5-1l3-3,22.5-27c4-5,8-9.5,12-14.5,3-4,4-9,.5-13L138,71.5c-3.5-2.5-9.5-2-13,2Z"></path></g></svg>
                            </div>
                            <div class="basis-1/6 text-sm text-dark montserrat-medium">10:00 PM</div>
                        </div>
                    </div>
                    <a href="#" class="py-2 px-8 bg-secondary montserrat-semibold text-sm text-dark rounded-full hover:bg-accent hover:text-primary duration-300 ease-in-out">Download All Records</a>
                </div>
            </div>
        </x-layout.dashboard>
    </x-slot>
</x-layout.app>
