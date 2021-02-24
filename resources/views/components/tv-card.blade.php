<div class="mt-8">
    <a href="{{ route('tv.show', $tvshow['id']) }}">
        <img src="{{$tvshow['poster_path']}}" alt="poster" class="hover:opacity-75
        transition duration-150 ease-in-out">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvshow['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{ $tvshow['name']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <img src="https://img.icons8.com/emoji/20/ffffff/star-emoji.png"/>
            <span class="ml-1">{{$tvshow['vote_average']}}</span>
            <span class="mx-2">|</span>
            <span>{{$tvshow['first_air_date']}}</span>
        </div>
        <div class="text-gray-400 text-sm">{{$tvshow['genres']}}</div>
    </div>
</div>