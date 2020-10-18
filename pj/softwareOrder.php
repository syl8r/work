<?php
  $operating = $_POST["operating"];
  $number = $_POST["number"];

  $subtotal = calsub($number);
  $tax = caltax($subtotal);
  $shipping = calship($number);
  $total = caltotal($subtotal,$tax,$shipping);

  function calsub($number){
    return $number*35;
  }

  function caltax($subtotal){
    return number_format($subtotal*0.07,2);
  }

  function calship($number){
    return $number*1.25;
  }

  function caltotal($subtotal,$tax,$shipping){
    return number_format($subtotal+$tax+$shipping,2);
  }
  echo "<p>SaveTheWorld : Order Details</p>";
  echo "<p>Operating System : $operating </p>";
  echo "<p>Number of copies : $number </p>";
  echo "===========================";
  echo "<p>Sub-Total : $subtotal" ;
  echo "<p>Tax : $tax";
  echo "<p>Shipping Cost : $shipping";
  echo "<p>===========================";
  echo "<p>Total : $total";

?>