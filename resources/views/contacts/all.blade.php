@extends('layout')

@section('content')
<section class="numbers">
  <h1>List of all numbers: </h1>
  <ul>
    @foreach ($contacts as $contact)    
    <li>
      <div style="margin: 10px 0;">
        Category: {{$contact->formattedCategory()}}
      </div>
      <hr>
      <b>{{$contact->name}}</b> | {{$contact->job}} | {{$contact->email}}
      <blockquote>{{$contact->comment}}</blockquote>
      Numbers
      <ul>
        @foreach($contact->numbers as $number)
      <li>{{$number->number}}</li>
      @endforeach
      </ul>
    </li>
    @endforeach
  </ul>
</section>
@endsection