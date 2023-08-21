<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<br/><strong>Consultation From</strong><br/>
			Name: {{ $first_name }} {{ $last_name }}<br/>
			Phone: {{ $phone }}<br/>
			Email: {{ $fromEmail }}<br/>	
			Message: {!! $bodymessage !!}<br/>	
		</div>
	</body>
</html>