<x-layout>
    <x-slot name="title">Rasonix</x-slot>
    <x-slot name="content">
        <main class="w-full">
    <!-- start of Hero -->
    <div class=" rounded-br-3xl md:rounded-br-20xl lg:rounded-br-40xl overflow-hidden  ">
    <section class="cover relative  bg-gradient-to-br from-blue-700 to-red-600 px-2 sm:px-4 lg:px-16 xl:px-40 2xl:px-56 overflow-hidden py-48  flex
      items-center">

        <!-- <div class="flex flex:col lg:flex-row gap:5 justify-center relative   w-full lg:mt-16"> -->
          <div class=" pl-2 h-full w-10/12 lg:w-2/3 ">
            <img class=" rounded-2xl" src="./client/images/hands-digital-universe-background.png" alt="img">
          </div>
          <div class=" z-10 h-100 md-1/2 lg:w-1/3 mt-2 lg:mt16 lg:mx-1 text-center  ">
          <div class="flex flex-col pl-0 lg:pl-5 pr-3 text-left ">
            <p class="font-semibold text-7xl tracking-tight text-white">Transform your business online with us!!</p>
            <p class="text-blue-50 text-2xl md:text-3xl leading-snug tracking-wide mt-4">We are with you, your goal is now our goal. Let's achieve it together!</p>
            <a href="/contact" class="uppercase w-3/4 justify center px-8 py-4  shadow-sm rounded inline-block mt-8 outline-white rounded-40xl font-semibold bg-gradient-to-br from-red-600 to-blue-700 text-white hover:from-blue-700 hover:to-red-600">Learn
              How <svg width="41" height="28" viewBox="0 0 41 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="float-right">
                <path d="M0 13.6965H38.7412M38.7412 13.6965L24.0012 0.993896M38.7412 13.6965L24.0012 26.3991" stroke="white" stroke-width="2"/>
                </svg></a>
              
          </div>
          <div>
        </div>
      </section>
    </div>

    <!-- start of About -->
    <br>
    <p class="text-5xl md:text-7xl font-bold text-center bg-gradient-to-r from-red-600 to-blue-700 text-transparent bg-clip-text">Services we provide!!</p>
    <br>
    <br>
    <div class="relative corner-round-foot bg-gradient-to-br quicksand from-red-600 to-blue-700 text-white px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-20 pt-4 pb-11 md:pt-7 ">
      <div class="flex flex-col lg:flex-wrap w-full mx-2 lg:mx-3">
        <ul class="mt-4 flex flex-wrap justify-center">
          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24  h-12 md:ml-7 ml-6 pl-4 lg:ml-10 text-center justify-center">
              <img src="{{url('../client/images/android-robot-icon.svg')}}"/>
              </div>          
              <p class="relative tracking-tight justify-center lg:ml-2  mt-2">Android </p> 
              <a class="relative tracking-tight lg:ml-2" >Development </a>
            </a>
          </li>

          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24  h-12 md:ml-7 ml-4 sm:ml-4 pl-4 lg:ml-10 text-center justify-center">
                <svg width="36" height="56" viewBox="0 0 36 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M30.72 0.0254545L5.12 0C2.304 0 0 2.29091 0 5.09091V50.9091C0 53.7091 2.304 56 5.12 56H30.72C33.536 56 35.84 53.7091 35.84 50.9091V5.09091C35.84 2.29091 33.536 0.0254545 30.72 0.0254545ZM30.72 45.8182H5.12V10.1818H30.72V45.8182Z" fill="white"/>
                  </svg>
                  
              </div>          
              <p class="relative tracking-tight justify-center lg:ml-2  mt-2">Cross platform </p> 
              <a class="relative tracking-tight lg:ml-2" >Mobile App Dev.</a>
            </a>
          </li>

          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24  h-12 md:ml-7 sm:ml-4 pl-4 lg:ml-8 text-center justify-center">
                <svg width="64" height="56" viewBox="0 0 64 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M56.61 0H7.07625C3.14893 0 0 3.15 0 7V49C0 52.85 3.14893 56 7.07625 56H56.61C60.502 56 63.6863 52.85 63.6863 49V7C63.6863 3.15 60.5373 0 56.61 0ZM56.61 49H7.07625V14H56.61V49Z" fill="white"/>
                  </svg>
                  
              </div>          
              <p class="relative tracking-tight justify-center lg:ml-2  mt-2">Web </p> 
              <a class="relative tracking-tight lg:ml-2" >Development </a>
            </a>
          </li>

          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24  h-12 md:ml-7 sm:ml-4 pl-4 lg:ml-8 text-center justify-center">
                  <img src="{{url('../client/images/database.svg')}}" alt='database'/>
              </div>          
              <p class="relative tracking-tight justify-center lg:ml-2  mt-2">Database</p> 
              <a class="relative tracking-tight lg:ml-2" >Consulting</a>
            </a>
          </li>
          {{-- e-commarce  developement --}}
          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24 h-12 ml-4 md:ml-7 sm:ml-4 pl-4 lg:ml-4 text-center justify-center">
                <img src="{{url('../client/images/ecommerce-cart.svg')}}" alt=""/>"
              </div>          
              <p class="relative tracking-tigh  justify-centerlg:ml-2t  mt-2">E-Commerce </p> 
              <a class="relative tracking-tigh lg:ml-2t ">Development </a>
            </a>
          </li>
          {{-- ecommerce developement end --}}
          <li class="pt-4 px-2 lg:px-5 justify-center md:px-6 text-center">
            <a href="/services" target="_blank" title="">
              <div class="w-24  h-12 md:ml-7 ml-6 pl-4 lg:ml-6 text-center justify-center">
                <img src="{{url('../client/images/testing-framework.svg')}}" alt=""/>"
                  
              </div>          
              <p class="relative tracking-tight justify-center lg:ml-2  mt-2">Automation</p> 
              <a class="relative tracking-tight lg:ml-2" >Testing Framework</a>
            </a>
          </li>
        </ul>
       </div>
       </div>

       <!-- Why us!! -->
       <br>
         <p class="text-5xl md:7xl font-bold text-center py-3 bg-gradient-to-r from-red-600 to-blue-700 text-transparent bg-clip-text">Why Us?<br></p>
         
         <br>

         <!-- Why us cards -->
         <div class="w-full flex flex-wrap lg:flex-row gap:10 justify-center overflow-hidden"> <!-- flex:col sm:flex-col-->
          <div class="why-card-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-22/100  py-4 lg:py-7 bg-gradient-to-br from-red-600 to-blue-700">
           
          <div class=" pl-1 md:pl-2 lg:pl-4 flex justify-center flex-col mt-4">
            <!-- Extreme Passion -->
            {{-- removed svg --}}
            <img src="{{url('../client/images/extream-passion.svg')}}" class="w-2/3 ml-14"/>
              <br><br><br>
              <div class="font-bold text-white text-4xl pb-5 text-center">Extreme Passion <br></div>
              <div class="font-bold text-white text-2xl pb-5 px-3 text-center"> We are extremely passionate about technology and quantity.<br> <br></div>
              
              
           </div>
          </div>
          <div class="why-card-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-22/100  py-4 lg:py-7 bg-gradient-to-br from-red-600 to-blue-700">
           
            <div class="pl-1 md:pl-2 lg:pl-4 justify-center mt-4">
              <!-- Commando Approach -->
              <img src="{{url('../client/images/commando-approch.svg')}}"/>
                
              <br><br><br>
              <div class="font-bold text-white text-4xl pb-5 text-center">Commando Approach <br></div>
              <div class="font-bold text-white text-2xl pb-5 px-3 text-center"> Focused, goal-oriented, proficient, and honorable are the traits our clients most associate with us. <br><br></div>
              
             </div>
            </div>
            <div class="why-card-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-22/100  py-4 lg:py-7 bg-gradient-to-br from-red-600 to-blue-700">
           
              <div class="pl-4 justify-center mt-7">
                <!-- Partnership Model -->
                <img src="{{url('../client/images/partnership-model.svg')}}"/>
                  

                <br><br><br>
              <div class="font-bold text-white text-4xl pb-5 text-center">Partnership Model <br></div>
              <div class="font-bold text-white text-2xl pb-5 px-3 text-center"> We value relationships and believe in building strong, lasting and mutually beneficial business partnerships. <br><br></div>
              
               </div>
              </div>
              <div class="why-card-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-22/100  py-4 lg:py-7 bg-gradient-to-br from-red-600 to-blue-700">
           
                <div class="pl-4 justify-center mt-3">
                  <!-- Great Culture -->
                  <img src="{{url('../client/images/great-culture.svg')}}" alt=""/>"
                    
                  <br><br><br>
              <div class="font-bold text-white text-4xl pb-5 text-center">Great Culture<br></div>
              <div class="font-bold text-white text-2xl pb-5 px-3 pt-3 text-center"> We have created an environment where Rasonix works because they love it, not because they have to.<br><br></div>
              
                 </div>
                </div>
              <br><br><br>

                <!-- Lower section of index -->
                <br><br>
                <div class="bg-cover bg-clip opacity-80 w-full lg:w-full rounded-xl" style="background-image:url(/client/images/unsplash_vEE00Hx5d0Q.png)">
                  <br>
                  <p class="text-5xl font-bold text-left bg-gradient-to-l from-red-600 to-blue-700 text-transparent px-6 py-3 lg:py-6 lg:pl-16 lg:pr-10 lg:w-7/12 md:7/12 w-10/12 bg-clip-text">A full-service software consultancy founded in India in 2023.</p>
                  <br>
                  <p class="text-2xl text-white font-semibold text-left px-6 py-3 lg:py-6 lg:px-16 lg:w-3/4 md:3/4 w-11/12">We are software developers, design thinkers, and security experts. Our products and designs are stable, scalable and durable. <br><br>
                    For the past few years, we've automated business processes, brought new ideas to market, and built a rich and dynamic infrastructure</p>
                  <p class="text-3xl font-bold py-3 lg:py-6 text-left text-underline bg-gradient-to-l from-red-600 to-blue-700 text-transparent px-6 lg:pl-16 lg:pr-10 w-10/12 lg:w-1/2 md:w-1/2 bg-clip-text"> Get to know End Point Dev -></p>
                  <br>
                  <p class="text-3xl font-bold text-left text-underline bg-gradient-to-l from-red-600 to-blue-700 text-transparent px-6 lg:pl-16 lg:pr-0 w-10/12 md:1/2 lg:1/2 bg-clip-text">Let's build something together -></p>
                  <br>
                  </div> <br><br>

    


   

  </main>
<style>
  .corner-round-foot{
    border-bottom-left-radius: 6em;
    border-top-right-radius: 6em;
    letter-spacing: 0.15pc;
    } 
    </style>
    </x-slot>
</x-layout>