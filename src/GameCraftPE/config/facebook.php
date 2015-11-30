<?php
namespace GameCraftPE\config;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

use GameCraftPE\Main;

class facebook extends PluginBase implements Listener{
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "facebook":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[FACEBOOK]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("fb1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("fb2"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.facebook")){
                    $sender->sendMessage("§a--------§2[FACEBOOK]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("fb1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("fb2"));
                    return true;
                }
                break;
            }
        }
    }
?>
