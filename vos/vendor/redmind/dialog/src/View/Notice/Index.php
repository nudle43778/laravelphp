<!--<h1  class="header1Styling">Notice Index</h1>-->
<!--<div class="control-panel">-->
<!--    <a class="labelStyling"  href="?uc=Home/Index">Home Index</a>-->
<!--    <h2  class="header3Styling">Notice Index</h2>-->
<!--</div>-->
<!--<div class="show-room">-->
<!--<div class="command-bar">-->
<!--    <h2 class="header3Styling">Notice</h2>-->
<!--    <ol>-->
<!--        <li><a class="labelStyling"  href="?uc=Notice/Inserting">Notice Inserten</a></li>-->
<!--    </ol>-->
<!--    <div class="detail">-->
        
<!--    </div>-->
<!--    <aside class="list">-->
        <!-- partial view lijst notities -->
<!--    </aside>-->
<!--</div>-->



<fieldset class="fieldsetBubble">
    <img src="/vos/Content/dialog.png" alt="Logo" width="162" height="142">
    <label class="labelStyling2">
        Dialog
    </label>
</fieldset>
<br>
<br>
<fieldset class="fieldsetBubble">
<fieldset class="fieldsetBubble3 placementLeft">
        <label class="labelStyling3 placementLeft">Notice</label>
        
</fieldset>
    
<aside class="placementRight">
        <div>
            <div class="command-bar">
            </div>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <button class="buttonStyle placementRight" type="submit" value="Notice/Insert" name="uc">Insert in de tabel</button>
            <fieldset class="fieldsetBubble placementLeftCustom">
                <legend class="legendMiddle">Insert</legend>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Subject</legend>
                        <div>
                            <label class="labelStyling" for="Subject">Subject</label>
                            <input class="inputStyling" type="text" name="Subject">
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Message</legend>
                        <div>
                            <label class="labelStyling"  for="Message">Message</label>
                            <input class="inputStyling"  type="text" name="Message">
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Code</legend>
                        <div>
                            <label class="labelStyling"  for="Code">Code</label>
                            <input class="inputStyling"  type="text" name="Code">
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Startdatum</legend>
                        <div>
                            <label class="labelStyling"  for="Start">Startdatum</label>
                            <input class="inputStyling"  type="date" name="Start">
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Einddatum</legend>
                        <div>
                            <label class="labelStyling"  for="End">Einddatum</label>
                            <input class="inputStyling"  type="date" name="End">
                        </div>
                    </fieldset>
                    <fieldset class="fieldsetBubble">
                        <legend class="legendLeft">Source</legend>
                        <div>
                            <label class="labelStyling"  for="Source">Source</label>
                            <input class="inputStyling"  type="text" name="Source">
                        </div>
                    </fieldset>


        </div>
            </fieldset>
            <!-- partial view lijst notities -->
            </aside>
</fieldset>            