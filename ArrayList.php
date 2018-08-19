<?php

namespace Classes;

/**
 * Simple ArrayList Like used in Java
 */
class ArrayList
{
	/**
	 * @var array
	 */
	private $list = [];

	/**
	 * Create New Array List
	 * 
	 * @param array $data
	 * @param int $size
	 * @return void
	 */
	public function __construct(array $data = [])
	{
		$this->list = $data;
	}

	/**
	 * Display the array
	 * 
	 * @return array
	 */
	public function show()
	{
		return $this->list;
	}

	/**
	 * Returns the value of the key
	 * 
	 * @param string $key
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->list[$key];
	}

	/**
	 * Add Element or Array to The Array List
	 * 
	 * @var mixed $data
	 * @return void
	 */
	public function add($data)
	{
		array_push($this->list, $data);
	}

	/**
	 * Removes all of the elements from this list.
	 * 
	 * @return void
	 */
	public function clear()
	{
		unset($this->list);
		$this->list = [];
	}

	/**
	 * Remove an element by it's key
	 * 
	 * @param string $key
	 * @return void
	 */
	public function remove($key)
	{
		unset($this->list[$key]);
	}

	/**
	 * Replace the value of the specific key
	 * 
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 */
	public function replace($key, $value)
	{
		$this->list[$key] = $value;
	}

	/**
	 * Returns true if this list contains the specified key.
	 * 
	 * @param string $key
	 * @return bool
	 */
	public function contains($key)
	{
		return array_key_exists($key, $this->list);
	}

	/**
	 * Returns true if this list contains no elements.
	 * 
	 * @return bool
	 */
	public function isEmpty()
	{
		return empty($this->list);
	}

	/**
	 * Returns the number of elements in this list.
	 * 
	 * @return int
	 */
	public function size()
	{
		return count($this->list);
	}
}