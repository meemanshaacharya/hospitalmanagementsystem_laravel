<html>
<head><title>Create</title><head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}"
enctype="multipart/form-data">
@csrf
<input type="hidden" name="id"  value="{{$student->id}}" required>
<label>name</label>
<input type="text" name="name"  value="{{$student->name}}" required>
<label>address</label>
<input type="text" name="address"  value="{{$student->address}}"required>
<label>age</label>
<input type="number" name="age" value="{{$student->age}}" required>
<input type="submit">
</form>

</body>
</html>
