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
class Product
{
    public function get($name)
    {
        //
    }

    public function set($name, $value)
    {
        //
    }
}

class TreatmentProduct
{
    public function save(Product $product)
    {
        //
    }

    public function update(Product $product)
    {
        //
    }

    public function delete(Product $product)
    {
        //
    }
}

class ViewProduct
{
    public function show(Product $product)
    {
        //
    }

    public function print(Product $product)
    {
        //
    }
}
