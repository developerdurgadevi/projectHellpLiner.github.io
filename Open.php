
<body>
<?php
 $doc=$_GET["doc"];
 $type=$_GET["type"];
 ?>
<!--<iframe src="D:/Indhu/Aadhaar.pdf&embedded=true" width="1000" height="1000"></iframe>-->
 <iframe src="D:/Indhu/Aadhaar.pdf&embedded=true"></iframe>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125766.12980003307!2d78.05278255426747!3d9.91799869040521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0xdc955b7264f63933!2sMadurai%2C%20Tamil%20Nadu%2C%20India!5e0!3m2!1sen!2sus!4v1615274380655!5m2!1sen!2sus" 
 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php
echo $type."/".$doc;
?>
 <h1>PDF Example</h1>
 	<embed src="D:/Indhu/Aadhaar.pdf" type="application/pdf" width="20%" height="20%">

    <p>Open a PDF file <a href="D:/Indhu/Embedded Systems.pdf">example</a>.</p>
</body>