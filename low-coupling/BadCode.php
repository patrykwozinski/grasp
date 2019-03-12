<?php
declare(strict_types=1);


final class Alpha
{
	public function withNeighbor(Beta $beta): self
	{
		$this->neighbor = $beta;
	}

	public function whoIsYourNeighbor(): Beta
	{
		return $this->neighbor;
	}

	public function sayHelloToNeighbor(Beta $beta): void
	{
		$beta->betaSaysHello();
	}
}

final class Beta
{
	public function betaSaysHello(): void {}
}
