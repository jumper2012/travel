<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\models\form;

use yii\base\Model;
use yii\web\UploadedFile;

class TravelPackageForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $travel_package_name;
    public $city_id;
    public $total_price;
    public $minimum_person;
    public $duration;
    public $quick_break;
    public $running_periode_start;
    public $running_periode_end;
    public $book_until;
    public $description;
    public $agenda;
    public $detail;
    public $maps;
    public $room;
    public $prepare;
    public $terms;
    public $pic_name;
    public $service_name;
    public $price;
    public $descriptiom;
    public $imageFiles;
    

    public function rules()
    {
        return [
            [['travel_package_name', 'city_id', 'total_price', 'minimum_person', 'duration', 'quick_break', 'running_periode_start', 'running_periode_end', 'book_until', 'description', 'agenda', 'detail', 'maps', 'room', 'prepare', 'terms'], 'required'],
            [['city_id', 'minimum_person'], 'integer'],
            [['total_price'], 'number'],
            [['running_periode_start', 'running_periode_end', 'book_until'], 'safe'],
            [['description', 'agenda', 'detail', 'maps', 'room', 'prepare', 'terms'], 'string'],
            [['travel_package_name', 'duration', 'quick_break'], 'string', 'max' => 225],
            //[['pic_name'], 'string', 'max' => 225],
            [['pic_name'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10],
            [['service_name', 'price', 'descriptiom'], 'required'],
            [['price'], 'number'],
            [['descriptiom'], 'string'],
            [['service_name'], 'string', 'max' => 225]
        ];
    }
    public function attributeLabels() {
        return [
            'game_id' => 'Game',
            'game_name' => 'Game Name',
            'game_icon' => 'Game Icon',
            'studio' => 'Studio',
            'game_description' => 'Game Description',
            'genre_id' => 'Genre',
            'updated' => 'Updated',
            'size' => 'Size',
            'current_version' => 'Current Version',
            'content_rating' => 'Content Rating',
            'release_id' => 'Release',
            'game_about' => 'Game About',
            'update_in_last_version' => 'Update In Last Version',
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $file->saveAs(\Yii::getAlias('@common/gamemedia/') . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}