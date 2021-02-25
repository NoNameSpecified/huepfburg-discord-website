

<!-- INFO : Complete source code stored at https://github.com/NoNameSpecified/huepfburg-discord-website -->

<!-- 
    ### START OF HEADER.PHP
-->

<?php require 'includes/header.php';?>

<!-- 
    ### END OF HEADER.PHP 
-->

<body>
       
    <!-- no webhost ad thing -->
    <style>
        [title^='Hosted on free web hosting 000webhost.com. Host your own website for FREE.'] {
            display: none;
        }
    </style>

    <!-- 
        Showcase, landing view 
    -->
    <div id="showcase">
        <div id="showcase_title">
            <h1 id="showcase_h1">Der Hüpfburg Server<br>auf Discord!</h1>
            <img src="img/showcase/stitch_stars_emoji.png" alt="EMOJI" id="stitch_stars_emoji">
            <p>Unruhestifter oder leiser Poet? Lautstark oder schüchtern und leise, dick oder dünn, Homo oder Hetero... 
                Genau dich suchen wir. Sei, wie du bist, fühl dich frei. <br>
                Sei aktiv... Ob Gaming, Cosplay, Roleplay, Politik, Kunst - hier wird über fast alles gesprochen.
                Neue Freundschaften, Flirts, Spaß und Gespräche: suchst du das, bist du herzlich willkommen bei uns! 
                <br>Entdecke selbst, was wir zu bieten haben :)</p>
        </div>
    </div>



    <!-- Struktur des Servers, some ids / classes still with name "aufbau", refer to the same -->
    <div id="aufbau">
        <div id="struktur_link"></div>
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

                <p>Die Rollen ermöglichen es, verschiedene Mitglieder schnell und übersichtlich einordnen zu können. So gibt es einige feste Serverrollen, 
                die jedem Mitglied automatisch beim Join zugewiesen werden und solche Rollen, die jeder frei und individuell wählen kann. 
                Hierzu dient der Kanal <span id="channel_style">#»-rollen</span> zur entsprechenden Zuweisung. Durch die gewählten Rollen
                erhalten die anderen Mitglieder erste Informationen über einen, was zum Chatten und gemütlichen Kennenlernen einlädt. 
                Die verschiedenen Kategorien der Rollen sind hierbei folgende: <br>
                <b>Alter, Geschlecht, Beziehungsstatus, Sexualität, Wohnort, Hobbies, Berufe, Sternzeichen und Sonstiges.</b></p>
                <br>Oben rechts ein Beispiel der Rollenmenüs, die von YAGPDB verwaltet werden.
        
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
                        <h3>Die Server Stats</h3>
                        <p>Unter der Kategorie "Server Stats" lassen sich allgemeine Infos über den Server wiederfinden, wie bspw. 
                            das Enstehungsdatum und die jeweilige Anzahl der Rollen, Kanäle und Mitglieder. 
                            Die Statistik wird vom Bot "ServerStats" verwaltet und stetig aktualisiert.</p>
                        <br>
                    </li>
                    <li> 
                        <h3>Die Info - Kanäle</h3>
                        <p>In den Info - Kanälen befinden sich Kanäle, die für den gesamten Server und vor allem für den dortigen Austausch
                            von wichtigen Information von großer Relevanz sind. Dort befinden sich die <span id="channel_style">#»-regeln</span>, 
                            <span id="channel_style">#»-server-news</span>, <span id="channel_style">#»-rollen</span>, aber auch je ein Kanal für den
                            <span id="channel_style">#»-erstkontakt</span> und <span id="channel_style">#»-feedback-und-ideen</span>.</p>
                        <br>
                    </li>
                    <li>
                    <?php
                    // use 4 <br> only on pc to adjust with image, not needed on pc
                    $useragent=$_SERVER['HTTP_USER_AGENT'];
                    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                    {?><?php
                    }else{
                    ?><br><br><br><br><?php
                    }?>

                        <h3>Die Talk - Kanäle</h3>
                        <p>In den Talk - Kanälen finden die meisten Gespräche statt. Neben dem Hauptkanal <span id="channel_style">#»hüpfi-hüpf</span> bzw. 
                            der multilingualen Version <span id="channel_style">#»jumpy-jump</span> findet man dort auch spezifische Kanäle wie 
                            <span id="channel_style">#»-bilder</span> oder <span id="channel_style">#»-videos</span>, um ein willkürliches Vollspammen
                            der übrigen Kanäle zu vermeiden und für eine übersichtliche Trennung der verschiedenen Inhalte zu sorgen.</p>
                    </li>
                    <li><br>
                        <h3>Die Themen - Kanäle</h3>
                        <p>In den Themen - Kanälen werden diverse Themen diskutiert, für die in den allgemeinen Kanälen nicht genügend Raum bleibt.
                            Darunter fallen Oberthemen wie Fotografie, Kreatives und Zeichen, aber auch Gaming. 
                           <br>Diese Kanäle werden durch die Hobbyrollen freigeschaltet - jeder entscheidet also, was er sieht.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Für die Bots:</h3>
                        <p>Hier sind die botspezifischen Kanäle, z.B. für Disboard Bumps, <span id="channel_style">#»-level-up</span>
                            durch Mee6 und vieles mehr. Seit kurzem gibt es auch ein umfassendes und an
                            das reale Leben angelehnte Shop - System, dem man sich voll und ganz im 
                            <span id="channel_style">#»holodeck</span> widmen kann.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Minispiele !</h3>
                        <p>Es gibt einige Minispiele, wie <span id="channel_style">#»-duck-hunt</span>, <span id="channel_style">#»-assoziationskette</span> oder 
                            eine Assoziationskette für Gifs - diese findet man in dieser netten Kategorie. 
                            <br>Immerhin gibt es eine Hüpfburg, um Spaß zu haben!
