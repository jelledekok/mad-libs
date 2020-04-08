<!DOCTYPE html>
<html>
	<head>
		<title>welkom</title>
        <link rel="stylesheet" type="text/css" href="mad-labs-css.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
	</head>
	<body>
         <?php
            $nameERR ="";
            $name =array("0","1","2","3","4","5","6","7");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                    var_dump($_POST);         } 
                    
                foreach ($name as $text) {
                  
                     if (empty($_POST["name"])) {
                        $nameErr = "required";
                    } 
                    else {
                        $text = test_input($_POST["namtext"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$text)) {
                            $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                }
                awnser();
            }      
        ?>  
        <div id='container'>  
            <h1>mad labs</h1>
                <ul>
                    <li><a href='mad-labs-paniek.php'>paniek</a></li>
                    <li><a href='mad-labs-onkunde.php'>onkunde</a></li>
                </ul>
                <?php
                    if($_SERVER["REQUEST_METHOD"] != "POST"){

                    
                ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                <h2>paniek</h2><br> 
                <div id='text'>
                    <p>Welk dier zou je nooit als huisdier willen hebben?</p>
                    <p>wie is de belangrijkste persoon in je leven?</p>
                    <p>in welk land zou je graag willen wonen?</p>  
                    <p>wat doe je als je je verveeld?</p>
                     <p>met welk speelgoed speelde je als kind het meest?</p>
                     <p>bij welke docent spijbel je het liefst?</p>
                      <p>als je € 100.000,- had, wat zou je dan kopen?</p>
                      <p>wat is je favorite bezighieid?</p> 
                </div>
                <div id="input">
                    <p><input type="text" name="0" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="1" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="2" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="3" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="4" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="5" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="6" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="7" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                </div>
                <div id='submit'><input type="submit" name="submit" value="Submit"> </div>
            </form>
            <?php
            }
            else{
            ?>
            <div id="uitkomst">
                
                  <div id="info"> er heerst paniek in het koningkrijk <?php echo $_POST[2] ?>. koning <?php echo $_POST[5] ?> is ten einde raad, en als koning  
                    <?php echo $_POST[5] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST[1] ?>.</div><br>
                   <div id="koning"> "<?php echo $_POST[1] ?>! het is een ramp! het is een schande!"</div><br>
                   <div id='slaaf'> "sire, majesteit, uwe luidruchtigheid, wat is er aan de hand!"</div><br>
                    <div id="koning"> "mijn <?php echo $_POST[0] ?> is verdwenen! zomaar, zonder waarschuwing. en ik had net <?php echo $_POST[4] ?> voor hem gekocht!"</div><br>
                    <div id='slaaf'>"majesteit, uw <?php echo $_POST[0] ?> komt vast vanzelf weer terug?"</div><br>
                    <div id="koning"> "ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST[7] ?> leren?"</div><br>
                    <div id='slaaf'>"maar sire, daar kunt u toch uw <?php echo $_POST[6] ?> voor gebruiken."</div><br>
                    <div id="koning"> "<?php echo $_POST[1] ?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had?"</div><br>
                    <div id='slaaf'>" mij <?php echo $_POST[3] ?>, sire."</div><br>
                
            </div>
            <?php
            }
            ?>
            <div id="footer">made by: jelle de kok</div>
        </div>
        <?php
        function awnser(){
            echo "<h2>Your Input:</h2>";
            echo $_POST[0].",". $_POST[1].",". $_POST[2].",". $_POST[3].",". $_POST[4].",". $_POST[5].",".$_POST[6]." en ".$_POST[7];
        }
        ?>
    </body>
</html>
