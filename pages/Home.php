<?php
    session_start();
?>

    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <title>Chat Home</title>
        <link rel="stylesheet" href="../style/style.css">
        <script src="../js/jquery.js"></script>
        <script>
            $(document).ready(function() {

                $("#ChatText").keyup(function(e) {
                    //När vi trycker på 'enter' gör:
                    if (e.keyCode == 13) {
                        var ChatText = $("#ChatText").val();
                        $.ajax({
                            type: 'POST',
                            url: 'InsertMessage.php',
                            data: {
                                ChatText: ChatText
                            },
                            success: function() {
                                $("#ChatMessages").load("DisplayMessages.php");
                                $("#ChatText").val("");
                            }

                        });
                    }

                });

                setInterval(function() { //Uppdaterar varje 1500ms
                    $("#ChatMessages").load("DisplayMessages.php");
                }, 1500);
                $("#ChatMessages").load("DisplayMessages.php");
            });

            window.onload = function() {
                var objDiv = document.getElementById("ChatMessages");
                objDiv.scrollTop = objDiv.scrollHeight;
            }

        </script>
    </head>

    <body>
        <h1>Welcome <span style="color:green"><?php echo $_SESSION['UserName']; ?></span></h1>
        <br>



        <?php
    // Url till webbtjänsten
  	$url = "http://api.openweathermap.org/data/2.5/weather?id=2673722&units=metric&APPID=22ee1d58f7adae08ee71fa7c0bd24481";

    // Hämtat data från webbtjänsten
    $contents = file_get_contents($url);
    $clima = json_decode($contents);


    // Plocka ut temperaturer
	$temp_max = $clima->main->temp_max;
	$temp_min = $clima->main->temp_min;

    // Platsen och dagens datum
	$today = date('d-m-Y H:i');
	$city_name = $clima->name;

        echo "<div class=\"ruta\">";
	    echo "<h3>$city_name</h3>";
        echo "<h4>$today</h4>";
        echo "Max temp: <p class=\"max\">$temp_max&deg; C</p><br>";
        echo "Min temp: <p class=\"min\">$temp_min&deg; C</p>";
        echo "</div>";

    ?>

            <div id="ChatBig">
                <div id="ChatMessages">
                </div>
                <textarea placeholder="Type your message..." id="ChatText" name="ChatText"></textarea>
            </div>

    </body>

    </html>
