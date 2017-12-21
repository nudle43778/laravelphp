<style>
    <?php include('css/index.css') ?>
</style>

<h3 class="header3Styling"><?php echo $model->getMessage(); ?></h3>

<div>
    <label class="labelStyling">Subject: </label>
    <span class="spanStyling"><?php echo $model->getSubject(); ?></span>
</div>
<div>
    <label class="labelStyling">Code: </label>
    <span class="spanStyling"><?php echo $model->getCode(); ?></span>
</div>
<div><label class="labelStyling">Start: </label>
    <span class="spanStyling"><?php echo $model->getStart(); ?></span>
</div>
<div><label class="labelStyling">End: </label>
    <span class="spanStyling"><?php echo $model->getEnd(); ?></span>
</div>
<div><label class="labelStyling">Source: </label>
    <span class="spanStyling"><?php echo $model->getSource(); ?></span>
</div>
