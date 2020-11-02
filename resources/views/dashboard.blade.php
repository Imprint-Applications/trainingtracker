@extends('layouts.master')
@section('content')
    <h1>Dashbaord</h1>
    <div class="container mx-auto">
        <div class="grid-flow-col auto-cols-max">
            <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Completed Training</div>
                  @foreach($compModules as $c)
                  <p class="text-gray-700 text-base">
                    <ul>
                    <li>{{ $c->module_name }}</li>
                    </ul>
                  </p>
                  @endforeach
                </div>
              </div>
              <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Available Training</div>
                  @foreach($allModules as $a)
                  <p class="text-gray-700 text-base">
                    {{$a->module_name}}
                  </p>
                  @endforeach
                </div>
              </div>
              <div class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Request Training</div>
                  <p class="text-gray-700 text-base">
                    <a href="{{ route('trainingView', Auth::user()->id) }}">Request</a>
                  </p>
                </div>
              </div>
          </div>
      </div>
@endsection
