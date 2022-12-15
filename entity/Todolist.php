<?php 

namespace Entity {
  class Todolist {
    private string $todo;

    public function __construct(string $todo = "")
    {
      $this->todo = $todo;
    }

    /**
     * Get the value of todo
     */ 
    public function getTodo()
    {
        return $this->todo;
    }

    /**
     * Set the value of todo
     *
     * @return  self
     */ 
    public function setTodo($todo)
    {
        $this->todo = $todo;

        return $this;
    }
  }

    
}



?>