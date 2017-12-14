<div class="logbook">
    <h1><?php echo $model->getTitle(); ?></h1>
    <?php
    if (count($model->getBoard()) > 0)
    {
        $noticeView = function ($model) {
            include("Notice.php");
        };
        foreach ($model->getBoard() as $key => $notice)
        {
            $noticeView($notice);
        }
    }
    else
    {
        ?>
        <h3>Empty notice board</h3>
        <?php
    }
    ?>
    </div>
