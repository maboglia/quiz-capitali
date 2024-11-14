@extends('layouts.app')

@section('content')

    


<h1>Regioni</h1>

<form action="{{url('/regioni')}}" method="post">
             @csrf

               <fieldset>
    <label>
      First name
      <input
        name="first_name"
        placeholder="First name"
        autocomplete="given-name"
      />
    </label>
    <label>
      Email
      <input
        type="email"
        name="email"
        placeholder="Email"
        autocomplete="email"
      />
    </label>
  </fieldset>

  <input
    type="submit"
    value="Subscribe"
  />
</form>


@endsection