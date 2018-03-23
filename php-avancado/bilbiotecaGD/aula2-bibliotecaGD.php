<?php 
 

$arquivo= "imagem.jpg";

$largura = 400;
$altura = 400;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;

if($largura/$altura > $ratio):
		$largura = $altura * $ratio;
	else:
		$altura = $largura / $ratio;
endif;

$image_final = imagecreatetruecolor($largura, $altura);

$imagem_original = imagecreatefromjpeg($arquivo);

imagecopyresampled($image_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);


imagejpeg($image_final, "mini_imagem.jpg", 100);
// imagepng($image_final, "mini_imagem.png");

echo "imagem redimensionada com sucesso!";
 ?>