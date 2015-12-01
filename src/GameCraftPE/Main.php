<?php
namespace GameCraftPE;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

use GameCraftPE\config\website;
use GameCraftPE\config\github;
use GameCraftPE\config\facebook;
use GameCraftPE\config\youtube;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::GOLD . "[--GCPESocial--]" .TEXTFORMAT::RED. " --> -->" .TEXTFORMAT::AQUA.  " Social Success! GCPESocial is Active on Version ".$this->getDescription()->getVersion());
    }
    	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "social":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::BLUE . "- " . $this->getConfig()->get("name"));
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our Website!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /website");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our Facebook!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /facebook");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our YouTube!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /youtube");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our GitHub!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /github");
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.social")){
                    $sender->sendMessage("§3 " . $this->getConfig->get("name"));
                    $sender->sendMessage("§2-  Our Website!");
                    $sender->sendMessage("§a-  Use /website");
                    $sender->sendMessage("§2-  Our Facebook!");
                    $sender->sendMessage("§a-  Use /facebook");
                    $sender->sendMessage("§2-  Our YouTube!");
                    $sender->sendMessage("§a-  Use /youtube");
                    $sender->sendMessage("§2-  Our GitHub!");
                    $sender->sendMessage("§a-  Use /github"); 
                    return true;
                }
                break;
            }
        }
    }
?>
