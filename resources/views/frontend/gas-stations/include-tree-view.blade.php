@if(isset($childGasStation))
    <li>
        <div>
            <h4><a href="{{ route('gas-details', ['slug' => $childGasStation->slug]) }}" class="nav-link" style="font-size:12px">{{ $childGasStation->name ?? 'Parent station' }}</a></h4>
        </div>
        @if(isset($childGasStation->gasStations) && count($childGasStation->gasStations))
        <ol>

                @foreach($childGasStation->gasStations as $childStation)
                    @include('frontend.gas-stations.include-tree-view', ['childGasStation' => $childStation])
                @endforeach
        </ol>
        @endif
    </li>
@endif
