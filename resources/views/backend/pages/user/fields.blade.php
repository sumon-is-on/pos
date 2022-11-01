<div class="block p-6 rounded-lg ">
  <div class="grid grid-cols-12  gap-4">
    <div class="form-group mb-6 col-span-3">
      <label for="name">Name</label><br>
      <input class="form-control block px-3 w-full py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" type="text" name="name" placeholder="Enter Your Name" value="" >
      @error('name')<span class="text-red-600">{{$message}}</span>@enderror
    </div>

    <div class="form-group mb-6 col-span-3">
      <label for="email">Email</label>
      <input class="form-control block px-3 w-full py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" type="email" name="email" placeholder="Enter Your Email" value="">
      @error('email')<span class="text-red-600">{{$message}}</span>@enderror
    </div>

    <div class="form-group mb-6 col-span-3">
      <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <label for="role">Role</label>
          <select name="role_id" id="roleId" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <option value="">Select Role </option>
            <option name="role_id" value="">admin</option>  
          </select>
          @error('role_id')<span class="text-red-600">{{$message}}</span>@enderror
        </div>
      </div>
    </div>
  </div>
</div>