<?php

namespace App\Reporting;

class StringReport extends Report {
    public function getStringContents()  //redefinir la function getContents dans report pour jamais toucher report , cest le principe de solid
    // la classe report est fermer a la modifications
    // par contre il doit soit cree getContents sans modifier son parent soit tous simplement class qui etent et on appelle a un autre nom la function
    {
        return "title:$this->title;date:$this->date;data:" . implode(",", $this->data);

    }
}