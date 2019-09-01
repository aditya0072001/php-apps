<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          class Book
          {
            private $name;
            private $price;
            private $author;

            function _construct($n,$p,$a){
              $this->$name=$n;
              $this->$price=$p;
              $this->$author=$a;
            }

            function show(){
              echo "$this->$name <br>";
              echo "$this->$price <br>";
              echo "$this->$author <br>";
            }
          }

          $b1 = new Book("Song of ice and fire",67.89,"J.K.Rowling");
          echo "$b1->show()";
       ?>
  </body>
</html>
