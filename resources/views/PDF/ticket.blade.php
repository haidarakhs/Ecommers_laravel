@php
  use SimpleSoftwareIO\QrCode\Facades\QrCode;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
          size: 10cm 30cm landscape;
        }
        .name2{
           margin-top: -2rem;
        }
      </style>
</head>
<body>
    
    @foreach ($transaction->transactionDetails as $detail)
    <h1 style="font-family: Arial, Helvetica, sans-serif; ">WELCOME</h1>
    <p style="font-family: Arial, Helvetica, sans-serif; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi soluta magnam, tempora, culpa ut quos minus dignissimos fugit temporibus mollitia quibusdam quis aperiam aliquid deleniti repudiandae quas minima quo reprehenderit?</p>
  <div style="padding: 5px; font-family: Arial, Helvetica, sans-serif; page-break-before: always;  display: block;">
     <div style="float: left">
      <h1 >{{ $event->name }}</h1>
      <h2 class="name2">{{ $detail->ticket->name }}</h2>
      <div>{{ $event->start_time->format('l, d F Y, H:i') }}</div>
      <div>{{ $event->duration }} hour(s)</div>
      <div>{{ $event->location }}</div>
      <div>{{ $event->price }}</div>
      <div style="margin-top: 20px; font-size: 28px; font-family: monospace">{{ $detail->code }}</div>
    </div>
    {{-- <div style="float: right"> --}}
      {{-- QR Code --}}
      {{-- <img style="margin-top: 30px" src="data:image/png;base64, {!! base64_encode(
          QrCode::format('png')->size(200)->generate($detail->code),
      ) !!} "> --}}
    {{-- </div> --}}
@endforeach
</div>
</body>
</html>

