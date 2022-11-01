<div class="block p-6 rounded-lg ">
    <div class="grid grid-cols-12  gap-4">
        <div class="form-group mb-6 col-span-3">
            <label for="name">Name</label><br>
            <input class="form-control block px-3 w-full py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" type="text" name="name" placeholder="Enter Your Name" value="">
            @error('name')<span class="text-red-600">{{$message}}</span>@enderror
        </div>
  
        <div class="form-group mb-6 col-span-3">
            <label for="email">Slug</label>
            <input class="form-control block px-3 w-full py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" type="email" name="slug" placeholder="Enter Your Email" value="">
            @error('email')<span class="text-red-600">{{$message}}</span>@enderror
        </div>
    </div>
</div>