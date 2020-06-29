<?php 
    class conNguoi 
    {
        //properties
        public $name;
        public $gioiTinh;

        // methods name
        public function setName($name) 
        {
            $this->name = $name;
        }

        public function getName() 
        {
            return $this->name;
        }

        //methods gioi tinh
        function setGioiTinh($gioiTinh) 
        {
            $this->gioiTinh = $gioiTinh;
        }

        function getGioiTinh() 
        {
            return $this->gioiTinh;
        }
    }

    $danh = new conNguoi();

    $danh->setName('truong cong danh');
    echo "Tên: " . $danh->getName() . "<br>";

    $danh->setGioiTinh('Nam');
    echo "Giới Tính: ". $danh->getGioiTinh();
?>