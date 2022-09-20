<html>
<head><title>Create</title><head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}"
enctype="multipart/form-data">
@csrf

<label>name</label>
<input type="text" name="name" required>
<label>address</label>
<input type="text" name="address" required>
<label>age</label>
<input type="number" name="age" required>
<label>image</label>
<input type="file" name="image"  required>
<input type="submit">
</form>

</body>
</html>
