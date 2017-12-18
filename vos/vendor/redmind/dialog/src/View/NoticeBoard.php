<div class="notice-board">
    <h1><?php echo $model->getTitle(); ?></h1>
    <?php
    if (count($model->getBoard()) > 0)
    {
        $noticeView = function ($model) {
            include("Notice.php");
        };
        foreach ($model->getBoard() as $notice)
        {
            $noticeView($notice);
            //include("Notice.php"); //Dit zal niet werken omdat het model hier NoticBoard is en niet Notice. Waardoor Notice.php niet meer zal werken.
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
