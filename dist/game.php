<?php
// sessionの開始。既に開始されていれば再開します。
session_start();
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
//$roomid = $_SESSION['roomid'];
$roomid = "table001";
$opponentid = "2";
$opponentname = "tanaka";
if ($username == "") {
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />

    <title>othello</title>
    <link rel="shortcut icon" href="./faviconstc.ico" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body id="new_game">
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script>
        // // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        // var pusher = new Pusher('ac2b1faa8b9a8094de41', {
        //     cluster: 'ap3',
        //     forceTLS: true
        // });

        // var channel = pusher.subscribe('my-channel');
        // channel.bind('my-event', function(data) {
        //     alert(JSON.stringify(data));
        // });
    </script>
    <div class="board"></div>
    <!-- <div class="result_board">
        <p>あなたの勝ちです！</p>
    </div> -->
    <div class="result">
        <div class="win">
            <p1>YOURWINEヽ(ﾟ∀｡)ﾉｳｪィ</p1>
        </div>
        <div class="lose">
            <p2>YOURLOSERΣ(ﾟдﾟlll)ｶﾞｰﾝ</p2>
        </div>
    </div>
    <div class="chat">
        <iframe id="inlineFrameExample" title="Inline Frame Example" width="100%" height="100%" src="chat.php">
        </iframe>
    </div>
    <div class="info">
        <div class="player0">
            <div class="color black"></div>
            <p>player0</p>
            <div class="pieces_num">×2</div>
        </div>
        <div class="player1">
            <div class="color white"></div>
            <p>player1</p>
            <div class="pieces_num">×2</div>
        </div>
        <div class="time_limit"></div>
    </div>
    <div class="cover">
        <div class="grid"></div>
        <button class="retry">retry</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="js/push_game.js"></script> -->
    <script>
        const session_userId = <?php echo $userid; ?>;
        const session_userName = "<?php echo $username; ?>";
        const session_opponentId = <?php echo $opponentid; ?>;
        const session_opponentName = "<?php echo $opponentname; ?>";
        const session_roomId = "<?php echo $roomid; ?>";
    </script>
    <script src="js/app.js"></script>
    <script src="js/othello.js"></script>
</body>

</html>