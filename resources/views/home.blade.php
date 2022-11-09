@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center p-8">
        <div class="w-96 bg-white p-6 rounded-lg animate__animated animate__swing">
            <form action="{{ route('room.store') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-4">
                    <label for="" class="mb-3 text-[#7743DB]">Nama</label>
                    <input type="text"  name="name" class="py-2 px-4 ring-1 ring-slate-500 rounded-lg text-[#7743DB] focus:outline-none focus:ring-1 focus:ring-[#7743DB] placeholder:text-slate-500 focus:placeholder:text-[#7743DB] placeholder:text-sm" placeholder="Masukkan nama kamu">
                </div>
                <button type="submit" class="py-2 px-4 bg-[#7743DB] text-white rounded-lg hover:bg-[#3B3486] ease-in duration-300 float-right">Submit</button>
            </form>
        </div>
    </div>
@endsection
