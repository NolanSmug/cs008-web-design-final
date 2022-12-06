<?php
include 'top.php';

$dataIsGood = false;
$message = '';

$first = '';
$last = '';
$email = '';
$instrument = 'Guitar';
$rock = false;
$jazz = false;
$hiphop = false;
$randb = false;

function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {
    return (preg_match( "/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/",$testString));
}
?>

<main class="formMain">
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        // Sanitizing //
        $first = getData('txtFirstName');
        $last = getData('txtLastName');
        $email = getData('txtEmail');

        $instrument = getData('radInstrument');

        $rock = (int) getData('chkRock');
        $jazz = (int) getData('chkJazz');
        $hiphop = (int) getData('chkHipHop');
        $randb = (int) getData('chkRandB');

        // Validating //
        $dataIsGood = true;

        //Validate First Name //
        if($first == ''){
            print '<p class="mistake">Please type in your first name.</p>';
        }
        elseif(!preg_match("/^([a-zA-Z' ]+)$/", $first)){
            print '<p class="mistake">Please type a valid first name, "' .$first . '" is not valid</p>';
            $dataIsGood = false;

        }

        //Validate Last Name //
        if($last == ''){
            print '<p class="mistake">Please type in your last name.</p>';
        }
        elseif(!preg_match("/^([a-zA-Z' ]+)$/", $last)){
            print '<p class="mistake">Please type a valid last name, "' . $last . '" is not valid</p>';
            $dataIsGood = false;
        }

        // Validate Email //
        if($email == ''){
            print '<p class="mistake">Please type in an email address.</p>';
            $dataIsGood = false;
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            print '<p class="mistake">Please enter a valid email, "' . $email . '" is not valid</p>' ;
            $dataIsGood = false;
        }

        // Validate Radio //
        if ($instrument != "Guitar" AND $instrument != "Drums" AND $instrument != "Keyboard" AND $instrument != "Trumpet") {
            print '<p class="mistake">Please select at least one instrument. </p>';
            $dataIsGood = false;    
        }

        // Validate Checkboxes //
        $totalChecked = 0;

        if($rock != 1) $rock = 0;
        $totalChecked = $totalChecked + $rock; //could also use += but I think this makes more sense
        
        if($jazz != 1) $jazz = 0;
        $totalChecked = $totalChecked + $jazz; 

        if($hiphop != 1) $hiphop = 0;
        $totalChecked = $totalChecked + $hiphop; 

        if($randb != 1) $randb = 0;
        $totalChecked = $totalChecked + $randb;

        if($totalChecked == 0) {
            print '<p class="mistake">Please select at least one genre</p>';
            $dataIsGood = false;
        }

        // Save data on sql server //
        if($dataIsGood){
            try{
                $sql = 'INSERT INTO tblGenreForm (fldFirst, fldLast, fldEmail, fldInstrument, 
                                                        fldRock, fldJazz, fldHipHop, fldRandB) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
                        
                $statement = $pdo->prepare($sql);
                $data = array($first, $last, $email, $instrument, $rock, $jazz, $hiphop, $randb);

                if($statement->execute($data)){
                    $message = '<h2>Your information has been saved into our database</h2>';
                    $to = $email;
                                    $from = 'Matthew Swaim <matthew.swaim@uvm.edu>';
                                    $subject = 'Thank you for filling out our music survey!';

                                    $mailMessage = '<p style="font: 16pt Comic Sans MS; color: rgba(242, 170, 76, 0.767);">Thanks for filling out our ';
                                    $mailMessage .= 'music survey, ' . $first . ' ' . $last . '! We hope you enjoyed exploring our website and ';
                                    $mailMessage .= 'learned something that you found interesting. Have a nice day! ';
                                    $mailMessage .= '<br>' . $instrument . ' is a great instrument! Do you want to learn how to play it?';
                                    $mailMessage .= '<br>' . '<img src="https://tinyurl.com/yfz8y86j"';
                                    $mailMessage .= '<br><br>-Matt Swaim and Nolan Cyr</p>';


                                    $headers = "MIME-Version: 1.0\r\n";
                                    $headers .= "Content-type: text/html; charset=utf-8\r\n";
                                    $headers .= "From: " . $from . "\r\n";

                                    $emailSent = mail($to, $subject, $mailMessage, $headers);

                                    if ($emailSent) {
                                        print "<p>Your answers have been emailed to you.</p>";
                                    }
                }
                else{
                    $message = '<h2>Error. Record was not saved</h2>';
                }
            }

            catch(PDOException $e){
                $message = '<p>Our servers are currently experiencing difficulties.  Please try again later. </p>';
            }
        }
    }
    ?>

        <section>
            <h2>Tell us about your favorite music!</h2>
            <form action="#" id="genreForm" method="post">
