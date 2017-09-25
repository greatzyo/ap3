<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', [
        'id' => 'menu-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ]);
    ?>

    <?php echo $form->errorSummary($model, 'Error: Perbaiki input', null, ['class' => 'panel callout']); ?>

    <div class="row">
        <div class="small-12 medium-6 large-4 columns">
            <?php echo $form->labelEx($model, 'parent_id'); ?>
            <?php echo $form->dropDownList($model, 'parent_id', $subMenuList, ['prompt' => 'Pilih (opsional)..']); ?>
            <?php echo $form->error($model, 'parent_id', ['class' => 'error']); ?>
            <?php echo $form->labelEx($model, 'nama'); ?>
            <?php echo $form->textField($model, 'nama', ['size' => 45, 'maxlength' => 45]); ?>
            <?php echo $form->error($model, 'nama', ['class' => 'error']); ?>
            <?php echo $form->labelEx($model, 'keterangan'); ?>
            <?php echo $form->textField($model, 'keterangan', ['size' => 30, 'maxlength' => 30]); ?>
            <?php echo $form->error($model, 'keterangan', ['class' => 'error']); ?>
        </div>

        <div class="small-12 medium-6 large-4 columns">
            <?php echo $form->labelEx($model, 'link'); ?>
            <?php echo $form->textField($model, 'link', ['size' => 60, 'maxlength' => 512]); ?>
            <?php echo $form->error($model, 'link', ['class' => 'error']); ?>
            <?php echo $form->labelEx($model, 'icon'); ?>
            <?php echo $form->textField($model, 'icon', ['size' => 60, 'maxlength' => 100]); ?>
            <?php echo $form->error($model, 'icon', ['class' => 'error']); ?>
        </div>

        <div class="small-12 medium-6 large-4 columns">
            <?php echo $form->labelEx($model, 'urutan'); ?>
            <?php echo $form->textField($model, 'urutan'); ?>
            <?php echo $form->error($model, 'urutan', ['class' => 'error']); ?>
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->textField($model, 'status'); ?>
            <?php echo $form->error($model, 'status', ['class' => 'error']); ?>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <?php
            //echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', ['class' => 'tiny bigfont button']); 
            echo CHtml::ajaxSubmitButton('Tambah', $this->createUrl('tambahsubmenu', array(
                        'id' => $rootMenu->id,)), array(
                'type' => 'POST',
                'success' => "function () {
                                        
                                    }"
                    ), array(
                'id' => 'tombol-tambah',
                'class' => 'tiny bigfont button',
                    //'accesskey' => 'a'
            ));
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>