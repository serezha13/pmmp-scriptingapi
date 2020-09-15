<?php

namespace pocketmine\resourcepacks;

interface BehaviorPack extends ResourcePack
{

	/**
	 * Returns whether the behavior pack contains a client-side script.
	 * @return bool
	 */
	public function hasClientScripts(): bool;
}