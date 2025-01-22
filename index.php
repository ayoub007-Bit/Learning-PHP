<?php
//phpinfo(); 
echo "hello world"; //instruction echo est utiliser pour afficher quelque chose sur l'écran
print "hillo werld"; /* meme chose que echo*/
echo "<h1>HILLOZ </h1>";
?>

<h1>heyyyy</h1>
<h1> <?php echo "heyyyy"; ?> </h1>

<?php
//1-declaration de variable
//En PHP pour nommer les variables en utilise des noms significatifs et descriptifs
//la variable commence tjrs par $ et une minusle et chaque mot suivant commencera par une majuscule
//Les constantes s'ecrit tjrs en majuscule (tout en majuscule) 
$maVariable = "ceci est ma premier var";
$monNombreEntier = 10;
$monNombreDecimale = 10.5;
$monBooleen = true;
$monTableau = ["a", "b", "c"];
echo $maVariable;
echo "<br>";
$maVariable = "changement de valeur";
define("maConstante", "valeur de ma constante");
echo maConstante;
echo "<br>";
const ma_const = 3;
echo ma_const;
echo "<br>";

//2-String
//comment sauter une ligne autre qur br
$sautLigne = "hey my name is ayoub \n I'm 18 years old";
echo nl2br($sautLigne); //cette fonction permer de traduire \n en br
echo "<br>";
echo str_replace("\n", "<br>", $sautLigne); //celle ci aussi
echo "<br>";
echo var_dump($maVariable); //permet d'afficher le type de la variable
echo "<br>";
//concatenation 
echo "le nombre de caractere de " . $maVariable . "est de : " . strlen($maVariable);
echo "<br>";
$length = strlen($maVariable);
echo "le nombre de cara de {$maVariable} est de: {$length}";
echo "<br>";
//on peut considérer un string  comme une arrayde caractere

echo $maVariable[0];
echo "<br>";
echo $maVariable[strlen($maVariable) - 1];
echo "<br>";
echo var_dump(str_split($maVariable));
echo "<br>";
$upperCase = "UPPERCASE";
echo strtolower($upperCase); // to upper case = strtoupper
echo "<br>";
echo strpos($upperCase, "E");
echo "<br>"; //cherche la lettre E
echo trim("   hey guys "); //enleve les espaces
echo "<br>";
$myFriends = "ayoub, ayoubous, ayoubi";
echo var_dump(explode(", ", $myFriends)); //Transforme une chaine de caractére en tableau
echo "<br>";
?>


<?php
//3-les Int
//les decimales 
$myFirstInt = -10;
//pour comparer
$intA = 8.9;
$intB = 8.900000009;
echo max($intA, $intB);
echo "<br>";
echo min($intA, $intB);
echo "<br>";
//majorée et minorée
$floatA = 1.76;
echo floor($floatA); //plus petit
echo "<br>";
echo ceil($floatA);//plus grand
echo "<br>";
echo round($floatA);//plus proche

//4-Bool
echo "<br>";
//true = 1 et false = 0

//5-simple array
$myArrayo = array("a", "b", "c");
$myArrayi = [5, 98, 111];
//ajouter des elements
$myArrayi[] = "add to the end";
array_push($myArrayi, 1000, "ayoub");
array_unshift($myArrayi, "add to the start");
echo var_dump($myArrayi);
echo "<br>";
//supprimer des elements
unset($myArrayi[2]);
array_pop($myArrayi); //supprime le dernier element
array_shift($myArrayi); //supprime le premier element
//modifier des elements
$myArrayi[4] = "new value";
//affichage
echo var_dump($myArrayo);
echo "<br>";
echo var_dump($myArrayi);
echo "<br>";
echo count($myArrayi);
echo "<br>";
//sorting
$sortArray = [1, 3, 5, 2, 4];
sort($sortArray);
echo var_dump($sortArray);
echo "<br>";
rsort($sortArray);
echo var_dump($sortArray);

//recherche un index
echo "<br>";
$exists = array_search(5, $sortArray);
echo var_dump($exists);
echo "<br>";
$index = array_search(3, $sortArray);
$sortArray[$index] = 10;
echo var_dump($sortArray);
echo "<br>";

//6-associative array 
$classNotes = ["Sam" => 15, "Ayoub" => 8, "Yassine" => 20];
$classNotes['ahmed'] = 20;
$classNotes['Ayoub'] = 10;
unset($classNotes['Sam']);
$isSet = isset($classNotes['Ali']);
echo var_dump($classNotes);
echo "<br>";
echo var_dump($isSet);


