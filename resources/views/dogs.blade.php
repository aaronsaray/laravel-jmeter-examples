<x-guest-layout>
    <h1 class="text-xl">Search Dogs</h1>
    <form action="{{ route('dogs') }}" method="GET">
        <input name="q" value="{{ old('q', $q) }}" class="border border-sky-500"><button type="submit" style="background: blue; color: white; padding: 5px 10px; margin-left: 1rem">Go</button>
    </form>

    @if($q)
        <hr style="margin: 1rem 0">

        @if($results->isEmpty())
            There are no results.
        @else
            <ul>
                @foreach($results as $dog)
                    <li class="dog-result">{{ $dog->name }}: {{ $dog->breed }}</li>
                @endforeach
            </ul>
        @endif
    @endif
</x-guest-layout>
