<x-layout>
    <x-slot name="title">services</x-slot>
    <x-slot name="content">

    {{-- <main class="w-full">

         <!-- start header -->
    <!-- Using the Component named header for the same logo and navbar throughout the webapp -->
  
    
    <!-- end header -->

         <!-- Start Blog -->
         <!-- Start of Blog-->
    <section class="lg:pb-10 ">
      <article>

        <!-- Header section -->
        <div class="relative invisible overflow-hidden h-1/6 lg:screen w-full mb-12 lg:mb-16">
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
        <p class="text-7xl font-bold px-2 text-center bg-gradient-to-r from-red-600 to-blue-700 text-transparent bg-clip-text">Our Services</p>

        <!-- Android development -->
        <div class="relative android-corner-round my-2 sm:mx-1 md:m-1 gap-10 lg:m-2 xl:m-6 bg-gradient-to-bl quicksand from-red-600 to-blue-700 text-white px-3 sm:px-5 lg:px-6 xl:px-8 2xl:px-10 pt-6 pb-11 md:pt-10 ">
          <div class="font-bold text-5xl pb-5 px-4 lg:px-6  text-center">Android Development</div>
          <div class="flex flex-col lg:flex-row">
            
            <div class="w-full justify-center left-5 md:w-1/2 lg:w-4/12 mt-2 lg:mt-0 lg:mx-1 text-center  ">
              <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
            </div>
              <div class=" justify-center text-3xl pt-6 px-3 sm:px-4 md:px-8 lg:px-12 xl:px-16 text-justify font-semibold text-left md:w-1/2 lg:w-8/12 lg:pr-4">
              <span>Our team has extensive experience building high-quality Android apps that meet the needs of our clients. We use the latest tools and technologies to ensure that our apps are reliable, user-friendly, and perform well on a variety of devices. We can help you build an Android app from scratch, or we can work with you to improve an existing app. We have experience building a wide range of Android apps, including business apps, productivity apps, games, and more.</span>
              </div>
              
          </div>
        </div>
        <!-- </div>
      </div>
    </section>
    </div> -->

    <!-- Cross platform mobile app development -->
        <div class="relative cross-corner-round my-2 sm:m-1 md:m-1 lg:m-2 xl:m-6 bg-gradient-to-br quicksand from-blue-700 to-red-600 text-white px-3 sm:px-5 lg:px-6 xl:px-8 2xl:px-10 pt-6 pb-11 md:pt-10 ">
          <div class="font-bold text-5xl pb-5 text-center"><br>Cross Platform Mobile App Development<br><br></div>
          <div class="flex flex-col lg:flex-row">
            <div class="justify-center text-3xl px-3 sm:px-4 md:px-8 lg:px-12 xl:px-16 font-semibold text-left md:w-1/2 lg:w-7/12 lg:pr-4">
              <span>In addition to Android development, we also offer cross platform mobile app development for iOS and other platforms. We have a team of experienced mobile app developers who can help you create a high-quality mobile app that meets your specific needs and reaches your target audience. Several tools and frameworks are available for cross-platform mobile apps development, such as Flutter, React Native, and Xamarin. Our team has experience using these tools to build high-quality cross-platform apps for our clients.</span>
            </div>
      
    
              <div class="w-full md:w-1/2 lg:w-5/12 mt-2 lg:mt-0 lg:mx-1 text-center lg:pl-4">
               <img src="{{url('../client/images/serv-mobile-app.svg')}}" alt="mobile-svg"/>
            </div>
          </div>
        </div>

<!-- Web app development -->

    <div class="w-full flex flex-col lg:flex-row gap:10 contact-body justify-center overflow-hidden ">
      <div class="web-app-corner-round relative my-2 mx-2 flex w-full lg:w-1/2 overflow-visible justify-center items-center px-2 pr-4 py-4 lg:py-7 bg-gradient-to-tl from-red-600 to-blue-700">
        
        <div class="lg:pl-4 justify-center">
          <div class="font-bold text-white text-5xl pb-5 pr-3 text-center">Web App Development <br></div>
          <div class="text-3xl justify-center text-semibold mb-5 ml-2 pr-2 text-justify lg:ml-5 text-white"><span>Web apps are software applications that are accessed through a web browser, rather than being installed on a device. We have experience building web apps that can help businesses streamline their operations, improve communication, and increase productivity. Our web app development process includes designing the user interface, developing the back-end functionality, and testing the finished product to ensure it meets your requirements.</span></div>
          
          <div class="relative lg:pl-24">
            <br>
            <img src="{{url('../client/images/serv-web-app.svg')}}"/>
            </div>
        </div>

      </div>

      <!-- E-commerce Development -->


      <div class="ecom-corner-round  relative my-2 mx-2 w-full lg:w-1/2 px-2 overflow-visible justify-center items-center px-3 py-4 lg:py-12 bg-gradient-to-tr from-red-600 to-blue-700">
        <!-- Contact Info -->
        <div class="lg:pl-4 justify-center">
          <div class="font-bold text-white text-5xl pb-5 text-center"><br>E-Commerce Development <br></div>
          <div class="text-3xl mb-2 text-semibold ml-2 lg:ml-5 text-justify text-white"><span>We have experience building ecommerce websites and online stores that can help businesses sell their products and services online. Our ecommerce solutions are user-friendly and can help you manage your inventory, process orders, and handle shipping and returns. We can help you choose the right ecommerce platform for your business, and we can customize it to meet your specific needs. We can also help you with ongoing website maintenance and updates as needed.</span></div>
          
          <div class="relative lg:pl-24 -mt-2">
            <br>
            <img src="{{url('../client/images/serv-ecommerce.svg')}}" alt="e-comm"/>
            </div>
        </div>

      </div>

    </div>
    <!-- Database consulting -->
    <div class="relative cross-corner-round py-2 my-2 sm:m-0.5 md:m-1 px-2 gap-10 lg:m-2 xl:m-6 bg-gradient-to-br quicksand from-blue-700 to-red-600 text-white px-3 sm:px-5 lg:px-6 xl:px-8 2xl:px-10 pt-6 pb-11 md:pt-10 ">
      <div class="font-bold text-5xl pb-5 text-center">Database Consulting</div>
      <div class="flex flex-col lg:flex-row">
        <div class="justify-center text-3xl px-3 sm:px-4 md:px-8 lg:px-12 xl:px-16 text-justify font-semibold text-left md:w-1/2 lg:w-8/12 lg:pr-4">
          <span>At Rasonix, we offer database consulting services to help businesses of all sizes optimize their use of data. Our team of experienced professionals has a strong background in database design, development, and administration, and we can help you get the most out of your data. Our team is committed to delivering top-quality database consulting services that exceed our clients' expectations. We have a strong attention to detail and a dedication to delivering results. We are confident that our expertise and experience make us the ideal partner for your business. We look forward to working with you and helping you optimize your use of data.</span>
          </div>
  

          <div class="w-full md:w-1/2 lg:w-4/12 mt-2 lg:mt-0 lg:mx-1 text-center  ">
            <img src="{{url('../client/images/serv-db-cunsult.svg')}}"/>
        </div>
      </div>
    </div>


    	<!-- Automation testing -->

    <div class="relative android-corner-round py-2 my-2 sm:m-0.5 md:m-1 lg:m-2 xl:m-6 bg-gradient-to-bl quicksand from-red-600 to-blue-700 text-white px-3 sm:px-5 lg:px-6 xl:px-8 2xl:px-10 pt-6 pb-11 md:pt-10 ">
      <div class="font-bold text-5xl pb-5 text-center">Automation Testing Framework</div>
      <div class="flex flex-col lg:flex-row">
        <div class=" justify-center text-3xl px-3 sm:px-4 md:px-8 lg:px-12 xl:px-16 font-semibold text-left md:w-1/2 lg:w-8/12 lg:pr-4">
        <span>Automation testing is a process that uses software to test the functionality of a system or application. We can help you develop an automation testing framework that can save time and improve the accuracy of your testing process. This can help you identify and fix issues more quickly, leading to a better user experience and increased efficiency for your business. Our automation testing services include designing the testing strategy, setting up the testing environment, and executing the tests. We can also help you with ongoing maintenance and updates to your automation testing framework as needed.</span>
        </div>

        <div class="w-full md:w-1/2 lg:w-4/12 mt-2 lg:mt-0 lg:mx-1 text-center  ">
            <img src="{{url('../client/images/ser-automation-test.svg')}}"/>
          </div>
      </div>
    </div>




      </article>
    </section>
    <!-- start footer -->
   
    <!-- end footer -->
    </main> --}}

    <main class="w-screen  min-h-screen ">
      <h2 class="text-center">FEATURES</h2>
      <h1 class="page-title text-center text-transparent text-5xl bg-clip-text bg-gradient-to-r from-blue-600 to-violet-600">Our Features and Services.</h1>
      <div class="main-container flex items-center justify-center md:items-start md:justify-center pt-12 md:p-14 md:gap-6 gap-3 flex-wrap text-white">
        <div class="single_box  p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9">Android Development</h3>
          <p>Our team has extensive experience building high-quality Android apps that meet the needs of our clients. We use the latest tools and technologies to ensure that our apps are reliable, user-friendly, and perform well on a variety of devices. We can help you build an Android app from scratch, or we can work with you to improve an existing app. We have experience building a wide range of Android apps, including business apps, productivity apps, games, and more.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-blue-600 text-white text-lg rounded hover:bg-blue-800 '>Connect us</button>
          </div>
        </div>
        <div class="single_box bg-white p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9 text-yellow-500">Cross Platform Mobile App Development</h3>
          <p>In addition to Android development, we also offer cross platform mobile app development for iOS and other platforms. We have a team of experienced mobile app developers who can help you create a high-quality mobile app that meets your specific needs and reaches your target audience. Several tools and frameworks are available for cross-platform mobile apps development, such as Flutter, React Native, and Xamarin. Our team has experience using these tools to build high-quality cross-platform apps for our clients.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-green-600 text-white text-lg rounded hover:bg-pink-800 '>Connect us</button>
          </div>
        </div>
        <div class="single_box bg-white p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9">Web Development</h3>
          <p>Web apps are software applications that are accessed through a web browser, rather than being installed on a device. We have experience building web apps that can help businesses streamline their operations, improve communication, and increase productivity. Our web app development process includes designing the user interface, developing the back-end functionality, and testing the finished product to ensure it meets your requirements.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-blue-600 text-white text-lg rounded hover:bg-blue-800 '>Connect us</button>
          </div>
        </div>
        <div class="single_box bg-white p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9">E-Commerce Development</h3>
          <p>We have experience building ecommerce websites and online stores that can help businesses sell their products and services online. Our ecommerce solutions are user-friendly and can help you manage your inventory, process orders, and handle shipping and returns. We can help you choose the right ecommerce platform for your business, and we can customize it to meet your specific needs. We can also help you with ongoing website maintenance and updates as needed.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-blue-600 text-white text-lg rounded hover:bg-blue-800 '>Connect us</button>
          </div>
        </div>
        <div class="single_box bg-white p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9">Database Consulting</h3>
          <p>At Rasonix, we offer database consulting services to help businesses of all sizes optimize their use of data. Our team of experienced professionals has a strong background in database design, development, and administration, and we can help you get the most out of your data. Our team is committed to delivering top-quality database consulting services that exceed our clients' expectations. We have a strong attention to detail and a dedication to delivering results. We are confident that our expertise and experience make us the ideal partner for your business. We look forward to working with you and helping you optimize your use of data.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-blue-600 text-white text-lg rounded hover:bg-blue-800 '>Connect us</button>
          </div>
        </div>
        <div class="single_box bg-white p-4 rounded shadow-md w-11/12  bg-gradient-to-r from-blue-600 to-violet-600">
          <div class="img-container flex justify-center">
            
            <img src="{{url('../client/images/serv-android-dev.svg')}}" alt="android svg"/>
          </div>
            <h3 class="text-center text-2xl -mt-9">Android Development</h3>
          <p>Our team has extensive experience building high-quality Android apps that meet the needs of our clients. We use the latest tools and technologies to ensure that our apps are reliable, user-friendly, and perform well on a variety of devices. We can help you build an Android app from scratch, or we can work with you to improve an existing app. We have experience building a wide range of Android apps, including business apps, productivity apps, games, and more.</p>
          <div class="flex justify-center mt-3">
          <button class='p-2 bg-blue-600 text-white text-lg rounded hover:bg-blue-800 '>Connect us</button>
          </div>
        </div>
      </div>
    </main>
{{-- <style>
  .android-corner-round{
    border-top-left-radius: 10em;
    border-bottom-right-radius: 10em ;
  }
  
  .cross-corner-round{
    border-top-right-radius: 10em;
    border-bottom-left-radius: 10em ;
  }
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
  /* style should always add into layout */
</style> --}}
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
    transition:0.5s;
  }
  .page-title{
    border:10px solid transparent;
  }
  h2{
    font-weight:400;
    color:blueviolet;
  }
  .single_box:hover{
  transform: scale(1.02);
  } 
  .single_box{
     width:320px;
  min-height:500px;
  border-radius: 20px;
  }
  @media screen and (max-width:676px){
    .single_box{
      width:90%;
    }
  }
</style>
    </x-slot>
</x-layout>
