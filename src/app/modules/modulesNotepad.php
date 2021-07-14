<?php
namespace app\modules;

use std, gui, framework, app;


class modulesNotepad extends AbstractModule
{

    /**
     * @event openFile.action 
     */
    function doOpenFileAction(ScriptEvent $e = null)
    {    
        $text = $this->openFile->file;
        $text = Stream::getContents($text);
        $this->textArea->text = $text;
    }

    /**
     * @event saveFile.action 
     */
    function doSaveFileAction(ScriptEvent $e = null)
    {    
           
      $file = $this->saveFile->file;
      $text = $this->textArea->text;
      Stream::putContents($file, $text);
    
    }

}
