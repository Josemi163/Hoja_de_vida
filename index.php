<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vida PHP</title>
    <link rel="stulesheet"href="css/styles.css">

</head>
<body>
   <?php
      $nombre = "Miguel Rodriguez";
      $profesion = "Ingeniero de Sistemas";
      $edad = 18;
      $habilidades = [
        "HTML",
        "CCS",
        "JavaScript",
      ];
   ?>
   <h1> <?php echo $nombre; ?> </h1>
   <h2> <?php echo $profesion; ?> </h2>
  <!-- Concatenacion -->
   <p><?php echo "Soy ". $nombre ." y soy ". $profesion ?></p>
   <?php if($edad >= 18): ?>
       <p>Disponible para trabajar</p>
    <?php else: ?>
        <p>Menor de edad - No puede trabajar</p>
    <?php endif; ?>
    
    <main>
        <section>
    <h2>Habilidades</h2>
    <ul>
        <?php foreach($habilidades as $habilidad): ?>
            <li><?= $habilidad ?></li>
        <?php endforeach; ?>
    </ul>
    </section>

    </main>
</body>
</html>