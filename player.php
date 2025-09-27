<?php
$batch_id = '676e5677418e84037bd6247c';
$video_data = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ2aWRlb19rZXkiOiJjbFZMZW1ZNWNVOXBORUpMWkd4aFdVWjZaRkZZU1VsbFpFOHZPVXRaTjJjeFNIZzVOMEowYkZZMU1EMD0iLCJuYW1lIjoiV29yaywgRW5lcmd5IGFuZCBQb3dlciAwMSA6IFdvcmsgRG9uZSB8fCAoTk8gRFBQKSIsImltYWdlIjoiaHR0cHM6XC9cL3N0YXRpYy5wdy5saXZlXC81ZWIzOTNlZTk1ZmFiNzQ2OGE3OWQxODlcL0FETUlOXC81YzliY2JiZS0xYjA0LTRmOGMtOWRhZC0xMDk1MzUwNTgyZDUucG5nIn0.3VTad5XHeGKAHVxNR82vE3n7CbQ_2QiQ-QOChZ3Lq4w';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Video Player</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #000;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

<iframe id="videoFrame" 
    src="https://studystark.site/play/play.php?batch_id=<?php echo $batch_id; ?>&video_data=<?php echo urlencode($video_data); ?>&fetch_video=1" 
    allowfullscreen 
    allow="autoplay; fullscreen">
</iframe>

</body>
</html>
