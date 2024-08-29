<?php

class Travel
{
  private $id;
  private $name;
  private $phone;
  private $hotelName;
  private $hotelAdress;
  private $Tourdata;
  private $adultQnt;
  private $childrenQnt;

  private $totalPrice;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getHotelName()
  {
    return $this->hotelName;
  }

  public function setHotelName($hotelName)
  {
    $this->hotelName = $hotelName;
  }

  public function getHotelAddress()
  {
    return $this->hotelAdress;
  }

  public function setHotelAddress($hotelAddress)
  {
    $this->hotelAdress = $hotelAddress;
  }

  public function getAdultQuantity()
  {
    return $this->adultQnt;
  }

  public function setAdultQuantity($adultQuantity)
  {
    $this->adultQnt = $adultQuantity;
  }

  public function getChildrenQuantity()
  {
    return $this->childrenQnt;
  }

  public function setChildrenQuantity($childrenQuantity)
  {
    $this->childrenQnt = $childrenQuantity;
  }

  public function getTotalPrice()
  {
    return $this->totalPrice;
  }

  public function setTotalPrice($totalPrice)
  {
    $this->totalPrice = $totalPrice;
  }
}
