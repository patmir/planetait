<?php
class Project_MenuWalker extends Walker_Nav_Menu{
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
        $description = $item->description;
        $isCurrent =  ( $item->object_id === get_the_ID() );
        $permalink = $item->url;
        $classes = $item->classes;
        $isFirst = in_array("first-nav-item", $classes);
        $isLast = in_array("last-nav-item", $classes);
        $output .= '<a class="tp-caption niceclean_menu tp-rs-menulink nav-element" ';
        $output .= 'href="'.$permalink.'" target="_self" id="slide-30-layer-'.$item->menu_order.'"';
        $output .= 'data-x="[\'left\',\'left\',\'left\',\'left\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']"';
        $output .= 'data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'0\',\'0\',\'0\',\'0\']"';
        $output .= 'data-fontsize="[\'17\',\'17\',\'13\',\'15\']"';
        if($isLast === true){
            $output .= 'data-lineheight="[\'36\',\'36\',\'24\',\'24\']"';
        }
        $output .= 'data-width="none"';
        $output .= 'data-height="none"';
        $output .= 'data-whitespace="normal"';        
        $output .= 'data-type="text" ';        
        $output .= 'data-actions=""';        
        $output .= 'data-responsive_offset="off" ';        
        $output .= 'data-responsive="off"';  
        if($isLast === true){
            $output .= 'data-frames=\'[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(60,201,111,1);bc:rgba(60,201,111,1);bs:solid;"}]\'';
        } else {
            $output .= 'data-frames=\'[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bc:rgba(60,201,111,1);br:0px 0px 0px 0px;"}]\'';        
        }
        $output .= 'data-margintop="[3,3,0,0]"';        
        $output .= 'data-marginright="[15,10,10,5]"';        
        $output .= 'data-marginbottom="[0,0,0,0]"';        
        $output .= 'data-marginleft="[15,10,10,5]"';        
        $output .= 'data-textAlign="[\'inherit\',\'inherit\',\'inherit\',\'inherit\']"';        
        $output .= 'data-paddingtop="[0,0,0,0]"';
        if($isLast === true){
            $output .= 'data-paddingright="[20,20,10,10]"';
        } else {
            $output .= 'data-paddingright="[0,0,0,0]"';        
        }
        $output .= 'data-paddingbottom="[0,0,0,0]"';  
        if($isLast === true){     
            $output .= 'data-paddingleft="[20,20,10,10]"'; 
        } else {
            $output .= 'data-paddingleft="[0,0,0,0]"';   
        }     
        $output .= 'style="z-index: '.(10+$item->menu_order).'; border-color: transparent; color: rgba(0, 0, 0, 0.95); border-width: 0px 0px 2px 0px';
        if($isLast === true){
            $output .= 'background-color:rgba(208,193,132,1);border-color:rgba(60,201,111,1);border-radius:20px 20px 20px 20px;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;';
        }
        $output .= '">';   
        $output .= $title;
        $output .= "</a>";      
    }
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $output .= "\n";
    }
}
