m4_include(`base.m4')m4_dnl
m4_include(`general.m4')m4_dnl
DocStart
AHeader(`GalaxyNG User Manual')
BodyStart
m4_include(`mannavigator.m4')m4_dnl
<!-- $Id$ -->

ATitle(`GalaxyNG Manual')

ASection(`Rules for Galaxy Next Generation release-5-1a (Oct 2001)')

<P>Written by Frans Slothouber (gumpu) and edited by Chris Shaffer (christhecat).  Based on the rules for Galaxy V3.52: Copyright 1991-1992 by Russell Wallace, Copyright 1993 the Galaxy PBeM Development Group.  (ALink(`license.html', `License'))</P>

www_section(`toc', `Table of Contents')

m4_include(toc.html)

www_section(`intro', `Introduction')

<P>GalaxyNG is a multiplayer game of interstellar war.  Each player is the leader of one race.  The objective of the game is to conquer the galaxy.</P>

<P>Players email a GalaxyNG server to ALink(`#register', `register') for games, submit ALink(`#orders', `orders') and receive ALink(`#reports', `turn reports').  The server automatically processes turns and responds to player email.  Most games run one to five ALink(`#turns', `turns') per week.  The Game Master (GM) maintains the server, selects game options, creates the galaxy, answers player questions and solves problems.</P>

<P>The area of the galaxy in which the game is played is a square (for the sake of simplicity the third dimension is ignored) which contains a number of habitable planets.  Each race starts off occupying one or more planets which can build ships, conduct technology research, produce capital or produce materials.  Ships are used to explore, colonize uninhabited planets, haul cargo and conquer planets inhabited by other races.  Technology improvements allow ships to fly faster and farther, fight better and haul more cargo.</P>

<P>Game units relate to real units as follows:  Distances are measured in light-years.  Each game unit of population represents 10 million people and each game unit of goods or raw materials represents about 10 million tons.  Each game turn represents about four years of time.</P>

www_subSection(`names', `Names')

<P>Races, planets and ship types can be named.  Names may be no more than 20 characters (a character is a letter, digit, or underscore) and may not include spaces.  Each player should ALink(`#ordc', `provide a name') by which their race will be known, e.g. Mutant_Camels or Zzyaxians - if this is not done they will simply be known by number, e.g. Race_4 or Race_5.  Ship types are given names when ALink(`#ordd', `designed') and can be ALink(`#ordt', `renamed').  Planets are numbered at the start of the game and can be ALink(`#ordn', `renamed') by their current owner.</P>

www_subSection(`war', `War and Alliances')

<P>At the start of the game all races are assumed to be at war with all the other races (except in team games).  ALink(`#orda', `Alliances') may be declared at the beginning of any turn.  Ships will not initiate combat with allied ships, nor will they bomb allied planets.  However, there is no way to tell if the allied race has also declared an alliance until warships are encountered.  Ships will always shoot back if fired on (battles will be fought just as if both sides were at war with each other; declaring an alliance puts warships at no disadvantage in combat).  Having declared an alliance, ALink(`#ordw', `war') may be declared again at the start of any subsequent turn and vice versa.</P>

www_subSection(`victory', `Victory and Defeat')

<P>The game can be won by a single race or by an alliance of races, depending upon the game settings.  Races are ranked based on the total production of their planets.  A race is eliminated if it owns no planets and has no ships.  The game is complete when all surviving players agree to end it and notify the game master.</P>

www_section(`ships', `Ships')

<P>Ships are organized into groups and fleets which are used for exploration, scouting, attack, defence and cargo transport.  Ships have the following characteristics: ship type (name, drive mass, attacks, weapons mass, shields mass, cargo mass and ship mass), group number, fleet name, drive technology, weapons technology, shields technology, cargo technology, cargo carried type, cargo carried mass, destination planet, and distance to destination planet.  Ships can be ALink(`#ordp', `built') at planets.</P>

www_subSection(`shiptypes', `Ship Types')

<P>Each player can ALink(`#ordd', `design') ship types, which are unique to that player, by specifying:</P>

<UL>
  <LI>Name - ship type</LI>
  <LI>Drive mass - the power of the hyperdrive engines</LI>
  <LI>Attacks - the number of guns</LI>
  <LI>Weapons mass - the strength of the gun(s)</LI>
  <LI>Shields mass - the power of the shields generator</LI>
  <LI>Cargo mass - the size of the cargo bay</LI>
</UL>

<P>Drive mass, weapons mass, shields mass, and cargo mass must equal 0 or be equal to or greater than 1.  Thus, drive mass 0.00 and 1.50 are allowed but drive mass 0.75 is not.  Attacks must be an integer.</P>

<P>Some example ship types are:<P>

<PRE>
  Name              D    A     W      S      C
  Drone            1.00   0   0.00   0.00   0.00
  Flak             1.00   0   0.00   2.00   0.00
  FastFlak         1.01   0   0.00   1.01   0.00
  Fighter          2.48   1   1.20   1.27   0.00
  Gunship          4.00   2   2.00   4.00   0.00
  Destroyer        6.00   3   4.00   4.00   0.00
  Cruiser         16.50  30   1.50   9.75   0.00
  BattleCruiser   49.50  25   3.00   9.50   1.00
  Battleship      33.00   3  25.00  16.00   1.00
  BattleStation   99.00   1  50.00  49.00   0.00
  OrbitalFort      0.00  11  10.00  39.00   0.00
  SpaceGun         0.00   1   9.90   9.90   0.00
  Hauler           2.00   0   0.00   0.00   1.00
  Freighter       30.00   0   0.00   9.50  10.00
  MegaFreighter  120.00   0   0.00  38.43  39.57
</PRE>

<P>Ship types with zero or one attack have a ship mass of drive mass + weapon mass + shield mass + cargo mass.  Each additional attack beyond the first adds 50% of the weapons mass to the ship mass.  For example:</P>

<PRE>               D       W     Additional Weapons    S      C      Ship Mass
  Drone            1.00 +  0.00 +        0          +  0.00 + 0.00  =    1.00
  Flak             1.00 +  0.00 +        0          +  2.00 + 0.00  =    3.00
  FastFlak         1.01 +  0.00 +        0          +  1.01 + 0.00  =    2.02
  Fighter          2.48 +  1.20 +        0          +  1.27 + 0.00  =    4.95
  Gunship          4.00 +  2.00 + ( 1 *  2.00 * .5) +  4.00 + 0.00  =   11.00
  Destroyer        6.00 +  4.00 + ( 2 *  4.00 * .5) +  4.00 + 0.00  =   18.00
  Cruiser         16.50 +  1.50 + (29 *  1.50 * .5) +  9.75 + 0.00  =   49.50
  BattleCruiser   49.50 +  3.00 + (24 *  3.00 * .5) +  9.50 + 1.00  =   99.00
  Battleship      33.00 + 25.00 + ( 2 * 25.00 * .5) + 16.00 + 1.00  =   99.00
  BattleStation   99.00 + 50.00 +        0          + 49.00 + 0.00  =  198.00
  OrbitalFort      0.00 + 10.00 + (10 * 10.00 * .5) + 39.00 + 0.00  =   99.00
  SpaceGun         0.00 +  9.90 +        0          +  9.90 + 0.00  =   19.80
  Hauler           2.00 +  0.00 +        0          +  0.00 + 1.00  =    3.00
  Freighter       30.00 +  0.00 +        0          +  9.50 + 10.00 =   49.50
  MegaFreighter  120.00 +  0.00 +        0          + 38.43 + 39.57 =  198.00
</PRE>

www_subSection(`groups', `Groups')

<P>A race can have hundreds or even thousands of ships, which would be inconvenient to handle individually.  Hence ships are handled in groups, which can contain one or more ships all of the same type, in the same place, carrying the same quantity and type of cargo (if any) and built with the same technology levels.</P>

<P>Groups can be ordered to ALink(`#ords', `travel') to another planet, ALink(`#ordi', `intercept') other ships, ALink(`#ordh', `reverse') course, ALink(`#ordb', `break') off ships into a new group, ALink(`#ordj', `join') a fleet, Alink(`#ordb', `leave') a fleet, ALink(`#ordg', `upgrade') technology levels, ALink(`#ordl', `load') cargo, or ALink(`#ordu', `unload') cargo.  Groups may also be ALink(`#ordx', `scrapped').  Groups can also ALink(`#routes', `routed').</P>

<P>Each group is assigned a number, which is used to issue orders to ships in the corresponding group.  When new groups are created, they are assigned a number N+1, where N is the highest numbered group in existence.  Whenever a group number is required as an order parameter, the keyword MAX may be used instead. This will apply the order to the group with the highest group number, i.e. the most recently created group.</P>

<P>In several phases of the turn, groups containing identical ships, carrying identical cargo (if any), in the same place and in the same fleet (if applicable) will be merged using the lower group number.  For example, if group 5 containing 48 ships is merged with group 12 containing 52 ships, group 5 will contain 100 ships and group 12 will be eliminated.</P>

<P>If the SortGroups ALink(`#ordo', `option') is turned on, at the end of each turn groups will be automatically sorted and renumbered as follows: Owner's groups at owner's planets; Owner's groups at other race's planets; Owner's groups at uninhabited planets; Owner's groups in fleets</P>

www_subSection(`fleets', `Fleets')

<P>Fleets contain groups, allowing players to gather different ship types together in a single unit.  Many of the orders for groups can also be used for fleets.  Players can ALink(`#ordd', `create'), ALink(`#orde', 'erase'), Alink(`#ordj', `merge') and ALink(`#ordt', `rename') fleets.  Fleets can be ordered to ALink(`#ords', `travel') to another planet, ALink(`#ordi', `intercept') other ships, or ALink(`#ordh', `reverse') course.  The slowest group in the fleet sets the maximum speed for the entire fleet.</P>

<P>A group in a fleet that is given a ALink(`#ords', `send') or ALink(`#ordi', `intercept') order is automatically removed from the fleet.  Ships in a fleet that are ALink(`#ordb', 'broken') from groups are also removed from the fleet.  Groups in fleets that are ordered to ALink(`#ordg', `upgrade'), ALink(`#ordl', `load') or ALink(`#ordu', `unload') cargo remain in the fleet.  Groups in fleets will not travel on ALink(`#routes', `routes').</P>

www_section(`tech', `Technology')

<P>Technology determines the effectiveness of ships.  There are four technologies: drive, weapons, shields and cargo.  Each race begins the game with 1.00 levels in each technology.  Technology can be increased by ordering planets to conduct ALink(`#ordp', `research').</P>

<P>A ship with drive technology 4.00 is twice as fast as an equivalent ship with drive technology 2.00, a ship with weapons technology 1.50 has a 50% more powerful attack than the same ship with weapons technology 1.00, and so forth.  Ships without a component are considered to have a matching technology of 0.  For example, a ship with weapons mass 0 is consdered to have weapons technology 0.</P>

www_Section(`move', `Movement')

<P>Ships are equipped with hyperspace drives, except ships with a drive mass of zero which remain forever at the planet where they were built.  Hyperspace travel is only possible from one concentration of mass to another, i.e. from one planet to another.  Ships can only travel at maximum speed in hyperspace, unless they are part of a fleet.  When ships enters hyperspace, no time passes for the ship or those on board; a ship in hyperspace can only go forward or reverse and cannot participate in combat.  ALink(`#ords', `Send'), ALink(`#ordi', `intercept') and ALink(`#ordh', `reverse') orders can be issued to groups and fleets to move them between planets.</P>

www_Section(`speed', `Speed')

<P>Ships move a number of light years per turn according to the following formula:  Light years travelled = 20 * drive technology level * (drive mass / (ship mass + cargo carried mass)).</P>

<P>Note that unless your drive technology is very high, large ships should have correspondingly large drives or they will be very slow.  On the other hand the fastest ships you can possibly build (all numbers except drive mass being zero in the design) can only travel at a speed of 20 times your drive technology.  For example, using the ship types above and assuming drive technology 1.00 carrying no cargo:<P>

<PRE>
                 20 * Drive Tech * (Drive Mass / Ship Mass) = Light Years
  Drone          20 *    1.00    * (    1.00   /   1.00   ) =    20.00
  Flak           20 *    1.00    * (    1.00   /   3.00   ) =     6.66
  FastFlak       20 *    1.00    * (    1.01   /   2.02   ) =    10.00
  Fighter        20 *    1.00    * (    2.48   /   4.95   ) =    10.02
  Gunship        20 *    1.00    * (    4.00   /  11.00   ) =     7.27
  Destroyer      20 *    1.00    * (    6.00   /  18.00   ) =     6.66
  Cruiser        20 *    1.00    * (   16.50   /  49.50   ) =     6.66
  BattleCruiser  20 *    1.00    * (   49.50   /  99.00   ) =    10.00
  Battleship     20 *    1.00    * (   33.00   /  99.00   ) =     6.66
  BattleStation  20 *    1.00    * (   99.00   / 198.00   ) =    10.00
  OrbitalFort    20 *    1.00    * (    0.00   /  99.00   ) =     0.00
  SpaceGun       20 *    1.00    * (    0.00   /  19.80   ) =     0.00
  Hauler         20 *    1.00    * (    2.00   /   3.00   ) =    13.33
  Freighter      20 *    1.00    * (   30.00   /  49.50   ) =    12.12
  MegaFreighter  20 *    1.00    * (  120.00   / 198.00   ) =    12.12
</PRE>

<P>Note that, when fully loaded, cargo ships can be much slower.  For example, assuming drive technology 1.00 and cargo technology 1.00:</P>

<PRE>
  Hauler         20 * 1.00 * (2.00/(3.00+1.10)) = 9.75
  Freighter      20 * 1.00 * (30.00/(49.50+20.00)) = 8.63
  MegaFreighter  20 * 1.00 * (120.00/(198.00+196.14)) = 6.09
</PRE>

www_subSection(`locate', `Locating Ships')

<P>Each race's administrative staff will keep a record of its own ships on planets or in hyperspace.  Planet owners have full knowledge of all ships orbiting their planets.  Players also receive complete reports on ships at planets visited by their own ships.</P>

<P>Locating alien ships in hyperspace is much more problematic.  Detectors to accurately locate the position of alien ships in hyperspace are installed on each planet.  Accurate readings of mass, speed, origin and distance from destination can only be obtained for ships heading directly toward a detector (i.e. inbound to a planet).  A rough indication of the location of other alien groups is indicated on the ALink(`#ordm', `map'), but their mass, speed and direction of travel are unknown.</P>

www_section(`planets', `Planets')

<P>Planets are located in the galaxy by X and Y coordinates.  Planets have seven characteristics: owner, size, population, industry, natural resources, production and stockpiles.</P>

www_subSection(`owner', `Owner')

<p>Inhabited planets are owned by one race at a time (except in the special case of a ALink(`#conquest', `standoff') when an inhabited planet is unowned).  Uninhabited planets are not owned by any race.</P>

www_subSection(`size', `Size')

<P>Planets vary in size from 0.01 to 1000.00.  The size of a planet reflects the habitability of the terrain, the suitability of the climate for agriculture, and other features.  At the beginning of the game, the galaxy is divided into inhabited planets (home planets), development planets (size 200.00 to 1000.00) and stuff planets (size 0.01 to 200.00).</P>

www_subSection(`pop', `Population')

<P>Each planet has a population, which can never be higher than the planet's size but may be lower.  A planet with 0 population is uninhabited.  Home planets are fully populated at the beginning of the game.  A planet's population grows by 8% each turn.  Population increases beyond the planet's size are converted into colonists.  These are people stored in containers in deep freeze.  Every 8 extra population units are converted into 1 unit of colonists.</P>

www_subSection(`ind', `Industry')

<P>Each inhabited planet has industry, which may not be greater than the planet's population but may be lower.  If population exceed industry, the industry may be increased by capital.  If there is not an existing stockpile of capital, it may be produced at the planet or be shipped in from another planet by cargo ships.  For example, if a size 500 planet with 500 population and 200 industry produces 75 units of capital, the industry will increase to 275.  If a size 500 planet with 200 population and 200 industry has a stockpile of 100 capital, on the following turn the population and industry will both increase to 216 and there will be 84 units of capital left (because population grows by 8% per turn).</P>

www_subSection(`res', `Natural Resources')

<P>Each planet has a natural resources value which indicates how rich it is in metals, coal, oil, wood and other products.  Planets high in natural resources can easily produce materials such as sheet steel, copper wire and plastics.  Home planets have a natural resources value of 10.00.  Other planets have a natural resources value between 0.01 and 10.00 with the average being 1.00.  The natural resources value equals the number of units of materials that will be produced per point of production devoted to the task.  A planet with 5.00 natural resources will produce 5.00 units of materials per point of production, while a planet with 0.10 natural resources would only produce 0.10 units of materials.  Materials are necessary to produce ships and capital.  Each planet may have a stockpile of materials and if present this will be used.  If no stockpile exists, some production points will be diverted to producing materials.</P>

www_subSection(`produce', `Production')

<P>The productive capacity of a planet is determined mostly by its industry value and partly by its population.  Each point of industry on a planet yields one production point, and every 4 points of population over and above industry yields an additional production point.  The formula is: Production = Industry + ((Population - Industry)/4).  A planet with 500.00 industry and 500.00 population has a production value of 500.00, while a planet with 250.00 industry and 500.00 population has a production value of 312.50.  Production points can be spent on researching technology, building ships, producing capital or producing materials.  Planets can only perform one type of production each turn.</P>

<P>A planet can research one of the four technologies.  It costs 5,000 production points to increase Drive, Weapons, or Shields technology by one point.  Cargo technology research is 50% cheaper, thus it only takes 2,500 production points to increase the Cargo technology by one point.  Fractional increases are effective immediately (e.g. if you spend 500 production points on research into Weapons, your Weapons technology will go up by one tenth of a point).</P>

<P>A planet can produce ships.  The production cost of a ship is equal to its mass times 10.  In addition, one unit of materials is required for every ten units of production.</P>

<PRE>               Mass  Production  Materials
  Drone             1.00     10.00       1.00
  Flak              3.00     30.00       1.00
  FastFlak          2.02     20.20       2.02
  Fighter           4.95     49.50       4.95
  Gunship          11.00    110.00      11.00
  Destroyer        18.00    180.00      18.00
  Cruiser          49.50    495.00      49.50
  BattleCruiser    99.00    990.00      99.00
  Battleship       99.00    990.00      99.00
  BattleStation   198.00   1980.00     198.00
  OrbitalFort      99.00    990.00      99.00
  SpaceGun         19.80    198.00      19.80
  Hauler            3.00     30.00       3.00
  Freighter        49.50    495.00      49.50
  MegaFreighter   198.00   1980.00     198.00
</PRE>

<P>For example: If a planet with 1000.00 production and 10.00 resources with no stockpile of materials was producing Drones, it would produce slightly over 99 per turn.  About 9.9 production would be diverted to producing 99 materials to build the probes.  However, if it was producing Cruisers, it would only produce two per turn.  A planet with 750 production and 10.00 resources with no stockpile of materials would produce 1.5 Cruisers per turn.</P>

www_subSection(`stock', `Stockpiles')

<P> 
When colonists from a planet's stockpile are shipped to other planets
which still have room for population growth, they are automatically
thawed out and added to the planet's population.  This is how
uninhabited planets are colonized.  (Note that colonist production is
completely automatic, and consumes no production points.)  </P>

<P> A planet's industry level is increased by the production of
capital goods.  These represent things like machine tools, computers
and transport vehicles.  To produce one unit of capital requires 5
production points and 1 unit of raw materials.  If the planet's
industry level is below its population it will then be increased by
one unit.  Otherwise the capital units will be stockpiled.  If shipped
to a planet whose industry level is below its population, that
planet's industry level will be increased.  This is useful for quickly
building up the economy of a colony planet. </P>

www_Section(`cargo', `Cargo')

<P> 
The amount of cargo a ship can carry is determined by the
following formula: 
</P>

<PRE>
	cargo-technology * (cargo-number + cargo-number^2/10)
</PRE>

<P>
where "cargo-technology" means the cargo technology at which
the ship was built, and "cargo-number" is determined in the ship
design.  
</P>

<P>
So, at cargo technology level 1, some examples would be:
</P>

<TABLE >
<TR><TH>Cargo Number</TH><TH>Amount Carried</TH></TR>
<TR><TD>1</TD><TD>1.1</TD></TR>
<TR><TD>5</TD><TD>7.5</TD></TR>
<TR><TD>10</TD><TD>20</TD></TR>
<TR><TD>50</TD><TD>300</TD></TR>
<TR><TD>100</TD><TD>1100</TD></TR>
</TABLE>

<P>
At cargo technology level 2, these quantities would be
doubled, and so on.  Note that large freighters can carry very
large quantities of cargo, but if fully loaded are likely to be
slow (e.g.  a fully loaded Megafreighter at drive and cargo
technology 1 would have a speed of only 1.22 light years per
turn). 
</P>

<P>
The slow speed of heavily loaded ships can be alleviated by
higher levels of cargo technology, however.  At tech level 2,
the mass of any cargo loaded onto a ship is only considered to
be half as much as normal, for purposes of calculating ship
speed and shields dilution (see "Combat" below).  At tech level
3, the mass is divided by 3 and so on.  So, a Freighter from the
example ship types can carry 20 units of cargo at tech level 1.
At tech level 2, it could carry 40 units, but these would only
slow it down as much as 20 units at tech level 1; thus, a tech
level 2 freighter loaded with 40 units of raw materials can
travel as fast (assuming the same drive technology) as a tech
level 1 freighter loaded with 20 units.  
</P>

<P>
A ship may only carry one type of cargo at one time.  The
possible types are raw materials, capital and colonists.  Cargo
may be loaded onto a ship at a planet where it is available.
Cargo may be unloaded onto any planet.  
</P>

www_subSection(`routes', `Routes')

<P>
To move cargo between planets you can use a route instead of
doing it manually.  A route from planet A to B for a particular
cargo type means that the computer will try to get that type of
cargo from planet A to planet B using all available transport
ships.  So once the route is set up, any empty ships at planet A
each turn will be loaded with cargo (if any of that type is
present on planet A) and sent to planet B.  Any ships at planet
A which already are loaded with the appropriate type of cargo
will also be sent to planet B.  Any ships which arrive at planet
B carrying that type of cargo (even if they didn't come from
planet A) will be automatically unloaded.  
</P>

<P>
You can set up a total of four routes from each planet that
you own, one for each of the three kinds of cargo and one for
empty transports which is useful for returning transports from
resource consuming planets to resource producing planets.  You
can only set up routes from planets that you own but you can set
up routes to any planet at all, so you can use them for shipping
colonists to uninhabited planets.  Routes are assigned transport
ships in the following order of priority:  colonists, capital,
materials and empty transports.  
</P>

www_section(`combat', `Combat')

<P>
Ships in hyperspace cannot be attacked but whenever hostile
warships are present at the same planet a battle will take
place.  This proceeds as follows:  
A battle consists of a number of rounds.
In each round the following steps are repeated until all ships have fired.
<OL>
<LI>Randomly select a ship (attacker) from all the surviving ships that  
    have not fired yet.</LI>
<LI>For each gun on the ship:
  <OL><LI>Randomly select a ship (target) from all the ships of the enemies 
          of the owner of the ship that is about to fire.</LI>
      <LI>Let the attacker fire on the target</LI>
  </OL>
</LI>
</OL>
</P>
<P>
Note that if a ship gets destroyed before it gets a chance to fire it will
not fire.
</P>

<P>Battle rounds continue until the battle is either a draw or a win.
A battle is a draw if:</P>
<OL>
<LI>there there are two or more players left that are at war with 
    eachother.</LI>  
<LI>One or more players have armed ships left, but  
    none of these ships have guns big enough to penetrate the shields of
    the ships of their enemies. (see below)</LI>
</OL> 
<P>A battle is won if:</P>
<OL>
<LI>One or more players with ships are left.</LI>
<LI>All the players that are left are at peace with eachother.</LI>
</OL>
</P>

<P> The success of an attacker firing on a target is calculated as follows: 
The power of
the attack is equal to the Weapons number multiplied by the Weapons
tech level.  The power of the defense is equal to the Shields number
multiplied by the Shields tech level and divided by the diameter of
the target ship.  (A ship's diameter depends on the cube root of its
total mass).  This is because a large ship's shields will have a larger
area to protect and so be diluted and, other things equal, weaker.  A
ship with numbers 8 1 8 8 0 will have only 4 times the effective
shields strength of one with numbers 1 1 1 1 0, even though it has 8
times the Shields number.  (It might arguably be more realistic to
dilute shields as the 2/3 power of the ship mass, but this would make
large ships too vulnerable.)  </P>

<P> Note that any cargo carried adds to the total mass for purposes of
shields strength calculation, as the shields generator must protect the
cargo as well as the ship.  Thus, the "total mass" of the ship for
purposes of calculating shields strength is the same as the "total
mass" for purposes of calculating speed.  (This means that a freighter
loaded with a given amount of cargo will have its shields strength
diluted less if it has higher cargo technology.)  </P>

<P> The numbers are calculated so that if a ship with numbers 10 1 10
10 0 fires at an identical ship, it will have a 50% chance of
destroying the target.  If the effective attack is four times as
strong, the attack will always succeed.  If the effective defense is
four times as strong, the attack will always fail.  The exact formula
is: </P>

<PRE>
  Eff_Weapons = Weapons_Mass * Weapons Tech
  Eff_Shields  = Shields_Mass * Shields Tech / mass^(1/3) * 30^(1/3)
                    
  p[kill] = (log[4](Eff_Weapons / Eff_Shields) + 1) / 2
         
  Where log[4](x)  is the log with base 4 of x, which
  can be computed with log(x)/log(4).
</PRE>

www_subSection(`conquest', `Conquering Planets')

<P> If an armed ship is left at one of an enemy race's planets after
all fighting has been done, it will bomb the planet and wipe out 75%
of the population and industry (both population and industry are
reduced to 25% of their original value). The ownership of the planet
goes to the race that bombed the planet. This is how you conquer
planets occupied by another race.  </P>


<P> You will ask, who gets the planet when two friendly races have
ships above the same planet?  Normally this is the races that comes
first in the list with races (as shown in the turn report).  This is
unfair of course, allies will like to divide the planets they conquer
amongst each other.  This is possible though with the V command, that
allows a races to claim a planet. You use it to indicate that you
claim ownership of a planet when it is bombed. It of course only works
when you have ships left above the planet when it is bombed.  In case
2 or more races claim the same planet, nobody gets ownership over
the planet.  </P>

<P> There is one other special situation. This is when after battle,
both the owner of the planet, and the race(s) that attacked the
planet all have ships left, a so called standoff.  This can happen
when there are ships with small guns and big shields.  In this case,
the planet is bombed but nobody gets ownership over the planet.  </P>

www_section(`orders', `Orders')

www_subSection(`sendord', `Sending Orders')

<P> To enter orders for Galaxy, you should send a mail message
containing the following:  </P>

<PRE>
  #GALAXY &lt;gamename&gt; &lt;race-name&gt; &lt;password&gt;
  ...orders...
  #END
</PRE>

<P> The #GALAXY line should be in the body of the message, not in the
subject line.  It is very important to type this line correctly, as
otherwise all of your orders will be discarded. Everything before the
#GALAXY line or after the #END line in the message is ignored by the
program.  </P>

<P>As subject for the message use "orders" the server checks your
orders and send you a forecast of what your situation will be the
comming turn.  Replacement sets of orders may be sent anytime before
the deadline. The last set of orders received at the time of running
the turn is used.  </P>


www_subSection(`advanc', `Advance Orders')

<P> If you are away for a couple of days and are not able to send in
orders on those days, you can sent in advance orders. For this sent in
orders with as subject, "orders &lt;turn number&gt;".  Where the turn
number indictates the turn the orders are intended for.  The server
will store the orders (but not check them), and use them when the turn
runs.  </P>

<P>Be careful <STRONG>not</STRONG> to change your race name or
password, right before sending in advance orders. Since then your
advance orders will be rejected when the turn runs.</P>


www_subSection(`examor', `Example Set of Orders')

<P>Writing orders for the first time can be a daunting task,
so here is an example set of orders.</P>

<PRE>
  #GALAXY Jangi Nation_200 P981231231  
  ; Nation_200 and the password P981231231 are just an example,
  ; you can find the correct line at the begining of your turn 0 report.

  C Vogons         ; give your race a name
  N 67  Vogonia    ; Give your first home planet a name
                   ; notice that your home planet probably has a different
                   ; number. You can find it in the `Your Planets'
                   ; section of the report.
  N 111 Moon       ; Give your second home planet a name
  D Probe 1 0 0 0 0  ; Design a ship
  P 67 Probe       ; Have the ship produced at the first home planet
                   ; Notice that we still use the old name of the planet
                   ; as the name change won't go in effect until the next
                   ; turn.
  P 111 DRIVE      ; Have the other planet develop Drive technology
  #END
</PRE>


www_subSection(`orderformat', `Order Format')

<P>Each type of order is designated by giving a letter or keyword as
the first non-blank character on the line. The program only checks the
first letter, so you can either give a whole word or just the
letter. Parameters are given after this, separated by spaces or
tabs. Blank lines are permitted, as are comments; anything after a
semicolon on a line is treated as a comment and ignored.  (Messages
(see below) are an exception; semicolons in message text are treated
as part of the text rather than comments.)  </P>

<P> The parser is not case sensitive, so all commands, names etc. may
be given in upper case, lower case or a mixture of the two. However,
when supplying names containing spaces, the name must be surrounded by
double quotes, or else underscore characters must be used in place of
spaces in the name.  Examples of correct order lines:
</P>

<PRE>
  Send 100 "Zzyax Prime"
  send 100 zzyax_prime
  s 100 "zzyax prime"	; Attack the Zzyaxian homeplanet
</PRE>

<P>
Examples of incorrect order lines:
</P>

<PRE>
  Send 100 Zzyax Prime
  s 100 "zzyax prime"	Attack the Zzyaxian homeplanet
</PRE>

<P>The following sections show what orders are available.</P>


www_subSection(`ordat', `@ [race ...]')

<P> This command sends a message to one or more other players. All
lines between this line and the next one with an @ as its first
non-blank character are treated as message text. The to-whom parameter
should be a list of natio names separated by spaces. The message will
be sent to all of these, e.g.  </P>

<PRE>
  @ Zzyaxians "Mutant Camels"
  You are all a bunch of raving lunatics...
  @
</PRE>


<P> If no list of races is provided (or if a race name is provided
with no space between it and the @ sign - take care to avoid this),
the message will be sent to all races. The program does not
automatically sign your name, so you should sign it yourself unless
you wish the message to be anonymous.  </P>

www_subSection(`ordeq', `= &lt;your real name&gt;')

<P>Sets your real name. It is used for the Hall of Fame.  If you set
your real name, and are still around when the game ends you will be
awarded victory points. This information is only made available to the
GM and the maintainer of the Hall of Fame.</P>

<P>Use quotes cause your name will most likely include spaces, for
instance</P>
<PRE>
= "John Wayne"
</PRE>

www_subSection(`orda', `A &lt;race&gt;')

<P> Declare peace on another race.  </P>


www_subSection(`ordb', `B &lt;group&gt; &lt;number of ships&gt;')

<P> Break off a number of ships from a group.  </P>


www_subSection(`ordc', `C &lt;new name&gt;')

<P> Change the name of your race.  </P>

www_subSection(`ordd', `D &lt;type name&gt; &lt;drive&gt; &lt;attacks&gt; &lt;weapons&gt; &lt;shields&gt; &lt;cargo&gt;')

<P> Design a new ship type with the given numbers.  </P>


www_subSection(`orde', `E &lt;type name&gt;')

<P> Erase a ship type (only works if you have no ships of that type in
existence or being built).  </P>


www_subSection(`ordf', `F &lt;race&gt;')

<P> This gives the address of the indicated player. If there is no
address, this means that that position is either not being played, or
being played by the GM, or being played by someone who cannot be
contacted by email.  </P>

www_subSection(`ordg', `G &lt;group&gt; [number of ships]')

<P> Upgrade a group of ships. The group must be at one of your
planets, and must remain there during the turn long enough for the
upgrade to be performed; this means that it cannot be given a Send or
Intercept command that turn, though it may be automatically sent on a
route, as this happens later in the turn. Ships in the group will be
upgraded to the latest technology levels as of the start of the
current turn (if they are already at the latest tech levels, nothing
will happen). The cost of upgrading a ship is equal to a fraction of
the cost of building a new one; for example, if the ship is currently
at 2/3 of the latest tech levels, the cost of upgrading will be 1/3 of
the cost of building a new ship. (Effectively it will be even cheaper
than this, because upgrading uses no raw materials.) The exact formula
for the cost is: </P>

<PRE>
10 * ((1 - ship-drive-tech/current-drive-tech) * ship-drive-mass +
      (1 - ship-weapons-tech/current-weapons-tech) * ship-weapons-mass +
      (1 - ship-shields-tech/current-shields-tech) * ship-shields-mass +
      (1 - ship-cargo-tech/current-cargo-tech) * ship-cargo-mass)
</PRE>

<P> If the number-of-ships parameter is given (even as 0 to explicitly
specify the entire group), exactly that many ships will be upgraded,
even if only enough production points are available to do a partial
upgrade. If the parameter is omitted, only as many ships will be
upgraded as can be fully upgraded. So if you have an expensive ship
which will cost more than a full turn's production to upgrade, you
must partially upgrade it the first turn, and issue another order next
turn to upgrade it again. (This is different from building expensive
ships, where a single production order will cause a planet to keep
working until told to stop.) Production points spent on upgrading
ships during a turn are deducted from that planet's production that
turn.  </P>

www_subSection(`ordh', `H &lt;group&gt;')

<P> Call back a group. This order can be used to call back groups that
have sent by mistake to a far away planet. It only works on groups
that need at least 4 more turns to arrive at their destination planet.
The group will return to the planet they departed from.  </P>


www_subSection(`ordi', `I &lt;group&gt; &lt;planet&gt; [number of ships]')

<P>Order your group to intercept alien ships at another planet. With
this command, you specify one of your groups, and a target
planet. Typically there will be an alien ship or fleet at the planet,
which you want your group to attack and destroy. However if you use an
ordinary "Send" order, the alien fleet may leave the target planet on
the same turn, so your group would arrive to find it gone.  With the
Intercept order, if alien ships leave the target planet that turn,
your group will be sent towards whatever planet has the largest total
mass of alien ships <b>sent</b> to it from the target planet, except
that only planets which your group can reach in no more than two turns
will be considered. Otherwise your group will be sent to the target
planet itself.  </P> 

<P> In the intercept case the mass of ships left at the named planet
is ignored.  The command only looks at the outgoing mass. So if a
player has a big fleet at a planet, and send one probe from that
planet, you will follow the probe.  </P>


www_subSection(`ordl', `L &lt;group&gt; &lt;cargo type&gt; [number-of-ships] [AMOUNT &lt;amount&gt;]')

<P> Load a specific amount cargo onto a group of ships or a number of
ships in the group.  The amount parameter specifies the amount loaded
per ship. For any order you should make sure that you load at least
0.01 per ship, otherwise the order is refused.  For instance do not
try to load 1 colonists onto a group of 1000 <TT>1 0 0 0 1</TT> ships.
</P>


<P>The following cargo types are available: </P>

<TABLE >
<TR><TD>CAP</TD><TD>Capital</TD></TR>
<TR><TD>MAT</TD><TD>Materials</TD></TR>
<TR><TD>COL</TD><TD>Colonists</TD></TR>
</TABLE>


www_subSection(`ordm', `M &lt;x&gt; &lt;y&gt; &lt;size&gt;')

<P> Change the area covered by the map on your turn report. X and Y
are the coordinates of the top left corner of the map and size is the
size you want covered in light years, e.g. M 10 20 50 will give you a
map starting at (10,20) and 50 light years on a side. Useful for
zooming in on a particular area for greater detail or zooming out
again to get a wide picture. The position and size of the area covered
by the map is included in your turn report.  </P>

www_subSection(`ordn', `N &lt;old planet name&gt; &lt;new planet name&gt;')

<P>Change the name of a planet that you own.</P>

www_subSection(`ordo', `O &lt;option&gt;')


<P>Sets a game options.  You cannot set more than one option using one
O command, separate commands must be used. The following options are
currently available: </P>

<TABLE >
<TR><TH>Option</TH>
    <TH>Effect</TH>
    <TH>Default</TH>
</TR>

<TR><TD>Anonymous</TD>
    <TD>This prevents that your email address is 
        made available to other players.</TD>
    <TD>On</TD>
</TR>

<TR>
<TD>AutoUnload</TD>
<TD>Automatically unloads all cargo arriving at one of your planets. This
does not work at a planet occupied by another race.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>BattleProtocol</TD>
<TD>If you switch this option on you get an extra section for each battle
section. This section tells you which ship fired on which ship and
whether the ship survived. Can be used to analyse you battles, and
some turn viewers seem to use it to make animations of the battles.</TD>
<TD>Off</TD>
</TR>

<TR>
<TD>Compress</TD>
<TD>Your turn report is compressed (zipped) before
it is send. It is not always supported, so please ask the game master
for information before you turn it on.</TD>
<TD>Off</TD>
</TR>

<TR>
<TD>Gplus</TD>
<TD>You will receive your turn report in the format used
by Galaxy G+. A variation of Galaxy that is used in Russia.</TD>
<TD>Off</TD>
</TR>

<TR>
<TD>GroupForecast</TD>
<TD>
When you orders are being checked by the orders checker, you
will recieve a forecast on the position of your groups will have
the next turn.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>MachineReport</TD> 
<TD>If you switch this option on you will receive two
turn reports:  one in normal format, and one in a format that is easier
readable for a machine.  This machine report is still in ascii and human
readable though. It was coded by Chris Barbier.</TD>  
<TD>Off</TD>
</TR>


<TR>
<TD>PlanetForecast</TD>
<TD>When you orders are being checked by the orders checker, you
will recieve a forecast on the status that your planets will have
the next turn.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>ProdTable</TD>
<TD>Makes the `Ships In Production' table be displayed.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>RoutesForecast</TD>
<TD>When you orders are being checked by the orders checker, you
will recieve a forecast on the routes between your planets that will
exist the next turn.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>ShipTypeForecast</TD>
<TD>When you orders are being checked by the orders checker, you
will recieve a forecast on the ShipTypes that will be available
the next turn.</TD>
<TD>On</TD>
</TR>

<TR>
<TD>SortGroups</TD>
<TD>Sorts the groups with respect to planet order. All your groups at your
planets will be displayed first in planet order, then all your groups
at planets belonging to other races will be displayed in orders and
finally groups at unoccupied planets will be displayed. The group
number will be changed so that all groups are still numbered
logically.</TD>
<TD>On</TD>
</TABLE>


<P>
You can turn off options using by added a NO after the O, for instance:
</P>
<PRE>
  O NO sortGroups
</PRE>



www_subSection(`ordp', `P &lt;planet&gt; &lt;product&gt;')

<P> Set production for a planet.  Every time you change production,
production that was in progress is lost.  So if you built a mass 400
ship at you home planet, and decide to stop after 2 turns, you loose
2000 production points.  The following products can be produced: </P>
<TABLE > <TR><TD>CAP</TD><TD> Capital</TD></TR>
<TR><TD>MAT</TD><TD> Materials</TD></TR> <TR><TD>DRIVE</TD><TD> Drive
research</TD></TR> <TR><TD>WEAPONS</TD><TD> Weapons research</TD></TR>
<TR><TD>SHIELDS</TD><TD> Shields research</TD></TR>
<TR><TD>CARGO</TD><TD> Cargo bay research</TD></TR>
<TR><TD>type-name</TD><TD>Ships of the named type</TD></TR> </TABLE>


www_subSection(`ordq', `Q &lt;your race name&gt;')

<P> Quit the game. You must provide your race name as the parameter as
a safeguard to prevent Quit orders being issued accidentally.  </P>



www_subSection(`ordr', `R &lt;origin planet&gt; &lt;cargo type&gt; [destination planet]')

<P>
Set a route. The following cargo types are available:
</P>

<ul>
<LI><b>CAP</b> - Capital</LI>
<LI><b>MAT</b> - Materials</LI>
<LI><b>COL</b> - Colonists</LI>
<LI><b>EMP</b> - Empty transports</LI>
</ul>

<P> Specifying no destination planet indicates that an existing route
should be cancelled.  </P>


www_subSection(`ords', `S &lt;group&gt; &lt;planet&gt; [number of ships]')

<P> Send ships to a planet.  </P>


www_subSection(`ordt', `T &lt;type name&gt; &lt;new name&gt;')

<P> Change the name of a ship type.  </P>


www_subSection(`ordu', `U &lt;group&gt; [number-of-ships] [AMOUNT &lt;amount&gt;]')

<P> Unload a group's cargo onto the planet it's currently at.  At the
moment you unload colonist onto un uninhabited planet, you will become
the owner of that planet.  Capital and materials unloaded onto an
uninhabited planet will sit there until someone colonizes the planet.
The amount parameter specifies the amount to be unloaded per ship.
This should be at least 0.01.  </P>


www_subSection(`ordv', `V &lt;planet&gt;')

<P> Use this command to indicate that you claim ownership of a planet.
This command is of use when you and your allies jointly attack an
enemy and you want to divide the captures planets among eachother
(share the loot).  It only works if the race that claims the planet
has armed ships left after the battle.  In case one of your allies
cheat, that is in case 2 or more races claim the same planet, nobody
gets the planet.  </P>

www_subSection(`ordw', `W &lt;race&gt;')

<P> Declare war on another race.  </P>


www_subSection(`ordx', `X &lt;group&gt; [number-of-ships]')

<P> Scraps old spacecraft. The ships are converted into raw materials
which are deposited on the planet where the group is located (must be
at a planet, not in hyperspace). Any cargo the ships were carrying is
unloaded first. The command will not work if the ships are carrying
colonists or are over an alien planet.  </P>


www_subSection(`ordy', `Y &lt;passwd&gt;')

<P> Sets your password to passwd.  </P>


www_subSection(`ordz', `Z &lt;new address&gt;')

<P> Change the address to which your reports are sent.  </P>



www_subSection(`note', `Things to note')

<P>
All orders involving groups can take an optional last parameter giving
the number of ships to be used. If this parameter is given, the
indicated number of ships will be broken off into a separate group
first, and the order applied only to that separate group.
</P>

<P>
Keywords used as parameters to orders must be given precisely; unlike
order keywords they cannot be abbreviated (nor expanded). The
following keywords are used: CAP, MAT, COL, EMP, DRIVE, WEAPONS,
SHIELDS, CARGO, MAX.
</P>


www_subSection(`fleetorders', `Fleet Orders')

<P>
The following fleet orders are available:
</P>

<TABLE>
<TR><TD>B &lt;group&gt; FLEET</TD>
<TD>Remove Group groupno from it's current fleet</TD>
</TR>

<TR><TD>D FLEET &lt;fleet name&gt;</TD>
<TD>Create a fleet called fleetname</TD>
</TR>

<TR><TD>E &lt;fleet name&gt;</TD>
<TD>Disband Fleet fleet name.</TD>
</TR>

<TR><TD>I &lt;fleet&gt; &lt;planet&gt;</TD>
<TD>Intercept ships at planetname with Fleet fleetname.</TD>
</TR>

<TR><TD>J &lt;group&gt; &lt;fleet&gt; [number-of-ships]</TD>
<TD>Add Group groupno to Fleet fleetname. If it is currently with another
fleet it will be moved to the new fleet.</TD>
</TR>

<TR><TD>J &lt;fleet 1&gt; &lt;fleet 2&gt;</TD>
<TD>Merge fleet 1 into fleet 2 leaving fleet 1 empty.</TD>
</TR>

<TR><TD>S &lt;fleet&gt; &lt;planet&gt;</TD>
<TD>Send Fleet fleet to planet</TD>
</TR>

<TR><TD>T &lt;fleet&gt; &lt;new fleet name&gt;</TD>
<TD>Change the name of the fleet.</TD>
</TR>
</TABLE>

<P>
The following keyword is used: FLEET
</P>



www_section(`turns', `Turns')

<P>
The following sequence of events takes place when a turn is being run:
</P>
<ol>
<LI>
All orders except for renaming and upgrading orders (C, G, N and T)
are executed.
</LI>
<LI>
C, G, N and T orders are executed.
</LI>
<LI>
Hostile ships fight each other.
</LI>
<LI>
Ships bomb enemy planets.
</LI>
<LI>
Ships, which are assigned to routes are loaded and sent into
hyper space. 
</LI>
<LI>
Ships are sent on intercept orders.
</LI>
<LI>
Ships move through hyperspace.
</LI>
<LI>
Hostile ships fight each other again (new battles might be possible
after ships emerge from hyperspace).
</LI>
<LI>
Ships bomb enemy planets again.
</LI>
<LI>
Production takes place.
</LI>
<LI>
Ships, which are assigned to routes, unload their cargo.. 
</LI>
<LI>
Identical groups are merged.
</LI>
</ol>


www_section(`afewnotes', `A few things to note')

<P> When orders conflict, such as two players trying to unload
colonists onto an uninhabited planet simultaneously at the start of
the turn, whoever is first in the list of players will have his order
executed first and colonize the planet. In practice this does not
happen often enough to be relevant.  </P>

<P> A ship which takes several turns to build will be built with the
tech levels available at the start of the final turn.  </P>

<P> Because names are changed after other orders, entities which are
renamed in a turn must still be referred to by their old names for the
rest of that turn.  </P>

<P>The game engine stores numbers in double precision format but <strong>truncates</strong> values reported to players to two decimal places.  For example, drive technology 2.4389 will be reported as 2.43 and a ship designed with shields mass 18.11999999 will be reported as shields mass 18.11.  Note that galaxy size, planetary coordinates and planetary resources are the exceptions - a planet reported at 138.44,43.29 with 4.30 resources is actually at that location and will not be found at 138.4426,43.28934 with 4.3032 resources.  Negative numbers are not used in GalaxyNG.</P>

www_section(`inactive', `Inactivity')

<P> Inactivity, that is not sending in orders can cause you to be
expelled from the game.  You are allowed to miss a few turn, this to
make sure you are not kicked out when your internet provider goes
down, or if you are on holidays for a few days.  However not sending
in orders, (even empty orders will do), for more than a few turns is
not allowed.<P>

<P>
You are not allowed to miss the first turn. If you do not send in
orders for turn 1, you are automaticaly removed from the game.  This
is to weed out players that sign-up for a game but then never play.
</P>

<P> During the first 10 turns you are not allowed to miss
more than 2 turns in a row. If you do so you are expelled from the
game and your empire (complete with ships and population is removed
from the game).</P>

<P>After turn 10 you are not allowed to miss more than 5
turns in a row. If you do, you are expelled from the game, your empire
continues to exists however. And without a leader it will be an easy
prey for other races to feast on.</P>


www_section(`reports', `Turn Reports')

<P>After each turn runs you will receive a turn report with information
on the state of your race. If you don't play in a game yet,
you might want to look at some example reports at
ALink(`http://galaxy.pbem.net/example.html', 
    `http://galaxy.pbem.net/example.html'). 

<P> Your turn report will contain some or all of the following
sections: </P>

www_subSection(`repopt', `Your Options')

<P> A list with all the options that are available. It shows if you
have switched an option on or off.  
To switch options on or off use the ALink(`ordo', `O order').
</P>


www_subSection(`repmes', `Messages')

<P>Messages from other players. You can send your own messages
by using the ALink(`#ordat', `@ command')</P>


www_subSection(`repmis', `Mistakes')

<P>Any mistakes in your orders.</P>


www_subSection(`repstat', `Status of Players')

<P>This is the current status of all players in the game; the following
information is provided:</P>

<ol>
<LI>Name</LI>
<LI>Drive Technology</LI>
<LI>Weapons Technology</LI>
<LI>Shields Technology</LI>
<LI>Cargo Technology</LI>
<LI>Total Population</LI>
<LI>Total Industry</LI>
<LI>Number of Planets Owned</LI>
<LI>Diplomatic Relations</LI>
</ol>


www_subSection(`repyst', `Your Ship Types')

<P>
This is a list of your ship types; the following information is provided:
</P>
<ol>
<LI>Name</LI>
<LI>Drive</LI>
<LI>Attacks</LI>
<LI>Weapons</LI>
<LI>Shields</LI>
<LI>Cargo</LI>
<LI>Mass, the total mass of a ship of this type</LI>
<LI>Speed, the speed of a ship of this type</LI>
<LI>Def, the effective shields of a ship of this type</LI>
</ol>
<P>
Mass, speed, and def, are computed for techlevels of 1,1,1,1.
</P>


www_subSection(`repast', `Alien Ship Types')

<P> This is a description of each type of alien ship that you have
come into contact with this turn; the information provided is the same
as for your ship types.  </P>


www_subSection(`repbat', `Battles')

<P>This is a description of all the battles that you have fought or
witnessed this turn. For each battle, a list of groups belonging to
each player is given. The following information is provided: </P>

<ol>
<LI>Number of Ships</LI>
<LI>Ship Type</LI>
<LI>Drive Technology</LI>
<LI>Weapons Technology</LI>
<LI>Shields Technology</LI>
<LI>Cargo Technology</LI>
<LI>Cargo Type (a "-" means that the group is carrying no cargo)</LI>
<LI>Cargo Quantity Per Ship</LI>
<LI>Ships Left (survivors after the battle)</LI>
</ol>


www_subSection(`repbp', `Battle Protocol')

<P> Tels you which ships fired on which ship and whether the ship
survived.  You only get this when you switch on the option
BattleProtocol.  </P>


www_subSection(`repbom', `Bombings')


<P>This is a list of all the planets that you have observed being
bombed this turn. The following information is given:</P>

<ol>
<LI>Who bombed the planet</LI>
<LI>Owner</LI>
<LI>Planet Name</LI>
<LI>Population</LI>
<LI>Industry</LI>
<LI>Producing (capital, raw materials, research or ships)</LI>
<LI>Capital Stockpiled</LI>
<LI>Material Stockpiled</LI>
<LI>Colonists Stockpiled</LI>
</ol>

<P>
(Obviously, most of this data is from just *before* the planet was bombed.)
</P>


www_subSection(`repmap', `Map')

<P> This is a map of all or part of the galaxy. Symbols on the map
have the following meanings:</P>

<ol>
<LI>*  - Your Planet</LI>
<LI>o  - Uninhabited Planet</LI>
<LI>+  - Alien Planet</LI>
<LI>.  - Your Ships</LI>
<LI>-  - Alien Ships</LI>
</ol>


www_subSection(`repigr', `Incoming Groups')

<P> This is a list of all the groups of alien ships currently heading
for planets owned by you. The following information is provided: </P>

<ol>
<LI>Origin (which planet the group came from)</LI>
<LI>Destination (which planet the group is heading towards)</LI>
<LI>Distance Remaining</LI>
<LI>Speed</LI>
<LI>Total Mass</LI>
</ol>


www_subSection(`repypl', `Your Planets')

<P> This is a list of all the planets that you own. The following
information is provided: </P>

<ol>
<LI>Name</LI>
<LI>X Coordinate</LI>
<LI>Y Coordinate</LI>
<LI>Size</LI>
<LI>Population</LI>
<LI>Industry</LI>
<LI>Natural Resources</LI>
<LI>Producing (capital, raw materials, research or ships)</LI>
<LI>Capital Stockpiled</LI>
<LI>Material Stockpiled</LI>
<LI>Colonists Stockpiled</LI>
<LI>The Effective Industry</LI>
</ol>


www_subSection(`repsip', `Ships In Production')

<P> This provides you will a list of ships in production with the
total cost to produce such a ship (including cost to produce any
materials required) and the production that has gone into producing
the next one of those ships. It will be displayed as follows: </P>

<ol>
<LI>Planet</LI>
<LI>Ship Type</LI>
<LI>Cost to Produce</LI>
<LI>Production Already Used</LI>
</ol>

<P>This table is displayed when the ProdTable option is set.  </P>


www_subSection(`reproute', `Your Routes')

<P> This is a list of the routes from those of your planets which have
routes defined. For each planet, the destination planet is listed for
the following commodities: </P>

<ol>
<LI>Capital</LI>
<LI>Raw Materials</LI>
<LI>Colonists</LI>
<LI>Empty Transports</LI>
</ol>

<P> A "-" for a particular commodity means that no route is defined
from that planet for that commodity.  </P>


www_subSection(`repapln', `Alien Planets')

<P> This is a list of all those planets owned by another player, at
which you have at least one ship and which you can therefore
observe. The same information is provided as for your planets.  </P>


www_subSection(`repuinpl', `Unidentified Planets')

<P> This is a list of those planets owned by another player, which
appear on your map but which you cannot observe. Only the name of the
planet and the X and Y coordinates are available. (Occasionally, due
to roundoff errors, a planet will appear at the edge of the map but
not be listed, or vice versa.)  </P>


www_subSection(`repuninhab', `Uninhabited Planets')

<P> This is a list of uninhabited planets which appear on your map, or
which you can observe. For all planets on the list, the name and X and
Y coordinates are provided. For those planets which you can observe,
the Size and Natural Resources attributes are also listed.  </P>



www_subSection(`repygrps', `Your Groups')

<P> This is a list of your groups of spaceships. This will be a list
of your groups which are not part of a fleet.  The following
information is provided: </P>

<ol>
<LI>Group Number</LI>
<LI>Number of Ships</LI>
<LI>Ship Type</LI>
<LI>Drive Technology</LI>
<LI>Weapons Technology</LI>
<LI>Shields Technology</LI>
<LI>Cargo Technology</LI>
<LI>Cargo Type (a "-" means that the group is carrying no cargo)</LI>
<LI>Cargo Quantity Per Ship</LI>
<LI>Destination</LI>
<LI>Distance (if this is left blank, the group is at the Destination).</LI>
<LI>Origin</LI>
</ol>



www_subSection(`repyflts', `Your Fleets')

<P> You will get a table for each fleet.  The header for each fleet
will be: </P>

<PRE>
         `Fleet fleetname (Speed fleetspeed)'
</PRE>

<P> where fleetname and fleetspeed is the fleet name and fleet speed
respectively.  The following information is provided:
</P>

<OL>
<LI>Group Number</LI>
<LI>Number of Ships</LI>
<LI>Ship Type</LI>
<LI>Drive Technology</LI>
<LI>Weapons Technology</LI>
<LI>Shields Technology</LI>
<LI>Cargo Technology</LI>
<LI>Cargo Type (a "-" means that the group is carrying no cargo)</LI>
<LI>Cargo Quantity Per Ship</LI>
<LI>Destination</LI>
<LI>Distance (if this is left blank, the group is at the Destination)</LI>
<LI>Origin</LI>
</OL>



www_subSection(`repagrps', `Alien Groups')

<P> This is a list of groups of ships belonging to other players,
which you can observe. The information provided is the same as for
your groups except without the group numbers.  </P>


www_subSection(`copyreport', `Getting a Copy a Turn Report')

<P> You can get a copy of a turn report by sending an email to the
server. The message should contain one line: </P>

<PRE>
#GALAXY &lt;gamename&gt; &lt;race-name&gt; &lt;password&gt;
</PRE>

<P>As subject for the message use "report &lt;turn number&gt;".  The
server will send you a copy of the report for that turn.  The
copy is send to the email address you send the orders from.  You can
use this feature to get a copy of your report in case your ISP fails
for some reason.  </P>


www_section(`hints', `Hints and Tips')

<P> In the early stages of the game, there will be plenty of planets
to spare so there will be little need to fight for territory; however,
you should ensure that your homeplanet is defended against sneak
attacks by xenophobic aliens. You will need to devote your efforts to
exploration, building up colonies, researching technology, and
contacting other races with a view to forming alliances.  </P>

<P> The map in your turn report only indicates which planets are
occupied by alien races, and the total mass of any groups of alien
ships in hyperspace heading for one of your planets. To learn of enemy
fleets which may pose a threat to your safety, you will need to send
ships to enemy planets to spy on them.  </P>

<P> If you have an "Incoming Groups" section on your turn report, this
probably means that one or more of your planets is under attack, and
your first priority should be to ensure that you have an adequate
defense. For each incoming group, divide the Distance by Speed to find
out how many turns the group will take to reach its target planet. Look
at the Total Mass figure - the bigger this is, the greater the
potential threat. Of course you don't know whether a very large group
is a huge battleship or a fleet of small fighters or anything in
between.  You could also try some last-minute diplomacy: the player
owning the group cannot turn it back, but he could declare peace on
you, so that the group would not attack you when it did arrive.  </P>

<P> In the later stages of the game, it is quite likely that one
player will develop a dominant position and appear to be heading for
victory. At this point, it is vitally important for all the other
players to immediately leave aside whatever differences they may have
among themselves and launch an attack on this player, because if he is
given a chance to pick the others off one by one at his leisure, he is
very likely to win.  </P>

www_section(`moreinfo', `Links to More Information')

<OL>
  <LI>ALink(`http://badcheese.com/~steve/phpwiki/index.php/GalaxyPlay',
      `GalaxyNG Wiki')</LI>
  <LI>ALink(`http://galaxyng.sourceforge.net/RefManual.html', 
      `Quick Reference Manual')</li>
  <LI>ALink(`http://galaxyng.sourceforge.net/FAQ.html', 
      `GalaxyNG FAQ')</LI>
</OL>

BodyEnd
DocEnd
