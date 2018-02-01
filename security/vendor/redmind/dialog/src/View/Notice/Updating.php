<?php
    $controller = new RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>
<fieldset class="fieldsetBubble">
<button class="buttonStyle" type="submit" value="Notice/Updating" name="uc" form="updatingForm">Update</button>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="updatingForm">
    <div class="detail">
        <div>
            <label for="subject" class="labelStyling">Onderwerp</label>
            <input class="inputStyling" type="text" id="subject" name="subject" required="required" value="<?php echo $model->getSubject();?>" />
        </div>
        <div>
            <label for="message" class="labelStyling">Boodschap</label>
            <input class="inputStyling" type="text" id="message" name="message" required="required" value="<?php echo $model->getMessage();?>" />
        </div>
        <div>
            <label for="code" class="labelStyling">Code</label>
            <input class="inputStyling" type="text" id="code" name="code" value="<?php echo $model->getCode();?>" />
        </div>
        <div>
            <label for="start" class="labelStyling">Start</label>
            <input class="inputStyling" type="date" id="start" name="start" value="<?php echo $model->getStart();?>" />
        </div>
        <div>
            <label for="end" class="labelStyling">Einde</label>
            <input class="inputStyling" type="date" id="end" name="end" value="<?php echo $model->getEnd();?>" />
        </div>
        <div>
            <label for="source" class="labelStyling">Bron</label>
            <input class="inputStyling" type="text" id="source" name="source" value="<?php echo $model->getSource();?>" />
        </div>
    </div>
    </form>
    <div class="feedback">
        <?php if(isset($feedback)){echo $feedback;}?>
    </div>
        <?php $view();?>
    </fieldset>
    <a href="?uc=Home/Index" class="labelStyling4">Home</a>