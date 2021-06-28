<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingTime extends Model
{
  public function toString()
  {
    return $this->getDayName()." ".date("h:i a",strtotime($this->time_from))." till ".date("h:i a",strtotime($this->time_to));
  }
  public function getDayName()
  {
    switch ($this->day) {
      case 6:
        return "Sabado";
        break;
      case 7:
        return "Domingo";
        break;
      case 1:
        return "Lunes";
        break;
      case 2:
        return "Martes";
        break;
      case 3:
        return "Miercoles";
        break;
      case 4:
        return "Jueves";
        break;
      case 5:
        return "Viernes";
        break;

      default:
        return false;
        break;
    }
  }
}
