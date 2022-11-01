@extends('backend.master')
@section('content')
<div class="m-6">
    <h1 class="text-4xl font-semibold" >ADD A NEW ROLE</h1>
</div>
<form action="{{route('admin.role.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @includeIf('backend.pages.role.fields')
    <div class="flex  space-x-4 m-7">
        <a href="{{ route('admin.role.index') }}" type="submit" class="  px-6 py-2.5 bg-white-300 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lgtransition duration-150 ease-in-out">
        cancel
        </a>
        <button type="submit" class="  px-6 py-2.5 bg-white-600 text-black font-medium text-xsleading-tight uppercase rounded shadow-md hover:bg-green-500  hover:text-white hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lgtransition duration-150 ease-in-out">Add</button>
    </div>    
    
</form>
@endsection