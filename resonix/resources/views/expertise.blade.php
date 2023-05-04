<x-layout>
    <x-slot name="title">Rasonix</x-slot>
    <x-slot name="content">
         <main class="w-full">

     <!-- start header -->
    <!-- Using the Component named header for the same logo and navbar throughout the webapp -->
    {{-- @include('layouts.header') --}}

    <!-- end header -->
    <section class="lg:pb-10 ">
      <article>

        <!-- Header section -->
        <div class="relative overflow-hidden h-1/6 lg:screen w-full mb-12 lg:mb-16">
          <!-- Dark overlay -->
          <div
            class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-br from-blue-400 via-black to-green-300 opacity-50">

          </div>
          <!-- Header text -->
          <div class="absolute h-full w-full flex flex-col items-center justify-center">
            <div class="text-center lg:mb-2">
              <span class="uppercase tracking-wider font-semibold text-blue-50 text-sm">Ideas</span>
              <span class="text-blue-50 mx-2 lg:mx-3 font-medium">July 23, 2021</span>
            </div>
            <h1 class="text-3xl lg:text-5xl font-semibold text-center mx-4 lg:mx-0 text-blue-50">How to Generate Leads
            </h1>
          </div>

          <!-- BG image -->
          <div >
            <!-- <img class="h-full w-full object-cover pt-20" src="./client/images/lead_generation.jpg"
              alt="A man waiting in a cafe for someone that will never show up."> -->
          </div>
        </div>

        <!-- Services Cards Article Text -->
        <br><br>
        <p class="text-7xl text-center bg-gradient-to-r from-red-600 to-blue-700 font-bold text-transparent bg-clip-text">Our Expertise</p>
          <br><br>
          <div class="w-full flex flex-col lg:flex-row gap:10 contact-body justify-center overflow-hidden "> <!-- flex:col sm:flex-col-->
            <div class="web-app-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-1/2  py-8 lg:pb-7 lg:pt-16 bg-gradient-to-tl from-red-600 to-blue-700 hover:bg-gradient-to-tr hover:rotate-180">
             
            <div class="pl-4 pr-4 lg:px-6 justify-center ">

              <div class="font-bold text-white text-5xl pb-5 text-center"><br>Android Development <br></div>
             

              <div class="relative lg:pl-6">
                <br>
                {{-- android developement svg  in public folder--}}
                <img src="{{url('../client/images/experties-android-development.svg')}}"/>
                  
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Java or Kotlin</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Android Studio</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Android SDK</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Android Virtual Device</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Android Frameworks APIs</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">AndroidX Libraries</li>
              
              </ul>
            </div>
    
          </div>
    
          <!-- web app Development -->
    
    
          <div class="ecom-corner-round relative my-2 mx-2 w-full lg:w-1/2 overflow-visible justify-center items-center  py-4 lg:py-12 bg-gradient-to-tr from-red-600 to-blue-700">
            <!-- Contact Info -->
            <div class="pl-4 pr-4 lg:px-6justify-center">
              <div class="font-bold text-white text-5xl pb-5 text-center"><br>Web App Development<br></div>
              
              <div class="relative lg:pl-24">
                <br>  
                  <img src="{{url('/client/images/experties-web-development.svg')}}"/>
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">HTML, CSS and <br> Javascript</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">React, Angular, <br> Vue.js, or Ember.js</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Javascript (Node.js),<br> Ruby (Rails), <br> Java (Spring), or <br> PHP (Laravel)</li>
                
              </ul>
            </div>
    
          </div>
    
        </div>

        <!--Database Consulting  -->

        <div class="w-full flex flex-col lg:flex-row gap:10 contact-body justify-center overflow-hidden"> <!-- flex:col sm:flex-col-->
          <div class="ecom-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-1/2  py-4 lg:py-7 bg-gradient-to-bl from-red-600 to-blue-700">
            
            <div class="pl-4 pr-4 justify-center">
              <div class="font-bold text-white text-5xl pb-5 text-center"><br>Database Consulting<br></div>
              
              <div class="relative lg:pl-16">
                <br>
                <img src="{{url('../client/images/expertise-db-consulting.svg')}}" alt=""/>"
                  
                  
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">MySQL</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Microsoft SQL <br> Server</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">MongoDB</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Oracle</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">SQL (Strutured <br> Query Language)</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Object Relational <br> Mapping (ORM)</li>
              
              </ul>
            </div>
    
          </div>
    
          <!-- web app Development -->
    
    
          <div class="web-app-corner-round relative my-2 mx-2 w-full lg:w-1/2 overflow-visible justify-center items-center  py-4 lg:py-12 bg-gradient-to-br from-red-600 to-blue-700">
            <!-- Contact Info -->
            <div class="px-4 justify-center">
              <div class="font-bold text-white text-5xl pb-5 text-center"><br>Cross Platform Mobile App Development<br></div>
              
              <div class="relative lg:pl-24">
                <br>
                <img src="{{url('../client/images/expertise-app-development.svg')}}" alt=""/>" 
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">React Native</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Flutter</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Progressive Web <br> App (PWA)</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Linux Systems</li>
                
              </ul>
            </div>
    
          </div>
    
        </div>

        <div class="w-full flex flex-col lg:flex-row gap:10 contact-body justify-center overflow-hidden"> <!-- flex:col sm:flex-col-->
          <div class="web-app-corner-round relative my-2 mx-2 overflow-visible justify-center items-center flex w-full  lg:w-1/2  py-4 lg:pb-7 lg:pt-20 bg-gradient-to-tl from-red-600 to-blue-700">
            
            <div class="px-4 justify-center flex flex-col">
              <div class="font-bold text-white text-4xl pb-5 text-center"><br>E-Commerce Development <br></div>
              
              <div class="relative lg:pl-16">
                <br>
             <img src="{{url('../client/images/expertise-ecommerce-development.svg')}}" alt=""/>"
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">APIs and Integrations</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Magento</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Payment Processing</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Perl and Interchange</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Responsive Design</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">SaaS</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">SEO, Google ADs, <br>Analytics</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Spree and Solidus</li>
              <br>
              </ul>
            </div>
    
          </div>
    
          <!--Automation testing framework -->
    
    
          <div class="ecom-corner-round relative my-2 mx-2 overflow-visible justify-center flex items-center w-full  lg:w-1/2 py-4 lg:py-7 bg-gradient-to-tr from-red-600 to-blue-700">
            
            <div class="px-4 flex flex-col pt-6 lg:pt-2 justify-center">
              <div class="font-bold text-white text-4xl pb-5  text-center"><br>Automation Testing Framework<br></div>
              
              <div class="relative lg:pl-24">
                <br>
               <img src="{{url('../client/images/expertise-automation-testing.svg')}}" alt=""/>"
              </div>
              <ul>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Android & iOS <br> Development</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">CMS (Wordpress, <br>Wix, Craft <br>custom)</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Java</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Javascript</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">PHP</li>
                <li class="text-3xl text-white font-bold text-center px-3 lg:ml-5 lg:px-8 py-3 lg:py-5">Ruby on Rails</li>
              
              </ul>
            </div>
    
          </div>
    
        </div>
    <!-- start footer -->
    {{-- @include('layouts.footer') --}}
    <!-- end footer -->
    </main>

