<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

//*** = needs some more thought

ET::$languageInfo["Finnish"] = array(
	"locale" => "fi-FI",
	"name" => "Finnish",
	"description" => "A Finnish language pack.",
	"version" => "1.0",
	"author" => "Juha Auvinen",
	"authorEmail" => "juha@saimiri.fi",
	"authorURL" => "http://www.saimiri.fi",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "%c";

$definitions["%d day ago"] = "eilen";
$definitions["%d days ago"] = "%d päivää sitten";
$definitions["%d hour ago"] = "1 tunti sitten";
$definitions["%d hours ago"] = "%d tuntia sitten";
$definitions["%d minute ago"] = "1 minuutti sitten";
$definitions["%d minutes ago"] = "%d minuuttia sitten";
$definitions["%d month ago"] = "1 kuukausi sitten";
$definitions["%d months ago"] = "%d kuukautta sitten";
$definitions["%d second ago"] = "1 sekunti sitten";
$definitions["%d seconds ago"] = "%d sekuntia sitten";
$definitions["%d week ago"] = "viime viikolla";
$definitions["%d weeks ago"] = "%d viikkoa sitten";
$definitions["%d year ago"] = "viime vuonna";
$definitions["%d years ago"] = "%d vuotta sitten";

$definitions["%s and %s"] = "%s ja %s";
$definitions["%s can view this conversation."] = "%s voivat nähdä tämän keskustelun.";
$definitions["%s changed %s's group to %s."] = "%s vaihtoi käyttäjän %s ryhmäksi %s.";
$definitions["%s changed your group to %s."] = "%s vaihtoi ryhmäksesi \"%s\".";
$definitions["%s conversation"] = "%s keskustelu";
$definitions["%s conversations"] = "%s keskustelua";
$definitions["%s has registered and is awaiting approval."] = "%s on rekisteröitynyt ja odottaa hyväksyntää.";
$definitions["%s invited you to %s."] = "%s on kutsunut sinut %s.";
$definitions["%s joined the forum."] = "%s on liittynyt foorumille.";
$definitions["%s mentioned you in %s."] = "%s on maininnut sinut keskustelussa \"%s\".";
$definitions["%s post"] = "%s viesti";
$definitions["%s posted %s"] = "%s kirjoitti %s";
$definitions["%s posted in %s."] = "%s kirjoitti ketjussa %s.";
$definitions["%s posts"] = "%s viestiä";
$definitions["%s reply"] = "%s vastaus";
$definitions["%s replies"] = "%s vastausta";
$definitions["%s Settings"] = "%s Asetukset";
$definitions["%s started the conversation %s."] = "%s aloitti keskustelun \"%s\".";
$definitions["%s will be able to view this conversation."] = "%s voi nähdä tämän keskustelun.";
$definitions["%s will be able to:"] = "%s voi:";

$definitions["A new version of esoTalk (%s) is available."] = "Uusi versio esoTalkista (%s) on saatavilla.";
$definitions["a private conversation"] = "yksityinen keskustelu";
$definitions["Automatically follow conversations that I reply to"] = "Seuraa automaattisesti keskusteluja joihin vastaan";
$definitions["Automatically follow private conversations that I'm added to"] = "Seuraa automaattisesti yksityisiä keskusteluja joihin minut on lisätty";
$definitions["Access the administrator control panel."] = "Siirry hallintapaneeliin.";
$definitions["Account type"] = "Tilin tyyppi";
$definitions["Activate"] = "Aktivoi";
$definitions["Activity"] = "Toiminta";
$definitions["Add"] = "Lisää";
$definitions["Administration"] = "Ylläpito";
$definitions["Administrator email"] = "Ylläpitäjän sähköpostiosoite";
$definitions["Administrator password"] = "Ylläpitäjän salasana";
$definitions["Administrator username"] = "Ylläpitäjän nimimerkki";
$definitions["Advanced options"] = "Edistyneet asetukset";
$definitions["All Channels"] = "Kaikki kanavat";
$definitions["Allow members to edit their own posts:"] = "Salli jäsenten muokata omia viestejään:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Joko sinulla on tili? <a href='%s' class='link-login'>Kirjaudu sisään!</a>";
$definitions["Appearance"] = "Ulkoasu";
$definitions["Approve"] = "Hyväksy";
$definitions["Automatically star conversations that I reply to"] = "Merkitse automaattisesti tähdellä keskustelut joihin vastaan";
$definitions["Avatar"] = "Kuva";

$definitions["Back to channels"] = "Takaisin kanaviin";
$definitions["Back to conversation"] = "Takaisin keskusteluun";
$definitions["Back to member"] = "Takaisin jäseneen";
$definitions["Back to members"] = "Takaisin jäseniin";
$definitions["Back to search"] = "Takaisin hakuun";
$definitions["Background color"] = "Taustaväri";
$definitions["Background image"] = "Taustakuva";
$definitions["Base URL"] = "Base URL"; // ***
$definitions["Bold"] = "Lihavoitu";
$definitions["By %s"] = "By %s"; //***

$definitions["Can suspend/unsuspend members"] = "Can suspend/unsuspend members"; //***
$definitions["Cancel"] = "Peru";
$definitions["Change"] = "Muuta";
$definitions["Change %s's Permissions"] = "Muuta käyttäjän %s oikeuksia";
$definitions["Change avatar"] = "Vaihda avataria";
$definitions["Change Channel"] = "Vaihda Kanavaa";
$definitions["Change channel"] = "Vaihda kanavaa";
$definitions["Change username"] = "Vaihda nimimerkkiä";
$definitions["Change Password or Email"] = "Vaihda salasanaa tai sähköpostiosoitetta";
$definitions["Change Password"] = "Vaihda Salasanaa";
$definitions["Change password"] = "Vaihda salasanaa";
$definitions["Change permissions"] = "Vaihda käyttöoikeuksia";
$definitions["Channel description"] = "Kanavan kuvaus";
$definitions["Channel List"] = "Kanavalista";
$definitions["Channel title"] = "Kanavan otsikko";
$definitions["Channel slug"] = "Kanavan slug"; //***
$definitions["Channels"] = "Kanavat";
$definitions["Choose a secure password of at least %s characters"] = "Valitse turvallinen salasana jossa on vähintään %s merkkiä";
$definitions["Choose what people will see when they first visit your forum."] = "Valitse mitä ihmiset näkevät kun he tulevat foorumille ensimmäistä kertaa.";
$definitions["Click on a member's name to remove them."] = "Klikkaa jäsenen nimeä poistaaksesi hänet.";
$definitions["Close registration"] = "Sulje rekisteröinti";
$definitions["Confirm password"] = "Vahvista salasana";
$definitions["Controls"] = "Toiminnot";
$definitions["Conversation"] = "Keskustelu";
$definitions["Conversations participated in"] = "Keskusteluun osallistuttu ***"; //***
$definitions["Conversations started"] = "Keskustelua aloitettu";
$definitions["Conversations"] = "Keskustelut";
$definitions["Copy permissions from"] = "Kopioi käyttöoikeudet kohteesta"; // ***
$definitions["Create Channel"] = "Luo kanava";
$definitions["Create Group"] = "Luo ryhmä";
$definitions["Create Member"] = "Luo jäsen";
$definitions["Customize how users can become members of your forum."] = "Valitse miten käyttäjät voivat liittyä foorumillesi.";
$definitions["Customize your forum's appearance"] = "Mukauta foorumisi ulkoasua";

$definitions["Dashboard"] = "Hallintapaneeli";
$definitions["Default forum language"] = "Foorumin oletuskieli";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Poista</strong> kaikki keskustelut pysyvästi.";
$definitions["Delete Channel"] = "Poista kanava";
$definitions["Delete conversation"] = "Poista keskustelu";
$definitions["Delete member"] = "Poista jäsen";
$definitions["Delete Member"] = "Poista jäsen";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Poista tämän jäsenen viestit.</strong> Kaikki tämän jäsenen viestit merkitään poistetuksi, mutta ne voidaan vielä manuaalisesti palauttaa.";
$definitions["Delete"] = "Poista";
$definitions["Deleted %s by %s"] = "Poistettu %s jäsenen %s toimesta"; //***
$definitions["Deny"] = "Kiellä";
$definitions["Disable"] = "Poista käytöstä";
$definitions["Discard"] = "Hylkää";
$definitions["Don't allow other users to see when I am online"] = "Älä anna muiden jäsenten nähdä milloin olen kirjautuneena";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Eikö sinulla ole tiliä? <a href='%s' class='link-join'>Liity jäseneksi!</a>";
$definitions["Don't repeat"] = "Älä toista";
$definitions["Don't require users to confirm their account"] = "Älä vaadi käyttäjiä vahvistamaan tiliään";

$definitions["Edit Channel"] = "Muokkaa kanavaa";
$definitions["Edit Group"] = "Muokkaa ryhmää";
$definitions["Edit member groups"] = "Muokkaa jäsenryhmiä";
$definitions["Edit your profile"] = "Muokkaa profiiliasi";
$definitions["Edit"] = "Muokkaa";
$definitions["Edited %s by %s"] = "Muokannut %2\$s %1\$s"; // ****
$definitions["Editing permissions"] = "Muokkausoikeudet";
$definitions["Email me when I'm added to a private conversation"] = "Lähetä minulle postia, kun minut lisätään yksityiseen keskusteluun";
$definitions["Email me when someone mentions me in a post"] = "Lähetä minulle postia, kun joku mainitsee minut viestissään";
$definitions["Email me when someone posts in a channel I have followed"] = "Lähetä minulle postia, kun joku kirjoittaa viestin kanavalle jota seuraan";
$definitions["Email me when someone posts in a conversation I have followed"] = "Lähetä minulle postia, kun joku kirjoittaa viestin keskusteluun jota seuraan";
$definitions["Email me when there is a new post by a member I have followed"] = "Lähetä minulle postia, kun seuraamani jäsen kirjoittaa uuden viestin";
$definitions["Email"] = "Sähköposti";
$definitions["Enable"] = "Ota käyttöön";
$definitions["Enabled"] = "Otettu käyttöön";
$definitions["Enter a conversation title"] = "Kirjoita viestin otsikko";
$definitions["Error"] = "Virhe";
$definitions["esoTalk version"] = "esoTalkin versio";
$definitions["Everyone"] = "Kaikki";

$definitions["Fatal Error"] = "Jokin meni vikaan";
$definitions["Feed"] = "Syöte";
$definitions["Filter by name or group..."] = "Suodata nimen tai ryhmän mukaan...";
$definitions["Find this post"] = "Löydä tämä viesti***";
$definitions["First posted"] = "Kirjoitettu ensimmäisen kerran"; // ***
$definitions["Follow"] = "Seuraa";
$definitions["Follow to receive notifications"] = "Seuraa saadaksesi ilmoitukset";
$definitions["Following"] = "Seurataan";
$definitions["For %s seconds"] = "%s sekuntin ajan";
$definitions["Forever"] = "Ikuisesti";
$definitions["Forgot?"] = "Unohditko?";
$definitions["Forgot Password"] = "Salasana unohtunut";
$definitions["Forum"] = "Foorumia";
$definitions["Forum header"] = "Foorumin ylätunniste"; //***
$definitions["Forum language"] = "Foorumin kieli";
$definitions["Forum privacy"] = "Foorumin yksityisyys";
$definitions["Forum Settings"] = "Foorumin asetukset";
$definitions["Forum Statistics"] = "Foorumin tilasto";
$definitions["Forum title"] = "Foorumin otsikko";
$definitions["forumDescription"] = "%s on keskustelupalsta, jonka aiheina ovat %s ja %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Anna tälle ryhmälle moderointioikeudet kaikille kanaville.";
$definitions["Global permissions"] = "Globaalit käyttöoikeudet";
$definitions["Go to top"] = "Takaisin ylös";
$definitions["Group name"] = "Ryhmän nimi";
$definitions["group.administrator"] = "Ylläpitäjä";
$definitions["group.administrator.plural"] = "Ylläpitäjät";
$definitions["group.guest"] = "Vieras";
$definitions["group.guest.plural"] = "Vieraat";
$definitions["group.member"] = "Jäsen";
$definitions["group.member.plural"] = "Jäsenet";
$definitions["group.Moderator"] = "Moderaattori";
$definitions["group.Moderator.plural"] = "Moderaattorit";
$definitions["group.suspended"] = "Keskeytetty"; //***
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Ryhmien avulla voidaan kategorisoida jäseniä ja antaa heille tiettyjä käyttöoikeuksia.";
$definitions["Groups"] = "Ryhmät";
$definitions["Guests can view the:"] = "Vieraat voivat tarkastella:"; //***

$definitions["Header"] = "Ylätunniste";
$definitions["Header color"] = "Ylätunnisteen väri";
$definitions["Heads Up!"] = "Herätys!"; //***
$definitions["Hide"] = "Piilota";
$definitions["Home page"] = "Kotisivu";
$definitions["HTML is allowed."] = "HTML on sallittu.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Jos sinulle tulee ongelmia tai kaipaat neuvoja asennuksen kanssa, pyydä apua <a href='%s'>esoTalkin tukifoorumilta</a>.";
$definitions["Install esoTalk"] = "Asenna esoTalk";
$definitions["Install My Forum"] = "Asenna My Forum"; // ***
$definitions["Installed Languages"] = "Asennetut kielet";
$definitions["Installed Plugins"] = "Asennetut liitännäiset";
$definitions["Installed plugins"] = "Asennetut liitännäiset";
$definitions["Installed Skins"] = "Asennetut nahkat"; // ***
$definitions["Installed skins"] = "Asennetut nahkat"; // ***
$definitions["is %s"] = "on %s";

$definitions["Joined"] = "Liittyi"; //***
$definitions["just now"] = "juuri nyt";

$definitions["Keep me logged in"] = "Pidä minut sisäänkirjautuneena";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Säilytä tämän jäsenen viestit.</strong> Kaikki viestit säilytetään mutta niiden kirjoittaksi merkitään \"[poistettu]\".";

$definitions["label.draft"] = "Luonnos";
$definitions["label.locked"] = "Lukittu";
$definitions["label.ignored"] = "Sivuutettu";
$definitions["label.private"] = "Yksityinen";
$definitions["label.sticky"] = "Kiinnitetty";
$definitions["Labels"] = "Etiketit";
$definitions["Last active"] = "Viimeksi aktiivinen"; //***
$definitions["Last active %s"] = "Viimeksi aktiivinen %s"; //***
$definitions["Latest"] = "Viimeisin";
$definitions["Latest News"] = "Tuoreimmat uutiset";
$definitions["Loading..."] = "Ladataan...";
$definitions["Lock"] = "Lukitse";
$definitions["Log In"] = "Kirjaudu sisään";
$definitions["Log Out"] = "Kirjaudu ulos";

$definitions["Make member and online list visible to:"] = "Aseta jäsen ja paikallaolijoiden lista näkyväksi:"; //***
$definitions["Manage Channels"] = "Hallinnoi kanavia";
$definitions["Manage Groups"] = "Hallinnoi ryhmiä";
$definitions["Manage Languages"] = "Hallinnoi kieliä";
$definitions["Manage your forum's channels (categories)"] = "Hallinnoi foorumisi kanavia (kategorioita)";
$definitions["Mark as read"] = "Merkitse luetuksi";
$definitions["Mark as unread"] = "Merkitse lukemattomaksi";
$definitions["Mark all as read"] = "Merkitse kaikki luetuiksi";
$definitions["Mark listed as read"] = "Merkitse listatut luetuiksi";
$definitions["Maximum size of %s. %s."] = "Maksimi koko %s. %s."; //***
$definitions["Member groups"] = "Jäsenryhmät";
$definitions["Member list"] = "Jäsenlistaa"; //***
$definitions["Member List"] = "Jäsenlista";
$definitions["Member privacy"] = "Jäsenen yksityisyys";
$definitions["Members"] = "Jäsenet";
$definitions["Members Allowed to View this Conversation"] = "Jäsenet, jotka saavat nähdä tämän keskustelun";
$definitions["Members Awaiting Approval"] = "Hyväksyntää odottavat jäsenet";
$definitions["Members Online"] = "Paikalla olevat jäsenet";
$definitions["Members who are part of this group can be listed by searching for the group name in the member list."] = "Voit listata tämän ryhmän jäsenet etsimällä ryhmän nimeä jäsenlistassa.";
$definitions["Mobile skin"] = "Mobiilinahka"; //***
$definitions["Moderate"] = "Moderoi";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Siirrä</strong> keskustelut seuraavalle kanavalle:";
$definitions["Mute conversation"] = "Mykistä keskustelu";
$definitions["MySQL database"] = "MySQL-tietokanta";
$definitions["MySQL host address"] = "MySQL-palvelimen osoite";
$definitions["MySQL password"] = "MySQL-salasana";
$definitions["MySQL queries"] = "MySQL-haut";
$definitions["MySQL table prefix"] = "MySQL-taulujen etuliite";
$definitions["MySQL username"] = "MySQL-käyttäjänimi"; //** käyttäjätunnus vs. käyttäjänimi?
$definitions["MySQL version"] = "MySQL-versio";

$definitions["Name"] = "Nimi";
$definitions["never"] = "ei koskaan";
$definitions["%s new"] = "%s uutta"; //***
$definitions["New conversation"] = "Uusi keskustelu";
$definitions["New Conversation"] = "Uusi keskustelu";
$definitions["New conversations in the past week"] = "Uudet keskustelut viimeisen viikon aikana";
$definitions["New email"] = "Uusi sähköposti";
$definitions["New members in the past week"] = "Uudet jäsenet viimeisen viikon aikana";
$definitions["New password"] = "Uusi salasana";
$definitions["New posts in the past week"] = "Uudet viestit viimeisen viikon aikana";
$definitions["New username"] = "Uusi nimimerkki";
$definitions["Next Step"] = "Seuraava vaihe";
$definitions["Next"] = "Seuraava";
$definitions["No preview"] = "Ei esikatselua";
$definitions["No"] = "Ei";
$definitions["Notifications"] = "Ilmoitukset";
$definitions["Now"] = "Nyt";

$definitions["OK"] = "OK";
$definitions["Online"] = "Paikalla";
$definitions["online"] = "paikalla";
$definitions["Only allow members of this group to see who else is in it"] = "Salli vain ryhmän jäsenten nähdä ketkä muut kuuluvat siihen";
$definitions["Open registration"] = "Avoin rekisteröinti";
$definitions["optional"] = "valinnainen";
$definitions["Order By:"] = "Järjestä:";
$definitions["Original Post"] = "Alkuperäinen viesti";

$definitions["Page Not Found"] = "Sivua ei löytynyt";
$definitions["Password"] = "Salasana";
$definitions["PHP version"] = "PHP-versio";
$definitions["Plugins"] = "Liitännäiset";
$definitions["Post a Reply"] = "Kirjoita vastaus";
$definitions["Post count"] = "Viestimäärä";
$definitions["Posts"] = "Viestit";
$definitions["Powered by"] = "Moottorina jyllää";
$definitions["Preview"] = "Esikatsele";
$definitions["Previous"] = "Edellinen";

$definitions["Quote"] = "Lainaa";
$definitions["quote"] = "lainaus";

$definitions["Read more"] = "Lue lisää";
$definitions["Recent posts"] = "Viimeisimmät viestit";
$definitions["Recover Password"] = "Palauta salasana";
$definitions["Registered members"] = "Rekisteröidyt jäsenet";
$definitions["Registration"] = "Rekisteröinti";
$definitions["Registration Closed"] = "Rekisteröinti suljettu";
$definitions["Remove avatar"] = "Poista avatar";
$definitions["Rename Member"] = "Poista jäsen";
$definitions["Reply"] = "Vastaa";
$definitions["Report a bug"] = "Raportoi bugi";
$definitions["Require administrator approval"] = "Vaadi ylläpitäjän hyväksyntä";
$definitions["Require users to confirm their email address"] = "Vaadi käyttäjiä vahvistamaan sähköpostiosoitteensa";
$definitions["Restore"] = "Palauta";
$definitions["restore"] = "palauta";
$definitions["Reset"] = "Nollaa";

$definitions["Save Changes"] = "Tallenna muutokset";
$definitions["Save Draft"] = "Tallenna luonnos";
$definitions["Search conversations..."] = "Etsi keskusteluista...";
$definitions["Search within this conversation..."] = "Etsi tästä keskustelusta...";
$definitions["Search"] = "Etsi";
$definitions["See the private conversations I've had with %s"] = "Näytä yksityiset keskustelut käyttäjän %s kanssa";
$definitions["Set a New Password"] = "Aseta uusi salasana";
$definitions["Settings"] = "Asetukset";
$definitions["Show an image in the header"] = "Näytä kuva ylätunnisteessa";
$definitions["Show in context"] = "Näytä asiayhteydessä"; //***
$definitions["Show matching posts"] = "Näytä vastaavat viestit";
$definitions["Show the channel list by default"] = "Näytä oletuksena kanavalista";
$definitions["Show the conversation list by default"] = "Näytä oletuksena keskustelulista";
$definitions["Show the forum title in the header"] = "Näytä foorumin otsikko ylätunnisteessa";
$definitions["Sign Up"] = "Liity";
$definitions["Skins"] = "Ulkoasut***"; //***
$definitions["Sort By"] = "Järjestä***"; //***
$definitions["Specify Setup Information"] = "Määrittele asennustiedot";
$definitions["Star to receive notifications"] = "Seuraa saadaksesi ilmoitukset";
$definitions["Starred"] = "Seurattu"; //***
$definitions["Start"] = "Aloita"; //***
$definitions["Start a conversation"] = "Aloita keskustelu";
$definitions["Start a new conversation"] = "Aloita uusi keskustelu";
$definitions["Start a private conversation with %s"] = "Aloita yksityinen keskustelu jäsenen %s kanssa";
$definitions["Start Conversation"] = "Aloita keskustelu";
$definitions["Starting a conversation"] = "Aloitetaan keskustelua"; //***
$definitions["Statistics"] = "Tilastot";
$definitions["statistic.conversation.plural"] = "%s keskustelua";
$definitions["statistic.conversation"] = "%s keskustelu";
$definitions["statistic.member.plural"] = "%s jäsentä";
$definitions["statistic.member"] = "%s jäsen";
$definitions["statistic.online.plural"] = "%s paikalla";
$definitions["statistic.online"] = "%s paikalla";
$definitions["statistic.post.plural"] = "%s viestiä";
$definitions["statistic.post"] = "%s viesti";
$definitions["Sticky"] = "Kiinnitetty";
$definitions["Subscribe"] = "Tilaa";
$definitions["Subscribed"] = "Tilattu";
$definitions["Subscription"] = "Tilaus";
$definitions["Success!"] = "Menestys!";
$definitions["Suspend member"] = "Hyllytä jäsen"; //***
$definitions["Suspend members."] = "Hyllytä jäsenet."; //***
$definitions["Suspend"] = "Hyllytä"; //***

$definitions["To get started with your forum, you might like to:"] = "Päästäksesi alkuun foorumisi kanssa, voit ehkä haluta:";

$definitions["Unapproved"] = "Hyväksymätön";
$definitions["Unhide"] = "Näytä";
$definitions["Uninstall"] = "Poista asennus";
$definitions["Unlock"] = "Avaa";
$definitions["Unmute conversation"] = "Poista mykistys";
$definitions["Unstarred"] = "Ei seurattu";
$definitions["Unsticky"] = "Poista kiinnitys";
$definitions["Unsubscribe new users by default"] = "Peruuta uusien käyttäjien tilaus oletuksena***"; //***
$definitions["Unsubscribe"] = "Peruuta tilaus";
$definitions["Unsubscribed"] = "Tilaus peruutettu";
$definitions["Unsuspend member"] = "Palauta käyttäjä"; //***
$definitions["Unsuspend"] = "Unsuspend"; //***
$definitions["Until someone replies"] = "Kunnes joku vastaa";
$definitions["Untitled conversation"] = "Nimeämätön keskustelu";
$definitions["Upgrade esoTalk"] = "Päivitä esoTalk";
$definitions["Use a background image"] = "Käytä taustakuvaa";
$definitions["Use for mobile"] = "Käytä mobiilissa"; // ***
$definitions["Use friendly URLs"] = "Käyttäjäystävälliset URLit";
$definitions["Used to verify your account and subscribe to conversations"] = "Käytetään tilisi vahvistamiseen ja keskustelujen tilauksiin";
$definitions["Username"] = "Nimimerkki";
$definitions["Username or Email"] = "Nimimerkki tai sähköpostiosoite";

$definitions["View %s's profile"] = "Tarkastele käyttäjän %s profiilia"; // ***
$definitions["View all notifications"] = "Näytä kaikki ilmoitukset";
$definitions["View more"] = "Näytä lisää";
$definitions["View your profile"] = "Tarkastele profiiliasi";
$definitions["View"] = "Näytä"; //***
$definitions["Viewing: %s"] = "Näytetään: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> %s kirjoituksesta"; // ***

$definitions["Warning"] = "Varoitus";
$definitions["Welcome to esoTalk!"] = "Tervetuloa esoTalkiin!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Ole hyvä. Olemme kirjanneet sinut sisään ja vieneet sinut suoraan ylläpitopaneellin. Eipä kestä.";
$definitions["Write a reply..."] = "Kirjoita vastaus...";

$definitions["Yes"] = "Kyllä";
$definitions["You can manage channel-specific permissions on the channels page."] = "Voit hallita kanavakohtaisia käyttöoikeuksia Kanavat-sivulla.";
$definitions["Your current password"] = "Nykyinen salasanasi";


// Messages.
//$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.404"] = "No jopas - hakemaasi sivua ei löydy! Kokeile palata edelliselle sivulle ja klikata jotain toista linkkiä. Tai jotain muuta.";
//$definitions["message.accountNotYetApproved"] = "The administrator hasn't yet approved your account. Patience is a virtue!";
$definitions["message.accountNotYetApproved"] = "Ylläpitäjä ei ole vielä hyväksynyt tiliäsi. Kärsivällisyys on hyve!";
//$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxDisconnected"] = "Yhteydenotto palvelimeen ei onnistu. Odota muutama sekunti ja <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>yritä uudestaan</a> tai <a href='' onclick='window.location.reload();return false'>päivitä sivu</a>."; //***
//$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made.";
$definitions["message.ajaxRequestPending"] = "Hei! Juttujesi käsittely on vielä kesken! Jos poistut tältä sivulta äsken tekemäsi muutokset voivat hävitä.";
//$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.avatarError"] = "Avatarin siirto palvelimelle ei onnistunut. Varmista, että kuva oli oikeassa muodossa (kuten .jpg, .png, or .gif) ja että tiedosto ei ollut erityisen valtavan kokoinen.";
//$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.cannotDeleteLastChannel"] = "Hetkinen. Ethän sinä voi poistaa viimeistä kanavaa! Mihin kaikki keskustelut menisivät? Lakkaa hulluttelemasta!";
//$definitions["message.cannotEditSinceReply"] = "You can't edit your post because someone has replied since you posted it.";
$definitions["message.cannotEditSinceReply"] = "Et voi enää muokata viestiäsi, koska joku on jo vastannut siihen.";
//$definitions["message.changesSaved"] = "Your changes were saved.";
$definitions["message.changesSaved"] = "Muutoksesi on tallennettu";
//$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelsHelp"] = "Kanavia käytetään foorumin keskustelujen kategorisoimiseen. Voit luoda niin monta kanavaa kuin haluat ja järjestellä/***nest*** niitä raahaamalla ja tiputtamalla niitä alla olevassa listassa."; //***
//$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.channelSlugTaken"] = "Toinen kanava käyttää jo tätä slugia."; //***
//$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDelete"] = "Oletko varma että haluat poistaa tämän? Oikeasti, et saa sitä enää takaisin.";
//$definitions["message.confirmDiscardPost"] = "You have not saved your post as a draft. Do you wish to discard it?";
$definitions["message.confirmDiscardPost"] = "Et ole tallentanut viestiäsi luonnoksena. Haluatko hylätä sen kokonaan?";
//$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmEmail"] = "Ennen kuin pääset käyttämään uutta tiliäsi, sinun on vahvistettava sähköpostiosoitteesi. Parin minuutin sisään sinun pitäisi saada meiltä sähköpostiviesti, jossa olevaa linkkiä seuraamalla voit aktivoida tilisi.";
//$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.confirmLeave"] = "Oho, et ole tallentanut muokkaamaasi juttua! Jos poistut tältä sivulta menetät kaikki tekemäsi muutokset. Onko tämä OK?";
//$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.connectionError"] = "esoTalk ei saanut yhteyttä MySQL-palvelimeen. Virheilmoitus oli:<br/>%s";
//$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationDeleted"] = "Keskustelu on poistettu. Eikö vain tuntunutkin hyvältä?";
//$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.conversationNotFound"] = "Jostain syystä tätä keskustelua ei voida näyttää. Joko sitä ei ole olemassa tai sinulla ei ole oikeutta nähdä sitä.";
//$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.cookieAuthenticationTheft"] = "Tietoturvasyistä emme voineet kirjata sinua sisään Muista minut -evästeellä. Kirjaudu sisään manuaalisesti.";
//$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.deleteChannelHelp"] = "Hei, eipäs kiirehditä! Jos poistat tämän kanavan sitä ei saa mitenkään takaisin. Paitsi jos rakennat aikakoneen. Mutta siis sitä ei saa mitenkään <em>helposti</em> takaisin. Kaikki tämän kanavan keskustelut voidaan siirtää valitsemallesi toiselle kanavalle.";
//$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailConfirmed"] = "Tilisi on vahvistettu ja voit nyt osallistua keskusteluihin. Miksi et vaikka <a href='".URL("conversation/start")."'>aloita</a> sellaista itse?";
//$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailDoesntExist"] = "Antamaasi sähköpostiosoitetta ei löydy järjestelmästämme. Tulikohan kirjoitusvirhe?";
//$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, please check your spam folder or <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailNotYetConfirmed"] = "Sinun on vahvistettava sähköpostiosoitteesi ennen kuin voit kirjautua! Jos et saanut vahvistusviestiä sähköpostiisi, tarkista roskapostikansio tai <a href='%s'>klikkaa tästä niin lähetämme viestin uudestaan</a>."; //***
//$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.emailTaken"] = "Pahus! Antamasi sähköpostiosoite on jo käytössä!";
//$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.empty"] = "Tämä kenttä on täytettävä.";
//$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyPost"] = "Jep-jep. Mitä jos kirjoittaisit jotakin viestiisi?.";
//$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.emptyTitle"] = "Viestin otsikkoa ei voi jättää tyhjäksi. Miten kukaan voi klikata tyhjää otsikkoa? Mieti nyt vähän.";
//$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong> To reinstall esoTalk, you must remove <code>config/config.php</code>.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk on jo asennettu.</strong> Asentaaksesi esoTalkin uudestaan sinun on poistettava <code>config/config.php</code>-tiedosto.";
//$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailable"] = "Uusi versio esoTalkista, %s, on saatavilla.";
//$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpdateAvailableHelp"] = "Tietoturvariskien vähentämiseksi on suositeltavaa, että esoTalkista on aina asennettuna viimeisin versio. Ja hei, siinähän voi olla jotain hienoja uusia ominaisuuksia!";
//$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDate"] = "Sinun versiosi esoTalkista on ajan tasalla.";
//$definitions["message.esoTalkUpToDateHelp"] = "esoTalk is developed in the spare time of a college student. Please consider <a href='%s' target='_blank'>donating</a> to keep it alive!";
$definitions["message.esoTalkUpToDateHelp"] = "esoTalkin kehitys tapahtuu opiskelijan vapaa-ajalla. Ole ystävällinen ja harkitse <a href='%s' target='_blank'>lahjoittamista</a> pitääksesi sen (ja hänet) hengissä!"; //***
//$definitions["message.fatalError"] = "esoTalk has encountered a fatal error. Try again, or <a href='%1\$s' target='_blank'>get help</a>.";
$definitions["message.fatalError"] = "Tapahtui vakava virhe. Yritä uudestaan tai <a href='%1\$s' target='_blank'>pyydä apua</a>.";
//$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailed"] = "Jokin meni pieleen eikä valitsemaasi tiedostoa voitu lähettää palvelimelle. Kenties se oli liian suuri tai väärässä muodossa?";
//$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadFailedMove"] = "Lähettämääsi tiedostoa ei voitu kopioida oikeaan paikkaan. Ole ystävällinen ja ota yhteyttä foorumin ylläpitäjään.";
//$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadNotImage"] = "Lähettämäsi tiedosto ei ole kelvollisessa muodossa oleva kuvatiedosto.";
//$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.fileUploadTooBig"] = "Valitsemaasi tiedostoa ei voitu lähettää koska se on liian suuri.";
//$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.forgotPasswordHelp"] = "Unohdit siis salasanasi! Ei hätää, sitä tapahtuu kaiken aikaa. Kirjoita vain sähköpostiosoitteesi niin me lähetämme sinulle ohjeet miten saat asetettua uuden salasanan.";
//$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.fulltextKeywordWarning"] = "Huomaa, että hakua tehdessä sen ulkopuolelle jäävät alle 4 merkkiä pitkät avainsanat sekä yleiset englannin kielen sanat, kuten 'the' ja 'for'."; //***
//$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!"; 
$definitions["message.gambitsHelp"] = "Gambiitit ovat lauseita, jotka kuvaavat mitä olet etsimässä. Klikkaa gambiittia lisätäksesi sen hakukenttään. Tuplaklikkaa gambiittia etsiäksesi sitä saman tien. Normaalit haun avainsanat toimivat myös!"; //***
//$definitions["message.gdNotEnabledWarning"] = "<strong>The GD extension is not enabled.</strong> This is required to resize and save avatars. Get your host or administrator to install/enable it.";
$definitions["message.gdNotEnabledWarning"] = "<strong>GD-laajennus ei ole käytössä.</strong> Se on välttämätön, jotta avataria voidaan muokata ja tallentaa. Pyydä palveluntarjoajaa tai ylläpitäjää asentamaan se tai ottamaan se käyttöön.";
//$definitions["message.greaterMySQLVersionRequired"] = "<strong>You must have MySQL 4 or greater installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.</strong> Please install/upgrade both of these requirements or request that your host or administrator install them.";
$definitions["message.greaterMySQLVersionRequired"] = "<strong>MySQL 4 tai uudempi on oltava asennettuna ja <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL-liitännäisen oltava käytössä PHP:ssä</a>.</strong> Asenna/päivitä kumpikin tai pyydä palveluntarjoajaa tai ylläpitäjää asentamaan ne.";
//$definitions["message.greaterPHPVersionRequired"] = "<strong>Your server must have PHP %s or greater installed to run esoTalk.</strong> Please upgrade your PHP installation or request that your host or administrator upgrade the server.";
$definitions["message.greaterPHPVersionRequired"] = "<strong>Palvelimella on oltava asennettuna PHP %s tai uudempi, jotta esoTalk toimisi.</strong> Päivitä PHP-asennus tai pyydä palveluntarjoajaa tai ylläpitäjää päivittämään se.";
//$definitions["message.groupsHelp"] = "Groups are used to categorize members on your forum. You can create as many groups as needed.";
$definitions["message.groupsHelp"] = "Ryhmiä käytetään jäsenten luokitteluun. Voit luoda niin monta ryhmää kuin tarvitse.";
//$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectLogin"] = "Kirjautumistietosi olivat virheelliset."; //***
//$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.incorrectPassword"] = "Nykyinen salasanasi on virheellinen."; //*** WTF?
//$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerAdminHelp"] = "esoTalk käyttää seuraavia tietoja ylläpitäjän tilin luomiseen.";
//$definitions["message.installerFilesNotWritable"] = "<strong>esoTalk cannot write to the following files/folders: %s.</strong> To resolve this, you must navigate to these files/folders in your FTP client and <code>chmod</code> them to <code>0777</code>.";
$definitions["message.installerFilesNotWritable"] = "<strong>esoTalk ei pysty kirjoittamaan seuraaviin tiedostoihin/kansioihin: %s.</strong> Ongelman korjaamiseksi ota FTP-yhteys palvelimeen ja muuta <code>chmod</code>-komennolla niiden käyttöoikeudeksi <code>0777</code>."; //***
//$definitions["message.installerWelcome"] = "Set up your fat-free forum but by filling out the form below.<br>If you have any trouble, get help on the <a href='%s' target='_blank'>esoTalk website</a>.";
$definitions["message.installerWelcome"] = "Aloita foorumisi asennus täyttämällä alla oleva lomake.<br>Jos tulee minkäänlaisia ongelmia, saat apua <a href='%s' target='_blank'>esoTalkin nettisivuilta</a>."; //***
//$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidChannel"] = "Valitsit viallisen kanavan!"; //***
//$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidEmail"] = "Tämä sähköpostiosoite ei vaikuta kelvolliselta...";
//$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.invalidUsername"] = "Nimimerkissä pitää olla 3-20 kirjainta tai numeroa.";
//$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.javascriptRequired"] = "Tämä sivu vaatii JavaScript-tuen toimiakseen oikein. Ole hyvä ja salli sen käyttö selaimessasi!";
//$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.languageUninstalled"] = "Kieli on asennettu";
//$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.locked"] = "Hmm, tämä keskustelu näkyy olevan <strong>lukittu</strong>, joten et voi vastata siihen.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noChannels"] = "No channels are visible.";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "You do not have permission to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "These errors must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "You can continue the esoTalk install without resolving the following warnings, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "<strong>PHP's register_globals setting is enabled.</strong> While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.";
$definitions["message.registrationClosed"] = "Tämä foorumi ei ole avoin julkisille rekisteröinneille.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode is enabled.</strong> This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br>• To overwrite this installation, click 'Install' again. <strong>All data will be lost.</strong><br>• To create a new installation alongside this one, change the table prefix.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitForApproval"] = "Before you can start using your newly-created account, an administrator must approve your account. We'll send you an email when you've been approved!";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
//$definitions["email.header"] = "<p>Hi %s!</p>";
$definitions["email.header"] = "<p>Hei %s!</p>";
// $definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.footer"] = "<p>(Jos et enää halua saada tämänkaltaisia sähköpostiviestejä, voit <a href='%s'>muuttaa ilmoitusasetuksiasi</a>.)</p>";

