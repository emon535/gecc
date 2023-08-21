<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<br/><strong>Contact From</strong><br/>
			Name: {{ $name }}<br/>
			Email: {{ $fromEmail }}<br/>
			Subject: {{ $subject }}<br/>
			Message: {!! $bodymessage !!}<br/>		
		</div>
	</body>
</html>