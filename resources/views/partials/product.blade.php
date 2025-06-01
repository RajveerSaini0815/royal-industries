<!-- Products Section -->
<section id="products" class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold relative inline-block mb-4">
                Our Glass Products
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-20 h-1 bg-primary-1"></span>
            </h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">High-quality glass materials at competitive
                prices for all your needs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl animate-on-scroll delay-1"
                onclick="openModal('temperedModal')">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('assets/images/products/Double Glazing Units.jpg') }}"
                        alt="Tempered Glass"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="p-5">
                    <h5 class="text-lg font-bold mb-2">Double Glazing Units (DGU)</h5>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Double Glazing Units (DGU) are sealed glass panes with insulating gas between them, 
                        used to reduce heat, noise, and condensation.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-1 font-bold">₹150 - ₹300/sq.ft</span>
                        <button
                            class="px-3 py-1 bg-primary-1 hover:bg-accent-1 text-white text-sm rounded-lg transition-colors duration-300">View
                            Details</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl animate-on-scroll delay-2"
                onclick="openModal('laminatedModal')">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('assets/images/products/Toughened Glass Sheets.jpg') }}"
                        alt="Laminated Glass"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="p-5">
                    <h5 class="text-lg font-bold mb-2">Toughened Glass Sheets</h5>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">High-strength glass is heat-treated to resist impact and thermal stress, 
                        used in buildings, vehicles, and interiors.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-1 font-bold">₹200 - ₹400/sq.ft</span>
                        <button
                            class="px-3 py-1 bg-primary-1 hover:bg-accent-1 text-white text-sm rounded-lg transition-colors duration-300">View
                            Details</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl animate-on-scroll delay-3"
                onclick="openModal('frostedModal')">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('assets/images/products/Blind Between DGU Glass.jpg') }}"
                        alt="Frosted Glass"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="p-5">
                    <h5 class="text-lg font-bold mb-2">Blind Between DGU Glass</h5>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">DGU blinds are built-in blinds between glass panes, 
                        offering light and privacy control without external curtains.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-1 font-bold">₹180 - ₹350/sq.ft</span>
                        <button
                            class="px-3 py-1 bg-primary-1 hover:bg-accent-1 text-white text-sm rounded-lg transition-colors duration-300">View
                            Details</button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl animate-on-scroll delay-4"
                onclick="openModal('mirrorsModal')">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('assets/images/products/Frosted Toughened Glass.webp') }}"
                        alt="Mirrors"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="p-5">
                    <h5 class="text-lg font-bold mb-2">Frosted Toughened Glass</h5>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Fire-rated glass resists high heat for long periods, 
                        providing fire protection in buildings, doors, and partitions.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary-1 font-bold">₹120 - ₹250/sq.ft</span>
                        <button
                            class="px-3 py-1 bg-primary-1 hover:bg-accent-1 text-white text-sm rounded-lg transition-colors duration-300">View
                            Details</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-10 animate-on-scroll">
            <a href="#"
                class="inline-block px-6 py-3 bg-primary-1 hover:bg-accent-1 text-white font-semibold rounded-lg shadow-md transition-colors duration-300">View
                All Products</a>
        </div>
    </div>
</section>