<!--                                Textboxes                               -->
                <fieldset>
                    <legend>Your Contact Information</legend>
                    <p class="formP">
                        <label class="required" for="txtFirstName">First name:</label>
                        <input id="txtFirstName" type="text" name="txtFirstName" value="<?php print $first; ?>" required>
                    </p>
                    <p class="formP">
                        <label class="required" for="txtLastName">Last name:</label>
                        <input type="text" id="txtLastName" name="txtLastName" value="<?php print $last; ?>" required>
                    </p>
                    <p class="formP">
                        <label class="required" for="txtEmail">Email Address:</label>
                        <input type="text" id="txtEmail" name="txtEmail" value="<?php print $email; ?>" required>
                    </p>
                </fieldset>



<!--                                Checkboxes                              -->
                <fieldset class="checkbox">
                    <legend>Your Favorite Genres</legend>

                    <p class="formP">
                        <input type="checkbox" id="chkRock" name="chkRock" value="1"
                        <?php if($rock) print 'checked'; ?>>
                        <label for="chkRock">Rock</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkJazz" name="chkJazz" value="1"
                        <?php if($jazz) print 'checked'; ?>>
                        <label for="chkJazz">Jazz</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkHipHop" name="chkHipHop" value="1"
                        <?php if($hiphop) print 'checked'; ?>>
                        <label for="chkHipHop">Hip hop</label>
                    </p>

                    <p class="formP">
                        <input type="checkbox" id="chkRandB" name="chkRandB" value="1"
                        <?php if($randb) print 'checked'; ?>>
                        <label for="chkRandB">R&B</label>
                    </p>
                </fieldset>



<!--                                Radio                                   -->
                <fieldset class="radio">
                    <legend>What instrument do you like?</legend>

                    <p class="formP">
                        <input id="radGuitar" name="radInstrument" type="radio" value="Guitar" required
                        <?php if($instrument == "Guitar") print 'checked'; ?>>
                        <label class="radio-field" for="radGuitar">Guitar</label>
                    </p>

                    <p class="formP">
                        <input id="radDrums" name="radInstrument" type="radio" value="Drums"
                        <?php if($instrument == "Drums") print 'checked'; ?>>
                        <label class="radio-field" for="radDrums">Drums</label>
                    </p>

                    <p class="formP">
                        <input id="radKeyboards" name="radInstrument" type="radio" value="Keyboard"
                        <?php if($instrument == "Keyboard") print 'checked'; ?>>
                        <label class="radio-field" for="radKeyboards">Keyboard</label>
                    </p>

                    <p class="formP">
                        <input id="radTrumpet" name="radInstrument" type="radio" value="Trumpet"
                        <?php if($instrument == "Trumpet") print 'checked'; ?>>
                        <label class="radio-field" for="radTrumpet">Trumpet</label>
                    </p>


                </fieldset>



<!--                                Submit                                  -->
                <fieldset>
                    <p class="submitButton">
                        <input type="Submit" name="btnSubmit">
                    </p>
                </fieldset>
            </form>





        </section>

        <section class="postArray">
            <?php
            print '<h2>' . $message . '</h2>';
            ?>
        </section>
  
    </main>


    <?php include 'footer.php'; ?>