<nav class="main-menu navbar-expand-md navbar-light">
    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
        <ul class="navigation clearfix">
            <li class="{{Route::currentRouteName() === 'index'?'current':''}}">
                <a href="{{route('index')}}">
                   Home
                </a>
            </li>
            @foreach($items as $item)
                @php
                    $isCurrent = Illuminate\Support\Str::contains(request()->url(), $item['link']);
                @endphp
                <li class="{{ $isCurrent ? 'current' : '' }} {{ isset($item['submenu']) && count($item['submenu']) > 0 ? 'dropdown' : '' }}">
                    <a href="{{ $item['link'] ? route('page', ['id' => $item['id']]) : '#' }}">
                        {{ $item['title'] }}
                    </a>
                @if(isset($item['submenu']) && count($item['submenu']) > 0)
                        <ul>
                            @foreach($item['submenu'] as $column)
                                <li class="{{isset($column['submenu']) && count($column['submenu']) > 0?'dropdown':''}}">
                                    <a href="{{ $column['link'] ? route('page', ['id' => $column['id']]) : '#' }}">{{ $column['title'] }}</a>
                                    @if(isset($column['submenu']) && count($column['submenu']) > 0)
                                    <ul>
                                        @foreach($column['submenu'] as $subitem)
                                        <li>
                                            <a href="{{ $subitem['link'] ? route('page', ['id' => $subitem['id']]) : '#' }}">{{ $subitem['title'] }}</a>

                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>
            @endforeach
        </ul>
    </div>
</nav>









