<?php

namespace Database\Seeders\Locations;

use App\Models\God;
use App\Models\Plane;
use App\Models\SubPlane;
use Illuminate\Database\Seeder;

class Abyss extends Seeder
{
    public function run()
    {
        $plane              = new Plane;
        $plane->name        = 'Abyss';
        $plane->alignment   = 'CE';
        $plane->color_pool  = 'Amethyst or Swirling Dark Purple';
        $plane->natives     = "Demons, Tanar'ri, Obyrith";
        $plane->description = "<p>Despite its name and notoriety for being never-ending, it is not known whether the layers of the Abyss are truly infinite in number. Part of the reason for this is that some places are so absolutely inhospitable that none, not mortal, nor god, nor demon lords themselves can survive (the deeper layers reportedly even worse in the past), and hence are not known about.</p>
<p>While the hundreds of layers of the Abyss might seem to utterly eclipse all other Outer planes put together, this figure is misleading. Besides the issue of uninhabitability, layers and divine realms, the personal territories of powers, are often one in the same in the Abyss, whereas other planes often had several realms on one layer. Exacerbating the problem, and another reason why the Abyssal layers can not be properly counted, is that the number is always in a state of flux.</p>
<p>In the very depths of the Abyss, the heart of the plane is constantly cleaving through the primal foundations of the cosmos, as it has since before the dawn of mortals, spawning new layers. Arguably worse, if a demonic invasion is allowed to fester, entire worlds can fall into the Abyss, becoming the basis of new layers and realms. Conversely, the Abyss is also capable of losing layers. The individual layers of the Abyss has primal urges and a constant need for nourishment, shrinking and weakened until nothing is left if not fed. Alternatively, they might be absorbed by other layers, only able to escape this state by acquiring sufficient sustenance. Occasionally the battling of demons over control of a layer can become so cataclysmic that the entire realm is outright obliterated.</p>
<p>Layers can also be intentionally removed, such as when a pantheon of offended deities ripped out and condensed a demon lord's entire layer (with him still in it) and cast it into the Astral plane. Despite this ending in the Abyss, much like a hungry, rudely awakened beast, almost instantly striking down the entire pantheon in that case, the attack itself is successful, leaving nothing but a void and their own decomposing divine corpses.</p>
<p>It is also a possibility that destroyed layers are capable of being reborn elsewhere in the Abyss, although this is not a certainty. This is ignoring the fact that layers are shaped by the conscious manipulations and subconscious wills of its resident demon lord, and so even the nature of a single layer can become obsolete by the time such information is established.</p>";
        $plane->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = 'Pazunia';
        $sub->aliases     = 'Palace of 1,001 Closets, The Plain of a Thousand Portals, The Plain of Yawning Pits';
        $sub->natives     = 'Demons';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['Demonic']->id;
        $sub->description = "<p>This layer is a barren wasteland of scorching winds under a relentless red sun. The surface is marked by massive dark pits; portals that plunge into many, but not all, of the deeper layers. The surface of the layer, cut through by the River Styx, connects to both Pandemonium and Hades in different edges. Its air space is ruled by Pazuzu, Price of the Lower Aerial Kingdoms. The landscape is marked with scattered iron fortresses claimed as fiefs by other demon lords.</p>
<p>The layer is home to countless Mane petitioners, who are constantly hunted for food or thrust down the pits into the deeper layers, as well as gangs of Molydei that hunt demon stragglers. There are also a large number of mortal and outsider merchants and visitors throughout the layer, attracted by the opportunities offered by the layer's countless portals. The largest of these pits is known as the Grand Abyss, which is considered a layer in its own right. Some pits work as two-way portals, but others are only one-way.</p>";
        $sub->ruler()->associate(God::where('name', 'Pazuzu')->firstOrFail());
        $sub->save();

        /**********************************************************************/

        $sub              = new SubPlane;
        $sub->parent_id   = $plane->id;
        $sub->name        = "Driller's Hives";
        $sub->natives     = 'Demons, Poisonous Vermin';
        $sub->gravity     = 'Normal';
        $sub->time        = 'Normal';
        $sub->pantheon_id = app()->pantheons['Demonic']->id;
        $sub->description = "<p>The air of this plane contains a disease that transforms visitors into giant poisonous insect creatures. At the end of each day, creatures must make a DC 13 CON Save or contract the disease. If you Fail the Save, you begin transforming into a random giant insect over the course of 3 days. Whatever insect you transform into, it will also have some form of Poison attack.</p>
<p>This plane is inhabited by countless numbers of insects, continually waging war with each other from gargantuan insect hives. They attack visitors to the plane.</p>
<p>The plane's demonic inhabitants include ekolids, and primeval demonic insects.</p>";
        $sub->ruler()->associate(God::where('name', 'Tharzax')->firstOrFail());
        $sub->save();

        /**********************************************************************/

        // Locations: https://forgottenrealms.fandom.com/wiki/Pazunia

        // 3rd: (The Forgotten Land) Zzyczesiya
        // 4th: (The Grand Abyss)
        // 5th: (Wormblood)
        // 6th: (Realm of a Million Eyes) Great Mother
        // 7th: (The Phantom Plane) Sess'innek
        // 8th: (The Skin-Shredder) Volisupula
        // 9th: (Buringwater)
        // 10th: (That Hellhole)
        // 11th: (Molrat)
        // 12th: (Twelvetrees)
        // 13th: (blood Tor)
        // 14th (The Steaming Fen)
        // 17th: (Death's Reward) Abraxas
        // 21st: (The Sixth Pyre) Ansitif
        // 23rd: (The Iron Wastes) Kostchtchie
        // 27th: (Malignebulia) Lissa'aere
        // 32nd: (Sholo-Tovoth) Turaglas
        // 45th, 46th, 47th: ((Rauwend, Shadowsky, Voorz'zt) The Triple Realm) Graz'zt
        // 48th: (Skeiqulac)
        // 49th: (Shaddonon) Lady Rhyxali
        // 52nd: (Vorganund)
        // 53rd: (Phage Breeding Grounds) Urae-Naas
        // 57th: (Torturous Truth) Alvarez
        // 65th, 66th: ((Court of the Spider Queen, The Demonweb Pits)) Lolth
        // 67th: (The Heaving Hills) Varrangoin
        // 68th: (The Swallowed Void)
        // 69th: (Gibbering Hollow) Ollomegh
        // 70th: (The Ice Floe)
        // 71st: (Spirac)
        // 72nd: (Darklight) Nocticula
        // 73rd: (The Wells of Darkness)
        // 74th: (Smaragd) Merrshaulk, Ramenos, Sseth
        // 77th: (The Gates of Heaven) Munkir, Nekir
        // 79th: (The Emesssu Tunnels) Anarazel
        // 81st: (The Blood Shallows)
        // 88th: (The Gaping Maw) Demogorgon
        // 89th: (The Shadowsea) Dagon
        // 90th: (The Guttering Grove) Ilsidahur
        // 92nd: (Ulgurshek) Ulgurshek
        // 100th: (The Barrens)
        // 111st: (The Mind of Evil) Sch'thrruppasstt
        // 113rd: (Thanatos) Orcus
        // 128th: (Slugbed) Lupercio
        // 137th: (Outcasts' End) Azazel
        // 142nd: (Lifebane) Chemosh
        // 176th: (Hollow's Heart) Fraz-Urb'luu
        // 177th: (Writhing Realm) Ugudenk
        // 191st: (Fountain of Screams)
        // 193rd: (Vulgarea) Eshebala
        // 222nd: (Shedaklah) Juiblex[Ghaunadaur]
        // 223rd: (Offalmound) Moander[Zuggtmoy]
        // 230th: (The Dreaming Gulf)
        // 241st: (The Scalding Sea)
        // 248th: (The Hidden Layer) Eltab
        // 274th: (Durao)
        // 277th: (Belistor) Yrsillar
        // 300th: (Feng-Tu) Tou Mu
        // 303rd: (The Sulfanorum)
        // 313th: (Gorrion's Grasp)
        // 333rd: (The Broken Scale) Hiddukel
        // 340th: (The Black Blizzard)
        // 348th: (Indifference)
        // 359th: (The Arc of Eternity) Eldanoth
        // 377th: (Plains of Gallenshu)
        // 380th: (Hungry Tarns) Sertrous
        // 399th: (Worm Realm) Urdlen
        // 400th: (Woeful Escarand) The Lords of Woe
        // 403rd: (The Rainless Waste)
        // 421st: (The White Kingdom) Doresain
        // 422nd: (Death Dells) Yeenoghu
        // 423rd: (Galun-Khur)
        // 452nd: (Ahriman-abad) Ahrimanes
        // 471st: (Androlynne) Pale Night
        // 480th: (Guttlevetch) Zuregurex
        // 487th: (Lair of the Beast and Mansion of the Rake) Kanchelsis
        // 489th: (Noisome Vale)
        // 493rd: (The Steeping Isle) Siragle
        // 499th: (Carroristo)
        // 503rd: (Torremor) Lamashtu
        // 507th: (Occipitus)
        // 518th: (Melantholep)
        // 519th: (March of the Pierced Men)
        // 524th: (Shatterstone) Vaprak
        // 528th: (Molor) Shedaklah
        // 531st: (Vudra) Shaktari
        // 548th: (Garavond) Haagenti
        // 550th: (Forest of Living Tongues)
        // 558th: (Fleshforges) Dwiergus
        // 566th: (Soulfreeze) Aseroth
        // 570th: (Shendilavri) Malcanthet
        // 586th: (Prison of the Mad God) Diinkarazan
        // 587th: (Goranthis) Socothbenoth
        // 600th: (Endless Maze) Baphomet
        // 601st: (Conflagratum) Alzrius
        // 628th: (Vallashan)
        // 643rd: (Caverns of the Skull) Kali
        // 651st: (Nethuria) Vucarik
        // 652nd: (The Rift of Corrosion)
        // 663rd: (Zionyn) Obox-ob
        // 665th: (The Void)

        // https://forgottenrealms.fandom.com/wiki/Layers_of_the_Abyss
    }
}
