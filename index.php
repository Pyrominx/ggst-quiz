<?php require("header.html");

$sol = 0;
$ky = 0;
$may = 0;
$axl = 0;
$chipp = 0;
$potemkin = 0;
$faust = 0;
$millia = 0;
$zato = 0;
$ramlethal = 0;
$leo = 0;
$nagoriyuki = 0;
$giovanna = 0;
$anji = 0;
$ino = 0;
$goldlewis = -999;
$jacko = -999;
$chaos = -999;
$baiken = -999;
$testament = -999;
$bridget = -999;
$sin = -999;
$bedman = -999;
$asuka = -999;
$johnny = -999;
$elphelt = -999;
$aba = -999;

switch($_POST("gender_select")) {
    case "male":
        $may = -999;
        $millia = -999;
        $ramlethal = -999;
        $giovanna = -999;
        $ino = -999;
        $jacko = -999;
        $baiken = -999;
        $bridget = -999;
        $elphelt = -999;
        $aba = -999;
        $testament = -999;
        break;
    case "female":
        $sol = -999;
        $ky = -999;
        $axl = -999;
        $chipp = -999;
        $potemkin = -999;
        $faust = -999;
        $zato = -999;
        $leo = -999;
        $nagoriyuki = -999;
        $anji = -999;
        $goldlewis = -999;
        $chaos = -999;
        $sin = -999;
        $asuka = -999;
        $johnny = -999;
        break;
    case "genNoPreference": 
        break;
    default:
        break;
}

switch($_POST("charType")) {
    case "brawl":
        $sol++;
        $may++;
        $potemkin++;
        $zato++;
        $leo++;
        $nagoriyuki++;
        $goldlewis++;
        $jacko++;
        $baiken++;
        $bridget++;
        $sin++;
        $aba++;
        break;
    case "zone":
        $faust++;
        $ramlethal++;
        $testament++;
        $asuka++;
        $johnny++;
        $jacko++;
        break;
    case "rushdown":
        $chipp++;
        $millia++;
        $bedman++;
        $elphelt++;
        break;
    case "allRound":
        $sol++;
        $ky++;
        $leo++;
        $giovanna++;
        $baiken++;
        break;
    case "typeNoPreferece":
        break;
    default:
        break;
}

switch($_POST("attr")) {
    case "health":
        $chipp--;
        $potemkin++;
        $millia--;
        $leo++;
        $nagoriyuki++;
        $goldlewis++;
        $bedman++;
        $elphelt--;
        $giovanna++;
        break;
    case "damage":
        $sol++;
        $may++;
        $axl++;
        $potemkin++;
        $ramlethal++;
        $nagoriyuki++;
        $goldlewis++;
        $sin++;
        $bedman++;
        $asuka++;
        $elphelt++;
        $aba++;
    case "speed":
        $chipp++;
        $millia++;
        $nagoriyuki++;
        $giovanna++;
        $johnny++;
        $elphelt++;
        $potemkin--;
        $goldlewis--;
        $aba--;
        break;
    case "util":
        $ky++;
        $faust++;
        $zato++;
        $axl++;
        $ramlethal++;
        $nagoriyuki++;
        $giovanna--;
        $chaos++;
        $bedman++;
        $asuka+=2;
        break;
    default:
        break;
}

switch($_POST("range")) {
    case "close":
        $sol++;
        $may++;
        $chipp++;
        $potemkin++;
        $millia++;
        $leo++;
        $giovanna++;
        $anji++;
        $baiken++;
        $bridget++;
        $sin++;
        $bedman++;
        $elphelt++;
        $aba++;
        break;
    case "far":
        $faust++;
        $ramlethal++;
        $ino++;
        $jacko++;
        $chaos++;
        $asuka++;
        break;
    case "medium":
        $axl++;
        $zato++;
        $ramlethal++;
        $nagoriyuki++;
        $goldlewis++;
        $baiken++;
        $johnny++;
        break;
    case "all":
        $faust++;
        $zato++;
        $ino++;
        $jacko++;
        $chaos++;
        break;
    default:
        break;
}

switch($_POST("winCon")) {
    case "bully":
        $sol++;
        $zato++;
        $ramlethal++;
        $nagoriyuki++;
        $giovanna++;
        $jacko++;
        $chaos++;
        $baiken++;
        $bridget++;
        $sin++;
        $bedman++;
        $asuka++;
        $elphelt++;
        $aba++;
        break;
    case "neutral":
        $axl++;
        $potemkin++;
        $faust++;
        $leo++;
        $anji++;
        $ino++;
        $goldlewis++;
        $testament++;
        $johnny++;
        $aba++;
        break;
    case "long":
        $sol++;
        $chipp++;
        $millia++;
        $nagoriyuki++;
        $bridget++;
        $elphelt++;
        break;
    case "setplay":
        $ky++;
        $axl++;
        $faust++;
        $millia++;
        $jacko++;
        $asuka++;
        $johnny++;
        break;
    default:
        break;
}

