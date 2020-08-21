
@if(Auth::guest())
     <script defer src="{{ elixir('js/production.js')}}"   ></script>   
 @else

      @if(Auth::user()->role ==='adminMcos522')
       <script defer src="{{ elixir('js/dev.js')}}"   ></script>   
      @else
       <script defer src="{{ elixir('js/production.js')}}"   ></script>    
      @endif
@endif

@yield('vue-componenetes-cdn')

