<x-guest-layout>
    <div class="container mx-auto mt-5">

        <div class="w-full md:w-1/2 xl:w-1/2 mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10 hover:bg-gray-100 p-5">

                <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                    <h3 class="    font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary">

                        {{ucwords($message->title)}}

                    </h3>
                    <p class="text-base text-body-color leading-relaxed mb-7">
                        {{Str::limit($message->message, 100)}}
                    </p>
                    <p class="text-xs text-blue-400">{{ $message->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
        </div>
        <a href="/" class="p-3 m-5 bg-white rounded shadow hover:text-blue-300">Back to messages</a>

    </div>

</x-guest-layout>