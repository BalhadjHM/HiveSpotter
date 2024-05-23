<x-layout.app>
    <x-slot name="title">
        HiveSpotter | Home
    </x-slot>

    <x-slot name="content">
        {{--    Navbar    --}}
        <x-navbar />
        <main>
            {{--    Hero    --}}
            <section id="hero" class="bg-white overflow-x-hidden">
                <div class="py-40 px-6 lg:px-28 container mx-auto flex flex-col justify-center items-center space-y-6">
                    <div id="hero-heading" class="relative z-10">
                        <div class="relative">
                            <img id="polygon-one" src="{{ asset('images/HiveSpotter2.png') }}" alt="Polygon">
                            <img id="polygon-two" src="{{ asset('images/HiveSpotter2.png') }}" alt="Polygon">
                            <img id="polygon-three" src="{{ asset('images/HiveSpotter2.png') }}" alt="Polygon">
                        </div>
                        <h1 class="text-3xl md:text-[3.2rem] font-bold text-center capitalize leading-normal">Empowering performance<br>ensuring uptime</h1>
                        <h1 class="text-3xl md:text-[3.2rem] font-bold text-center leading-normal">Your <span class="text-secondary">site</span>, our <span class="text-secondary">watch</span></h1>
                    </div>
                    <a href="{{ route('user.signup') }}" class="z-10 py-2 px-8 bg-secondary text-dark rounded-full montserrat-bold text-md hover:bg-accent hover:text-primary duration-300 ease-in-out">Get Started</a>
                </div>
            </section>

            {{--    Services    --}}
            <section id="services" class="bg-accent z-10">
                <div class="py-20 px-6 lg:px-28 container mx-auto ">
                    <h1 class="mb-24 text-4xl text-center text-primary montserrat-bold ">Our Services</h1>
                    <div class="flex flex-col justify-center items-center space-y-24">
                        {{--    Polygon one    --}}
                        <div id="card" class="flex flex-col-reverse md:flex-row justify-between items-center gap-8 md:gap-0">
                            <div class="flex flex-col justify-center items-center sm:items-start text-center sm:text-left space-y-6 basis-1/2">
                                <h2 class="text-3xl text-primary montserrat-bold">Uptime Monitoring</h2>
                                <p class="text-primary montserrat-medium text-xl leading-8">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <a href="" class="py-2 px-8 bg-secondary text-dark rounded-full montserrat-bold text-center text-md">Learn More</a>
                            </div>
                            <img class="w-80" src="{{ asset('images/Polygon.png') }}" alt="polygon">
                        </div>
                        {{--    Polygon Two    --}}
                        <div id="card" class="flex flex-col md:flex-row justify-between items-center gap-8 md:gap-0">
                            <img class="w-80" src="{{ asset('images/Polygon3.png') }}" alt="polygon">
                            <div class="flex flex-col justify-center items-center sm:items-start text-center sm:text-left space-y-6 basis-1/2">
                                <h2 class="text-3xl text-primary montserrat-bold">Real-Time Collaboration</h2>
                                <p class="text-primary montserrat-medium text-xl leading-8">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <a href="" class="py-2 px-8 bg-secondary text-dark rounded-full montserrat-bold text-center text-md">Learn More</a>
                            </div>
                        </div>
                        {{--    Polygon Three    --}}
                        <div id="card" class="flex flex-col-reverse md:flex-row justify-between items-center gap-8 md:gap-0">
                            <div class="flex flex-col justify-center items-center sm:items-start text-center sm:text-left space-y-6 basis-1/2">
                                <h2 class="text-3xl text-primary montserrat-bold">Insight Analysis</h2>
                                <p class="text-primary montserrat-medium text-xl leading-8">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <a href="" class="py-2 px-8 bg-secondary text-dark rounded-full montserrat-bold text-center text-md">Learn More</a>
                            </div>
                            <img class="w-80" src="{{ asset('images/Polygon2.png') }}" alt="polygon">
                        </div>
                    </div>
                </div>
            </section>

            {{--    About    --}}
            <section id="about" class="bg-white overflow-hidden relative">
                <div class="py-20 px-6 lg:px-28 container mx-auto">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="mb-24 text-4xl text-center text-dark montserrat-bold z-10">Who Are We?</h1>
                        <p class=" mb-20 max-w-[900px] text-xl sm:text-2xl text-center montserrat-semibold leading-8 z-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </section>

            {{--    Contact    --}}
            <Section id="contact" class="overflow-hidden">
                <div class="py-20 px-6 lg:px-28 container mx-auto">
                    <h1 class="mb-24 text-4xl text-center text-primary montserrat-bold">Contact Us</h1>
                    <form action="" method="POST" class="lg:px-40 flex flex-col justify-center items-center space-y-6">
                        <input type="email" name="email" id="email" placeholder="Email" class="py-3 px-4 w-full bg-primary text-dark rounded-lg montserrat-medium text-md placeholder-accent border-2 border-accent focus:ring-0 focus:outline-0" required>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="py-3 px-4 w-full bg-primary text-dark rounded-lg montserrat-medium text-md placeholder-accent border-2 border-accent focus:ring-0 focus:outline-0" required></textarea>
                        <button type="submit" class="py-2 px-8 bg-secondary text-dark rounded-full montserrat-bold text-md hover:bg-accent hover:text-primary duration-300 ease-in-out">Send Message</button>
                    </form>
                </div>
            </Section>
        </main>

        {{--    Footer    --}}
        <x-footer />
    </x-slot>
</x-layout.app>
