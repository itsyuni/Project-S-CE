<?php
namespace app\forms;

use std, gui, framework, app;


class installing3 extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
         waitAsync(2000, function () { // через 5 сек загружаем форму 

             $this->loadForm('installing4');
             
             }); 
    }

}
