<?php

/**
* @name Decent Random Citates
* @version 2.0
* @author 
* @link 
* 
* Display format:
*     <cite>&laquo;Cite&raquo;<br /><small>&mdash; Author</small></cite>
* 
*     Cite    : random cite
*     Author  : author of random cite
*
* HOW TO USE?
* 
* Copy file to folder with site and insert this code:
*   require_once('DecentCite.php');
*/

class DecentCite 
{
  // PHP5 вместо var использует модификаторы public или private
  private $cite;
  private $author;

  // в PHP5 конструктор записывается так
  public function __construct() 
  {
      // вызывается в момент создания объектов
      // echo "start!";
  }


  // Random cite
  function random () 
  {

    $cites = array (

      array ("I coined the term OO and I can tell you I didn&acute;t have C++ in mind&hellip;", "Alan Kay"),
      array ("Human knowledge belongs to the world.", "Milo Hoffman"),
      array ("All mail clients suck. This one just sucks less.", "Michael R. Elkins")

    );

    $i = rand(0, count($cites) - 1);

    $this->cite = $cites[$i][0];

    $this->author = $cites[$i][1];

  }


  // Display cite
  function display () 
  {

    // Get random cite
    $this->random();

    // If cite not empty...
    if ($this->cite)
    {

      // Create a cite message
      $citemess = "<cite>&laquo;" . $this->cite . "&raquo;";

      // If author not empty...
      if ($this->author) 
      {

        // Add author to cite-message
        $citemess .= "<br /><small>&mdash; " . $this->author . "</small>";

      }

      // Add a close tag
      $citemess .= "</cite>";

      // Display
      echo $citemess;

    }

  }

};

// 
$cite =& new DecentCite;

$cite->display();

?>