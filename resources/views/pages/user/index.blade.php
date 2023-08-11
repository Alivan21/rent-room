@extends('layouts.main')
@section('content')
  <section class="flex flex-col gap-8 p-16">
    <div class="items-center flex py-2 px-3 bg-green-500 rounded-md w-fit">
      <img src="{{ asset('img/icon.png') }}" class="h-8 mr-3" alt="Logo" />
      <span class="self-center text-xl text-gray-50 font-bold whitespace-nowrap">Ruangan</span>
    </div>
    <div class="grid grid-cols-2 gap-4">
      @foreach ($rooms as $room)
        <span class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
          <span
            class="object-cover w-full text-center text-3xl rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
            {{ $room->nama_ruangan }}
          </span>
          <div class="flex flex-col gap-5 justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
              {{ $room->nama_ruangan }}
            </h5>
            <div class="flex flex-col gap-3">
              <span>Fasilitas :
                @foreach ($room->facilities as $facility)
                  <span
                    class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-green-500 rounded-full">
                    {{ $facility->name }}
                  </span>
                @endforeach
              </span>
              <span>Kapasitas : {{ $room->kapasitas }} Orang</span>
              <span>Status Ruangan: {{ $room->status }}</span>
            </div>
          </div>
        </span>
      @endforeach
    </div>
    <a href="/booking" class="flex justify-center items-center no-underline">
      <button
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 w-2/6">
        Booking
      </button>
    </a>
  </section>
@endsection
