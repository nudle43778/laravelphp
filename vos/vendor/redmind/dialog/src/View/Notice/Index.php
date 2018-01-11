<!--<h1  class="header1Styling">Notice Index</h1>-->
<!--<div class="control-panel">-->
<!--    <a class="labelStyling"  href="?uc=Home/Index">Home Index</a>-->
<!--    <h2  class="header3Styling">Notice Index</h2>-->
<!--</div>-->
<!--<div class="show-room">-->
<!--<div class="command-bar">-->
<!--    <h2 class="header3Styling">Notice</h2>-->
<!--    <ol>-->
<!--        <li><a class="labelStyling"  href="?uc=Notice/Inserting">Notice Inserten</a></li>-->
<!--    </ol>-->
<!--    <div class="detail">-->
        
<!--    </div>-->
<!--    <aside class="list">-->
        <!-- partial view lijst notities -->
<!--    </aside>-->
<!--</div>-->
<?php
    $controller = new \RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>

<fieldset class="fieldsetBubble">
    <img src="/vos/Content/dialog.png" alt="Logo" width="162" height="142">
    <label class="labelStyling2">
        Dialog
    </label>
</fieldset>
<br>
<br>
<fieldset class="fieldsetBubble">
<fieldset class="fieldsetBubble3 placementLeft">
        <label class="labelStyling3 placementLeft">Notice</label>
        <a class="buttonStyle placementRight" href="?uc=Notice/Inserting">Notice Inserten</a>
</fieldset>
    <?php $view();?>
</fieldset>    


    