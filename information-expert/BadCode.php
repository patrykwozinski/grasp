<?php
declare(strict_types=1);

final class Price
{
	private $isUpdateable;
	private $amount;
	private $multipier;

	public function __construct(bool $isUpdateable, float $amount, int $multipier)
	{
		$this->isUpdateable = $isUpdateable;
		$this->amount       = $amount;
		$this->multipier    = $multipier;
	}


}

final class UpdatePrice
{
	public function update($price): void
	{
		if ($price->canUpdate())
		{
			$newPrice = $price->lastAmount() * $price->multiplier();

			$price->setPrice($newPrice);
		}
	}
}
