<?php

namespace App\Libraries;

//use App\Consumers\BundleLookup;
//use App\Consumers\Order as OrderConsumer;
//use App\Libraries\Google\CookieParser;
//use App\Libraries\NetStatus\NetStatusInterface;
//use App\Libraries\Order\CompletionData;
//use App\Libraries\Order\CustomerDetails;
//use App\Libraries\Order\DirectDebit;
//use App\Libraries\Order\Installation;
//use App\Libraries\Order\Payment;
use App\Libraries\Package;


class Order
{
    private ?int $onlineOrderID = null;

//    private ?DirectDebit $directDebit = null;
//    private ?Payment $payment = null;
    private ?Package $package = null;

    public function getPackage(): ?\App\Libraries\Package
    {
        return $this->package;
    }

    public function setPackage(?\App\Libraries\Package $package): void
    {
        $this->package = $package;
    }



    private bool $convertedToSale = false;

//    public function __construct() {
//        $this->customerDetails = new CustomerDetails;
//    }

    /**
     * @return int|null
     */
    public function getOnlineOrderID(): ?int
    {
        return $this->onlineOrderID;
    }




//    /**
//     * @return Payment|null
//     */
//    public function getPayment(): ?Payment
//    {
//        return $this->payment;
//    }
//
//    /**
//     * @param $cardNumber
//     * @param $cardName
//     * @param $expirationMonth
//     * @param $expirationYear
//     * @param $cv2
//     * @return void
//     * @throws \Exception
//     */
//    public function initialisePayment(
//        $cardNumber,
//        $cardName,
//        $expirationMonth,
//        $expirationYear,
//        $cv2
//    ): void
//    {
//        //Ensure payment has not already been made for this order
//        if (!is_null($this->payment)) {
//            if ($this->payment->hasPaymentBeenCompleted()) {
//                return;
//            }
//        }
//
//        //Initialise payment object
//        $this->payment = new Payment(
//            $this,
//            $cardNumber,
//            $cardName,
//            $expirationMonth,
//            $expirationYear,
//            $cv2
//        );
//    }





    public function hasConvertedToSale(): bool
    {
        return $this->convertedToSale;
    }

    /**
     * @return void
     * @throws \Exception
     */
//    private function createOnlineOrderData() {
//        if(!is_null($this->onlineOrderID)) {
//            return;
//        }
//
//        $clientID = null;
//        try {
//            $clientID = (new CookieParser())->getClientID();
//        }
//        catch(\Exception $e) {
//
//        }
//
//        $this->onlineOrderID = (new OrderConsumer)->createOnlineOrderData($clientID, $this->referralCode);
//    }

    /**
     * @return void
     * @throws \Exception
     */
//    public function saveOrderData() {
//        if($this->hasConvertedToSale()) {
//            return;
//        }
//
////        $this->createOnlineOrderData();
//
//        $data = [
//            'online_order_id' => $this->onlineOrderID,
////            'customer_detail' => $this->customerDetails->toArray(),
////            'comparison_site' => $this->comparisonSiteSource,
////            'referral_code' => $this->referralCode,
////            'marketing_opt_out' => $this->hasAcceptedMarketing() ? 'N' : 'Y',
//        ];
//
//
//
//
//        (new OrderConsumer)->saveOnlineOrderData($data);
//    }

    /**
     * @return void
     * @throws \Exception
     */
//    public function convertToSale(): void
//    {
//        if($this->hasConvertedToSale()) {
//            return;
//        }
//
//        $this->saveOrderData();
//
//        $response = (new OrderConsumer)->convertToSale($this->onlineOrderID);
//        $this->convertedToSale = true;
//
//        //Build completion data object
//        new CompletionData(
//            $this->customerDetails->getEmail(),
//            $response->getData()['customer']
//        );
//    }
}
