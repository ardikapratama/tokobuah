

@foreach ($employee as $employeelist)
  {{$employeelist->employee_id}}
  {{$employeelist->employee_name}}
  {{$employeelist->employee_address}}
  {{$employeelist->employee_phone_number}}
  <a href="/employee/{{ $employeelist->employee_id}}">show</a>

  <a href="/employee/{{$employeelist->employee_id}}/edit">edit</a>
  <br />

<form action="/employee/{{$employeelist->employee_id}}" method="post">
{{csrf_field() }}
{{ method_field('DELETE') }}
<button>delete</button>
</form>

@endforeach


<a href="{{url('employee/create')}}">kembali</a>
