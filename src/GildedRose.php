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

    public function tick()
    {


        //
        // if ($this->name != 'Aged Brie' and $this->name != 'Backstage passes to a TAFKAL80ETC concert') {
        //     if ($this->quality > 0) {
        //         if ($this->name != 'Sulfuras, Hand of Ragnaros') {
        //             $this->quality = $this->quality - 1;
        //         }
        //     }
        // } else {
        //     if ($this->quality < 50) {
        //         $this->quality = $this->quality + 1;
        //
        //         if ($this->name == 'Backstage passes to a TAFKAL80ETC concert') {
        //             if ($this->sellIn < 11) {
        //                 if ($this->quality < 50) {
        //                     $this->quality = $this->quality + 1;
        //                 }
        //             }
        //             if ($this->sellIn < 6) {
        //                 if ($this->quality < 50) {
        //                     $this->quality = $this->quality + 1;
        //                 }
        //             }
        //         }
        //     }
        // }
        //
        // if ($this->name != 'Sulfuras, Hand of Ragnaros') {
        //     $this->sellIn = $this->sellIn - 1;
        // }
        //
        // if ($this->sellIn < 0) {
        //     if ($this->name != 'Aged Brie') {
        //         if ($this->name != 'Backstage passes to a TAFKAL80ETC concert') {
        //             if ($this->quality > 0) {
        //                 if ($this->name != 'Sulfuras, Hand of Ragnaros') {
        //                     $this->quality = $this->quality - 1;
        //                 }
        //             }
        //         } else {
        //             $this->quality = $this->quality - $this->quality;
        //         }
        //     } else {
        //         if ($this->quality < 50) {
        //             $this->quality = $this->quality + 1;
        //         }
        //     }
        // }
    }
}
