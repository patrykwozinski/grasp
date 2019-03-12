<?php
declare(strict_types=1);

final class Price
{
	private $possibleUpdate;
	private $amount;
	private $multiplier;

	public function __construct(bool $possibleUpdate, float $amount, int $multiplier)
	{
		$this->possibleUpdate = $possibleUpdate;
		$this->amount         = $amount;
		$this->multiplier     = $multiplier;
	}

	public function canUpdate(): bool
	{
		return $this->possibleUpdate;
	}

	public function lastAmount(): float
	{
		return $this->amount;
	}

	public function multiplier(): int
	{
		return $this->multiplier;
	}

	public function setAmount(float $amount): void
	{
		$this->amount = $amount;
	}
}

final class UpdatePrice
{
	public function update(Price $price): Price
	{
		if ($price->canUpdate())
		{
			$newPrice = $price->lastAmount() * $price->multiplier();

			$price->setAmount($newPrice);
		}

		return $price;
	}
}
