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

            function _construct($name,$price,$author){
              $this->$name=$name;
              $this->$price=$price;
              $this->$author=$author;
            }

            function show(){
              echo "$name <br>";
              echo "$price <br>";
              echo "$author <br>";
            }
          }

          $b1 = new Book("Song of ice and fire",67.89,"J.K.Rowling");
          $b1.show();
       ?>
  </body>
</html>
