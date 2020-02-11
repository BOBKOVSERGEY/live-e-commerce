<?php $this->setSiteTitle("Add New Product"); ?>
<?php $this->start('head'); ?>
  <!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#description',
    });
  </script>-->
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="container">
  <h1>Add New Product</h1>
  <div class="row">
    <div class="col-md-12">
      <?php $this->partial('admin/product', 'form'); ?>
    </div>
  </div>
</div>
<?php $this->end(); ?>