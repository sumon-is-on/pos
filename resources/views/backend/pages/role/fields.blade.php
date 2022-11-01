<div class="block p-6 rounded-lg ">
    <div class="grid grid-cols-12  gap-4">
        <div class="form-group mb-6 col-span-3">
            <label for="name">Name</label><br>
            <input class="form-control block px-3 w-full py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" type="text" name="name" placeholder="Enter Your Name" value="">
            @error('name')<span class="text-red-600">{{$message}}</span>@enderror
        </div>
    </div>
</div>

<div class="block p-6 rounded-lg">
    <h4 style="margin-bottom: 10px"> Permission list</h4>
    @foreach ($modules as $module)
        <div class="form-group mb-6 col-span-3">
            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$module->name}}</label>
        </div>
        @foreach ($module->permission as $key=>$permissionName)
            <div class="form-group mb-6 col-span-3">
                <input name="permission_ids[]" id="{{$module->name}}{{$key+1}}" type="checkbox" value="{{$permissionName->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="{{$module->name}}{{$key+1}}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$permissionName->name}}</label>
            </div>
        @endforeach
    @endforeach
</div>