//$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.confirmEmail.subject"] = "%1\$s, ole hyvä ja vahvista sähköpostiosoitteesi.";

$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";

$definitions["email.approved.subject"] = "%1\$s, tilisi on hyväksytty";
$definitions["email.approved.body"] = "<p>Your account on %1\$s has been approved.</p><p>Visit the following link to log in and start talking:<br>%2\$s</p>";

$definitions["email.forgotPassword.subject"] = "Unohditko salasanasi, %1\$s?";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";

$definitions["email.mention.subject"] = "[%1\$s mainitsi sinut] %2\$s";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";

$definitions["email.privateAdd.subject"] = "[Yksityinen] %1\$s";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";

$definitions["email.post.subject"] = "[Uusi vastaus] %1\$s";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "author:";
$definitions["gambit.contributor:"] = "contributor:";
$definitions["gambit.member"] = "member";
$definitions["gambit.myself"] = "myself";
$definitions["gambit.draft"] = "draft";
$definitions["gambit.locked"] = "locked";
$definitions["gambit.order by newest"] = "order by newest";
$definitions["gambit.order by replies"] = "order by replies";
$definitions["gambit.private"] = "private";
$definitions["gambit.random"] = "random";
$definitions["gambit.reverse"] = "reverse";
$definitions["gambit.starred"] = "followed";
$definitions["gambit.ignored"] = "ignored";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.limit:"] = "limit:";
$definitions["gambit.title:"] = "title:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "active today"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "active 1 day"; // what it actually evaluates to

$definitions["gambit.has replies"] = "has replies";
$definitions["gambit.has >0 replies"] = "has >0 replies";
$definitions["gambit.has >10 replies"] = "has >10 replies";

$definitions["gambit.has no replies"] = "has no replies";
$definitions["gambit.has 0 replies"] = "has 0 replies";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "active >30 day";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "second";
$definitions["gambit.minute"] = "minute";
$definitions["gambit.hour"] = "hour";
$definitions["gambit.day"] = "day";
$definitions["gambit.week"] = "week";
$definitions["gambit.month"] = "month";
$definitions["gambit.year"] = "year";
$definitions["gambit.last"] = "last"; // as in "active last 180 days"
$definitions["gambit.active"] = "active"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
