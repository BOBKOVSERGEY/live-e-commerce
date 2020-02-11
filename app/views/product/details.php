<?php $this->start('head'); ?>

<?php $this->end(); ?>
<?php //$this->setSiteTitle($this->product->title);?>
<?php $this->start('body'); ?>
<h1><?php echo $this->product->name; ?></h1>
<div class="row">
  <div class="col-md-6">
    <img width="400" src="https://cdn10.bigcommerce.com/s-cbajx/products/7157/images/8911/GUEST_9d25776b-4e83-4a12-a25f-2c78489b1222__64102.1546117487.1280.1280.jpg" alt="">
  </div>
  <div class="col-md-6">
    <p>List Price $<?php echo $this->product->list_price; ?></p>
    <p>Price $<?php echo $this->product->price; ?></p>
    <p>Shipping: $<?php echo $this->product->shipping; ?></p>
    <p>Total: $<?php echo $this->product->price + $this->product->shipping; ?></p>
    <p>Vendor: JJ</p>
    <p>Brand: Cosmos</p>
    <div>
      <button class="btn btn-info"><i class="fas fa-shopping-cart"></i> Add to cart</button>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-md-6">
    <h3>Product description</h3>
    <?php echo $this->product->description; ?>
  </div>
  <div class="col-md-6">
    <h3>Customer Reviews</h3>
  </div>
</div>
<?php $this->end(); ?>