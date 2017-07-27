<?php
  kirbytext::$tags['snippet'] = [
    'attr' => [
      'data'
    ],
    'html' => function($tag) {
      // get snippet file name
      $file = $tag->attr('snippet');

      // convert attr array string to array
      $data = eval("return " . $tag->attr('data') . ";");

      // check if $attr is array
      if(!is_array($data)){
        $data = [];
      };

      return snippet($file, $data, true);
    }
  ];
?>
