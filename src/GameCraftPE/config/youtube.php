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
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[YOUTUBE]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("yt1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("yt2"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.youtube")){
                    $sender->sendMessage("§a--------§2[YOUTUBE]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("yt1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("yt2"));
                    return true;
                }
                break;
            }
        }
    }
?>
