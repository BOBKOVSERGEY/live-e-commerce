<?php $this->setSiteTitle("Add New Product"); ?>
<?php $this->start('body'); ?>
  <h1>Add New Product</h1>
  <div class="row">
    <div class="col-md-10 mx-auto">
      <?php $this->partial('admin/product', 'form'); ?>
    </div>
  </div>
<?php $this->end(); ?>