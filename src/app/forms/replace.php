<?php
namespace app\forms;

use std, gui, framework, app;


class replace extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
      $one = $this->edit->text;
        $two = $this->editAlt->text;
        $replace = str::replace($this->form("notepad")->textArea->text,$one, $two);
        $this->form('notepad')->textArea->text = $replace;;
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null)
    {    
        
    }

}
