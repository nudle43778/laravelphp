<?php
    $controller = new \RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>
<style>
    <?php 
        include('css/index.css'); 
    ?>
</style>
<fieldset class="fieldsetBubble">
<fieldset class="fieldsetBubble3 placementLeft">
        <label class="labelStyling3 placementLeft">Notice</label>
        <a class="buttonStyle placementRight" href="?uc=Notice/Inserting">Notice Inserten</a>
</fieldset>
    <?php $view();?>
</fieldset>    


    