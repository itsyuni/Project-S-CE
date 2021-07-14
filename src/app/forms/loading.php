<?php
namespace app\forms;

use std, gui, framework, app;


class loading extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
         waitAsync(5000, function () { // через 5 сек загружаем форму 

             $this->loadForm('login');
             
             }); 
    }

    /**
     * @event rect.mouseEnter 
     */
    function doRectMouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event image.mouseExit 
     */
    function doImageMouseExit(UXMouseEvent $e = null)
    {    
        
    }

}
