<?php
interface Resizable {
    public function resize($percent);
}

class Rectangle implements Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percent) {
        $this->width *= $percent / 100;
        $this->height *= $percent / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}


$rectangle = new Rectangle(10, 5);
echo "Kích thước ban đầu: width = " . $rectangle->getWidth() . ", height = " . $rectangle->getHeight() . "<br>";

$rectangle->resize(50);
echo "Kích thước sau khi điều chỉnh: width = " . $rectangle->getWidth() . ", height = " . $rectangle->getHeight();
?>