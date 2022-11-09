@extends('layouts.app')

@section('content')
    <div class="flex justify-center p-8">
        <div class="w-96 bg-white p-6 rounded-lg animate__animated animate__swing">
            <h2 class="font-medium text-2xl text-center text-[#7743DB]">{{ $room->name }}</h2>
            <p class="my-3 text-center text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, expedita.</p>
            <form action="{{ route('room.send-message', $room->slug) }}" method="POST">
                @csrf
                <input type="text"  name="message" class="w-full mt-3 mb-4 py-2 px-4 ring-1 ring-slate-500 rounded-lg text-[#7743DB] focus:outline-none focus:ring-1 focus:ring-[#7743DB] placeholder:text-slate-500 focus:placeholder:text-[#7743DB] placeholder:text-sm" placeholder="Kasih pesan buat {{ $room->name }}">
                <div class="flex justify-between items-center">
                    <a href="/" class="text-sm">Back to home</a>
                    <button type="submit" class="py-2 px-4 bg-[#7743DB] text-white rounded-lg hover:bg-[#3B3486] ease-in duration-300 float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <h1 class="p-6 font-medium text-xl text-center">Messages ({{ $room->message->count() }})</h1>

    <div class="flex flex-col items-center gap-4 pt-2 pb-8 animate__animated animate__shakeX">
        @foreach ($messages as $message)
        <div class="w-[330px] md:w-96 bg-white p-6 rounded-lg flex justify-between items-center">
            <p class="text-md">{{ $message->body }}</p>
            <span class="text-[12px]">{{ $message->created_at->diffForHumans() }}</span>
        </div>
        @endforeach
    </div>
@endsection
