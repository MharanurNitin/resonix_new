<x-layout>
    <x-slot name="title">Rasonix</x-slot>
    <x-slot name="content">
         {{-- <main class="w-full">

    <!-- start header -->
    <!-- Using the Component named header for the same logo and navbar throughout the webapp -->
    
    <!-- end header -->
     <!-- Invisible section -->
     <div class="relative invisible overflow-hidden h-1/6 lg:screen w-full lg:mb-16">
      <!-- Dark overlay -->
      <div
        class="absolute top-0 bottom-0 left-0 right-0 bg-clip bg-gradient-to-br from-blue-400 via-red to-green-300 opacity-50">

      </div>
      <!-- Header text -->
      <div class="absolute h-full w-full flex flex-col items-center justify-center">
        <div class="text-center lg:mb-2">
          <span class="uppercase tracking-wider font-semibold text-blue-50 text-sm">Rasonix</span>
          <span class="text-blue-50 mx-2 lg:mx-3 font-medium">January 12, 2022</span>
        </div>
        <h1 class="text-3xl lg:text-5xl font-semibold text-center mx-4 lg:mx-0 text-blue-50">Welcome to Rasoix
        </h1>
      </div>

      <!-- BG image -->
      <div >
        <!-- <img class="h-full w-full object-cover pt-20" src="./client/images/lead_generation.jpg"
          alt="A man waiting in a cafe for someone that will never show up."> -->
      </div>
    </div>
    <br><br><br>
    <!-- Start of 'About Us' Landing --> 

    <div class="text-6xl font-bold text-center bg-gradient-to-r from-red-600 to-blue-700 text-transparent bg-clip-text pb-12 lg:pb-0 sm:pb-5 md:pb-5 md:text-8xl">About Us<br></div>
    <div class="relative about-corner-round sm:m-4 md:m-1 lg:m-2 xl:m-6 bg-gradient-to-bl quicksand from-red-600 to-blue-700 text-white px-3 sm:px-5 lg:px-6 xl:px-8 2xl:px-10 pt-6 pb-11 md:pt-10 sm:mt-3">
      <!-- <div class="font-bold text-6xl pb-5 text-center">About Us <br><br></div> -->
      <div class="flex flex-col lg:flex-row">
        <div class="w-full justify-center left-5 md:w-1/3 lg:w-4/12 mt-2 lg:mt-0 lg:mx-1 text-center  ">
            
         <img src="{{url('../client/images/rasonix-Illustrator.svg')}}"/>
          </div>
          <div class=" justify-center text-3xl pt-6 px-3 sm:px-4 md:px-8 lg:px-12 xl:px-16 font-semibold text-justify md:w-2/3 lg:w-8/12 lg:pr-4">
          <span>Welcome to Rasonix! We are a part of Khus Online Solutions Private Limited we are dedicated to developing innovative solutions for our clients. Our team is composed of experienced professionals who are passionate about using technology to solve complex problems. We believe in building long-term relationships with our clients and delivering top-quality products that exceed their expectations. Our goal is to help businesses of all sizes streamline their operations and grow through the use of cutting-edge software. We are excited to work with you and help your company reach new heights of success.</span>
          </div>
      </div>
    </div>
<br><br>

    
    <!-- start footer -->
   
    <!-- end footer -->

  </main>
  <style>
  .about-corner-round{
    border-top-left-radius: 10em;
    border-bottom-right-radius: 10em ;
  }
</style> --}}
<h1 class="visible md:hidden text-center text-5xl">ABOUT US</h1>
<main class="flex flex-col pb-4 md:flex-row w-screen min-h-[70vh] md:pt-7 items-center overflow-hidden border-box bg-pink-100">
  <div class="left-container w-full md:w-1/2 order-2 md:order-0">
    <h1 class="text-7xl hidden md:block p-4">About Us</h1>
    <p class="p-4">Welcome to <span class="text-lg text-yellow-500 font-bold">Rasonix!</span> We are a part of <span class="text-md font-bold">Khus Online Solutions Private Limited </span>we are dedicated to developing innovative solutions for our clients. Our team is composed of experienced professionals who are passionate about using technology to solve complex problems. We believe in building long-term relationships with our clients and delivering top-quality products that exceed their expectations. Our goal is to help businesses of all sizes streamline their operations and grow through the use of cutting-edge software. We are excited to work with you and help your company reach new heights of success.</p>
    <div class="flex justify-center">
    <button class="bg-gradient-to-r from-fuchsia-500 to-cyan-500 p-2 rounded text-white">connect us</button>
    </div>
  </div>
  <div class="right-container w-full md:w-1/2 flex justify-center md:order-4">
    <img src="{{url('../client/images/rasonix-Illustrator.svg')}}" class="w-4/5 h-4/5" alt="">
  </div>
  

</main>

    </x-slot>

</x-layout>