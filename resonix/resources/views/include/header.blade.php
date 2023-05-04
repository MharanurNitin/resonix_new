<!-- start header -->
<header
    class="sticky top-0 left-0 w-full mr-2 z-50 px-0 overflow-visible shadow-sm sm:px-0 lg:px-0 xl:px-0 2xl:px-0 bg-black text-justify quicksand"
>
    <!--left--10 w-full z-50 px-0.5 sm:px-2 lg:px-02 xl:px-10 2xl:px-20-->

    <div
        class="flex flex-wrap items-center justify-between py-2 px-4 l overflow-visible bg-gradient-to-br from-blue-700 to-red-600"
    >
        <!-- <section class="cover relative bg-gradient-to-br from-blue-800 to-red-600 "> -->
        <div class="ml-3 md:w-auto">
            <a href="/">
                <img
                    src="../client/images/logo.png"
                    alt="Rasonix"
                    class="w-40 h-10"
                />
            </a>
        </div>

        <div>
            <button id="nav_toggle" class="h-8 w-8 md:hidden">
                <svg
                    class="h-full w-auto"
                    xmlns="http://www.w3.org/2000/svg"
                    width="192"
                    height="192"
                    fill="white"
                    viewBox="0 0 256 256"
                >
                    <rect width="256" height="256" fill="none"></rect>
                    <line
                        x1="40"
                        y1="128"
                        x2="216"
                        y2="128"
                        stroke="white"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="16"
                    ></line>
                    <line
                        x1="40"
                        y1="64"
                        x2="216"
                        y2="64"
                        stroke="white"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="16"
                    ></line>
                    <line
                        x1="40"
                        y1="192"
                        x2="216"
                        y2="192"
                        stroke="white"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="16"
                    ></line>
                </svg>
            </button>

            <div
                id="nav_content"
                class="absolute right-0 hidden md:block md:relative w-full md:w-auto"
            >
                <nav
                    class="w-full bg-white md:bg-transparent mr-5 rounded shadow-lg px-6 py-4 mt-4 text-center md:px-0 md:mt-0 md:shadow"
                >
                    <ul class="md:flex items-center">
                        <li>
                            <a
                                class="py-2 inline-block md:text-white md:hidden lg:block font-semibold hover:underline"
                                href="/about"
                                >About Us</a
                            >
                        </li>
                        <li class="md:ml-4">
                            <a
                                class="py-2 inline-block md:text-white md:hidden lg:block font-semibold hover:underline"
                                href="/blog"
                                >Blog</a
                            >
                        </li>
                        <li class="md:ml-4">
                            <a
                                class="py-2 inline-block md:text-white md:px-2 font-semibold hover:underline"
                                href="/services"
                                >Services</a
                            >
                        </li>
                        <li class="md:ml-4">
                            <a
                                class="py-2 inline-block md:text-white md:px-2 font-semibold hover:underline"
                                href="/expertise"
                                >Expertise</a
                            >
                        </li>
                        <li class="md:ml-4 mt-3 md:mt-0">
                            <a
                                class="inline-block font-semibold px-2 py-2 text-white bg-green-400 md:bg-transparent md:text-white border-gray-700 rounded hover:bg-white hover:text-blue-700 hover:border-red-600"
                                href="/contact"
                                >Contact Us</a
                            >
                        </li>
                        <li class="md:ml-4 mt-3 md:mt-0">
                            <a
                                class="inline-block font-semibold px-2 py-2 text-white bg-green-400 md:bg-transparent md:text-white border-gray-700 rounded hover:bg-white hover:text-blue-700 hover:border-red-600"
                                href="/contact"
                                >Login</a
                            >
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- </section> -->
    </div>
</header>

<script src="../client/js/index.js"></script>
<script src="../client/js/form.js"></script>

<style>
    .raso-text-grad {
        --tw-gradient-from: #dc2626;
        --tw-gradient-stops: var(--tw-gradient-from),
            var(--tw-gradient-to, rgba(220, 38, 38, 0));
        --tw-gradient-to: #124d8f;
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
    }
</style>
<!-- end header -->