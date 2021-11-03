<?php
function getOdds($maxnumbers, $impairs, $counter, $min, $max)
{
   $num = rand($min, $max);
   if ($num % 2 == 1) {
      if (!in_array($num, $impairs)) {
         $impairs[] = $num;
         $counter++;
      }
   }
   if ($counter < $maxnumbers) {
      $impairs = getOdds($maxnumbers, $impairs, $counter, $min, $max);
   }
   return $impairs;
}

$maxnumbers = 75;
$min = 0;
$max = 500;
$impairs = [];
$counter = 0;
$num = rand($min, $max);


$test = getOdds($maxnumbers, $impairs, $counter, $min, $max);

?>
<!doctype html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
   <meta name="description" content="">
   <title></title>
   
</head>

<body>
   <table>
      <thead>
         <tr>
            <th>Value A</th>
            <th>Value B</th>
            <th>Value C</th>
         </tr>
      </thead>
      <tbody>
         <?php $isOdd = true;
         $count = 1;
         for ($i = 0; $i < $maxnumbers; $i++) : ?>
            <?php if ($count == 1) : ?>
               <tr class="<?php if ($isOdd) {
                              echo "odd";
                           } else {
                              echo "even";
                           } ?>">
                  <td><?php echo $test[$i]; ?></td>
               <?php endif; ?>
               <?php if ($count == 2) : ?>
                  <td><?php echo $test[$i]; ?></td>
               <?php endif; ?>
               <?php if ($count == 3) : ?>
                  <td><?php echo $test[$i]; ?></td>
               </tr>
            <?php endif; ?>

         <?php $count++;
            if ($count == 4) {
               $count = 1;
            }
            $isOdd = !$isOdd;
         endfor; ?>
      </tbody>
   </table>
</body>

</html>