<x-guest-layout>
    <div class="message-button mt-2 fixed " style="bottom: 2%; right: 2%; z-index: 999;">
        <a class="bg-blue-400 hover:bg-blue-300 text-white relative rounded-full shadow-lg flex p-3 items-center mr-3" style="bottom: 2%; right: 2%;" href="/create">
            Leave your message
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" class="mr-4 ml-4">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill=" #fff" d="M511.1 63.1v287.1c0 35.25-28.75 63.1-64 63.1h-144l-124.9 93.68c-7.875 5.75-19.12 .0497-19.12-9.7v-83.98h-96c-35.25 0-64-28.75-64-63.1V63.1c0-35.25 28.75-63.1 64-63.1h384C483.2 0 511.1 28.75 511.1 63.1z" />
            </svg></a>
    </div>


    <!-- ====== Cards Section Start -->
    <section class="pt-5 lg:pt-[60px] pb-5 lg:pb-20 ">
        <div class="container mx-auto">
            <h1 class="text-center text-lead font-semibold text-xl mt-3 mb-3">Messages</h1>

            <div class="flex flex-wrap mx-4 sm:p-3">
                @foreach ($messages as $message)

                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10 hover:bg-gray-100">

                        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                            <h3>
                                <a href="/messages/{{$message->id}}" class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        ">
                                    {{ucwords($message->title)}}
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-7">
                                {{Str::limit($message->message, 100)}}
                            </p>
                            <p class="text-xs text-blue-400">{{ $message->created_at->diffForHumans() }}
                            </p>

                            <a href="/messages/{{$message->id}}" class="
                     inline-block
                     py-2
                     px-7
                     mb-3
                     mt-3
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-blue-500
                     transition
                     ">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class=" mx-auto mt-5 p-3">

                {{ $messages->links() }}
            </div>
        </div>
    </section>
    <!-- ====== Cards Section End -->
</x-guest-layout>