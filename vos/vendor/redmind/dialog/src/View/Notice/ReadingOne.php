<?php
    $controller = new RedMind\Dialog\Controller\NoticeController();
    $view = $controller->ReadingAll();
?>
<header>
    <h1>Dialog</h1>
    <div class="control-panel">
        <a href="?uc=Home/Index">Home</a>
    </div>
</header>
<div class="show-room">
    <div class="command-bar">
        <h2>Notice</h2>
        <a href="?uc=Notice/Index">Cancel</a>
        <a href="?uc=Notice/Delete&amp;id=<?php echo $model->getId();?>">Delete</a>
        <a href="?uc=Notice/CreatingOne">Inserting</a>
        <a href="?uc=Notice/Updating&amp;id=<?php echo $model->getId();?>">Updating</a>
    </div>
    <div class="detail">
        <div>
            <label for="subject">Onderwerp</label>
            <input type="text" id="subject" name="subject" required="required" value="<?php echo $model->getSubject();?>" readonly/>
        </div>
        <div>
            <label for="message">Boodschap</label>
            <input type="text" id="message" name="message" required="required" value="<?php echo $model->getMessage();?>" readonly/>
        </div>
        <div>
            <label for="code">Code</label>
            <input type="text" id="code" name="code" value="<?php echo $model->getCode();?>" readonly/>
        </div>
        <div>
            <label for="start">Start</label>
            <input type="date" id="start" name="start" value="<?php echo $model->getStart();?>" readonly/>
        </div>
        <div>
            <label for="end">Einde</label>
            <input type="date" id="end" name="end" value="<?php echo $model->getEnd();?>" readonly/>
        </div>
        <div>
            <label for="source">Bron</label>
            <input type="text" id="source" name="source" value="<?php echo $model->getSource();?>" readonly/>
        </div>
    </div>
    <div class="feedback">
        <?php if(isset($feedback)){echo $feedback;}?>
    </div>
        <?php $view();?>
</div>