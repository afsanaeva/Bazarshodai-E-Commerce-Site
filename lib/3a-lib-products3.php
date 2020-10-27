<?php
class Products3 extends DB {
  function get () {
  // get () : get all products3

    return $this->fetch(
      "SELECT * FROM `products3`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product1

    return $this->exec(
      "INSERT INTO `products3` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product2

    return $this->exec(
      "UPDATE `products3` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product3

    return $this->exec(
      "DELETE FROM `products3` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>