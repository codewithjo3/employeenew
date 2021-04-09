@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3" ></div>
<div class="col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6" >

<form action="/empread" method="post">

{{ csrf_field() }}

<table class="table">
<tr>
    
    <td>employee code</td>
    <td><input name="empcode" type="text" class="form-control"></td>
</tr>

<tr>
    <td>employee name</td>
    <td><input name="empname" type="text" class="form-control"></td>
</tr>

<tr>
    <td>designation</td>
    <td><input name="empdesig" type="text" class="form-control"></td>
</tr>

<tr>
    <td>company name</td>
    <td><input name="empcomp" type="text" class="form-control"></td>
</tr>

<tr>
    <td>company name</td>
    <td><input name="empsal" type="number" class="form-control"></td>
</tr>



<tr>
    <td></td>
    <td><button class="btn btn-success">submit</button></td>
</tr>


</table>



</form>
</div>
<div class="col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3" >
</div>
</div>

@endsection