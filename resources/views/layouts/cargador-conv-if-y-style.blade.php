{{-- C a r g a d o r   d e   l a   p á g i n a   r e s p o n d e   
     a   p r o p i e d a d    d e   V u e   p a r a   c e r r a r   --}}


   <transition name="fade">
         <div v-if="cargo_body" class="cargador-principal p-5 d-flex flex-column align-items-center">
            <p class="text-white">Cargando ...</p>
         </div> 
   </transition>
