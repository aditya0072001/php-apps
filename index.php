<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          class Book{
            private $name;
            private $price;

          public  function _construct($n,$p){
              $this->$name=$n;
              $this->$price=$p;
            }

            public function show(){
              echo "$name <br>";
              echo "$price <br>";
            }
          }

          $b = new Book("Song of ice and fire",67.89);
          echo $b->show();
       ?>
  </body>
</html>
