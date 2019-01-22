
@foreach ($employee as $employeelist)
  {{$employeelist->employee_id}}
  {{$employeelist->employee_name}}
  {{$employeelist->employee_address}}
{{$employeelist->employee_phone_number}}
<a href="/employee/{{$employeelist->employee_id}}/edit">edit</a>
<br />
@endforeach
<a href="{{url('employee')}}">kembali</a>
