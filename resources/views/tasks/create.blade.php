@extends('layouts.app')

@section('content')

<!-- contents -->
  <h1>メッセージ新規作成ページ</h1>
  <div class='row'> 
 <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
  {!! Form::model($task, ['route' =>'tasks.store']) !!}
   <div class='form-group'>
     {!! Form::label('status', '職業:') !!}
        {!! Form::text('status', null, ['class'=>'form-control'] )!!}
        
    </div>    
     <div class='form-group'>
     {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
     </div>
     
       {!! Form::submit('投稿', ['class'=>'btn btn-warning'] )  !!}
      
      {!! Form::close() !!}
      </div>
      </div>
@endsection