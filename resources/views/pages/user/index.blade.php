@extends('layouts.app')
@section('content')
  <section class="flex flex-col gap-8 p-16">
    <div class="items-center flex py-2 px-3 bg-green-500 rounded-md w-fit">
      <img src="{{ asset('img/icon.png') }}" class="h-8 mr-3" alt="Logo" />
      <span class="self-center text-xl text-gray-50 font-bold whitespace-nowrap">Ruangan</span>
    </div>
    <div class="flex justify-center">
      <input type="date" name="date"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-green-500 focus:border-green-500 block w-2/6 text-center p-2.5">
    </div>
    <div class="grid grid-cols-2 gap-4">
      <span class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <span
          class="object-cover w-full text-center text-3xl rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
          R1
        </span>
        <div class="flex flex-col gap-5 justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Ruangan 1
          </h5>
          <div class="flex flex-col gap-3">
            <span>Fasilitas : AC</span>
            <span>Kapasitas : 20 Orang</span>
            <span>Status Ruangan: Baik</span>
          </div>
        </div>
      </span>
      <span class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <span
          class="object-cover w-full text-center text-3xl rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
          R1
        </span>
        <div class="flex flex-col gap-5 justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Ruangan 1
          </h5>
          <div class="flex flex-col gap-3">
            <span>Fasilitas : AC</span>
            <span>Kapasitas : 20 Orang</span>
            <span>Status Ruangan: Baik</span>
          </div>
        </div>
      </span>
      <span class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <span
          class="object-cover w-full text-center text-3xl rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
          R1
        </span>
        <div class="flex flex-col gap-5 justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Ruangan 1
          </h5>
          <div class="flex flex-col gap-3">
            <span>Fasilitas : AC</span>
            <span>Kapasitas : 20 Orang</span>
            <span>Status Ruangan: Baik</span>
          </div>
        </div>
      </span>
      <span class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <span
          class="object-cover w-full text-center text-3xl rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
          R1
        </span>
        <div class="flex flex-col gap-5 justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            Ruangan 1
          </h5>
          <div class="flex flex-col gap-3">
            <span>Fasilitas : AC</span>
            <span>Kapasitas : 20 Orang</span>
            <span>Status Ruangan: Baik</span>
          </div>
        </div>
      </span>
    </div>
  </section>
@endsection