//7-les opérateurs
echo "<br>";
// Arithmétiques + - * / %
$a = 23;
$b = 7;
$addtion = $a + $b;
$soustraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;
$modulo = $a % $b; //reste de la division
//incrémentation et décrémentation
$a++;
$b--;
$a += 8; // +=  -=  *= /=  %=
//opé entre different type
$int = 5.4;
$strg = "5";
$strAndInt = "2a";
echo $int + $strg;
echo "<br>";
echo $int - $strg;
echo "<br>";
echo var_dump(is_numeric($strg));
echo "<br>";
echo var_dump(is_numeric($strAndInt));
//opé de comparaison ==  ===  != !== >  <  >=  <=
$e = 5;
$f = 7;
$g = "5";
echo "<br>";
echo var_dump($e == $g);
echo "<br>";
echo var_dump($e === $g);
echo "<br>";
echo var_dump($e != $g);
echo "<br>";
echo var_dump($e !== $g);
echo "<br>";
echo var_dump($e > $f);
echo "<br>";
echo var_dump($e < $f);
echo "<br>";
//ternaire (condition) ? siVrai : siFaux
$studentA = 15;
$studentB = 10;
$AdmissionA = ($studentA >= 10) ? "Admis" : "Refusé";
$AdmissionB = ($studentB >= 10) ? "Admis" : "Refusé";
echo $AdmissionA;
echo "<br>";
echo $AdmissionB;
echo "<br>";
//opé logique && || !
$lesDeuxStd = $studentA && $studentB;
$nivreauClass = ($lesDeuxStd >= 10) ? "Niveau : Bon" : "Niveau : Faible";
echo $nivreauClass;
echo "<br>";
//opé nullish
$nom = null;
echo $nom ?? "veuillez entrer votre nom";
echo "<br>";
$nom = "Ayoub";
echo $nom ?? "veuillez entrer votre nom";
echo "<br>";


//8-les fonctions = des blocs de code réutilisables 
// il faut la declarer , definir et appeler
function createTitle()
{
    $title = "titre de la page";
    echo "<h1> {$title}</h1>";
}
createTitle();
createTitle();
createTitle();
//fonction avec parametre
function createTitle2($titre)
{
    echo "<h3> {$titre}</h3>";
}
createTitle2("Types");
createTitle2("Variables");
createTitle2("Opérateurs");
createTitle2("Fonctions");
function comparaison($x, $y)
{
    $max = max($x, $y);
    echo "le plus grand entre {$x} et {$y} est : {$max} <br>";
}
comparaison(2, 5);
function comparaisonFond($w, $z)
{
    $plusGrandOuPetit = ($w > $z) ? "{$w} est plus grand que {$z} <br>" : "{$w} est plus petit que {$z}<br>";
    echo $plusGrandOuPetit;
}
comparaisonFond(22, 10);
comparaisonFond("7", 8);
//fonction avec retour

function retour($name): string
{
    return "<h1>bonjour {$name} </h1>";
}
echo retour("ayoub");
//9-global et local et static scope 

function localscope()
{
    $hey = "hey <br>";
    echo $hey;
}
localscope();
//echo $hey; //erreur car la variable est locale

//locale scope = dans notre fonction
//globale scope = dans et en dehors la fonction
//static scope = conserve la valeur de la variable
function globalScope()
{
    global $namecheap;
    echo "this is a domain name : {$namecheap} <br>";
}
$namecheap = "ayoub.com";
globalScope();
function staticScope()
{
    static $chapterNumber = 1;
    echo "chapter number : {$chapterNumber} <br>";
    $chapterNumber++;
}
staticScope();
staticScope();
staticScope();


//10-Boucles : for, while, do while et foreach
//for
for ($i = 0; $i < 5; $i++) {
    echo "Page : {$i} <br>";
}

$arrayForLoop = ["charlotte", "ayoub", "Ahmed"];

for ($i = 0; $i < count($arrayForLoop); $i++) {
    echo "Student : {$arrayForLoop[$i]} <br>";
}
//Foreach
$arrayForEach = ["Toulouse" => 10, "Paris" => 3, "Marrakech" => 46];

foreach ($arrayForEach as $key => $value) {
    echo "ville : {$key}, Température : {$value} °C <br>";
}
//while 
$i = 0;
while ($i < 7) {
    echo "page : {$i} <br>";
    $i++;
}
//Break et continue
for ($i = 0; $i < 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    } else if ($i == 13) {
        break;
    }
    echo "{$i} <br>";
}



//11-Conditions if and else
$isSunny = true;
$isWinter = true;
if ($isSunny) {
    echo "vamos a la playa <br>";
}else if($isWinter){
    echo "vamos a la montaña <br>";
}
$season=  "summer";
switch($season){
    case "summer" : echo "vamos a la playa <br>";
          break;
    case "winter" : echo "vamos a la montaña <br>";
            break;
    case "autumn" : echo "vamos a walou <br>";
            break;
    case "spring" : echo "vamos a la campagne <br>";
            break;
}
//conditions in the code 
?>
<?php
 $isSunn = true;
 $season = "summer";
?>

<?php if($isSunn && $season == "summer") : ?>
    <h1> vamos a la playa </h1>
    <?php elseif($isSunn) : ?>
        <h1> vamos a la playa </h1>
        <?php else: ?>
            <h1> fakyoooooooo </h1>
            <?php endif ; ?>
 


