@extends('layouts.fishoapp')

@section('title', '釣果日誌')

<!-- @section('menubar')
   @parent
@endsection -->

@section('content')
   <table>
   <tr><th></th><th>釣った人</th><th>釣った魚</th><th>釣った日</th></tr>
   @foreach ($items as $item)
       <tr>
         <td>{{$item->getdate()}}</td>
         
         <!-- モデルがない場合 -->
           <!-- <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->fish}}</td>
           <td>{{$item->date}}</td> -->
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
@endsection