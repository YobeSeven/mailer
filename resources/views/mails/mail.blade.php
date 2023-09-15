@extends("layouts.index")

@section('content')
<style>
    .text-danger{
        color: red;
    }
    </style>
<h1 class="text-danger">Email : {{$mail->mail}}</h1>
<h1 class="text-primary">Subject : {{$mail->subject}}</h1>
<h1 class="text-success">Content : {{$mail->content}}</h1>
@endsection