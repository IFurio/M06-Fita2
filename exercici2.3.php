<html>
    <head>
        <?php
            if(isset($_GET)) {
                if($_GET["elements"] == "foc") {
                    echo "<link rel=\"stylesheet\" href=\"foc.css\"";
                }
                if($_GET["elements"] == "aigua") {
                    echo "<link rel=\"stylesheet\" href=\"aigua.css\"";
                }
                if($_GET["elements"] == "terra") {
                    echo "<link rel=\"stylesheet\" href=\"terra.css\"";
                }
            }
        ?>
    </head>
    <body>
        <form method="GET">
        <label for="elements">Choose an element:</label><br>
        <select name="elements" id="elements">
            <option value="foc">FOC!</option>
            <option value="aigua">~aigua~</option>
            <option value="terra">terra</option>
        </select>
        <input type="submit" value="tramet">
        </form>
    </body>
</html>