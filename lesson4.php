<?php

/**
 * PHP basic usage examples.
 * Lesson 4: Class
 */

class Foo
{
    public $bar;
    protected $abc = '';        // 給定初始值
    private $foo;

    /**
     * 建購子
     *
     * @param $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }
}

/**
 * ExFoo 繼承 Foo
 *
 * Class ExFoo
 */
class ExFoo extends Foo
{
    /**
     * 初始化母 Class 的建購子
     *
     * @param $foo
     */
    public function __construct($foo)
    {
        parent::__construct($foo);
    }
}

/**
 * Interface Storage
 */
interface Storage
{
    public function get($key);
    public function set($key, $value);
}
class MyStorage implements Storage
{
    public function get($key)
    {
        return 'key';
    }

    public function set($key, $value)
    {
        $key = $value;
    }

    public function myOtherFunction()
    {
        echo 'bala bala...';
    }
}

// interface 繼承與雙 interface
interface Student
{
    public function study();
}
interface Teacher
{
    public function teach();
}
interface Mix extends Student, Teacher
{

}
class Me implements Mix
{
    public function study() {
        echo 'study';
    }

    public function teach() {
        echo 'teach';
    }
}

/**
 * 抽像物件
 *
 * 不得直建構抽像物件
 * 建立一新物件繼承該抽像物件後再建構
 *
 * Class AbstractStudent
 */
abstract class AbstractStudent
{
    protected $name;
    protected $class;
}
class EngineerStudent extends AbstractStudent
{
    protected $geekLevel;
}
class ArtStudent extends AbstractStudent
{
    protected $fashionLevel;
}
