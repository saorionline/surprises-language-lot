<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "my-license: $this->license
                my-driver: {$this->driver->name}
                    total-passengers: $this.passenger
                    ";
        }

    public function getPassenger() {
        return $this->passenger;
}
    public function setPassenger($passenger) {
            if ($passenger == 4) {
                $this->passenger = $passenger;
                }
                else {
                echo "You need to assign 4 passengers";
                }
            }
}
?>