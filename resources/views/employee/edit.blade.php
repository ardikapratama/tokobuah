
  <br />
@foreach ($employee as $employeelist)
  <form action="{{ Route('employee.update', $employeelist->employee_id)}}" method="POST">
    {{csrf_field  ()}}
    {{method_field("PUT")}}
  <input type="text" name="txt_name" value="{{$employeelist->employee_name}}"> <br /><br />
<input type="text" name="txt_address" value="{{$employeelist->employee_address}}"> <br /><br />
<input type="text" name="txt_phone_number" value="{{$employeelist->employee_phone_number}}"> <br />

@endforeach
<br />
<button type="submit">save</button>

<a href="{{url('employee')}}">kembali</a>
