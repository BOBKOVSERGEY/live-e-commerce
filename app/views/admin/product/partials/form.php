<?php
  use Core\FH;
?>
    <form action="<?php echo $this->formAction; ?>" method="post" enctype="multipart/form-data">
        <?php echo FH::csrfInput(); ?>
        <?php if (!empty($this->displayErrors)) {
            echo FH::displayErrorsAlert($this->displayErrors);
        } ?>
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
                <div class="form-group">
                    <label for="productImages">Upload Product Images</label>
                    <input type="file" multiple name="productImages[]" class="form-control-file" id="productImages">
                </div>
            </div>
            <div class="col-md-12">
                <?= FH::submitTag('Save',['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </form>


