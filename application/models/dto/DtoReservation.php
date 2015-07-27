<?php
class DtoReservation{

	private $reservationid;
	private $submitdate;
	private $contactname;
	private $phonenumber;
	private $email;
	private $numberofguest;
	private $message;
	private $reservationdate;
	private $reservationtime;
	
	
	
	
	public function getReservationid(){
		return $this->reservationid;
	}
	
	public function setReservationid($reservationid){
		$this->reservationid = $reservationid;
	}
	
	public function getSubmitdate(){
		return $this->submitdate;
	}
	
	public function setSubmitdate($submitdate){
		$this->submitdate = $submitdate;
	}
	
	public function getContactname(){
		return $this->contactname;
	}
	
	public function setContactname($contactname){
		$this->contactname = $contactname;
	}
	
	public function getPhonenumber(){
		return $this->phonenumber;
	}
	
	public function setPhonenumber($phonenumber){
		$this->phonenumber = $phonenumber;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getNumberofguest(){
		return $this->numberofguest;
	}
	
	public function setNumberofguest($numberofguest){
		$this->numberofguest = $numberofguest;
	}
	
	public function getMessage(){
		return $this->message;
	}
	
	public function setMessage($message){
		$this->message = $message;
	}
	
	public function getReservationdate(){
		return $this->reservationdate;
	}
	
	public function setReservationdate($reservationdate){
		$this->reservationdate = $reservationdate;
	}
	
	public function getReservationtime(){
		return $this->reservationtime;
	}
	
	public function setReservationtime($reservationtime){
		$this->reservationtime = $reservationtime;
	}
	
	
	
	
}