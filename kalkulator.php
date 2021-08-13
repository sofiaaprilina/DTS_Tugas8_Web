<html>
<head>
    <title><?php echo "Kalkulator Sederhana"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    <?php 
        $hasil = "";
        function hitung($angka1, $angka2, $operator)
        {
            switch($operator)
            {
                case '+':
                    return $angka1 + $angka2;
                    break;

                case '-':
                    return $angka1 - $angka2;
                    break;

                case '*':
                    return $angka1 * $angka2;
                    break;

                case '/':
                    return $angka1 / $angka2;
                    break;
            }   
        }

        if(isset($_POST['submit']))
        {   
            $hasil = hitung($_POST['angka1'], $_POST['angka2'], $_POST['op']);
        }
    ?>

    <div class="app">
		<h2 class="judul">Kalkulator Sederhana</h2>
		<form method="post">			
			<input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Bilangan Pertama">
			<input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Bilangan Kedua">
			<select class="op" name="op">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
			</select>
			<input type="submit" name="submit" value="Hitung" class="tombol">											
		</form>
        <?php if(isset($_POST['submit'])){ ?>
            <input type="text" value="<?php echo $_POST['angka1'].$_POST['op'].$_POST['angka2']; ?> = <?php echo $hasil; ?>" class="hasil">
        <?php } else{ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil">
        <?php } ?>
	</div>
</body>

</html>