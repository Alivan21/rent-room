@extends('layouts.admin')
@section('main')
  <section class="flex flex-col gap-4 container">
    <div class="flex gap-3 items-center bg-gray-50 p-3 rounded">
      <i class="fa-solid fa-user"></i>
      <h1>Berikut data Booking Hari ini!</h1>
    </div>
    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500 rounded">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 rounded">
          <tr>
            <th scope="col" class="px-6 py-3">
              #
            </th>
            <th scope="col" class="px-6 py-3">
              ID
            </th>
            <th scope="col" class="px-6 py-3">
              Tanggal
            </th>
            <th scope="col" class="px-6 py-3">
              Nama
            </th>
            <th scope="col" class="px-6 py-3">
              Ruangan
            </th>
            <th scope="col" class="px-6 py-3">
              Jam Mulai
            </th>
            <th scope="col" class="px-6 py-3">
              Jam Selesai
            </th>
            <th scope="col" class="px-6 py-3">
              Jumlah Orang
            </th>
            <th scope="col" class="px-6 py-3">
              Agenda
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b font-medium text-gray-900">
            <td class="px-6 py-4">
              1
            </td>
            <td class="px-6 py-4 ">
              BO0001
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              03 Agustus 2023
            </td>
            <td class="px-6 py-4">
              Super
            </td>
            <td class="px-6 py-4">
              R2
            </td>
            <td class="px-6 py-4">
              07:00
            </td>
            <td class="px-6 py-4">
              10:00
            </td>
            <td class="px-6 py-4">
              10
            </td>
            <td class="px-6 py-4">
              Rapat
            </td>
            <td class="px-6 py-4">
              Selesai
            </td>
            <td class="px-6 py-4 flex flex-col gap-2">
              <button type="button"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2">
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
              <button type="button"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm p-2">
                <i class="fa-solid fa-trash-can"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
@endsection
