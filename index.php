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

          public  function __construct($name,$price){
              $this->name=$name;
              $this->price=$price;
            }

            public function show(){
              echo "$this->name <br>";
              echo "$this->price <br>";
            }
          }

          $b = new Book("Song of ice and fire",67.89);
          echo $b->show();
       ?>
  </body>
</html>
