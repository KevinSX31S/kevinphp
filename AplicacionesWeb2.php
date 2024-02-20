<html>
    <head>

    </head>
    <body>
        <?php 
        $pnumero = 1;
        $snumero = 2;
        $suma = suma($pnumero,$snumero);
        if($suma>=5){
            
        ?>

           <table id="tabla" class="table table-bordered table-hover table-responsive table-fixed">
            <thead>
                <tr style="width:1000px;">
                    <th style="width:45px">Num</th>
                    <th style="width: 400px">Nombre</th>
                    <th style="width: 250px">Usuario</th>
                    <th style="width: 250px">Grupo</th>
                    <th colspan="2" style="width: 150px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style="width:1000px;">
                    <td style="width:400px;">1</td>
                    <td style="width:400px;"><?php echo 'Julio Cesar'?></td>
                    <td style="width:400px;">Administrador</td>
                    <td style="width:400px;">Admin</td>
                    <td style="width:400px;"></td>
                </tr>
                <tr style="width:1000px;">
                    <td style="width:400px;">2</td>
                    <td style="width:400px;">Mateo</td>
                    <td style="width:400px;">Marketing</td>
                    <td style="width:400px;">Recursos Humanos</td>
                    <td style="width:400px;"></td>
                </tr>
            </tbody>
            
        </table> 

        <?php }else{ ?>
            <h1>ESTRUCTURA ELSE</h1>
        <?php } ?> 
        

        <?php 
        function suma($a,$b){
            $c = $a + $b;
            return $c;
        }
        ?>

    </body>
</html>