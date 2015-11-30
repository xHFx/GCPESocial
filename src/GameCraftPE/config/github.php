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

class github extends PluginBase implements Listener{
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "github":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[GITHUB]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("git1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("git2"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.github")){
                    $sender->sendMessage("§a--------§2[GITHUB]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("git1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("git2"));
                    return true;
                }
                break;
            }
        }
    }
?>