switch($_POST("difficulty")) {
    case "masochist":
        $millia;
        $zato++;
        $jacko++;
        $chaos++;
        $asuka++;
        break;
    case "hard":
        $chipp++;
        $millia++;
        $bedman++;
        $aba++;
        break;
    case "medium":
        $sol++;
        $ky++;
        $may++;
        $axl++;
        $potemkin++;
        $faust++;
        $ramlethal++;
        $leo++;
        $nagoriyuki++;
        $anji++;
        $ino++;
        $baiken++;
        $testament++;
        $bridget++;
        $johnny++;
        $elphelt++;
        break;
    case "baby":
        $giovanna++;
        $sin++;
        break;
    default:
        break;
}

switch($_POST("charge")) {
    case "love":
        $sol--;
        $ky--;
        $may++;
        $axl;
        $chipp--;
        $potemkin;
        $faust--;
        $millia--;
        $zato--;
        $ramlethal--;
        $leo;
        $nagoriyuki--;
        $giovanna--;
        $anji--;
        $ino--;
        $goldlewis--;
        $jacko--;
        $chaos--;
        $baiken--;
        $testament--;
        $bridget--;
        $sin--;
        $bedman--;
        $asuka--;
        $johnny--;
        $elphelt--;
        $aba--;
        break;
    case "ok":
        $axl++;
        $potemkin++;
        $leo++;
        break;
    case "hate":
        $may--;
        $axl--;
        $potemkin--;
        $leo--;
        break;
    default:
        break;
}

switch($_POST("proj")) {
    case "want":
        $ky++;
        $axl++;
        $faust++;
        $ramlethal++;
        $leo++;
        $goldlewis++;
        $jacko++;
        $chaos++;
        $testament++;
        $asuka++;
        break;
    case "maybeWant":
        $sol++;
        $ky++;
        $axl++;
        $faust++;
        $millia++;
        $zato++;
        $ramlethal++;
        $leo++;
        $nagoriyuki++;
        $anji++;
        $ino++;
        $goldlewis++;
        $jacko++;
        $chaos++;
        $baiken++;
        $testament++;
        $bridget++;
        $bedman++;
        $asuka++;
        $johnny++;
        $elphelt++;
        break;
    case "dontWant":
        $ky--;
        $axl--;
        $faust--;
        $leo--;
        $ino--;
        $goldlewis--;
        $jacko--;
        $chaos--;
        $asuka--;
        $elphelt--;
        break;
    default:
        break;
}

switch($_POST("dlcs")) {
    case "1":
        $goldlewis += 999;
        $jacko += 999;
        $chaos += 999;
        $baiken += 999;
        $testament += 999;
        break;
    case "2":
        $bridget += 999;
        $bedman += 999;
        $asuka += 999;
        $sin += 999;
        break;
    case "3":
        $johnny += 999;
        $aba += 999;
        $elphelt += 999;
        break;
    default:
        break;
}

$finalNum = max($sol,$ky,$may,$axl,$chipp,$potemkin,$millia,$zato,$ramlethal,$leo,$nagoriyuki,$giovanna,$anji,$ino,$goldlewis,$jacko,$chaos,$baiken,$testament,$bridget,$sin,$bedman,$asuka,$johnny,$elphelt,$aba);
switch($finalNum) {
    case $sol:
        $character = "Sol Badguy";
        break;
    case $ky:
        $character = "Ky Kiske";
        break;
    case $may:
        $character = "May";
        break;
    case $axl:
        $character = "Axl Low";
        break;
    case $chipp:
        $character = "Chipp Zanuff";
        break;
    case $potemkin:
        $character = "Potemkin";
        break;
    case $millia:
        $character = "Millia Rage";
        break;
    case $zato:
        $character = "Zato-1";
        break;
    case $ramlethal:
        $character = "Ramlethal Valentine";
        break;
    case $leo:
        $character = "Leo Whitefang";
        break;
    case $nagoriyuki:
        $character = "Nagoriyuki";
        break;
    case $giovanna:
        $character = "Giovanna";
        break;
    case $anji:
        $character = "Anji Mito";
        break;
    case $ino:
        $character = "I-No";
        break;
    case $goldlewis:
        $character = "Goldlewis Dickinson";
        break;
    case $jacko:
        $character = "Jack-O Valeentine";
        break;
    case $chaos:
        $character = "Happy Chaos";
        break;
    case $baiken:
        $character = "Baiken";
        break;
    case $testament:
        $character = "Testament";
        break;
    case $bridget:
        $character = "Bridget";
        break;
    case $sin:
        $character = "Sin Kiske";
        break;
    case $bedman:
        $character = "Bedman?";
        break;
    case $asuka:
        $character = "Asuka R. Kreutz";
        break;
    case $johnny:
        $character = "Johnny";
        break;
    case $elphelt:
        $character = "Elphelt Valentine";
        break;
    case $faust:
        $character = "Faust";
        break;
    case $aba:
        $character = "A.B.A";
        break;
    default:
        break;
}

