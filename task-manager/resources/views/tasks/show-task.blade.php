@extends('layouts/dashboard-layout')

@section('title', $task->title)

@section('content')

        <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
            <h1 class="mb-6 text-7xl font-bold font-heading leading-normal">{{$task->title}}</h1>

            <p>{{$task->description}}</p>
            <div class="my-7">
                <a href="/tasks/{{$task->id}}/edit"
                    class="mr-3 mb-8 py-2 px-5 w-full text-white font-semibold border border-green-700 rounded-xl shadow-4xl focus:ring focus:ring-green-300 bg-green-600 hover:bg-green-700 transition ease-in-out duration-200">
                    Edit
                </a>
                {{-- <a href="/task/{{$task->id}}"
                    class="mr-3
          mb-8 py-2 px-5 w-full text-white font-semibold border border-red-700 rounded-xl shadow-4xl focus:ring focus:ring-red-300 bg-red-600 hover:bg-red-700 transition ease-in-out duration-200">
                    Delete
                </a> --}}


                <form style="display: inline-block;" method="POST" action="/tasks/{{$task->id}} ">
                    @method('DELETE')
                    @csrf

                    <a href="/task/{{$task->id}}" onclick="event.preventDefault();
                        this.closest('form').submit();"
                        class="mr-3
              mb-8 py-2 px-5 w-full text-white font-semibold border border-red-700 rounded-xl shadow-4xl focus:ring focus:ring-red-300 bg-red-600 hover:bg-red-700 transition ease-in-out duration-200">
                        Delete
                    </a>


                    {{-- <a href="#" onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="py-3 px-5 w-full hover:text-gray-700 font-medium rounded-xl bg-transparent transition ease-in-out duration-200"
                        type="button">
                        Logout
                    </a> --}}
                </form>

            </div>
        </div>
    
@endsection