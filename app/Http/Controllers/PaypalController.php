<?php

namespace App\Http\Controllers;

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\Amount;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Validation\UrlValidator;
use manifest\src\values\Url;
use Illuminate\Http\Request;

class PaypalController extends Controller
{

    public function __construct() {
    /** PayPal api context **/
          $paypal_conf = \Config::get('paypal');
          $this->_api_context = new ApiContext(new OAuthTokenCredential(
              $paypal_conf['client_id'],
              $paypal_conf['secret'])
          );
          $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request) {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //Create twn items apo to checkout
        $item_1 = new Item();
        $item_1->setName('Item 1') /** item name **/
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($request->get('amount')); /** unit price **/

        //Create ths listas me ta items tou checkout
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        //Create tou telikou amount
        $amount = new Amount();
        $amount->setCurrency('USD')
              ->setTotal($request->get('amount'));
              
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
          $payment->create($this->_api_context);
          } catch (\PayPal\Exception\PPConnectionException $ex) {
          if (\Config::get('app.debug')) {
          \Session::put('error', 'Connection timeout');
                          return Redirect::route('paywithpaypal');
          } else {
          \Session::put('error', 'Some error occur, sorry for inconvenient');
                          return Redirect::route('paywithpaypal');
          }
          }
          foreach ($payment->getLinks() as $link) {
          if ($link->getRel() == 'approval_url') {
          $redirect_url = $link->getHref();
                          break;
          }
          }
          /** add payment ID to session **/
                  Session::put('paypal_payment_id', $payment->getId());
          if (isset($redirect_url)) {
          /** redirect to paypal **/
                      return Redirect::away($redirect_url);
          }
          \Session::put('error', 'Unknown error occurred');
                  return Redirect::route('paywithpaypal');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
