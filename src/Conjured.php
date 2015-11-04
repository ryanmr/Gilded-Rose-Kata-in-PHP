<?php

namespace App;

class Conjured extends Item {

  public function tick() {
    // decrease sellIn
    $this->sellIn -= 1;

    // stop if quality is already 0
    if ($this->quality == 0) {
      return;
    }

    // decrease quality by 1 initially
    $this->quality -= 2;

    // if the sellIn is 0 or less
    // and the quality is larger than 0, decrease again
    if ($this->quality > 0 && $this->sellIn <= 0) {
      $this->quality -= 2;
    }

    // guard against quality be set below 0
    if ($this->quality < 0) {
      $this->quality = 0;
    }
  }
}
