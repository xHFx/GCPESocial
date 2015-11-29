<?php
namespace GameCraftPE;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

/** Im adding a few more "use".
 * Basically, i need to delete the comment lines when done.
use GameCraftPE\config\website;
use GameCraftPE\config\github;
use GameCraftPE\config\twitter;
use GameCraftPE\config\youtube;
**/
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
                    $sender->sendMessage(TEXTFORMAT::BLUE . "--------[GCPESocial]--------");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our Website!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /website");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our Twitter! );
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /twitter");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our YouTube!");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /youtube");
                    $sender->sendMessage(TEXTFORMAT::GOLD . "-  Our GitHub!);
                    $sender->sendMessage(TEXTFORMAT::GREEN . "-  Use /github");
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("gamecraftpe.staff")){
                    $sender->sendMessage("§a"--------[GCPESocial]--------);
                    $sender->sendMessage("§2- " . $this->getConfig()->get("admin1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("admin2"));
                    $sender->sendMessage("§a--------§2[GameCraftPE Developpers]§a--------");
                    $sender->sendMessage("§a- " . $this->getConfig()->get("developper4"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("developper5"));
                    $sender->sendMessage("§a--------§2[GameCraftPE Staff]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff5"));
                    return true;
                }
                break;
            }
        }
    }
?>
