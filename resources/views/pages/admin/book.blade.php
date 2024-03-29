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
          </tr>
        </thead>
        <tbody>
          @foreach ($booking as $book)
            <tr class="bg-white border-b font-medium text-gray-900">
              <td class="px-6 py-4">
                {{ $loop->iteration }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{ $book->tanggal }}
              </td>
              <td class="px-6 py-4">
                {{ $book->nama }}
              </td>
              <td class="px-6 py-4">
                {{ $book->ruangan->nama_ruangan }}
              </td>
              <td class="px-6 py-4">
                {{ $book->jam_mulai }}
              </td>
              <td class="px-6 py-4">
                {{ $book->jam_selesai }}
              </td>
              <td class="px-6 py-4">
                {{ $book->jumlah }}
              </td>
              <td class="px-6 py-4">
                {{ $book->agenda }}
              </td>
              <td class="px-6 py-4">
                {{ $book->status }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection
