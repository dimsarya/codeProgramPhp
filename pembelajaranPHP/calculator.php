<?php
    // tampung input textfield kedalam variabel
    $inputA = @$_POST['inputA']; 
    $inputB = @$_POST['inputB']; 
    $hasil = @$_POST['hasil']; 

    // tampung input operator kedalam variabel
    $operator =  @$_POST['operator']; 

    // jika tombol hitung diklik
    if(isset($_POST['buttonHitung'])){

        // pengecekan operator
        if($operator == "+"){
            $hasil = $inputA + $inputB;
        }else if($operator == "-"){
            $hasil = $inputA - $inputB;
        }else if($operator == "*"){
            $hasil = $inputA * $inputB;
        }else if($operator == "/"){
            $hasil = $inputA / $inputB;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/calculator.css">
    </head>

    <body>
        <form method="POST">
            <div class="container">
                <div class="innerContainer">
                    <!-- Input A -->
                    <div class="inputA">
                        <input type="text" name="inputA" value="<?=$inputA?>">
                    </div>

                    <!-- Operator Group -->
                    <div class="operatorGroup">
                        
                        <!-- Operator Tambah -->
                        <input type="checkbox" name="operator" value="+" id="check">
                        <label for="check">
                            <img src="img/TombolTambah.png" alt="tombol-tambah" >
                        </label>
                        
                        <!-- Operator Kurang -->
                        <input type="checkbox" name="operator" value="-" id="check2">
                        <label for="check2">
                            <img src="img/TombolKurang.png" alt="tombol-kurang">
                        </label>
                        
                        <!-- Operator Kali -->
                        <input type="checkbox" name="operator" value="*" id="check3">
                        <label for="check3">
                            <img src="img/TombolKali.png" alt="tombol-kali">
                        </label>
                       
                        <!-- Operator Bagi -->
                        <input type="checkbox" name="operator" value="/" id="check4">
                        <label for="check4">
                            <img src="img/TombolBagi.png" alt="tombol-bagi">
                        </label>
                        
                    </div>

                    <!-- Input B -->
                    <div class="inputB">
                        <input type="text" name="inputB" value="<?=$inputB?>">
                    </div>

                    <!-- Tombol Hitung -->
                    <div class="buttonHitung">
                        <button type="submit" name="buttonHitung">Hitung</button>
                    </div>

                    <!-- Input Hasil -->
                    <div class="hasil">
                       <input type="text" name="hasil" value="<?=$hasil?>" disabled>
                    </div>
                </div>
            </div>
        </form>   
    </body>

</html>









<!-- 

// Periksa Operator Yang Diklik
        $operator = $_POST['operator'];

        if($operator == "+"){
            $hasil = $inputA + $inputB;
        }else if($operator == "-"){
            $hasil = $inputA - $inputB;
        }else if($operator == "*"){
            $hasil = $inputA * $inputB;
        }elseif($operator == "/"){
            $hasil = $inputA / $inputB;
        }

        if(isset($_POST['buttonHitung'])){
            
        }
         -->