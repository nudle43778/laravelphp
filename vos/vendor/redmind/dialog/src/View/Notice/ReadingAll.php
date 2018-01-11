<aside>
    <?php
    $notices = $model->getBoard();
    if (count($notices > 0))
	{ ?>
	    <fieldset class="fieldsetBubble2 placementRight">
        <table class="placementRight">
            <tr>
                <th class="labelStyling">Select</th>
                <th class="labelStyling">Onderwerp</th>
                <th class="labelStyling">Code</th>
            </tr>
        <?php
    
        foreach($notices as $notice)
        { ?>
            <tr>
            <td>
                <a href="?uc=Notice/ReadingOne&amp;id=<?php echo $notice->getId();?>">--></a>
            </td>
            <td><?php echo $notice->getSubject()?></td>
            <td><?php echo $notice->getCode()?></td>
            </tr>
        <?php
        } 
        ?>
    </table>
    </fieldset>
    <?php 
	} else { ?>
	<p>Geen notities gevonden.</p>
	<?php
	} ?>
</aside>
