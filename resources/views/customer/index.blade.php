
  <br />
@foreach ($Customer as $customerlist)
  {{$customerlist->customer_id}}
  {{$customerlist->name}}
  {{$customerlist->address}}
  <br />
@endforeach
