<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<br/><strong> A New Registration of  "{{ $title }}"</strong><br/>
			<h3>Visitor Info:</h3> 
			Name: {{ $name }}<br/>
			Email: {{ $fromEmail }}<br/>
			Qualification: {!! $qualification !!}<br/>
			Subject: {!! $subject !!}<br/>		
			Course: {!! $course !!}<br/>		
			English Score: {!! $english_score !!}<br/>		
		</div>
	</body>
</html>