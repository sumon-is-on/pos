@extends('backend.master')
@section('content')
<div class="m-6">
    <h1 class="text-4xl font-semibold" >ADD A NEW USER</h1>
</div>
<form action="" method="" enctype="multipart/form-data">
    @csrf
    @includeIf('backend.pages.user.fields')
    <div class="form-group m-6 col-span-3">
        <label for="phone">Password</label>
        <input class="form-control block px-3  py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phone" type="password" name="phone" placeholder="Enter Your Phone number" value="">
        @error('phone')<span class="text-red-600">{{$message}}</span>@enderror
    </div>
    <div class="flex  space-x-4 m-7">
        <a href="{{ route('user.index') }}" type="submit" class="  px-6 py-2.5 bg-white-300 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lgtransition duration-150 ease-in-out">
        cancel
        </a>
        <button type="submit" class="  px-6 py-2.5 bg-white-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-green-500  hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lgtransition duration-150 ease-in-out">Add</button>
    </div>    
    
</form>
@endsection