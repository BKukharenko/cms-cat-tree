<?php

$categories = [
  ['title' => 'First Category', 'id' => 1, 'parent' => NULL],
  ['title' => 'Second Category', 'id' => 2, 'parent' => 1],
  ['title' => 'Third Category', 'id' => 3, 'parent' => 1],
  ['title' => 'Fourth Category', 'id' => 4, 'parent' => 3],
  ['title' => 'Fifth Category', 'id' => 5, 'parent' => 2],
  ['title' => 'Sixth Category', 'id' => 6, 'parent' => 5],
];


function catTree($categories, $parent = 0, $level = 0) {

  foreach ($categories as $category) {
    if ($category['parent'] == $parent) {
      echo str_repeat("-", $level) . $category['title'] .
      "<span style='margin-left: 30px'>->ID of a parent: </span>" . $parent . "<br>";
      catTree($categories, $category['id'], $level + 1);
    }
  }
}

catTree($categories);
