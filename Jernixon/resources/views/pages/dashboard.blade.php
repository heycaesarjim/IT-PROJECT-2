@extends('layouts.navbar')

@section('content')
        {{--  <div class="jumbotron text-center">
                <h1>WELCOME</h1>
        </div>  --}}
       {{--  <div class="jumbotron">
               <h1 class="display-3">Jumbo heading</h1>
               <p class="lead">Jumbo helper text</p>
               <hr class="my-2">
               <p>More info</p>
               <p class="lead">
                       <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
               </p>
       </div>  --}}

       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Open Large Modal</button>
       
         <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog modal-lg">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Modal Header</h4>
               </div>
               <div class="modal-body">
                 <p>This is a large modal.</p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>
       </div>
@endsection     