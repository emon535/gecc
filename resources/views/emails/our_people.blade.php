<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<br/><strong> A Contact Request For "{{ $people_name }}"</strong><br/>
			<h3>People Info:</h3> 
			Name: {{ $people_name }}<br/>
			Email: {! $people_email !!}<br/>
			Phone: {!! $people_phone !!}<br/>	
			Designation: {!! $people_designation !!}<br/>	
			Nationality: {!! $people_nationality !!}<br/>	

			<h3>Visitor Info:</h3> 
			Name: {{ $name }}<br/>
			Email: {{ $fromEmail }}<br/>
			Subject: {!! $subject !!}<br/>		
		</div>
	</body>
</html>