{{-- Form starts --}}
    <form action="to_submit" method="post">
      @csrf

        <div class="flex flex-col justify-center min-h-screen py-6 bg-gray-100 sm:py-12">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 mx-8 bg-white shadow md:mx-0 rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
        <div class="flex items-center space-x-5">
          <div class="flex items-center justify-center flex-shrink-0 font-mono text-2xl text-yellow-500 bg-yellow-200 rounded-full h-14 w-14">i</div>
          <div class="self-start block pl-2 text-xl font-semibold text-gray-700">
            <h2 class="leading-relaxed">Add a Buddy to a Family</h2>
            <p class="text-sm font-normal leading-relaxed text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col">
              <label class="leading-loose">Name</label>
              <input type="text"  id="name" name="name" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder=" UserName">
                @error('name')
                    <span class="">{{$message}}</span>
                @enderror
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Email</label>
              <input type="text" id='email' name='email' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Email">
                @error('email')
                    <div class="-m-2 text-center">
                        <div class="p-2">
                            <div class="inline-flex items-center p-2 text-sm leading-none text-pink-600 bg-white rounded-full shadow text-teal">
                            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">Red</span>
                            <span class="inline-flex px-2">{{$message}}/span>
                            </div>
                        </div>
                @enderror
            </div>

            <div class="flex flex-col">
              <label class="leading-loose">Phone</label>
              <input type="text" name='phone' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Mobile Number">
                @error('phone')
                    <div class="-m-2 text-center">
                        <div class="p-2">
                            <div class="inline-flex items-center p-2 text-sm leading-none text-pink-600 bg-white rounded-full shadow text-teal">
                            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">Red</span>
                            <span class="inline-flex px-2">{{$message}}/span>
                            </div>
                        </div>
                @enderror
            </div>
            
            {{-- gender --}}
            <div class="flex flex-col">
              <label class="leading-loose">Gender</label>
                    <div class="relative inline-flex ">
                        <select name='gender' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" ">
                        <option>Choose a Gender</option>
                        <option>MALE</option>
                        <option>FEMALE</option>
                        <option>Others</option>
                       
                        </select>
                    </div>
            </div>
            {{-- gender end --}}
            {{-- fee --}}
            <div class="flex flex-col">
              <label class="leading-loose">Plan</label>
                    <div class="relative inline-flex ">
                        <select name='plan' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" ">
                        <option>Choose Plan</option>
                        <option> 1 Month Plan</option>
                        <option> 3 Months Plan</option>
                        <option> 6 Months Plan</option>
                        <option> 9 Months Plan</option>
                        <option>1 Year Plan</option>
                        <option>2 Years Plan</option>
                        <option>3 Years Plan</option>
                        >
                       
                        </select>
                    </div>
            </div>
            {{-- fee end --}}

            <div class="flex items-center space-x-4">
              <div class="flex flex-col">
                <label class="leading-loose">Start</label>
                <div class="relative text-gray-400 focus-within:text-gray-600">
                  <input type="date" name='startDate' class="w-full py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="25/02/2020">
                  <div class="absolute left-3 top-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">End</label>
                <div class="relative text-gray-400 focus-within:text-gray-600">
                  <input type="date" name='endDate' class="w-full py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="26/02/2020">
                  <div class="absolute left-3 top-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col">
              <label class="leading-loose">Amount to be Paid</label>
              <input type="text" name='amount' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" placeholder="Amount">
            </div>
          </div>
          <div class="flex items-center pt-4 space-x-4">
              <button class="flex items-center justify-center w-full px-4 py-3 text-gray-900 rounded-md focus:outline-none">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
              </button>
              <button type="submit" name="submit" class="flex items-center justify-center w-full px-4 py-3 text-white bg-blue-500 rounded-md focus:outline-none">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </form>

 {{-- Form ends --}}