
@foreach ($supplier as $supplierlist)
  {{$supplierlist->supplier_id}}
  {{$supplierlist->supplier_name}}
  {{$supplierlist->supplier_address}}

<a href="/supplier/{{$supplierlist->supplier_id}}/edit">edit</a>
<br />
@endforeach
<a href="{{url('supplier')}}">kembali</a>
