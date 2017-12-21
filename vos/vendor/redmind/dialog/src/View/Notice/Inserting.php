<div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="command-bar">
            <button class="buttonStyle" type="submit" value="Notice/Insert" name="uc">Insert in de tabel</button>
            </div>
            
            <fieldset class="fieldsetBubble">
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



            </fieldset>

            <aside class="list">
            <!-- partial view lijst notities -->
        </aside>
    </div>
