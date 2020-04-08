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
            $name =array("0","1","2","3","4","5","6");

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
                <h2>onkunde</h2><br> 
                <div id='text'>
                    <p>Wat zou je graag willen kunnen?</p>
                    <p>Met welke persoon kun je goed opschieten?</p>
                    <p>Wat is je favorite getal?</p>  
                    <p>Wat heb je altijd bij je als je op vakantie gaat?</p>
                     <p>Wat is je beste persoonlijke eigenschap?</p>
                     <p>Wat is je slechtste persoonlijke eigenschap?</p>
                      <p>Wat is het ergste wat je kan overkomen?</p>
                </div>
                <div id="input">
                    <p><input type="text" name="0" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="1" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="2" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="3" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="4" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="5" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                     <p><input type="text" name="6" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></p>
                </div>
                <div id='submit'><input type="submit" name="submit" value="Submit"> </div>
            </form>
            <?php
                }
                else{
            ?>
             <div id="uitkomst">
                
                  <div id="info">
                      er zijn veel mensen die niet kunnen <?php echo  $_POST[0] ?>, neem nou <?php echo $_POST[1] ?>.<br>
                      zelfs met de hulp van een <?php echo $_POST[3] ?> of zelfs <?php echo $_POST[2] ?> kan <?php echo $_POST[1] ?> niet <?php echo  $_POST[0] ?>.<br>
                      dat heeft niet te maken met een gebrek aan <?php echo $_POST[4] ?>, maar aan een teveel aan <?php echo $_POST[5] ?>.<br>
                      te veel <?php echo $_POST[5] ?> leidt tot <?php echo $_POST[6] ?> en dat is niet goed als je wilt <?php echo  $_POST[0] ?>, helaas voor  <?php echo $_POST[1] ?>.
                  </div>
                
            </div>
            <?php
                }
            ?>
            <div id="footer">made by: jelle de kok</div>
        </div>
    </body>
</html>