{{-- </body> --}}



<style>
.web-app-corner-round {
  border-top-right-radius: 10em;
  border-bottom-left-radius: 10em;
  background-position: center;
  background-size: cover;
  }
  .ecom-corner-round {
  border-top-left-radius: 10em;
  border-bottom-right-radius: 10em;
  background-position: center;
  background-size: cover;
}
.exp-app-dev{
  border-top-left-radius: 10em;
  border-bottom-right-radius: 10em;
  --tw-gradient-from: #124d8f;
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(143, 18, 18, 0));
    --tw-gradient-to: #ff170a;
    border-bottom-right-radius: 9em;
}
.flip-container {
			-webkit-perspective: 100%;
			-moz-perspective: 100%;
            -o-perspective:100%;
			-ms-perspective: 100%;
			perspective: 100%;
			-ms-transform: perspective(100%);
			-moz-transform: perspective(100%);
    		-moz-transform-style: preserve-3d; 
    		-ms-transform-style: preserve-3d; 
			
		}
			/* for IE */
		.flip-container:hover .back, .flip-container.hover .back {
		    -webkit-transform: rotateY(0deg);
		    -moz-transform: rotateY(0deg);
		    -o-transform: rotateY(0deg);
		    -ms-transform: rotateY(0deg);
		    transform: rotateY(0deg);
		}
		.flip-container:hover .front, .flip-container.hover .front {
		    -webkit-transform: rotateY(180deg);
		    -moz-transform: rotateY(180deg);
		    -o-transform: rotateY(180deg);
		    transform: rotateY(180deg);
		}
		
		/* END: for IE */
		.flipper {
			-webkit-transition: 0.6s;
			-webkit-transform-style: preserve-3d;
			-ms-transition: 0.6s;
			-moz-transition: 0.6s;
			-moz-transform: perspective(100%);
			-moz-transform-style: preserve-3d;
			-ms-transform-style: preserve-3d;
			transition: 0.6s;
			transform-style: preserve-3d;
			position: relative;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			-webkit-transition: all 0.4s ease-in-out;
			-moz-transition: all 0.4s ease-in-out;
			-o-transition: all 0.4s ease-in-out;
		}
		.front, .back {
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			backface-visibility: hidden;
		    -webkit-transition: 0.6s;
		    -webkit-transform-style: preserve-3d;
		    -moz-transition: 0.6s;
		    -moz-transform-style: preserve-3d;
		    -o-transition: 0.6s;
		    -o-transform-style: preserve-3d;
		    -ms-transition: 0.6s;
		    -ms-transform-style: preserve-3d;
		    transition: 0.6s;
		    transform-style: preserve-3d;
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 700px;
			
			
		}
		
		.front {
			-webkit-transform: rotateY(0deg);
			-ms-transform: rotateY(0deg);
			background-position: center center;
			z-index: 2;
		}
		.back {
		
			-webkit-transform: rotateY(-180deg);
		    -moz-transform: rotateY(-180deg);
		    -o-transform: rotateY(-180deg);
		    -ms-transform: rotateY(180deg);
		    transform: rotateY(-180deg);
		}
</style>

    </x-slot>

</x-layout>