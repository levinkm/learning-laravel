
<x-layout>
    @unless (count($listings)==0)



        @foreach ($listings as $item)
            <h2>
                <a href="/listings/{{$item['id']}}">
                    {{$item['title']}}
                </a>
            </h2> <br/>
            <h4>{{$item['posititon']}}</h4><br/>
            <p>{{$item->exerpt}}</p><br/>
        @endforeach

        @else
            <p>No listings found</p>

    @endunless

</x-layout>


