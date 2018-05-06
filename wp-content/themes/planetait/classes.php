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
        $output .= 'data-fontsize="[\'16\',\'16\',\'16\',\'16\']"';
        //if($isLast === true){
            $output .= 'data-lineheight="[\'36\',\'36\',\'36\',\'36\']"';
        //}
        $output .= 'data-width="none"';
        $output .= 'data-height="none"';
        $output .= 'data-whitespace="normal"';        
        $output .= 'data-type="text" ';      
        $output .= 'data-responsive_offset="off" ';        
        $output .= 'data-responsive="off"';  
        $output .= 'data-visibility="[\'on\',\'on\',\off\',\'off\']"';
        if($isLast === true){
        $output .= 'data-frames=\'[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]\'';        
        } else {
            $output .= 'data-frames=\'[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);"}]\'';        
       
        }
        $output .= 'data-margintop="[3,3,0,0]"';        
        $output .= 'data-marginright="[15,10,10,5]"';        
        $output .= 'data-marginbottom="[0,0,10,10]"';        
        $output .= 'data-marginleft="[15,10,10,5]"';        
        $output .= 'data-textAlign="[\'inherit\',\'inherit\',\'inherit\',\'inherit\']"';        
        $output .= 'data-paddingtop="[0,0,0,0]"';
        if($isLast === true){
            $output .= 'data-paddingright="[20,20,10,10]"';
        } else {
            $output .= 'data-paddingright="[0,0,0,0]"';        
        }
        $output .= 'data-paddingbottom="[0,0,2,0]"';  
        if($isLast === true){     
            $output .= 'data-paddingleft="[20,20,10,10]"'; 
        } else {
            $output .= 'data-paddingleft="[0,0,0,0]"';   
        }     
        $output .= 'style="z-index: '.(10+$item->menu_order).'; border-color: transparent;  border-width: 0px 0px 2px 0px;';
        if($isLast === true){
            $output .= '  color: #EFA6C5;
            border-radius:5px 5px 5px 5px;box-shadow:none;box-sizing:
            border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;
            background: #c11437;
            background: -moz-linear-gradient(top, #c11437 0%, #921c79 100%);
            background: -webkit-linear-gradient(top, #c11437 0%,#921c79 100%);
            background: linear-gradient(to bottom, #c11437 0%,#921c79 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#c11437\', endColorstr=\'#921c79\',GradientType=0 );     
            ';
        } else {
            $output .=' color: #696969;';
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

class Project_MenuWalkerMobile extends Walker_Nav_Menu{
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
        $description = $item->description;
        $isCurrent =  ( $item->object_id === get_the_ID() );
        $permalink = $item->url;
        $classes = $item->classes;
        $output .= '<a class="tp-caption tp-rs-menulink nav-element" ';
        $output .= 'href="'.$permalink.'" target="_self" id="slide-79-layer-mm-'.$item->menu_order.'"';
        $output .= 'data-x="[\'left\',\'left\',\'left\',\'left\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']"';
        $output .= 'data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\''.(140+(40*$item->menu_order)).'\',\''.(140+(40*$item->menu_order)).'\',\''.(60+(40*$item->menu_order)).'\',\''.(60+(40*$item->menu_order)).'\']"'; // +40 +40 +40 +30
        $output .= 'data-fontsize="[\'28\',\'28\',\'28\',\'28\']"';
        $output .= 'data-lineheight="[\'42\',\'42\',\'42\',\'42\']"';
        $output .= 'data-width="[\'340\',\'340\',\'100%\',\'100%\']"';
        $output .= 'data-height="none"';
        $output .= 'data-whitespace="nowrap"';       
        $output .= 'data-visibility="[\'off\',\'off\',\on\',\'on\']"';              
        $output .= 'data-type="text" ';        
        $output .= 'data-responsive_offset="off" ';        
        $output .= 'data-responsive="off"';  
        $output .= 'data-frames=\'[{"delay":"bytrigger","speed":650,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power4.easeOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,0.5);"}]\'';        
        $output .= 'data-margintop="[3,3,0,0]"';        
        $output .= 'data-marginright="[0,0,0,0]"';        
        $output .= 'data-marginbottom="[0,0,0,0]"';        
        $output .= 'data-marginleft="[0,0,0,0]"';        
        $output .= 'data-textAlign="[\'left\',\'left\',\'left\',\'left\']"';        
        $output .= 'data-paddingtop="[10,10,10,10]"';
        $output .= 'data-paddingright="[10,10,10,10]"';    
        $output .= 'data-paddingbottom="[10,10,10,10]"';  
        $output .= 'data-paddingleft="[10,10,10,10]"';   
        $output .= 'data-basealign="slide"';  
        $output .= 'data-lasttriggerstate="reset" ';          
        $output .= 'style="z-index: '.(10+$item->menu_order).'; min-width: 340px; max-width: 340px; white-space: nowrap; font-size: 23px; line-height: 23px; font-weight: 600; color: #000000; letter-spacing: 0px;font-family:Source Sans Pro;cursor:pointer;text-decoration: none; background: #fff';
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
// 	data-actions='[{"event":"click","action":"simulateclick","layer":"slide-79-layer-51","delay":""}]'