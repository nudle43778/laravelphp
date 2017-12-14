<h3><?php echo $model->getName(); ?></h3>
<div>
    <label>Calling class: </label>
    <span><?php echo $model->getClassName(); ?></span>
</div>
<div>
    <label>Notice text: </label>
    <span><?php echo $model->getText(); ?></span>
</div>
<div>
    <label>Context: </label>
    <span><?php echo $model->getContext(); ?></span>
</div>
<div>
    <label>Notice code: </label>
    <span><?php echo $model->getCode(); ?></span>
</div>
<div>
    <label>Notice caption: </label>
    <span><?php echo $model->getCaption(); ?></span>
</div>

<div><label>Notice Code Driver: </label>
    <span><?php echo $model->getCodeDriver(); ?></span>
</div>
<div>
    <label>Notice type: </label>
    <span><?php echo $model->getType(); ?></span>
</div>
<div><label>Start: </label>
    <span><?php echo $model->getStartTime(); ?></span>
</div>
<div><label>End: </label>
    <span><?php echo $model->getEndTime(); ?></span>
</div>
<div><label>Debug info: </label>
    <span><?php echo $model->getDebugInfo();?></span>
</div>
