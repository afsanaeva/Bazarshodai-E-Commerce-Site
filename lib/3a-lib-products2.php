<?php
class Products2 extends DB {
  function get () {
  // get () : get all products2

    return $this->fetch(
      "SELECT * FROM `products2`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product1

    return $this->exec(
      "INSERT INTO `products2` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product2

    return $this->exec(
      "UPDATE `products2` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product2

    return $this->exec(
      "DELETE FROM `products2` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>