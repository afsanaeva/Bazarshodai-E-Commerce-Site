<?php
class Products4 extends DB {
  function get () {
  // get () : get all products4

    return $this->fetch(
      "SELECT * FROM `products4`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product4

    return $this->exec(
      "INSERT INTO `products4` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product4

    return $this->exec(
      "UPDATE `products4` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product4

    return $this->exec(
      "DELETE FROM `products4` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>