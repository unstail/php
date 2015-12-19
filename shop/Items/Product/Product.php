<?php
	namespace shop\Items\Product;

	/**
	 *
	 */
	abstract class Product

	{
		private $price;
		private $id;
		private $width;
		private $height;
		private $depth;

		function __construct($price, $width, $height, $depth)
		{

			$this->price = $price;
			$this->id = uniqid();
			$this->width = $width;
			$this->height = $height;
			$this->depth = $depth;
		}

		public function getPrice()
		{
			return $this->price;
		}
		public function getId()
		{
			return $this->id;
		}
		public function getDepth()
		{
			return $this->depth;
		}
		public function getHeight()
		{
			return $this->height;
		}
		public function getWidth()
		{
			return $this->width;
		}
	}
