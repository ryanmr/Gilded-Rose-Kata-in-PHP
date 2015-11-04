Explanation
===========

My solution is similar to Jeffery's.

GildedRose is just a static interface to making up the other object types.

Item is still abstract because it cannot be instantiated directly, nor should it. Instead, the case where the `name` is undefined, it is better to throw an exception.

Sulfuras explicitly exists because it could change at any time.
