<?php
	namespace shop\Product;

	use shop\ProductInterface\ProductInterface;
	use shop\Box\Box;
	/**
	 *
	 */
	class Product implements ProductInterface

	{
		private $author;
		private $price;
		private $id;
		private $size; // sm
		private $box;

		function __construct( $author, $price, $size = array())
		{



			$this->author = $author;
			$this->price = $price;
			$this->id = uniqid();

			$this->size = array(
				'width' => $size['width'],
				'height' => $size['height'],
				'depth' => $size['depth'],
			);

		}

		public function getAuthor(){
			return $this->author;
		}
		public function getPrice(){
			return $this->price;
		}
		public function getId(){
			return $this->id;
		}
		public function getSize($param) {
			return $this->size[$param];
		}
		public function getBox()
		{
			return $this->box;
		}
		public function putInBox(Box $box)
		{
			$this->box = $box;
			return $this;
		}
		public function removeFromBox()
		{
			$this->box->removeProduct($this);
			unset($this->box);
			return $this;
		}
	}
