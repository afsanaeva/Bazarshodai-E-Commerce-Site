<?php
class Products5 extends DB {
  function get () {
  // get () : get all products5

    return $this->fetch(
      "SELECT * FROM `products5`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product5

    return $this->exec(
      "INSERT INTO `products5` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product5

    return $this->exec(
      "UPDATE `products5` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product5

    return $this->exec(
      "DELETE FROM `products5` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>