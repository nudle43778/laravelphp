<h1  class="header1Styling">Notice Insert</h1>
<div class="control-panel">
    <a class="labelStyling"  href="?uc=Home/Index">Home Index</a>
    <h2  class="header3Styling">Notice Index</h2>
</div>
<div class="show-room">
    <div class="command-bar">
        <h2 class="header3Styling">Notice</h2>
        <ol>
            <li><a class="labelStyling"  href="?uc=Notice/Insert">Insert Notice</a></li>
        </ol>
        <div class="detail">

        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset class="fieldsetBubble">
                <legend class="legendMiddle">Insert</legend>
                <fieldset class="fieldsetBubble">
                    <legend class="legendLeft">Startdatum</legend>
                    <div>
                        <label for="startDate">Startdatum</label>
                        <input type="date" id="startDate" name="startDate">
                    </div>
                </fieldset>
                <fieldset class="fieldsetBubble">
                    <legend class="legendLeft">Einddatum</legend>
                    <div>
                        <label for="endDate">Einddatum</label>
                        <input type="date" id="endDate" name="endDate">
                    </div>
                </fieldset>
                <fieldset class="fieldsetBubble">
                    <legend class="legendLeft">Message</legend>
                    <div>
                        <label for="message">Message</label>
                        <input type="text" id="message" name="message">
                    </div>
                </fieldset>
                <fieldset class="fieldsetBubble">
                    <legend class="legendLeft">Code</legend>
                    <div>
                        <label for="code">Code</label>
                        <input type="text" id="code" name="code">
                    </div>
                </fieldset>
                <fieldset class="fieldsetBubble">
                    <legend class="legendLeft">Source</legend>
                    <div>
                        <label for="source">Source</label>
                        <input type="text" id="source" name="source">
                    </div>
                </fieldset>



            </fieldset>

            <aside class="list">
            <!-- partial view lijst notities -->
        </aside>
    </div>
