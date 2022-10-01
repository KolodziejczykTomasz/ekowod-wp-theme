<?php

    function the_title_excerpt($before = '', $after = '', $echo = true, $length = false) 
    {
        $title = get_the_title();

        if ( $length && is_numeric($length) ) {
            $title = substr( $title, 0, $length );
        }

        if ( strlen($title)> 0 ) {
            $title = apply_filters('the_title_excerpt', $before . $title . $after, $before, $after);
            if ( $echo )
                echo $title;
            else
                return $title;
        }
    }
    function technig_content($limit){
    $content = explode(' ', get_the_content(), $limit);

    if (count($content)>=$limit){
        array_pop($content);
        $content = implode(" ",$content).'...'; 
    } else {
        $content = implode(" ",$content);
    }
        
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
    }

  ?>