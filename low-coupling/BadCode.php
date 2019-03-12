<?php
declare(strict_types=1);


final class Alpha
{
	private $beta;

	public function __construct(Beta $beta)
	{
		$this->beta = $beta;
	}

	public function withNeighbor(Beta $beta): self
	{
		return new self($beta);
	}

	public function whoIsYourNeighbor(): Beta
	{
		return $this->beta;
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
