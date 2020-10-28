

<!-- INFO : Complete source code stored at https://github.com/NoNameSpecified/hburg_exercise -->

<!-- 
    ### START OF HEADER.PHP
-->

<?php require 'includes/header.php';?>

<!-- 
    ### END OF HEADER.PHP 
-->

<body>



    <!-- 
        Showcase, landing view 
    -->
    <div id="showcase">
        <div id="showcase_title">
            <h1 id="showcase_h1">Der Hüpfburg Server<br>auf Discord!</h1>
            <img src="img/showcase/stitch_stars_emoji.png" alt="EMOJI" id="stitch_stars_emoji">
        </div>
    </div>



    <!-- Struktur des Servers, some ids / classes still with name "aufbau", refer to the same -->
    <div id="aufbau">
        <div id="struktur_link" style="position: absolute; top: -10.3vh;"></div>
        <!--
            Strukturteil
        -->

        <h3 id="aufbau_title">Die Struktur des Servers</h3>

        <div class="collapse_div" id="rollen">
            <div class="top_span" id="top_span_rollen">
                <h3>>> Die Rollen</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_rollen">
            </div>
            <div class="content collapsed" id="content_collapsed_rollen">
            <div>
                <img src="img/section_aufbau/rollen_beispiel.png" alt="rollen_beispiel" title="Ein Beispiel des Rollenmenüs">
                </div>
                <p>Die Rollen ermöglichen es verschiedene Mitglieder schneller einordnen zu können. Dabei gibt es einige Serverrollen und Rollen, die sich jeder
                    frei aussuchen kann. Die default Rollen ("Mitglied" und "Rang") werden z.B. automatisch von mee6 zugewiesen.
                    <br>Im Channel <span id="channel_style">#»-rollen</span> kann man sich Rollen zuweisen, die anderen Mitgliedern Infos über einen mitteilen.
                    Die verschiedenen Kategorien sind hierbei : <br> Alter, Geschlecht, Beziehungsstatus, Sexualität, Wohnort, Hobbies, Berufe, Sternzeichen und Sonstiges
                        (z.B. VoiceChat Rolle)
                    <br>Oben rechts ein Beispiel der Rollenmenüs, die von yagpdb verwaltet werden.
                </p>
                
            </div>
        </div>

        <div class="collapse_div" id="channels">
            <div class="top_span" id="top_span_channels">
                <h3>>> Die Channels</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_channels">
            </div>
            <div class="content collapsed" id="content_collapsed_channels">
                <img src="img/section_aufbau/channel_kategorien.png" alt="channel_kategorien" title="Die verschiedenen Channel-Kategorien">
                <ul>
                    <li>
                        <h3>Die »Server stats</h3>
                        <p>Unter der Kategorie "Server Stats" lassen sich allgemeine Infos über den Server wiederfinden, wie das Enstehungsdatum, 
                            die Anzahl der Rollen, Channels, Members usw.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Die Info Channels</h3>
                        <p>In den Info Channels befinden sich Channels, die für den gesamten Server relevant sind. Also z.B.
                        <span id="channel_style">#»-regeln</span>, <span id="channel_style">#»-server-news</span>, <span id="channel_style">#»-rollen</span>, 
                        aber auch ein Channel für den <span id="channel_style">#»-erstkontakt</span> und <span id="channel_style">#»-feedback-und-ideen</span>.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Die »Talk Channels</h3>
                        <p>In den Talk Channels finden die meisten Gespräche statt. Es gibt auch einige spezifische Channels wie 
                            <span id="channel_style">#»-bilder</span> oder <span id="channel_style">#»-videos</span> um damit nicht
                            die anderen Kanäle vollzuspammen. <br>Der Main Chat ist <span id="channel_style">#»-hüpfi-hüpf</span></p>
                    </li>
                    <li><br>
                        <h3>Die Themen-Channels</h3>
                        <p>In den Themenchannels werden Themen (Zeichnen, Fotografie) disktutiert. Diese Kanäle werden durch die Hobbyrollen freigeschaltet
                             - jeder entscheidet also, was er sieht.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Für die Bots:</h3>
                        <p>Hier sind die botspezifischen Kanäle, z.B. für Disboard Bumps, <span id="channel_style">#»-level-up</span> durch mee6 etc.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Minispiele !</h3>
                        <p>Es gibt einige Minispiele, wie <span id="channel_style">#»-duck-hunt</span>, <span id="channel_style">#»-assoziationskette</span>
                            oder eine Assoziationskette für Gifs.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Voicechats</h3>
                        <p>Über die Voicechats können Mitglieder direkt miteinander reden, somit finden hier auch die Themen-/Spielabende statt (siehe Aktuelles).</p>
                        <br>
                    </li>
                </ul>
            </div>
        </div>

        <div class="collapse_div" id="rang">
            <div class="top_span" id="top_span_rang">
                <h3>>> Das Rang-System</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_rang">
            </div>
            <div class="content collapsed" id="content_collapsed_rang">
            <img src="img/section_aufbau/raenge.png" alt="ränge" title="Die Ranghierarchie mit entsprechenden Levels">
                <p>Um Mitglieder für ihre Aktivität zu belohnen und zu differenzieren, wer wie lange schon auf dem Server ist, gibt es verschiedene Ränge,
                    die durch mee6-levels definiert sind. Probanden können jedoch einige Channels (wie den selfie-channel) nicht sehen.
                    <br><span style="text-align: left;">Anhand dieser Rangrollen werden User in der Server Mitgliederliste rechts sortiert.</span>
                </p>
                
            </div>
        </div>

    </div>


    <!-- <hr id="hr_middle"> -->

    <!-- Combo für den Geschichte und Moderation - Teil -->
    <div id="combo_wrapper">
    <div id="inside_wrapper">
        <div id="geschichte">
            <div id="geschichte_link" style="position: absolute; top: -10.3vh;"></div>
            <!--
                Geschichteteil
            -->
            <div class="geschichte_content">
                <h3 class="wrapper_part_title" id="geschichte_title">Die Geschichte des Servers</h3>
                <div class="inside_content">
                    <div class="inner_content_content" id="content_1">
                        <!--<h3>Die Entstehung</h3>-->
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente porro non quo labore assumenda nulla
                            pariatur neque nemo corporis aliquid provident nisi iste dolorum, magnam, excepturi repellat accusantium
                            amet. Vero, commodi nam sed sequi dolore laudantium temporibus possimus impedit, maiores tempore quos
                            repellat assumenda, mollitia excepturi nesciunt inventore iusto a. Laborum ipsa maxime, beatae officiis
                            eligendi iste dolorem adipisci reprehenderit, commodi laudantium repudiandae amet deleniti natus, sequi modi
                            rerum. Id sint impedit reprehenderit error aspernatur sunt tempore debitis. Est, repellat blanditiis! Hic laborum
                            eligendi asperiores corporis aspernatur ipsum explicabo ipsam, ducimus vel maxime fugiat, molestiae nobis 
                            dignissimos excepturi blanditiis aut.</p>
                    </div>
                    <hr>
                    <!--<div class="inner_content_content" id="content_2">
                        <h3>Something Else ? (aktuelle stats ?) :</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente porro non quo labore assumenda nulla pariatur neque nemo corporis aliquid
                            provident nisi iste dolorum, magnam, excepturi repellat accusantium amet. Vero, commodi nam sed sequi dolore laudantium temporibus possimus
                            impedit, maiores tempore quos repellat assumenda, mollitia excepturi nesciunt inventore iusto a. Laborum ipsa maxime, beatae officiis 
                            eligendi iste dolorem adipisci reprehenderit, commodi laudantium repudiandae amet deleniti natus, sequi modi rerum. Id sint impedit reprehenderit
                            error aspernatur sunt tempore debitis. Est, repellat blanditiis! Hic laborum eligendi asperiores corporis aspernatur ipsum explicabo ipsam,
                            ducimus vel maxime fugiat, molestiae nobis dignissimos excepturi blanditiis aut.</p>
                    </div>-->
                     
                    <!--<hr>
                    <div class="inner_content_content" id="content_3">
                        <h3>Another One ?</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente porro non quo labore assumenda nulla pariatur neque nemo corporis aliquid provident nisi iste dolorum, magnam, excepturi repellat accusantium amet. Vero, commodi nam sed sequi dolore laudantium temporibus possimus impedit, maiores tempore quos repellat assumenda, mollitia excepturi nesciunt inventore iusto a. Laborum ipsa maxime, beatae officiis eligendi iste dolorem adipisci reprehenderit, commodi laudantium repudiandae amet deleniti natus, sequi modi rerum. Id sint impedit reprehenderit error aspernatur sunt tempore debitis. Est, repellat blanditiis! Hic laborum eligendi asperiores corporis aspernatur ipsum explicabo ipsam, ducimus vel maxime fugiat, molestiae nobis dignissimos excepturi blanditiis aut.</p>
                    </div>-->
                </div>
            </div>
        </div>

        <div id="moderation">
            <div id="moderation_link" style="position: absolute; top: -10.3vh;"></div>
            <!--
                Moderation
            -->
            <h3 class="wrapper_part_title" id="moderation_title">Das Mod Team auf der Hüpfburg</h3>
            
            <div class="moderation_content" id="owner">
            <img src="img/section_moderation/2owners.png" alt="owner">
                <div class="inner_content">
                    <h3>Die 2 Owner</h3>
                    <p>Auf der Hüpfburg gibt es, im Gegenteil zu den meisten Servern, nicht einen, sondern 2 Owner :<br>
                    <br>- Skippi hat den Server im Juli 2019 erstellt und leitet ihn seitdem. Sie ist auch der "offizielle Owner" was das Discord-Ownership angeht.
                    <br><br>- Jessy Raven ist der 2. Owner, war aber auch eine Zeit lang "offizieller Owner".</p>
                </div>
                
            </div>

            <div class="moderation_content" id="mods">
                <div class="inner_content">
                    <h3>Die Mods</h3>
                    <p>Zusätzlich zu den Ownern gibt es 3 Moderatoren. Sie sorgen wie die Owner dafür, dass die Regeln zum normalen Chatverlauf eingehalten werden
                        und nehmen bei Entscheidungen (Regeländerung, Ban...) teil. Diese werden mit einfacher Mehrheit der 5 Mitglieder der Serverteams getroffen. Die 3 Mods sind:
                        <br><br>- erwischt <br>- Nelli <br>- LuiGinA</p>
                </div>
                <img src="img/section_moderation/3mods.png" alt="mods">
            </div>
        </div>
    </div>
    </div>

    <!-- 
        aktuelles 
    -->

    <div id="aktuelles_wrapper">
        <div id="aktuelles_link" style="position: absolute; top: 1.3vh;"></div>

        <h3 id="aktuelles_title">Aktuelles</h3>
        <div id="aktuelles">
            <!-- forth and back buttons -->
            <div class="slide_button" id="slide_left"> <img src="img/section_aktuelles/buttons/chevron_left.png" alt="left"> </div> 
            <div class="slide_button" id="slide_right"> <img src="img/section_aktuelles/buttons/chevron_right.png" alt="right"> </div>

            <div class="news_slides shown" id="spieleabend_news">
                <img src="img/section_aktuelles/themeabend_spieleabend.png" alt="abend" id="spieleabend_news_img">
                <div class="content">
                    <h3>Der Themen-/Spieleabend</h3>
                    <p>Einmal die Woche gibt es auf der Hüpfburg einen Themen- oder Spieleabend, entsprechend  einer vorhergehenden. 
                        Das Ganze spielt sich dann in einem VoiceChat ab, als Spiel wurde in letzter Zeit vor allem Among Us gewählt.
                        Der Termin ist entweder freitags oder samstags (auch hier wird gevotet) um 20 Uhr, und geht generell bis 24 Uhr.</p>
                </div>
            </div>

            <div class="news_slides hidden" id="purge_news">
                <img src="img/section_aktuelles/purge.jpg" alt="purge" id="purge_news_img">
                <div class="content">
                    <h3>Die Purge !</h3>
                    <p>Alle paar Monate wird eine "purge" durchegeführt, um inaktive Mitglieder zu entfernen. Wer in einem bestimmten Zeitraum (mit ping) nicht 
                        durch eine emoji-reaction zu einer Nachricht seine aktive Anwesenheit zeigt, wird gekickt (man kann also wieder joinen). Somit wird versucht,
                        einen aktiven Server beizubehalten und somit auch nicht mit vielen Mitglieder (verglichen mit größeren Servern). <br>
                        <span id="highlight">Die nächste Purge findet vo­r­aus­sicht­lich Ende November statt.</span>
                    </p>
                </div>
            </div>

            <div class="news_slides hidden" id="modfarben_news">
                <img src="img/section_aktuelles/modfarben.jpg" alt="modfabe" id="modfarben_news_img">
                <div class="content">
                    <h3>Eine neue Farbe für die Mods</h3>
                    <p>Alle 4 Monate bekommen die Moderatoren eine neue Farbe (jeweils ein Mod nach dem anderen sucht sich eine aus). <br>Die nächste Farbe wird am 1.11 Petrol !</p>
                </div>
            </div>            


        </div>
    </div>

    <!-- 
        Join ! section
    -->

    <div id="join">
        <div id="join_link" style="position: absolute; top: 1.3vh;"></div>
        <div class="content">
            <h3>Trete jetzt dem Server bei :) !</h3>
            <br><span class="join_now_highlight"><a href="https://discord.gg/t8dZj5U" target="_blank">» Discord link</a></span>
            <br><br><span class="join_now_highlight"><a href="https://disboard.org/de/server/601798072741396481" target="_blank">» Disboard Link</a></span>
            <br><a href="https://github.com/NoNameSpecified/hburg_exercise" target="blank">website info</a>
        </div>
    </div>

</body>
