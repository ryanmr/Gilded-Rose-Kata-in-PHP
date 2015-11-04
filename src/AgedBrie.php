<?php

namespace App;

class AgedBrie extends Item {

  public function tick() {
    // decrease sellIn
    $this->sellIn -= 1;

    // stop if quality is already 50
    if ($this->quality == 50) {
      return;
    }

    // increase quality
    $this->quality += 1;

    // if sellIn is 0 or less,
    // and quality is less than 50
    // increase quality again
    if ($this->quality < 50 && $this->sellIn <= 0) {
      $this->quality += 1;
    }
  }
}
