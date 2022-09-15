<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>
<body>

<p>
  You have received a new message from nextHop website contact form.
</p>
<p>
  Here are the details:
</p>
<ul>
  <li>Name: <strong>{{ $emails['name'] }}</strong></li>
</ul>
<hr>
<p>
  {{ $emails['message'] }}.
</p>
<hr>
<p>It will be helpful if you give me response soon.Thank you.</p>
</body>
</html>

<!-- 
<p>Hello, <br/>I am <b>{{ $emails['name'] }}</b></p>
<p>My query is about the following topic:</p>
<p>{{ $emails['message'] }}.</p>
<p>It will be helpful if you give me response soon.Thank you.</p> -->
