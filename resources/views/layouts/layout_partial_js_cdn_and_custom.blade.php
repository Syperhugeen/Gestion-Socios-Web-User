
@if(Auth::guest())
     <script defer src="{{ elixir('js/production.js')}}"   ></script>   
 @else

      @if(Auth::user()->role ==='adminMcos522')
       <script defer src="{{ elixir('js/dev.js')}}"   ></script>   
      @else
       <script defer src="{{ elixir('js/production.js')}}"   ></script>    
      @endif
@endif


<script src="https://cdn.jsdelivr.net/npm/axios@1.6.2/dist/axios.min.js" integrity="sha256-VQ8m0Dd2xi0z6QuAKMa04ufRMBxv92nP+UWSqT33HGg=" crossorigin="anonymous"></script>

@yield('vue-componenetes-cdn')

