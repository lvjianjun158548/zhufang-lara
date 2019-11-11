<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if($errors->any())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
</body>
</html>
        
