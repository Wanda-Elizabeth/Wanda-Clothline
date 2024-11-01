<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<p><strong>First Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Last Name:</strong> {{ $formData['last_name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Phone Number:</strong> {{ $formData['phone'] }}</p>
<p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
<p><strong>Message:</strong> {{ $formData['message'] }}</p>
</body>
</html>