</p>
                        <br>
                    </li>
                    <li>
                        <h3>Voicechats</h3>
                        <p>Über die Voicechats können Mitglieder direkt miteinander quasseln, anstatt in den Textkanälen zu chatten. 
                            <br>Ebenso finden hier regelmäßig die Themen-/Spielabende statt (siehe Aktuelles).</p>
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
                <p>Um Mitglieder für ihre Aktivität zu belohnen und zu differenzieren, wer wie lange schon auf dem Server bzw. wie intensiv
                     er dort aktiv ist, gibt es verschiedene Ränge, die durch mee6-levels definiert sind.. Probanden (lvl. 6 <) können Kanäle
                     mit privaten Inhalten (wie bspw. den Kanal für Selfies) nicht sehen. Diese werden allerdings freigeschaltet,
                     sobald man den Rang "proven" bzw. Level 6 erreicht hat.
                    <br><span style="text-align: left;">Anhand dieser Rangrollen werden User in der Server - Mitgliederliste rechts sortiert: 
                    je höher dein Level bzw. Rang, desto höher befindest du dich in der Liste.</span>
                </p>
                
            </div>
        </div>

    </div>


    <!-- <hr id="hr_middle"> -->

    <!-- Combo für den Geschichte und Moderation - Teil -->
    <div id="combo_wrapper">
    <div id="inside_wrapper">
        <div id="geschichte">
            <div id="geschichte_link"></div>
            <!--
                Geschichteteil
            -->
            <div class="geschichte_content">
                <h3 class="wrapper_part_title" id="geschichte_title">Die Geschichte des Servers</h3>
                <div class="inside_content">
                    <div class="inner_content_content" id="content_1">
                        <!--<h3>Die Entstehung</h3>-->
                        <p>Am Anfang jeder großen Hüpfburg steht nichts als eine schlaffe, doch umso buntere Hülle. 
                            Eine heitere Idee, jeden mit freudigem Hüpfspaß zu erfüllen, der die Burg zu schätzen weiß und pfleglich mit ihr umgeht.
                            So verhält es sich auch mit dieser Hüpfburg. <br>
                            An einem warmen Hochsommerabend des Jahres 2019 begannen die Konstrukteure damit,
                            Luft in jene Hülle zu pusten und diese Stück für Stück in jenes robuste Gebilde zu verwandeln, 
                            das auch heute noch wacker an seinem Platz steht und jedem noch so schweren Ungewitter mutig zu trotzen weiß. 
                            Spitze Steine und andere kleine Gegenstände, die der wunderschönen Hüpfburg schaden könnten, wurden gesucht,
                            gefunden und letztlich entsorgt. Man verankerte die Hüpfburg fest im Erdboden, um gegen jede potenzielle
                            Gefahr gewappnet zu sein. Seitdem wird das Gebilde stetig mit frischer Luft versorgt, um sicheren Hüpfspaß 
                            für jeden zu gewährleisten. Immer wieder zieht die kunterbunte Burg neue Neugierige an, die beschließen, 
                            in ein Abenteuer voller schöner Momente zu hüpfen.
                            <br><br><span style="text-align: center;">Viva la Hüpfburg!</span></p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div id="moderation">
            <div id="moderation_link"></div>
            <!--
                Moderation
            -->
            <h3 class="wrapper_part_title" id="moderation_title">Das Mod Team auf der Hüpfburg</h3>
            
            <div class="moderation_content" id="owner">
            <img src="img/section_moderation/2owners.png" alt="owner">
                <div class="inner_content">
                    <h3>Die zwei Owner</h3>
                    <p>Auf der Hüpfburg gibt es, im Gegenteil zu den meisten Servern, nicht einen, sondern zwei Owner :<br>
                    <br>- Skippi hat den Server im Juli 2019 erstellt und leitet ihn seitdem. Sie ist auch der "offizielle Owner" was das Discord-Ownership angeht.
                    <br><br>- Jessy Raven ist der 2. Owner, war aber auch eine Zeit lang "offizieller Owner".</p>
                </div>
                
            </div>

            <div class="moderation_content" id="mods">
                    
                <?php
                // use 4 <br> only on pc to adjust with image, not needed on pc
                $useragent=$_SERVER['HTTP_USER_AGENT'];
                if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                {?><img src="img/section_moderation/3mods.png" alt="mods"><?php
                }?>

                <div class="inner_content">
                    <h3>Die Mods</h3>
                    <p>Zusätzlich zu den Ownern gibt es drei Moderatoren. Sie sorgen wie die Owner dafür, dass die Regeln zum normalen Chatverlauf eingehalten werden
                        und nehmen bei Entscheidungen (Regeländerung, Ban...) teil. Diese werden mit einfacher Mehrheit der fünf Mitglieder der Serverteams getroffen. 
                        Die drei Mods sind:
                        
                        <?php
                        // adjust for mobile
                        $useragent=$_SERVER['HTTP_USER_AGENT'];
                        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                        {?><br> erwischt, Nelli, LuiGinA<?php
                        }else{
                        ?><?php
                        ?><br><br>- erwischt <br>- Nelli <br>- LuiGinA</p><?php
                        }?>
                </div>
                
                <?php
                // use 4 <br> only on pc to adjust with image, not needed on pc
                $useragent=$_SERVER['HTTP_USER_AGENT'];
                if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                {?><?php
                }else{
                ?><?php
                ?><img src="img/section_moderation/3mods.png" alt="mods"><?php
                }?>

            </div>
        </div>
    </div>
    </div>

    <!-- 
        aktuelles 
    -->

    <div id="aktuelles_wrapper">
        <div id="aktuelles_link"></div>

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
                    <h3>The Purge !</h3>
                    <p>Alle paar Monate wird eine "purge" durchgeführt, um inaktive Mitglieder zu entfernen. Wer in einem bestimmten Zeitraum (mit ping) nicht 
                        durch eine emoji-reaction zu einer Nachricht seine aktive Anwesenheit zeigt, wird gekickt (man kann also wieder joinen). Somit wird versucht,
                        einen aktiven Server beizubehalten und somit auch nicht mit vielen Mitglieder (verglichen mit größeren Servern). <br>
                        <span id="highlight">Die nächste Purge findet voraussichtlich Ende November statt.</span>
                    </p>
                </div>
            </div>

            <div class="news_slides hidden" id="modfarben_news">
                <img src="img/section_aktuelles/modfarben.jpg" alt="modfabe" id="modfarben_news_img">
                <div class="content">
                    <h3>Eine neue Farbe für die Mods</h3>
                    <p>Alle vier Monate bekommen die Moderatoren eine neue Farbe (jeweils ein Mod nach dem anderen sucht sich eine aus). 
                        <br>Die nächste Farbe wird am 1.11.20 Petrol !</p>
                </div>
            </div>            


        </div>
    </div>

    <!-- 
        Join ! section
    -->

    <div id="join">
        <div id="join_link"></div>
        <div class="content">
            <h3>Tritt jetzt dem Server bei :) !</h3>
            <br><span class="join_now_highlight"><a href="https://discord.gg/t8dZj5U" target="_blank">» Discord link</a></span>
            <br><br><span class="join_now_highlight"><a href="https://disboard.org/de/server/601798072741396481" target="_blank">» Disboard Link</a></span>
            <br><a href="https://github.com/NoNameSpecified/huepfburg-discord-website" target="blank" id="website_info">website info</a>
        </div>
    </div>

</body>
