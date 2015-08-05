<?php
class Place
{
    private $cityname;
    private $photo;
    private $visit_length;

    function __construct($vac_cityname, $vac_photo, $vac_visit_length)
    {
        $this->cityname = $vac_cityname;
        $this->photo = $vac_photo;
        $this->visit_length = $vac_visit_length;
    }

    function setCityName ($new_cityname)
    {
        $this->cityname = (string) $new_cityname;
    }

    function getCityName ()
    {
        return $this->cityname;
    }

    function setPhoto ($new_photo)
    {
        $this->setPhoto = (string) $new_photo;
    }

    function getPhoto ()
    {
        return $this->photo;
    }

    function setVisitLength($new_visit_length)
    {
        $this->visit_length = (int) $new_visit_length;
    }

    function getVisitLength()
    {
        return $this->visit_length;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places']= array();
    }
}
?>
