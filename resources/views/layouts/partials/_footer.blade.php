<footer>
    <p class="text-gray-400">
        &copy; Copyright {{date('Y')}} 

        @if (! Route::is('about'))
        &middot; <a class="text-red-500 hover:text-red-600 underline" href="{{route('about')}}">About Us</a>
        @endif
       
    </p>
</footer>