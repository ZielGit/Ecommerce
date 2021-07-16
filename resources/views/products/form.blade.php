{!! Form::open(['url' => '/productos','class' => 'app-form']) !!}
<div>
    {!! Form::label('title','Título del producto') !!}
    {!! Form::text('title','',['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('description','Descripción del producto') !!}
    {!! Form::textarea('description','',['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('price','Precio del producto') !!}
    {!! Form::number('price',0,['class' => 'form-control']) !!}
</div>

<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close() !!}