@extends('layouts/main-layout')

@section('title', 'Movie')

@section('content')


<section class="relative overflow-hidden pb-10">
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center max-w-4xl mx-auto mb-12 divide-y md:divide-y-0 md:divide-x"></div>

        <div
            class="p-0.5 mb-7 border max-w-lg mx-auto bg-gradient-cyan focus-within:ring focus-within:ring-indigo-400 overflow-hidden rounded-xl">
            <form method="GET" action="/search" class="p-0.5 flex flex-col md:flex-row bg-white overflow-hidden rounded-lg">
                <input name="query"
                    class="block flex-1 px-5 py-4 md:py-0 text-base text-gray-500 bg-transparent outline-none placeholder-gray-500 rounded-tl-xl rounded-bl-xl"
                    type="text" placeholder="Enter a Movie Or TV Show" contenteditable="false">
                    <button
                        class="group relative font-heading font-semibold w-full md:w-auto py-5 px-8 text-xs text-white bg-gray-900 hover:bg-gray-800 uppercase overflow-hidden rounded-md tracking-px">
                        <div
                            class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full transition ease-in-out duration-500 bg-gradient-cyan">
                        </div>
                        <p class="relative z-10">Search</p>
                    </button>
                </input>
            </form>
        </div>

    </div>
</section>
<section class="relative pt-28 pb-36 bg-black overflow-hidden">
    <div class="container mx-auto px-4">
        
        <div class="flex flex-wrap -m-3">
            {{-- show poster --}}
            <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                <div class="flex flex-col justify-center h-full relative  overflow-hidden rounded-10">
                    <img class="mx-auto w-full" src="{{$data['poster']}}" alt="">
                </div>
            </div>
            <div class="w-full md:w-3/4 xl:w-3/4 p-3 text-white">
                <h2>
                    {{$data['title']}}
                </h2>
                <div>
                    <span>Genre: </span>
                    @foreach ($data['genre_names'] as $genre)
                    <span>{{$genre}} </span>
                    @endforeach
                </div>
                <div class="tex-xl text-white">
                    <span>Release Date: </span>{{$data['release_date']}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection