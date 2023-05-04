<x-layout>
<x-slot name='title'>Contact Us</x-slot>
<x-slot name='content'>

    <main class="w-full">
        <!-- Start of 'Contact' Landing -->
        <section class="pt-16">
          <!-- Contact Info + Form Container -->
          <div class="w-full lg:flex gap:10 contact-body justify-center overflow-hidden">
            <div class="contact_info relative mx-2 overflow-visible flex-grow justify-center flex items-center  py-7 lg:py-24 bg-gradient-to-bl from-red-600 to-blue-700">
              <!-- Contact Info -->
              <div class="pl-4 justify-center">
                <h2 class="text-5xl mb-5 ml-20 text-blue-50">Contact Us</h2>
                <div class="text-center">
                  <br>
                  <div class="flex items-center ml-20 mb-10">
                    <div class="w-10 h-10 flex items-center justify-center p-2 rounded-full mr-6 bg-transparent">
                      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_72_6779)">
                        <path d="M8.82667 14.3867C10.7467 18.16 13.84 21.24 17.6133 23.1733L20.5467 20.24C20.9067 19.88 21.44 19.76 21.9067 19.92C23.4 20.4133 25.0133 20.68 26.6667 20.68C27.4 20.68 28 21.28 28 22.0133V26.6667C28 27.4 27.4 28 26.6667 28C14.1467 28 4 17.8533 4 5.33333C4 4.6 4.6 4 5.33333 4H10C10.7333 4 11.3333 4.6 11.3333 5.33333C11.3333 7 11.6 8.6 12.0933 10.0933C12.24 10.56 12.1333 11.08 11.76 11.4533L8.82667 14.3867Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_72_6779">
                        <rect width="32" height="32" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div>
                      <span class="text-2xl text-white">+91-9437368701</span>
                    </div>
                  </div>
                </div>
                <div class="flex items-center ml-20 mb-10">
                  <div class="w-10 h-10 flex items-center justify-center p-2 rounded-full mr-6 bg-transparent">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_72_6782)">
                      <path d="M26.6667 5.33334H5.33341C3.86675 5.33334 2.68008 6.53334 2.68008 8.00001L2.66675 24C2.66675 25.4667 3.86675 26.6667 5.33341 26.6667H26.6667C28.1334 26.6667 29.3334 25.4667 29.3334 24V8.00001C29.3334 6.53334 28.1334 5.33334 26.6667 5.33334ZM26.6667 10.6667L16.0001 17.3333L5.33341 10.6667V8.00001L16.0001 14.6667L26.6667 8.00001V10.6667Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_72_6782">
                      <rect width="32" height="32" fill="white"/>
                      </clipPath>
                      </defs>
                      </svg>
                      
                  </div>
                  <div>
                    <span class="text-2xl text-white underline">raja@rasonix.com</span>
                  </div>
                </div>
                <div class="flex items-center ml-20 mb-10">
                  <div class="w-10 h-10 flex items-center justify-center p-2 rounded-full mr-6 bg-transparent">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_72_6785)">
                      <path d="M16.0001 2.66667C10.8401 2.66667 6.66675 6.84 6.66675 12C6.66675 19 16.0001 29.3333 16.0001 29.3333C16.0001 29.3333 25.3334 19 25.3334 12C25.3334 6.84 21.1601 2.66667 16.0001 2.66667ZM16.0001 15.3333C14.1601 15.3333 12.6667 13.84 12.6667 12C12.6667 10.16 14.1601 8.66667 16.0001 8.66667C17.8401 8.66667 19.3334 10.16 19.3334 12C19.3334 13.84 17.8401 15.3333 16.0001 15.3333Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_72_6785">
                      <rect width="32" height="32" fill="white"/>
                      </clipPath>
                      </defs>
                      </svg>
                      
                  </div>
                  <div>
                    <span class="text-2xl text-white">Bengaluru, India-397482</span>
                  </div>
                </div>
                <div class="relative h-150 w-150">
                  <br>
                  <img src="{{url('../client/images/c_contact_page.svg')}}" alt="contact"/>
                  </div>
              </div>
    
            </div>
            <!-- Contact Form -->
            <!-- <div class="flex-grow justify-center md:rounded-br-10 wrap-layer contact_form">         px-8 lg:px-20 py-20 lg:py-48 -->
            <div class=" relative mx-2 flex-grow justify-center flex items-center  py-7 lg:py-24 bg-gradient-to-br from-blue-700 to-red-600 corner-round-contact">  
            <div class="flex justify-center flex-wrap ">
                <div>
                  <h2 class="text-4xl lg:text-4xl font-medium mb-1 text-white">Get a Quote</h2>
                  <span class="text-sm mb-4 text-white">Pop us a message and we'll get in touch.</span>
                  <!-- Form -->
                  
                  <form method="POST" action="/contact" name="contact" class="text-white quicksand flex-wrap relative">
                    @csrf
                        <p class="hidden">
                          <label>Don’t fill this out if you’re human: <input name="bot-field" /></label>
                        </p>
                        <div class="text-white input-animated bg-transparent">
                            
                          <input type="text" id="name" name="name" placeholder="the placeholder" required minlength="2" maxlength="20" class="bg-transparent  text-white">
                          <label class="label-name input-animated bg-transparent text-white"><span class="content-name input-animated bg-transparent text-white">Name</span></label>  
                        </div>
                        <div class="input-animated bg-transparent">
                            
                          <input type="text" id="name" name="company_name" placeholder="the placeholder" required minlength="2" maxlength="20" class="bg-transparent text-white">
                          <label class="label-name bg-transparent"><span class="content-name bg-transparent text-white">Organisation Name</span></label>  
                        </div>
                        <div class="input-animated bg-transparent">
                            <input type="email" id="email" name="business_email" placeholder="the placeholder" required class="bg-transparent text-white">
                            <label class="label-email bg-transparent"><span class="content-email bg-transparent text-white">Business Email Address</span></label>  
                        </div>
                        <div class="input-animated bg-transparent">
                            <input type="number" id="phone" name="phone_number" placeholder="Must contain 10 digits" required minlength="4" maxlength="11" class="bg-transparent text-white">
                            <label class="label-name bg-transparent"><span class="content-name bg-transparent text-white">Phone Number</span></label>  
                        </div>
                        <div class="input-animated bg-transparent">
                            <textarea name="message" placeholder="Your Question" id="question" cols="30" rows="3" minLength="5"
                              maxLength="1000" required class="bg-transparent text-white"></textarea>
                            <label class="label-name bg-transparent text-white"><span class="content-name bg-transparent text-white">Your question</span></label>
                        </div>
                        <br>
                        <button type="submit" class="w-full font-semibold rounded-md uppercase text-center px-5 py-3 shadow-md my-4 lg:mb-0 bg-gradient-to-r from-red-600 to-blue-800 text-white focus:ring-4 focus:ring-blue-600 hover:from-blue-800 hover:to-red-600">Send Your message</button>               <!---->
                        
                    </form>
                </div>
              </div>
            </div>
        </div>
        <br><br><br>
    </section>
    </main>
    <style>
        input, select, textarea {
          color: white;
          }
        .corner-round-contact{
          border-bottom-left-radius:10em;
          border-top-right-radius: 10em;
          border: 2em;
          border-color: white;;
        }
        .wrap-layer{
            position: relative;
         }
         /* .contact-padding{
          padding-left: 10em;
        padding-right: 10em;
         } */
         .contact-details{
          border-top-left-radius: 15em;
          border-bottom-right-radius: 15em;
        
         }
         .contact-body{
              margin-bottom: 10px;
              margin-left: 10px;
              margin-right: 10px;
              margin-top: 10px;
              padding-right: 10px;
           }
           
      .contact_info {
        border-top-left-radius: 10em;
        border-bottom-right-radius: 10em;
        background-position: center;
        background-size: cover;
        
      }
         .rounded-br-10 {
        border-bottom-left-radius: 200px;
      }
        </style>
</x-slot>


</x-layout>

