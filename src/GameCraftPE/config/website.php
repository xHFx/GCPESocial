<?php
namespace GameCraftPE;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

use GameCraftPE\Main;

class Main extends PluginBase implements Listener{
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "website":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[WEBSITE]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("web1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("web2"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.website")){
                    $sender->sendMessage("§a--------§2[WEBSITE]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("web1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("web2"));
                    return true;
                }
                break;
            }
        }
    }
?>
