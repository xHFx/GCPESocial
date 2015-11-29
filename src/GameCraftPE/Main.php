<?php
namespace GameCraftPE;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

/** Im adding a few more "use" but with a "GameCraftPE\example;" **/

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::GOLD . "[--GCPESocial--]" .TEXTFORMAT::RED. " --> -->" .TEXTFORMAT::AQUA.  " Social Success! GCPESocial is Active on Version ".$this->getDescription()->getVersion());
    }
