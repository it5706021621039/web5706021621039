<html>
<head><title> Random 0-25 </title></head>
<body>
    <center>
      <?php
      $i=1;
      for ($r=0; $r <13 ; $r++) {
        for ($c=0; $c <4 ; $c++) {
          $num[$r][$c]=$i;
          $i++;
        }
      }
      for ($r=0; $r <13 ; $r++) {
        for ($c=0; $c <4 ; $c++) {
          $a=rand(0,12);
          $b=rand(0,3);
          $temp=$num[$r][$c];
          $num[$r][$c]=$num[$a][$b];
          $num[$a][$b]=$temp;
          echo  $num[$i][$c];
        }
      }
      ?>
      <table border="1" height="700" width="500" >

      <?php for($r=0; $r <13 ; $r++) { ?>
          <tr>
              <?php  for ($c=0; $c <4 ; $c++) { ?>
                <td align = "center"><?php echo $num[$r][$c]; ?></td>
            <?php  } ?>
          </tr>
      <?php } ?>
    </table>


    <body>
    <?php
    for($i=1;$i<=13;$i++)
    {
    for($j=1;$j<=4;$j++)
    {


    }

    }

    ?>

  </body>

    </center>
    </body>

  </html>
