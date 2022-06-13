<?php
//По принципу Single Responsibility проведите рефакторинг класса так чтобы у вас был класс
// для работы с продуктом, для обработки продукта и для вывода продукта
//class Product {
//  public function get(name) {}
//  public function set(name, value) {}
//  public function save() {}
//  public function update() {}
//  public function delete() {}
//  public function show() {}
//  public function print() {}
//}
class Product{
    private $_name;
    private $_value;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->_value = $value;
    }
    public function  save(Product $product)
    {
        //TODO: Implemetnt save() method.

    }
    public function update(Product $product) {
        //TODO: Implemetnt update() method.
    }
    public function delete(Product $product) {
        //TODO: Implemetnt delete() method.
    }
    public function show(Product $product) {
        //TODO: Implemetnt show() method.
    }
    public function print(Product $product) {
        //TODO: Implemetnt print() method.
    }

}
