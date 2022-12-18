
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resources/Static/Index_style.css" />
    <link rel="stylesheet" href="Resources/Static/Leaderboard.css" />
    <title>Leaderboard</title>
</head>
<body>
    <?php include "LBHeader.php"; 
        if (!(isset($_SESSION['diff']))) {
            $_SESSION['diff'] = "Medium";
        }
        if (!(isset($lb))) { $lb = "hi"; }
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $_SESSION['data'] = $_GET;
            if (isset($_GET["Easy"])) {
                $_SESSION["diff"] = "Easy";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            }
            if (isset($_GET["Medium"])) {
                $_SESSION["diff"] = "Medium";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            }
            if (isset($_GET["Hard"])) {
                $_SESSION["diff"] = "Hard";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            }
            if (isset($_GET["Expert"])) {
                $_SESSION["diff"] = "Expert";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
            }
            if (isset($_SESSION['diff'])) {
                $lb = leaderboard($_SESSION["diff"]);
            }
        }
    ?>
    <div id="diffSelect">
        <form id="difficulties" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
            <input type="submit" class="ez" name="Easy" value="Easy">
            <input type="submit" class="md" name="Medium" value="Medium">
            <input type="submit" class="hd" name="Hard" value="Hard">
            <input type="submit" class="xt" name="Expert" value="Expert">
        </form>
    </div>
    <div id="leaderboard">
        <div id="contain">
            <?php 
                // $lb = leaderboard();
                echo "<div id='head' class='records' style='background: rgba(0, 0, 0, 0.2)'>\n";
                echo "<div class='position'>\nPosition\n</div>\n";
                echo "<div class='username'>\nUsername\n</div>\n";
                echo "<div class='time'>\nTime\n</div>\n";
                echo "</div>";
                for ($i = 0; $i < sizeof($lb); $i++) {
                    echo "<div class='records'\n";
                    echo ($i % 2) ? "style='background: rgba(0, 0, 0, 0.2)'>" : ">";
                    echo "<div class='position'>\n";
                    echo $i + 1;
                    echo "\n</div>\n";
                    echo "<div class='username'>\n";
                    echo $lb[$i]['username'];
                    echo "\n</div>\n";
                    echo "<div class='time'>\n";
                    echo str_pad(floor((int)$lb[$i]["time"]/(1000*60)), 2, '0', STR_PAD_LEFT) . ":";
                    echo str_pad(floor((int)$lb[$i]["time"]/1000) % 60, 2, '0', STR_PAD_LEFT) . ":";
                    echo str_pad(floor((int)$lb[$i]["time"] % 1000 / 10), 2, '0', STR_PAD_LEFT);
                    echo "\n</div>\n";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
<script>
    <?php
        if (isset($_SESSION['diff'])) {
            $base = "document.getElementsByName('" . $_SESSION['diff'] . "')[0]";
            if ($_SESSION['diff'] == "Easy") {
                echo $base.".classList.add('ezperm')";
            } elseif ($_SESSION['diff'] == "Medium") {
                echo $base.".classList.add('mdperm')";
            } elseif ($_SESSION['diff'] == "Hard") {
                echo $base.".classList.add('hdperm')";
            } elseif ($_SESSION['diff'] == "Expert") {
                echo $base.".classList.add('xtperm')";
            }
        }
    ?>
</script>
</html>