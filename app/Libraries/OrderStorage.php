<?php

namespace App\Libraries;

use App\Libraries\Order;

/**
 * Storage handler for the ecommerce Orders.
 * Stores the current order in the session.
 *
 * Occasionally errors can occur when using the storage object.
 * Storage object will handle these errors by clearing the current order object from the session.
 *
 * These errors will only occur:
 *      - On development if we drastically change the Order object.
 *      - When changes are pushed to live, where the Order object has been changed.
 * When this happens just treat the order as null and start order process again.
 *
 * 1) Check the variable in the session is of type Order (instead of just doing an is_null() check).
 * If the class definition of Order is updated then the object stored in the session will no longer
 * match Order, and an exception may be thrown if we try to use it.
 *
 * 2) Exception may also be thrown from session() function if it is unable to unserialize
 * the object, so catch and ignore exception.
 */
class OrderStorage {
    const SESSION_KEY = '__ORDER__';

    /**
     * @return bool
     */
    public function exists(): bool
    {
        $order = null;
        try {
            $order = session(self::SESSION_KEY);
        }
        catch(\Exception $e) {
            //Ignore exception if unable to unserialize the order object.
        }
        return ($order instanceof Order);
    }

    /**
     * @return Order
     */
    public function retrieve(): Order
    {
        $order = null;
        try {
            $order = session(self::SESSION_KEY);
        }
        catch(\Exception $e) {
            //Ignore exception if unable to unserialize the order object.
        }

        if($order instanceof Order) {

            return $order;
        }



        //If session object is not of type Order, delete the session and return a new Order object.
        $this->delete();
        return new Order();
    }


    /**
     * @return void
     * @throws \Exception
     */
    public function store(Order $order) {
//        $order->saveOrderData();
        session([self::SESSION_KEY => $order]);
    }

    /**
     * @return void
     */
    public function delete() {
        session([self::SESSION_KEY => null]);
    }

    /**
     * Wrapper around the 'retrieve' and 'store' methods.
     * Order object from the session will be passed into the closure, so you can perform
     * any required modifications on the order data, and they will automatically be saved to the session.
     * @param \Closure $closure
     * @return void
     * @throws \Exception
     */
    public function modify(\Closure $closure) {
        $order = $this->retrieve();
        $closure($order);
        $this->store($order);
    }
}
