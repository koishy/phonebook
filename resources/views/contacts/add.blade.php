@extends('layout')

@section('content')
<form action="/contacts/add" method="POST" id="app">
  @csrf
  @if (isset($errors))
  <ul class="errors">

    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>    
    @endforeach
  </ul>

  @endif

  <label>
    <span class="title">Name: </span>
  <input type="text" name="name" id="name" value="{{old('name')}}">
  </label>
  <label>
    <span class="title">Job: </span>
    <input type="text" name="job" id="job" value="{{old('job')}}">
  </label>
  <label>
    <span class="title">Category: </span>
    <select name="category" id="category" value="{{old('category')}}">
      <option value="null" disabled>Choose an option</option>
      <option value="tech">Computers / tech</option>
      <option value="it">IT</option>

      <option value="health">Health & Care</option>
      <option value="art">Art</option>
      <option value="music">Music</option>
      <option value="other">Other</option>
    </select>
  </label>
  <label>
    <span class="title">Phone numbers count: </span>
    <input type="number" name="number" id="number" v-model.number="numbersLength" max="10" min="1">
  </label>
  <label v-for="phone in (0, fixedAmount)">
      <span class="title">Phone № @{{ phone }} </span>
      <input type="number" :name="`numbers[${phone-1}]`" v-model="numbers[phone-1]">
  </label>
  <label>
    <span class="title">Comment: </span>
  <textarea name="comment" id="comment" cols="30" rows="10">{{old('comment')}}</textarea>
  </label>
  <label>
    <span class="title">Email: </span>
  <input type="text" name="email" id="email" value="{{old('email')}}">
  </label>
  <input type="submit" name="submit" id="sumbit" value="Add to list">
</form>
<script>
  function clamp(x, c1, c2)
  {
    return x < c1 ? c1 : (x > c2 ? c2 : x);
  }

  var app = new Vue({
    el: '#app',

    data: {
      numbersLength: {!! old('number') ? old('number') : '1' !!},
      numbers: {!! old('numbers') ? json_encode(old('numbers')) : "[]" !!}
    },
    computed: {
      fixedAmount()
      {
        return clamp(this.numbersLength, 1, 10);
      }
    }
  });
</script>
@endsection