<?php 

$imagem = "imagem.jpg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("marca.jpg");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);
$imagem_original = imagecreatefromjpeg("imagem.jpg");
$image_mini = imagecreatefrompng("marca.jpg");


imagecopy($imagem_final, $imagem_original, 0,0, 0, 0, $largura_original, $altura_original);

imagecopy($imagem_final, $image_mini, 1400, 500, 0, 0, $largura_mini, $altura_mini);


header("Content-Type: image/png");
imagepng($imagem_final, null);

// echo "Imagem criada com sucesso!";
 ?>