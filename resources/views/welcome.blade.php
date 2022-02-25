<x-guest-layout>
    <div class="message-button mt-2 fixed " style="bottom: 2%; right: 2%; z-index: 999;">
        <a class="bg-blue-400 hover:bg-blue-300 text-white relative rounded-full flex p-3 items-center" style="bottom: 2%; right: 2%;" href="/create">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" class="mr-2">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill=" #fff" d="M511.1 63.1v287.1c0 35.25-28.75 63.1-64 63.1h-144l-124.9 93.68c-7.875 5.75-19.12 .0497-19.12-9.7v-83.98h-96c-35.25 0-64-28.75-64-63.1V63.1c0-35.25 28.75-63.1 64-63.1h384C483.2 0 511.1 28.75 511.1 63.1z" />
            </svg><span class="absolute bottom-1 right-2 font-bold">+</span></a>
    </div>
    <div class="container mx-auto">

        <h1 class="text-center text-lead font-semibold text-xl mt-3 mb-3">Messages</h1>
        <div class="container mx-auto  gap-3 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid">
            @foreach ($messages as $message)
            <a href="/messages/{{$message->id}}" class="m-0">

                <div class="card shadow bg-white p-2 rounded lg:w-full h-full shadow m-3">
                    <h3 class="font-bold ">{{ucwords($message->title)}}</h3>
                    <p>{{Str::limit($message->message, 100)}}</p>
                    <p class="text-xs text-blue-400">{{ $message->created_at->diffForHumans() }}</p>

                </div>
            </a>
            @endforeach

        </div>
        <div class=" mx-auto mt-5 p-3">

            {{ $messages->links() }}
        </div>

    </div>
</x-guest-layout>