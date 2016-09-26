<?php 
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WeatherController extends Controller {

//mengambil data cuaca sesuai dari selected value dari combo box
public function getWeatherBy_SelectedComboBox()
{
    $selected='';
   if(isset($_POST['enter']))   
  {   
   if(empty($_POST['city']))  
   {  
    $selected= "Anda belum memilih!";  
   }  
   else  $selected= $_POST['city'];  
  }  

  //mengambil data cuaca sesuai dari selected value dari combo box dengannilai $selected
  WeatherController::getWeather($selected);
 
}
    
    //mengambil dat dari api dan inputan adalah nama dari kota
     public function getWeather($nama)
    {
        //url dari api
        $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $nama . "&appid=87f3530b034ce83f07479771285f8bdf");

        // parse JSON
        $data = json_decode($json);
       
        // menampilkan nama kota dan cuaca
        echo 'The weather of ', $data->name, ' (', $data->sys->country, ')' ,' at ' . date("jS \of F Y") ;
        
        foreach ($data->weather as $weather) {
            echo  ' is ',$weather->description;
        }
            }
        }