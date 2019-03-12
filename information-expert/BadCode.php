<?php
declare(strict_types=1);

final class Price
{
	private $possibleUpdate;
	private $amount;

	public function __construct(bool $possibleUpdate, float $amount)
	{
		$this->possibleUpdate = $possibleUpdate;
		$this->amount         = $amount;
	}

	public function canUpdate(): bool
	{
		return $this->possibleUpdate;
	}

	public function lastAmount(): float
	{
		return $this->amount;
	}

	public function setAmount(float $amount): void
	{
		$this->amount = $amount;
	}
}

final class UpdatePrice
{
	public function update(Price $price, int $multiplier): Price
	{
		if ($price->canUpdate())
		{
			$newPrice = $price->lastAmount() * $multiplier;

			$price->setAmount($newPrice);
		}

		return $price;
	}
}
