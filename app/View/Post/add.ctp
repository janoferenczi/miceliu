<?php 

echo $this->Form->create('Post');
echo $this->Form->input('title',array('div'=>false, 'label'=>false, 'style'=>'font-size:20px;padding:10px;width:640px; resize:none; height:auto;','rows'=>'1'));
echo $this->Form->textarea('text',array('class'=>'ckeditor'));
echo $this->Form->end('Adauga',array('class'=>'submitButton'));


?>

