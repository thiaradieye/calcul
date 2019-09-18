
<html>
    <head>
        <title>

        </title>
    </head>
    <style>
        fieldset{
            background-color: crimson;
            border-style: solid;
            border-radius:20px;

        }
     input[type=text]{
         width=90%;
         border:2px solide #aaa;
         border-radius:4px;
         margin:8px 0;
         padding:8px;
         box-sizing:border-box;
     }
     label {
        width=100%;
         border:2px solide #aaa;
         border-radius:4px;
         margin:8px 0;
         padding:8px;
         box-sizing:border-box;
 
     }
    </style>
    <center>
    <body>
      <fieldset  style="width:60%">
        <h1><font color="aqua">CALCULATRICE</font></h1>
        <fieldset style="width:50%">
        <form>
                <font color="aqua"><b>Nombre1:</b></font> <input type="text" name="num1" placeholder="entrer une valeur"><br><BR>
                    <font color="aqua"><b> Nombre2:</b></font> <input type="text" name="num2" placeholder="entrer une valeur"><br><BR>
                        <font color="aqua"><b><label>operateur</label></b></font>
             <select name="dropdown">
                 <option></option>
                 <option value="+">Addition</option>
                 <option value="-">Supstraction</option>
                 <option value="*">multiplication</option>
                 <option value="/">Division</option>
             </select><br><BR>
             <input type="submit" name="submit" value="Calculer">
             <p><font color="aqua"><b>le Resultat est:</b></font></p>
        </form>
        <fieldset> 
        
    </body>
    
</html>
<?php

    if(isset($_GET['submit'])){
    
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $dropdown = $_GET['dropdown'];

    switch ($dropdown)
    {
        case "+": 
           echo $result1 + $result2;
          break;
        case "-": 
        echo $result1 - $result2;
        break;
        case "*": 
        echo $result1 * $result2;
        break;
        case "/": 
        echo $result1 / $result2;
        break;
           
    }
}

?>
</center>
