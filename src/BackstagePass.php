<?php

namespace App;

class BackstagePass extends Item {

  public function tick() {

    // decrease sellIn
    $this->sellIn -= 1;

    if ($this->sellIn < 0) {
      // if the sellIn < 0, the quality should be 0
      $this->quality = 0;
    } elseif ($this->sellIn < 5) {
      // if the sellIn < 5, the quality increases by 3
      $this->quality += 3;
    } elseif ($this->sellIn < 10) {
      // if the sellin < 10, the quality increases by 2
      $this->quality += 2;
    } else {
      // otherwise, the quality increases 1
      $this->quality += 1;
    }

    // because the above increases
    // could make quality go beyond 50,
    // reset quality if that case happens
    if ($this->quality > 50) {
      $this->quality = 50;
    }

  }

}
