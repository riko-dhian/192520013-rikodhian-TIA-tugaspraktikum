<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>

    </head>
    <body>

        <?php
            $nim = 192520013;
            $nama = "Riko Dhian Saputra";
            $alamat = "Purworejo";
            $email = "rikodhian20@gmail.com";
            $minat = "jaringan";
        ?>
            <form action="#" style="width:700px"class="posisi";>
            <fieldset class="h">
            <table style="width:600px";> 
            <body style="background-color:gray"></body>
            
        <tr>
            <td rowspan="10" width="100px">
                <img src="riko.jpg" width= "120" heigh= "50" border="5">
            </td>
        </tr>
        <center>
            <font size="30px">
            <b>Biodata</b>
            </font>
        </center>
       
        
        <tabel>
        <tr>
            <td rowspan= "9">
            <td> <?php echo "Nim"; ?></td>
            <td> <?php echo ": "; ?> </td>
            <td> <?php echo $nim ?> </td>
        </tr>
        <tr>
            <td> <?php echo "nama"; ?> </td>
            <td> <?php echo ": "; ?> </td>
            <td> <?php echo $nama ?> </td>
        </tr>
        <tr>
            <td> <?php echo "alamat" ?> </td>
            <td> <?php echo ": "; ?> </td>
            <td> <?php echo $alamat ?> </td>
        </tr>
        <tr>
            <td> <?php echo "email" ?> </td>
            <td> <?php echo ": "; ?> </td>
            <td> <?php echo $email ?> </td>
        </tr>
        <tr>
            <td> <?php echo "minat" ?> </td>
            <td> <?php echo ": "; ?> </td>
            <td> <?php echo $minat ?> </td>
        </tr>
    </tabel>

    </body>
</html>