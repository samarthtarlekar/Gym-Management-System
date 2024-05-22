<?php
$imagePath = 'qr.jpg';
echo '<div id="loading" style="text-align: center;">Loading...</div>';
echo '<div id="imageContainer" style="display: none; text-align: center;">';
echo '<img id="image" src="' . $imagePath . '" alt="Image" style="width: 50%; border: 1px solid black; display: block; margin: 0 auto;">';
echo '<p style="text-align: center; margin-top: 10px;">Accepting payments via PhonePe, Google Pay, and Paytm</p>';
echo '</div>';
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
            document.getElementById('imageContainer').style.display = 'block';
        }, 5000); 
    });
</script>
