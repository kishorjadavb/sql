{{-- Form starts --}}
    <form action="{{route('auth.signupSubmit')}}" method="post">
      @csrf

        <div class="flex flex-col justify-center min-h-screen py-6 bg-gray-100 sm:py-12">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 mx-8 bg-white shadow md:mx-0 rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="flex items-center justify-center flex-shrink-0 font-mono text-2xl text-yellow-500 bg-yellow-200 rounded-full h-14 w-14">i</div>
          <div class="self-start block pl-2 text-xl font-semibold text-gray-700">
            <h2 class="leading-relaxed">SignUp Form</h2>
            <p class="text-sm font-normal leading-relaxed text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">

            
            
            <div class="flex flex-col">
              <label class="leading-loose">Email</label>
              <input type="email" id='email' name='email' value='{{old('email')}}' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Email">
                @error('email')
                    <div class="-m-2 text-center">
                        <div class="p-2">
                            <div class="inline-flex items-center p-2 text-sm leading-none text-pink-600 ">
                            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">Error</span>
                            <span class="inline-flex px-2">{{$message}}</span>
                            </div>
                        </div>
                @enderror
            </div>
            
            <div class="flex flex-col">
              <label class="leading-loose">User Name</label>
              <input type="text" name='name' value='{{old('name')}}' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="User Name">
                    @error('username')
                    <div class="-m-2 text-center">
                        <div class="p-2">
                            <div class="inline-flex items-center p-2 text-sm leading-none text-pink-600 ">
                            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">Error</span>
                            <span class="inline-flex px-2">{{$message}}</span>
                            </div>
                        </div>
                @enderror

                 <label class="leading-loose">Phone</label>
              <input type="text" name='phone' value='{{old('phone')}}' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="User Name">
                    @error('phone')
                    <div class="-m-2 text-center">
                        <div class="p-2">
                            <div class="inline-flex items-center p-2 text-sm leading-none text-pink-600 ">
                            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">Error</span>
                            <span class="inline-flex px-2">{{$message}}</span>
                            </div>
                        </div>
                @enderror
            </div>
          

            <div class="flex flex-col">
              <label class="leading-loose">Password</label>
              <input type="password" name='password' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Password">
                
            </div>

            <div class="flex flex-col">
              <label class="leading-loose">Confirm Password</label>
              <input type="password" name='cpassword' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Confirm Password">
                
            </div>
          </div>
          
          </div>

          
          <div class="flex items-center pt-4 space-x-4">
              
              <button type="submit" name="submit" class="flex items-center justify-center w-full px-4 py-3 text-white bg-blue-500 rounded-md focus:outline-none">Sign Up</button>
          </div>
          <div class="">
              <a href="login" class="flex items-center justify-center w-full px-4 py-3 text-blue-900 rounded-md focus:outline-none">
                 Already Have an Account ?
              </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
    </form>

 {{-- Form ends --}}