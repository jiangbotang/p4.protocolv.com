<?php 
  # view module of category and display control  
  if(isset($cat_con)) {
    echo $cat_con;
  }

  # view module of items, returned from database query, e.g. a list of primers
  # what items will be displayed is controlled by controllers through assigning a modular 
  # view to a particular variable
  # Only one item of the following should be displayed.
  if(isset($primers_index_main)) {
    echo $primers_index_main;
  }

  if(isset($primers_add_main)) {
    echo $primers_add_main;
  }

  if(isset($plasmids_index_main)) {
    echo $plasmids_index_main;
  }

 if(isset($plasmids_add_main)) {
    echo $plasmids_add_main;
  }

  if(isset($sirnas_index_main)) {
    echo $sirnas_index_main;
  }

 if(isset($sirnas_add_main)) {
    echo $sirnas_add_main;
  }

 ?>