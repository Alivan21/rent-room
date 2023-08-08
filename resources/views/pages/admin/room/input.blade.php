@extends('layouts.admin')
@section('content')
  <section class="flex flex-col gap-4 container">
    <h1 class="text-xl font-semibold">Input Ruangan</h1>
    <hr>
    <form class="flex flex-col gap-6">
      <div>
        <label for="room_name" class="block mb-2 text-sm font-medium text-gray-900">
          Nama Ruangan
        </label>
        <input type="text" id="room_name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
          placeholder="Ruangan 1" required>
      </div>
      <div>
        <label for="room_capacity" class="block mb-2 text-sm font-medium text-gray-900">
          Kapasitas Ruangan
        </label>
        <input type="number" id="room_capacity"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
          placeholder="50" required>
      </div>
      <div>
        <label for="room_name" class="block mb-2 text-sm font-medium text-gray-900">
          Fasilitas Ruangan
        </label>
        <div class="flex items-center mb-4">
          <input id="ac" type="checkbox" value="AC"
            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2">
          <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">AC</label>
        </div>
        <div class="flex items-center">
          <input id="proyektor" type="checkbox" value="Proyektor"
            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2">
          <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Proyektor</label>
        </div>
      </div>
      <div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">
          Status Ruangan
        </label>
        <select id="status"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
          <option selected>Pilih Salah Satu</option>
          <option value="Baik">Baik</option>
          <option value="Renovasi">Renovasi</option>
        </select>
      </div>
      <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ringgreene-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        Submit
      </button>
    </form>
  </section>
@endsection
