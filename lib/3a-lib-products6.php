<?php
class Products6 extends DB {
  function get () {
  // get () : get all products6

    return $this->fetch(
      "SELECT * FROM `products6`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product6

    return $this->exec(
      "INSERT INTO `products6` (`product_name`, `product_image`, `product_description`, `product_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product6

    return $this->exec(
      "UPDATE `products6` SET `product_name`=?, `product_image`=?, `product_description`=?, `product_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product6

    return $this->exec(
      "DELETE FROM `products6` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>