<?php
declare(strict_types=1);


interface Neighbor
{
	public function saysHello(): void;
}

final class Alpha
{
	public function withNeighbor(Neighbor $neighbor): self
	{
		$this->neighbor = $neighbor;
	}

	public function whoIsYourNeighbor(): Neighbor
	{
		return $this->neighbor;
	}

	public function sayHelloToNeighbor(Neighbor $neighbor): void
	{
		$neighbor->saysHello();
	}
}

final class Beta implements Neighbor
{
	public function saysHello(): void {}
}
