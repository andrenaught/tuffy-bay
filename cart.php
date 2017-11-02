<?php
$title = 'Shopping Cart'; # Enter title of page
$css_files = array(
  # put css files here
);
include $_SERVER['DOCUMENT_ROOT'] . 'php/phtml/html_header.phtml';
?>
<h3>Shopping Cart</h3>
<p>Your shopping cart is empty.</p>
<div class="item-card">
  <span class="name">Item Name</span>
  <input type="number" name="quantity" min="1">
  <span class="price">$9.99</span>
</div>
<div id="purchase-btn">
  <span>Purchase</span>
</div>
<h3>Wishlist</h3>
<p>Your wishlist is empty</p>
<div class="wish-card">
  <span class="name">Item Name</span>
</div>
<?php
$js_files = array(
  # put js files here
);
include $_SERVER['DOCUMENT_ROOT'] . 'php/phtml/html_footer.phtml';
?>