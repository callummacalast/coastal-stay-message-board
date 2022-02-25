<x-guest-layout>
    <div class="container mx-auto text-center">
        <h2 class="font-bold text-xl">{{ ucwords($message->title) }}</h2>
        <p class="w-1/2 mx-auto">{{ $message->message }}</p>
    </div>
</x-guest-layout>