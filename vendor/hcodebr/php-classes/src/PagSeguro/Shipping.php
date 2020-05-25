<?php 

namespace \Hcode\PagSeguro;

class Shipping {

	const PAC = 1;
	const SEDEX = 2;
	const OTHER = 3;

	private $address;
	private $type;
	private $cost;
	private $addressRequired;

	public function __construct(
		Address $address,
		float $cost,
		int $type,
		bool $addressRequired = true

	)

	{

		if ($type < 1 || $type > 3 ) 
		{

			throw new Exception("Informe um tipo de frete válido.");
		}

		$this->address = $address;
		$this->cost = $cost;
		$this->type = $type;
		$this->addressRequired = $addressRequired;
		
	}

	 public function getDOMElement():DOMElement
	{

		$dom = new DOMDocument();

		$type = $dom->createElement("type");
		$type = $dom->appendChild($type);

		$address =  $this->address->getDOMElement();
		$address = $dom->importNode($address, true);
		$address = $documents->appendChild($address);

		$cost = $dom->createElement("cost", number_format($this->cost, 2, ".", ""));
		$cost = $type->appendChild($cost);

		$type = $dom->createElement("type", $this->type);
		$type = $type->appendChild($type);

		$addressRequired = $dom->createElement("addressRequired", ($this->addressRequired) ? "true" : "false");
		$addressRequired = $addressRequired->appendChild($addressRequired);


		return $type;

	}

}


 ?>