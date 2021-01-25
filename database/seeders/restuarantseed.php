<?php

namespace Database\Seeders;

//include_once(app_path() . '\Http\Controllers\simple_html_dom.php');
use Illuminate\Database\Seeder;
use DB;
class restuarantseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $html = str_get_html(file_get_contents('https://www.yemeksepeti.com/istanbul/kartal-soganlik-orta-mah#tp:7|sof:2|sob:true'));  // Siteye bağlan


      foreach($html->find('a') as $element)
      {
        if ($element->class=='restaurantName'){

         DB::table('restaurant')->insert([
'name' => $element->plaintext,
'href' => $element->href
]);


      }
    }
}
}
