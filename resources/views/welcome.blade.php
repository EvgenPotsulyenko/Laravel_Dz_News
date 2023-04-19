<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
    <meta charset="utf-8" />
</head>
<body>
<form action="crt" method="get">
    <button type="submit">Add New</button>
</form><br>
<form action="delView" method="get">
    <button type="submit">delete</button>
</form><br>
@foreach($NewMods as $NewMod)
    <li><a  href= "{{url('open/'.$NewMod->Summary)}}">{{$NewMod->Summary}}</a></li><br>
    <li>{{$NewMod->Short_description}}</li><br>
@endforeach
</body>
</html>
