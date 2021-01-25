<?php
function ok(){
  echo "adana";
}

 function menucreate(){
             $randomRestourant = DB::table('restaurant')
                  ->inRandomOrder()
                  ->first();

                  $html = str_get_html(file_get_contents("https://www.yemeksepeti.com$randomRestourant->href"));

                 $drinklist = array();
                 $drinklist2 = array();

                 foreach(($html->find('div[class=restaurantDetailBox None]')) as $element)
   {

                 $pos = strpos($element,"head white");

                 if ($pos!== false) {



                   $cat=$element->children(0)->children(0)->plaintext;


                     if($cat==="İ&#231;ecekler"){

                         foreach($element->children(1)->find('a') as $element2)
                    {

                        if($element2->children(0)=="")
                        $drinklist[]=$element2->innertext;


                    }

                     //print_r($drinklist);

                 }

                 else if ($cat=="Tatlılar"){

                         foreach($element->children(1)->find('a') as $element2)
                    {
                        if($element2->children(0)=="")
                        {$dessertlist[]=$element2->innertext;}
                    }


                 }
                 else if ($cat!== NULL)
                 {

                    foreach($element->find('a[class=getProductDetail]') as $element2)
                    {

                        $maindishlist[]=$element2->innertext;



                 }
}
                 }
               }

               $menu['maindish']=$maindishlist[rand ( 0 , count($maindishlist)-2)];
               if(!empty($drinklist)){
                   $menu['drink']= $drinklist[rand ( 0 , count($drinklist)-1)];
               }
               else {
                 $menu['drink']="Restoranda içeçek bulunmuyor.";
               }
               if(!empty($dessertlist)){
                  $menu['dessert']= $dessertlist[rand ( 0 , count($dessertlist)-1)];
                }
                else {
                $menu['dessert']="Restoranda tatlı bulunmuyor.";
                }
                $menu['name']=$randomRestourant->name;
return $menu;




}
 ?>
