@extends('layouts.app')

@section('landing_page')
    
<section class="text-black justify-center body-font">
  <div class="container px-5 py-40 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
    <h1 id="name" class="sm:text-4xl font-extrabold font-medium title-font mb-2 text-black">Job Board</h1>
      <p class="lg:w-2/3 py-5 mx-auto leading-relaxed text-base">Job seeking wouldint be a nightmare anymore!</p>
    </div>
    <center>
    <div class="rounded-full bg-white drop-shadow flex max-w-4xl">
            <input
                type="text"
                placeholder="Search job'"
                class="w-full rounded-full py-2 px-4" />
            <button class="bg-blue-400 rounded-full  py-1 px-8 border-2 border-blue-400 text-black  font-medium text-xs leading-tight lowercase rounded-full hover:bg-black hover:bg-blue-600 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                <p class="font-semibold text-base">search</p>
            </button>
   </div>
   </center>
<x-available></x-available>
</section>
@endsection

