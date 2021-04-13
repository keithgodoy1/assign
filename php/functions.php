<?php

function wait(){
  insertT();
  deleteT();
  editT();
}

function insertT(){
  if(!empty($_GET['items'])){
    $insert = new insert($_GET['items']);
    if($insert->insertTask()){
      echo '<div class= "col-md-9 alert alert-success alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong>Task Added Succesfully!.
      </div>';
    }else{
      echo '<div class= "col-md-9 alert alert-alert alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong> Adding a Task Failed!.
      </div>';
    }
  }
}



function deleteT(){
  if(!empty($_GET['delete'])){
    $delete = new delete($_GET['delete']);
    if($delete->deleteTask()){
      echo '<div class= "col-md-9 alert alert-success alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong>Task Deleted Succesfully!.
      </div>';
    }else{
      echo '<div class= "col-md-9 alert alert-alert alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong> Deleting a Task Failed!.
      </div>';
    }
  }
}

function editT(){
  if(!empty($_GET['edit'])){
    $edit = new edit($_GET['edit']);
    if($edit->editTask()){
      echo '<div class= "col-md-9 alert alert-success alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong>Task Updated Succesfully!.
      </div>';
    }else{
      echo '<div class= "col-md-9 alert alert-alert alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Holy guacamole!</strong> Updating a Task Failed!.
      </div>';
    }
  }
}

function viewTable(){
  $view = new view();
  $view->viewData();
  $view->viewCompletedData();
}

 ?>
