<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .whatsapp{
        z-index: 90;
        position: fixed;
        bottom: 10px;
        right: 10px;
    }

    .whatsapp img{
        width: 60px;
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<?php

$whatsappNum = 5511993194165;
$whatsappHello = "Hello";

?>

<div class="whatsapp">
    <a href="https://wa.me/<?php echo $whatsappNum; ?>" target="_blank">
        <img src="images/icon-whatsapp.png">
    </a>
</div>