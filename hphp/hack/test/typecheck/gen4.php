<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class A {
  public function foo<T as A>(): T {
    return $this->foo();
  }
}

class B extends A {

  public function foo<T as B>(): T {
    return $this->foo();
  }
}