echo "<h2>You Should Play".$character."</h2>"
?>



<main>
    <form action="index.php">
        <p><label>Do you have a gender preference for your character?</label><br>
        <input type="radio" name="gender_select" value="male"><label>Male</label>
        <input type="radio" name="gender_select" value="female"><label>Female</label>
        <input type="radio" name="gender_select" value="genNoPreference"><label>No Preference</label></p>
        <p><label>What kind of character do you like?</label><br>
        <input type="radio" name="charType" value="brawl"><label>Close Range Brawler</label>
        <input type="radio" name="charType" value="zone"><label>Zoner</label>
        <input type="radio" name="charType" value="rush"><label>Rushdown</label>
        <input type="radio" name="charType" value="allRound"><label>All Rounder</label>
        <input type="radio" name="charType" value="typeNoPreference"><label>No Preference</label></p>
        <p><label>What attribute do you like?</label><br>
        <input type="radio" name="attr" value="health"><label>High Health</label>
        <input type="radio" name="attr" value="damage"><label>High Damage</label>
        <input type="radio" name="attr" value="speed"><label>High Speed</label>
        <input type="radio" name="attr" value="util"><label>High Utility</label></p>
        <p><label>What range do you want to play at?</label><br>
        <input type="radio" name="range" value="close"><label>Close Range</label>
        <input type="radio" name="range" value="far"><label>Far Range</label>
        <input type="radio" name="range" value="medium"><label>Mvalue Range</label>
        <input type="radio" name="range" value="all"><label>All ranges</label></p>
        <p><label>How do you like beating your opponent?</label><br>
        <input type="radio" name="winCon" value="bully"><label>Bullying in the corner</label>
        <input type="radio" name="winCon" value="neutral"><label>Playing better neutral</label>
        <input type="radio" name="winCon" value="long"><label>Rushing down before they know what happens</label>
        <input type="radio" name="winCon" value="setplay"><label>setting up pressure/Setplay</label></p>
        <p><label>What kind of difficulty do you like?</label><br>
        <input type="radio" name="difficulty" value="masochist"><label>I want to have an exremely hard character with a lot of depth</label>
        <input type="radio" name="difficulty" value="hard"><label>I want a character that is difficult but not too hard to pick up</label>
        <input type="radio" name="difficulty" value="medium"><label>I want a balanced experience, not too easy, not too hard<label>
        <input type="radio" name="difficulty" value="baby"><label>I dont want a very complex toolkit/im new to fighting games</label></p>
        <p><label>Do you like charge inputs?</label><br>
        <input type="radio" name="charge" value="love"><label>I want to mainly be doing charge inputs</label>
        <input type="radio" name="charge" value="ok"><label>A couple charge inputs are fine</label>
        <input type="radio" name="charge" value="hate"><label>I hate charge inputs<label>
        <input type="radio" name="charge" value="chargeNoPreference"><label>No Preference</label></p>
        <p><label>Do you like charge inputs?</label><br>
        <input type="radio" name="proj" value="want"><label>I need multiple projectiles</label>
        <input type="radio" name="proj" value="maybeWant"><label>I want at least one good projectile</label>
        <input type="radio" name="proj" value="dontWant"><label>I dont want projectiles<label>
        <input type="radio" name="proj" value="projNoPreference"><label>No Preference</label></p>
        <p><label>What DLC do you own?</label><br>
        <input type="checkbox" name="dlcs" value="1"><label>Season Pass 1</label>
        <input type="checkbox" name="dlcs" value="2"><label>Season Pass 2</label>
        <input type="checkbox" name="dlcs" value="3"><label>Season Pass 3</label>
        <br>
        <input type="submit" value="Give Me a Character">
    </form>
</main>

<?php require("footer.html");?>