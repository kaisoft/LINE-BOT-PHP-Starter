<?php
$access_token = '+VH4sVOe5anQc0o83LL4BKFkJ75gJ2UCSZntrYsn9mI8cIOED53p8phGLJzIrk+fTjfThRI8jAEQqhEtxe5+Og0qmQHsY0VPuodLYpq+KoywV6LhdCOgsPpfqbYxTAAUOYZZiMzvvAmMuc1B4e6vFQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
