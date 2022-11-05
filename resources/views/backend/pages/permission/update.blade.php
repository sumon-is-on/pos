@extends('backend.master')
@section('content')
<div class="m-6">
    <h1 class="text-4xl font-semibold" >Edit permission for <strong>{{$role->name}}</strong> role.</h1>
</div>
<form action="{{route('admin.permission.update',$role->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="block p-6 rounded-lg">
        <h4 style="margin-bottom: 10px"> Permission list</h4>
        @foreach ($modules as $module)
            <div class="form-group mb-6 col-span-3">
                <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$module->name}}</label>
            </div>
            @foreach ($module->permission as $key=>$permissionName)
                <div class="form-group mb-6 col-span-3">
                    <input {{in_array($permissionName->id,$role->assignPermissions->pluck('permission_id')->toArray())? 'checked': ''}} name="permission_ids[]" id="{{$module->name}}{{$key+1}}" type="checkbox" value="{{$permissionName->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="{{$module->name}}{{$key+1}}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$permissionName->name}}</label>
                </div>
            @endforeach
        @endforeach
    </div>
    
    <div class="flex  space-x-4 m-7">
        <a href="{{ route('admin.role.index') }}" type="submit" class="  px-6 py-2.5 bg-white-300 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lgtransition duration-150 ease-in-out">
        cancel
        </a>
        <button type="submit" class="  px-6 py-2.5 bg-white-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-green-500  hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lgtransition duration-150 ease-in-out">Add</button>
    </div>    
    
</form>
@endsection