<html>
<body></body>
<a href="{{url('/create')}}">
<button>Create</button></a>
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Age</th>
<th>Image</th>
<th>Edit</th>
</tr>
@foreach($students as $student)
<tr>
<td>{{$student->name}}<td>
<td>{{$student->address}}<td>
<td>{{$student->age}}<td>
<td><img src="{{asset('storage/image/'.$student->image)}}"/><td>
<td></td>
<td><a href="{{url('/edit/'.$student->id)}}">Edit</a></td>
</tr>
@endforeach
</table>
</html>
