<?php

namespace KryuuAccountAddress\Entity;

/**
 * @encoding UTF-8
 * @note *
 * @todo *
 * @package PackageName
 * @author Anders Blenstrup-Pedersen - KatsuoRyuu <anders-github@drake-development.org>
 * @license *
 * The Ryuu Technology License
 *
 * Copyright 2014 Ryuu Technology by 
 * KatsuoRyuu <anders-github@drake-development.org>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * Ryuu Technology shall be visible and readable to anyone using the software 
 * and shall be written in one of the following ways: 竜技術, Ryuu Technology 
 * or by using the company logo.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *

 * @version 20140702 
 * @link https://github.com/KatsuoRyuu/
 */
use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection;


/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="kryuu_account_address_address")
 */

class Address {
    

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var integer 
     */
    private $id;
    
    /**
     * 
     * @var integer
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected $user;
        
    /**
     *
     * @ORM\Column(type="integer")
     * @var string
     */
    private $address;
    
    /**
     *
     * @ORM\Column(type="integer")
     * @var string
     */
    private $zip;
    
    /**
     *
     * @ORM\Column(type="integer")
     * @var string
     */
    private $city;
    
    /**
     *
     * @ORM\Column(type="integer")
     * @var string
     */
    private $contry;
    
    /**
     *
     * @ORM\Column(type="integer")
     * @var string
     */
    private $region;
    
    /**
     * 
     * 
     */
    public function __construct() {
    }
    
    public function __add($value,$key){
        if(!$this->$key instanceof ArrayCollection) {
            $this->$key = new ArrayCollection();
        }
        $this->$key->add($value);
    }

    /**
     * WARNING USING THESE IS NOT SAFE. there is no checking on the data and you need to know what
     * you are doing when using these.
     * But it a great function for lazy people ;)
     * 
     * @param ANY $value
     * @param ANY $key
     * @return $value
     */
    public function __set($value,$key){
        return $this->$key = $value;
    }    

    /**
     * WARNING USING THESE IS NOT SAFE. there is no checking on the data and you need to know what
     * you are doing when using these.
     * But it a great function for lazy people ;)
     * 
     * @param ANY $value
     * @param ANY $key
     * @return $value
     */
    public function __get($key){
        return $this->$key;
    }    

    /**
     * WARNING USING THESE IS NOT SAFE. there is no checking on the data and you need to know what
     * you are doing when using these.
     * This is used to exchange data from form and more when need to store data in the database.
     * and again ist made lazy, by using foreach without data checks
     * 
     * @param ANY $value
     * @param ANY $key
     * @return $value
     */
    public function populate($array){
        
        foreach($array as $index => $var){
            $this->$index = $var;
        }
        return $this;
    }


    /**
    * Get an array copy of object
    *
    * @return array
    */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }


    
    
}
