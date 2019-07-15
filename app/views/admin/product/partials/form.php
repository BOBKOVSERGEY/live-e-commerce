<?php
  use Core\FH;
?>
<form action="<?php echo $this->formAction; ?>" method="post" enctype="multipart/form-data">

  <?php echo FH::csrfInput(); ?>
  <?= FH::displayErrors($this->displayErrors) ?>
  <div class="row">
    <div class="col-md-6">
      <?= FH::inputBlock('text','Name','name', $this->product->name, ['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
    </div>
    <div class="col-md-6">
      <?= FH::inputBlock('text','Price','price', $this->product->price, ['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
    </div>
    <div class="col-md-6">
      <?= FH::inputBlock('text','List Price','list', $this->product->list, ['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
    </div>
    <div class="col-md-6">
      <?= FH::inputBlock('text','Shipping','shipping', $this->product->shipping, ['class'=>'form-control'],['class'=>'form-group'],$this->displayErrors) ?>
    </div>
    <div class="col-md-12">
      <?= FH::textareaBlock('Body','description',$this->product->description,['class'=>'form-control','rows'=>'6'],['class'=>'form-group'],$this->displayErrors) ?>
    </div>
    <div class="col-md-12">
      <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ?>
    </div>
  </div>
  <!--<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>-->
</form>
