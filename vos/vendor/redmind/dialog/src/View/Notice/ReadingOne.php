<?php
    $controller = new RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>
<fieldset class="fieldsetBubble">
<div class="show-room">
    <fieldset class="fieldsetBubble3 placementLeft">
        <div class="command-bar">
            <label class="labelStyling3 placementLeft">Notice</label>
            <a class="buttonStyle placementRight" href="?uc=Notice/Index" class="labelStyling">Cancel</a>
            <a class="buttonStyle placementRight" href="?uc=Notice/Delete&amp;id=<?php echo $model->getId();?>" class="labelStyling">Delete</a>
            <a class="buttonStyle placementRight" href="?uc=Notice/Inserting" class="labelStyling">Inserting</a>
            <a class="buttonStyle placementRight" href="?uc=Notice/Updating&amp;id=<?php echo $model->getId();?>" class="labelStyling">Updating</a>
        </div>
    </fieldset>
    <?php $view();?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="readingOneForm">
            <fieldset class="fieldsetBubble">
                <legend class="legendMiddle">Reading</legend>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Subject</legend>
                        <div>
                            <label class="labelStyling" for="Subject">Subject</label>
                            <input class="inputStyling" type="text" id="subject" name="subject" required="required" value="<?php echo $model->getSubject();?>" readonly/>
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Message</legend>
                        <div>
                            <label class="labelStyling"  for="Message">Message</label>
                            <input class="inputStyling" type="text" id="message" name="message" required="required" value="<?php echo $model->getMessage();?>" readonly/>
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Code</legend>
                        <div>
                            <label class="labelStyling"  for="Code">Code</label>
                            <input class="inputStyling" type="text" id="code" name="code" value="<?php echo $model->getCode();?>" readonly/>
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Startdatum</legend>
                        <div>
                            <label class="labelStyling"  for="Start">Startdatum</label>
                            <input class="inputStyling" type="date" id="start" name="start" value="<?php echo $model->getStart();?>" readonly/>
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Einddatum</legend>
                        <div>
                            <label class="labelStyling"  for="End">Einddatum</label>
                            <input class="inputStyling" type="date" id="end" name="end" value="<?php echo $model->getEnd();?>" readonly/>
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Source</legend>
                        <div>
                            <label class="labelStyling"  for="Source">Source</label>
                            <input class="inputStyling" type="text" id="source" name="source" value="<?php echo $model->getSource();?>" readonly/>
                        </div>
                    </fieldset>
            </fieldset>
    <div class="feedback">
        <?php if(isset($feedback)){echo $feedback;}?>
    </div>
        
    </fieldset>
        <a href="?uc=Home/Index" class="labelStyling4">Home</a>
</div>