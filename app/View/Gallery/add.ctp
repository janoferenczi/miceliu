<?php  
   echo $this->form->create( 
      array('url' => array( 
                           'controller' => 'gallery', 
                           'action'    => 'add' 
                     ), 
            'enctype' => 'multipart/form-data' 
            ) 
   );  
?> 

<?php echo $this->form->file('Gallery.img'); ?> 

<?php echo $this->form->end('submit'); ?> 