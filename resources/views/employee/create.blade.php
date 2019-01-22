ini create dari view
<form class="" action="{{Route('employee.store')}}" method="POST">
  {{csrf_field()}}
  <input type="text" name="txt_id" id="txt_id"/><p></p>
    <input type="text" name="txt_name" id="txt_name"/><p></p>
    <input type="text" name="txt_address" id="txt_address"/><p></p>
    <input type="text" name="txt_phone_number" id="txt_phone_number"/><p></p>
<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />
</form>
