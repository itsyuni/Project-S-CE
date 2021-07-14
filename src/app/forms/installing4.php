<?php
namespace app\forms;

use std, gui, framework, app;


class installing4 extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
         waitAsync(4000, function () { // через 5 сек загружаем форму 

             $this->loadForm('restart1');
             
             }); 
    }


}
