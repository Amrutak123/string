<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK-2</title>

    <style>
        form { 
        padding: 15px; 
        margin: 100px 200px 200px 200px;
        background-color:#e6f9ff;
        border-style: inset;
        text-align:center;
    }
    button { 
       background-color: lightblue; 
       width: 20%;
        color: black; 
        padding: 10px; 
        margin: 10px 10px ; 
        border: gray; 
        cursor: pointer; 
         }
    </style>
</head>
<?php
$str1='';
$count='';
$require='';
$invalid='';
$fHalf='';
$sHalf='';
$StringLen='';
$strRev='';
$strCon='';
$array='';
$count='';
$arrayPush='';
$reverse='';
//$Concate='';
$remove='';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (!empty($_POST["string"])) 
    {
        if(strlen($_POST["string"])% 2=="0")
        {
            $str1 = $_POST["string"];
            $count=strlen($_POST["string"]);
            $StringLen=strlen($_POST["string"])/2;
            $fHalf=substr($str1,0,$StringLen);
            $sHalf=substr($str1,$StringLen);
            $strRev=strrev ( $fHalf );
            $strCon=$strRev.$sHalf;
            $array=str_split($strCon);
            $count=count($array); 
            $arrayPush=array_push($array,"k","k");
            $reverse=array_reverse($array);
            $remove=array_slice($reverse, 2, count($reverse));
            //$Concate=$remove.$strCon;
        }
        else
        {
            $invalid="Invalid String";
        }
    } 
    else 
    {
        $require = "Sting is required";

    }

}
?>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Enter String:<input type="text" name="string" value="<?php echo $str1;?>">
    <br>
    <button type="submit">Submit</button>


<?php
echo "<h2>Output</h2>";

echo $require;
echo $invalid;
echo"<br>";
echo "Entered String is : ".$str1;
echo "<br>";
echo "Count of String is : ".$count;
echo "<br>";
echo "First Half Of $str1 is : ".$fHalf;
echo "<br>";
echo "Second Half Of $str1 is : ".$sHalf;
echo"<br>";
echo "Reversed String Of $str1 is : ".$strRev;
echo "<br>";
echo "Second Half Of $str1 is : ".$sHalf;
echo "<br>";
echo "Concatenated String is : ".$strCon;
echo "<br>";
echo "String converted to array : "; 
print_r($array);
echo "<br>";
echo "Count of array is : ".$count;
echo "<br>";
echo "After Adding elements to Array : "; 
print_r($array);
echo "<br>";
echo "After Reversing : "; 
print_r($reverse);
echo "<br>";
echo "After Removing : "; 
print_r($remove);
echo "<br>";
//echo "Concatenate String And Array : ";
//print_r($Concate);
?>
</form>

</body>
</html>