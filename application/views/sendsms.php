<?php
$url = "https://secure.cm.nl/smssgateway/cm/gateway.ashx?producttoken=5dd2d4c9-3321-4b0f-879e-0394cfbbe01d&body=Example+message+text&to=00923115009655&from=Photon Tec.&reference=your_reference
";
$url = str_replace(" ", "%20", $url);

$content = file_get_contents($url);

echo $content;

?>