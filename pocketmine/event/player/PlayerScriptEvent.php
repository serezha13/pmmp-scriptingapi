<?php

namespace pocketmine\event\player;

use pocketmine\Player;

/**
 * Called when a player's client-side script triggers a custom event
 */
class PlayerScriptEvent extends PlayerEvent
{

	/** @var string */
	protected $scriptEventName;

	/** @var */
	protected $scriptEventData;

	/**
	 * PlayerScriptEvent constructor.
	 *
	 * @param Player $player
	 * @param string $scriptEventName
	 * @param $scriptEventData
	 */
	public function __construct(Player $player, string $scriptEventName, $scriptEventData)
	{
		$this->player = $player;
		$this->scriptEventName = $scriptEventName;
		$this->scriptEventData = $scriptEventData;
	}

	/**
	 * @param string $scriptEventName
	 */
	public function setScriptEventName(string $scriptEventName): void
	{
		$this->scriptEventData = $scriptEventName;
	}

	public function getScriptEventName(): string
	{
		return $this->scriptEventName;
	}

	/**
	 * @param $scriptEventData
	 */
	public function setScriptEventData($scriptEventData): void
	{
		$this->scriptEventData = $scriptEventData;
	}

	public function getScriptEventData()
	{
		return $this->scriptEventData;
	}
}