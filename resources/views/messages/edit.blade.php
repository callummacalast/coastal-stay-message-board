<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Message') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mb-5">

        <form action="/" method="post" class="mt-5">
            @csrf
            <div class="mx-auto lg:w-1/2 w-3/4 ">
                <label for="title" class="">Title</label>
                <input class="mt-1 rounded shadow border-0 w-full" value="{{ old('title', $message->title) }}" type="text" name="title" id="">
                @if ($errors->any())
                @error('title')
                <p class="text-red-500 text-xs">Title is required</p>
                @enderror
                @endif
            </div>

            <div class="mx-auto lg:w-1/2 w-3/4  mt-3">
                <label for="message" class="">Message</label>
                <textarea class="mt-1 rounded shadow border-0 w-full" rows="4" cols="10" type="text" name="message" id=""> {{ old('message', $message->message) }} </textarea>
                @if ($errors->any())
                @error('message')
                <p class="text-red-500 text-xs">Message is required</p>
                @enderror
                @endif
            </div>

            <div class="mx-auto lg:w-1/2 w-3/4 mt-3">
                <button class="bg-blue-400 hover:bg-blue-200 text-white p-2 rounded shadow" type="submit">Update Message</button>
            </div>
        </form>

    </div>


</x-app-layout>