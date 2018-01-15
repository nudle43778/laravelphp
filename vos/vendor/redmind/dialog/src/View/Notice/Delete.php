<?php
    $controller = new RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>
<fieldset class="fieldsetBubble">
<button class="buttonStyle" type="submit" value="Notice/Deleting" name="uc" form="deletingForm">Delete</button>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="deleteingForm">
    <div class="detail">
        <div>
            <label for="subject" class="labelStyling">Onderwerp</label>
            <input class="inputStyling" type="text" id="subject" name="subject" required="required" value="<?php echo $model->getSubject();?>" readonly/>
        </div>
        <div>
            <label for="message" class="labelStyling">Boodschap</label>
            <input class="inputStyling" type="text" id="message" name="message" required="required" value="<?php echo $model->getMessage();?>" readonly/>
        </div>
        <div>
            <label for="code" class="labelStyling">Code</label>
            <input class="inputStyling" type="text" id="code" name="code" value="<?php echo $model->getCode();?>" readonly/>
        </div>
        <div>
            <label for="start" class="labelStyling">Start</label>
            <input class="inputStyling" type="date" id="start" name="start" value="<?php echo $model->getStart();?>" readonly/>
        </div>
        <div>
            <label for="end" class="labelStyling">Einde</label>
            <input class="inputStyling" type="date" id="end" name="end" value="<?php echo $model->getEnd();?>" readonly/>
        </div>
        <div>
            <label for="source" class="labelStyling">Bron</label>
            <input class="inputStyling" type="text" id="source" name="source" value="<?php echo $model->getSource();?>" readonly/>
        </div>
    </div>
    </form>
    <div class="feedback">
        <?php if(isset($feedback)){echo $feedback;}?>
    </div>
        <?php $view();?>
    </fieldset>
    <a href="?uc=Home/Index" class="labelStyling4">Home</a>