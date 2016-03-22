<?php
 
class City extends Eloquent {
    protected $table = 'cities';
 
    public function article() {
        return $this->hasManyThrough('Article','User','city_id');
    }
}