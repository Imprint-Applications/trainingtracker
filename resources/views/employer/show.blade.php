@extends('layouts.master')

@section('content')
<div class="flex flex-row bg-gray-200">
    <div class="flex flex-col bg-gray-200">
        <a href="{{ route('employerCreate') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Create Employer</a>
    </div>
</div>

<div class="container">
    <div class="flex flex-row bg-gray-200">
        <div class="flex flex-col bg-gray-200">
            @foreach($employer as $e)
            <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $e->employer_name }}</div>
                      <p class="text-gray-700 text-base">{{ $e->employer_address }}</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                          <p class="text-gray-600">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
