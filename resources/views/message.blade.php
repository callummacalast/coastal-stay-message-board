<x-guest-layout>
    <div class="container mx-auto">
        <h1 class="font-medium leading-tight text-5xl mt-2 mb-2 text-xl text-center">Coastal Stay Message Board</h1>

        <div class="text-center mt-5 mb-5">
            <p class="text-xs font-semibold">Leave a message on our board</p>
        </div>
        <form action="/" method="post" class="mb-5">
            @csrf
            <div class="mx-auto lg:w-1/2 w-3/4 ">
                <label for="title" class="">Title</label>
                <input class="mt-1 rounded shadow border-0 w-full" value="{{ old('title') }}" type="text" name="title" id="">
                @if ($errors->any())
                @error('title')
                <p class="text-red-500 text-xs">Title is required</p>
                @enderror
                @endif
            </div>

            <div class="mx-auto lg:w-1/2 w-3/4   mt-3">
                <label for="message" class="">Message</label>
                <textarea class="mt-1 rounded shadow border-0 w-full" rows="4" cols="10" type="text" name="message" id=""> {{ old('message') }} </textarea>
                @if ($errors->any())
                @error('message')
                <p class="text-red-500 text-xs">Message is required</p>
                @enderror
                @endif
            </div>

            <div class="mx-auto lg:w-1/2 w-3/4 mt-3 xs:text-center">
                <button class="bg-blue-400 hover:bg-blue-200 text-white p-2 rounded shadow lg:w-1/4 sm:w-1/4 w-3/4 text-center" type="submit">Post Message</button>
            </div>
        </form>

    </div>


</x-guest-layout>