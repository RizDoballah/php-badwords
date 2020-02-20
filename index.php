
<?php
 $text = "Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l'odore di treno che resta anche dopo che tutti i treni sono partiti, l'odore speciale delle stazioni dopo che è partito l'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d'averci passato una vita, entrando e uscendo da questo bar, passando dall'odore della pensilina all'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell'attesa, l'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.";

 $modify = $_GET['modify'];
 $author = $_GET['author'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php badwords</title>
  </head>
  <body>
  <p data-author="<?php echo $author; ?>"><?php echo $text; ?></p>
  <p>lunghezza testo: <?php echo strlen($text);?> carrateri</p>
  <p>
    <?php $new_text = str_replace($modify, '***',$text);
    echo $new_text;
   ?>
 </p>
 <p>lunghezza testo: <?php echo strlen($new_text);?> carrateri</p>


  </body>
</html>
