<?php
class Products1 extends DB {
  function get () {
  // get () : get all products1

    return $this->fetch(
      "SELECT * FROM `products1`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product1

    return $this->exec(
      "INSERT INTO `products1` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product1

    return $this->exec(
      "UPDATE `products1` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product1

    return $this->exec(
      "DELETE FROM `products1` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>