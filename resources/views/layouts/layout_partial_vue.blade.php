


  <script  type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
      @yield('vue-componenetes-externos')
      @include('paginas.home.vue.VueLazyload')
      @yield('vue')
      @yield('custom-javascript-no-vue')
    });
  </script>
