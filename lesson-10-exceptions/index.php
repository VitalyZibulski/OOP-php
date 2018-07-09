<?php

	/*class PaymentGateway
	{
		public function charge(){
			if(1){
				throw new Exception('Payment failed');

			}
		}
	}


	$gateway = new PaymentGateway;

	try{
		$gateway->charge('125', 28);


	}

	catch (Exception $e){
		die('Payment failed');
	}
	*/

//----------------------------------------------------------------------------------------------------------

	class GatewayPaymentFailedException extends Exception
	{

	}




	class PaymentGateway
	{
		public function charge(){
			if(1){
				throw new GatewayPaymentFailedException('Payment failed');

			}
		}
	}


	$gateway = new PaymentGateway;

	try{
		$gateway->charge('125', 28);


	}

	catch (GatewayPaymentFailedException $e){
		die('Payment failed');
	}


	//---------------------------------------------------------------------------------------
	<?php

	class PaymentGatewayException extends Exception
	{
		//
	}

	class InvalidGatewayTokenException extends PaymentGatewayException
	{
		protected $message = 'Payment failed';
	}

	class GatewayPaymentFailedException extends PaymentGatewayException
	{
		protected $message = 'token';
	}


	class PaymentGateway
	{
		public function charge(){
			if(0){
				throw new InvalidGatewayTokenException;

			}

			if(1){
				throw new GatewayPaymentFailedException;

			}
		}
	}


	$gateway = new PaymentGateway;

	try{
		$gateway->charge('125', 28);


	}

	catch (PaymentGatewayException $e){
		die($e->getMessage());
	}