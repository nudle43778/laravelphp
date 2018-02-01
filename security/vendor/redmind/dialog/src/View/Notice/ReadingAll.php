<aside>
    <?php
    $notices = $model->getBoard();
    if (count($notices > 0))
	{ ?>
	    <fieldset class="fieldsetBubble2 placementRight">
        <table class="placementRight">
            <tr>
                <th class="labelStyling">Select</th>
                <th class="labelStyling">Subject</th>
                <th class="labelStyling">Code</th>
            </tr>
        <?php
    
        foreach($notices as $notice)
        { ?>
            <tr>
            <td>
                <a class="noLinkUnder" href="?uc=Notice/ReadingOne&amp;id=<?php echo $notice->getId();?>">&#8883</a>
            </td>
            <td class="labelStyling"><?php echo $notice->getSubject()?></td>
            <td class="labelStyling"><?php echo $notice->getCode()?></td>
            </tr>
        <?php
        } 
        ?>
    </table>
    </fieldset>
    <?php 
	} else { ?>
	<p class="labelStyling">Geen notities gevonden.</p>
	<?php
	} ?>
</aside>
