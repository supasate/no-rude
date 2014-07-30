<?php

$text = $_POST['intext'];

$bad = array("idiot", "ugly", "damn", "sily", "ไอ้อ้วน", "ทุเรศ", "ไอ้ขี้เกียจ", "เกลียด");
$good   = array("lovely", "cute", "great", "sweet", "หุ่นดี", "สวย", "ขยัน", "รัก");

$new = str_replace($bad, $good, $text);
echo $new;
