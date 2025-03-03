<div class="formulario-label-fiel">
  {!! Form::label('name', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('descripcion_breve', 'Descripción breve', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('descripcion_breve', null ,['class' => 'formulario-field',
                                                  'rows' => 2, 
                                                  'cols' => 25

  ]) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('tags', 'Tags', array('class' => 'formulario-label ')) !!}
  {!! Form::text('tags', null ,['class' => 'formulario-field']) !!}
</div>





<div class="formulario-label-fiel">
  
  {!! Form::label('title_tag', 'Etiqueta title', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
  Por si quiero darle meta al tag title un valor diferente por cuestiones de SEO.  
  </div>
  {!! Form::text('title_tag', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  
  {!! Form::label('description_tag', 'Etiqueta description', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
  Por si quiero darle meta tag description un valor diferente por cuestiones de SEO.  
  </div>
  {!! Form::text('description_tag', null ,['class' => 'formulario-field']) !!}
</div>






<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('web_belong', 'Web Belong', array('class' => 'formulario-label ')) !!}
  {!! Form::select('web_belong', array_flip(config('constants.web_belong')) , null,['class' => 'formulario-field'] )          !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('lang', 'Idioma', array('class' => 'formulario-label ')) !!}
  {!! Form::select('lang',config('constants.available_langs_select') , null,['class' => 'formulario-field'] )          !!}
</div>



