<h2>{{$body->header}}</h2>
You received an email from : {{ $email->email }} <br>
Here are the details: <br>
<b>Name:</b> {{ $email->name }} <br>
<b>Email:</b> {{ $email->email }} <br>

<b>Message:</b> {{ $email->message }} <br>
<h2>{{$body->footer}}</h2>