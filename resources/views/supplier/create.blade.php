ini create dari view
<form class="" action="{{Route('supplier.store')}}" method="POST">
  {{csrf_field()}}
  <input type="text" name="txt_id" id="txt_id"/><p></p>
    <input type="text" name="txt_name" id="txt_name"/><p></p>
    <input type="text" name="txt_address" id="txt_address"/><p></p>
<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />
</form>