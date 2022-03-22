<?php


namespace App\classes;
class Product
{
    public $products;

    public function getAllProduct()
    {
        return [
            0 => [
                'id'               => '1',
                'name'             => 'Summer T-shirt',
                'price'            => '600.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers <br> Boho Modern Tribal Decoration Blue Tufted Fringe Tassel Couch<br> Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '1.jpg'
            ],
            1 => [
                'id'               => '2',
                'name'             => 'Winter T-shirt',
                'price'            => '1200.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Tribal Decoration Blue Tufted F<br>ringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '2.jpg'
            ],
            2 => [
                'id'               => '3',
                'name'             => 'Cotton T-shirt',
                'price'            => '600.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Tribal Decoration<br> Blue Tufted Fringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '3.jpg'
            ],
            3 => [
                'id'               => '4',
                'name'             => 'Hard-Shoes',
                'price'            => '14000.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Tribal Decoration Blue T<br>ufted Fringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '4.jpg'
            ],
            4 => [
                'id'               => '5',
                'name'             => 'Miracle Morning',
                'price'            => '320.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Tribal Decoration Blue T<br>ufted Fringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '5.jpg'
            ],
            5 => [
                'id'               => '6',
                'name'             => 'One Month Access',
                'price'            => '1200.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Trib<br>al Decoration Blue Tufted Fringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '6.jpg'
            ],
            6 => [
                'id'               => '7',
                'name'             => 'Combo Package',
                'price'            => '1180.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Moder<br>n Tribal Decoration Blue Tufted Fringe Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '7.jpg'
            ],
            7 => [
                'id'               => '8',
                'name'             => 'Stylish Hair Color',
                'price'            => '15000.Tk',
                'shortDescription' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, et!',
                'fullDescription'  => 'Throw Pillow Covers Boho Modern Tribal Decoration Blue Tufted Fringe <br>Tassel Couch Cushion Case for Bedroom Living Room Sofa Car-Square Blue',
                'image'            => '8.jpg'
            ]
        ];
    }
    public function getSingleProduct($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $singleProduct)
        {
            if ($singleProduct['id'] == $id)
            {
                return $singleProduct;
            }
        }
    }
}