<?php

namespace App;

class GildedRose
{

    private static $classes = [
      'normal' => Normal::class,
      'Aged Brie' => AgedBrie::class,
      'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
      'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
      'Conjured Mana Cake' => Conjured::class,
    ];

    public static function of($name, $quality, $sellIn) {
      if(isset(static::$classes[$name])) {
        $class = static::$classes[$name];
        return new $class($name, $quality, $sellIn);
      }

      throw new \Exception('class was not in the classes list');
    }

}
