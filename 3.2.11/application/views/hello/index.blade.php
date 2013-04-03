@section('jqmobile')
<meta name="viewport" content="width=device-width,minimum-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"> </script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"> </script>
@endsection
<p>名前 : {{ $name }}</p>
<p>住所 : {{ $address }}</p>
<p>メール : {{ $email }}</p>