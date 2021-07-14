<?php
namespace app\forms;

use std, gui, framework, app;


class login extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        waitAsync(5000, function () { // через 5 сек загружаем форму 

             $this->loadForm('dekstop');
             
             }); 
    }


}
