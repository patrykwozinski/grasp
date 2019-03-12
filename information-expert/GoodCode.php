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

	public function multiply(int $multiplier): self
	{
		if (true === $this->possibleUpdate)
		{
			$newAmount = $this->amount * $multiplier;

			return new self($this->possibleUpdate, $newAmount);
		}

		return $this;
	}
}

final class UpdatePrice
{
	public function update(Price $price, int $multiplier): Price
	{
		return $price->multiply($multiplier);
	}
}
