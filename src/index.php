

<!-- INFO : Complete source code stored at https://github.com/NoNameSpecified/hburg_exercise -->

<!-- 
    ### START OF HEADER.PHP
-->

<?php require 'includes/header.php';?>

<!-- 
    ### END OF HEADER.PHP 
-->

<body>



    <!-- Showcase, landing view -->
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
            Was in den Aufbau gehört :
                - Channels, Rollen (schalten auch Channels frei), Ränge, 
                Es gibt einen Titel/kurze Beschreibung, und dann ein Plussymbol, worauf man klicken kann um den "content" div zu entfalten
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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto nisi accusantium repellendus! 
                Magnam amet quia expedita aperiam ipsa, sed, ratione fugiat vel saepe autem magni praesentium sunt ex culpa, 
                temporibus eveniet id quis ad modi velit? Modi molestiae dignissimos fuga repellendus facere ratione vitae reiciendis
                sint ad vero aut, ex ipsam a doloremque officia voluptate odit tempora consequatur enim nobis sit iusto? Molestias vel,
                qui eius excepturi odio minus nemo vero libero tempora deleniti pariatur non ea quod repellendus, maxime cum, dignissimo
                s omnis quae numquam iste eveniet repudiandae neque? Voluptas eligendi dolor earum doloribus odit alias, officiis similique
                necessitatibus obcaecati maxime dolore adipisci fuga non placeat ad expedita ducimus eos ab sapiente. Provident eos debitis
                voluptatem voluptate, deserunt iure temporibus in asperiores nam nostrum possimus dicta, tempora officia laborum ut sed,
                maiores eius. Vel laborum impedit sed praesentium aperiam quam adipisci iure exercitationem at vero quibusdam nesciunt
                cumque earum assumenda minima unde aspernatur, obcaecati ad? Ducimus, quod possimus cum animi sunt perferendis quas ullam,
                ea, in sed nemo explicabo qui.</p>
                
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
                        <h3>Die »Server stats«</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quisquam?</p>
                        <br>
                    </li>
                    
                    <li>
                        <h3>Die »Talk« Channels</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem magnam consectetur voluptatem perferendis vel quaerat ut eos! Similique, natus consequuntur.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Die Themen-Channels</h3>
                        <p>blabla werden durch Rollen freigeschaltet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?</p>
                        <br>
                    </li>

                    <li>
                        <h3>Für die Bots:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eius?</p>
                        <br>
                    </li>
                    <li>
                        <h3>Minispiele !</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eius?</p>
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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto nisi accusantium repellendus! 
                Magnam amet quia expedita aperiam ipsa, sed, ratione fugiat vel saepe autem magni praesentium sunt ex culpa, 
                temporibus eveniet id quis ad modi velit? Modi molestiae dignissimos fuga repellendus facere ratione vitae reiciendis
                sint ad vero aut, ex ipsam a doloremque officia voluptate odit tempora consequatur enim nobis sit iusto? Molestias vel,
                qui eius excepturi odio minus nemo vero libero tempora deleniti pariatur non ea quod repellendus, maxime cum, dignissimo
                s omnis quae numquam iste eveniet repudiandae neque? <br> Voluptas eligendi dolor earum doloribus odit alias, officiis similique
                necessitatibus obcaecati maxime dolore adipisci fuga non placeat ad expedita ducimus eos ab sapiente. Provident eos debitis
                voluptatem voluptate, deserunt iure temporibus in asperiores nam nostrum possimus dicta, tempora officia laborum ut sed,
                maiores eius. Vel laborum impedit sed praesentium aperiam quam adipisci iure exercitationem at vero quibusdam nesciunt
                cumque earum assumenda minima unde aspernatur, obcaecati ad? Ducimus, quod possimus cum animi sunt perferendis quas ullam,
                ea, in sed nemo explicabo qui.</p>
                
            </div>
        </div>

    </div>


    <hr id="hr_middle">
    <!-- Combo für den Rest -->
    <div id="combo_wrapper">
    <div id="inside_wrapper">
        <div id="geschichte">
            <div id="geschichte_link" style="position: absolute; top: -10.3vh;"></div>
            <!--
                Was in den Geschichteteil gehört :
                    Entstehung.. anderes ?
            -->
            <div class="geschichte_content">
                <h3 class="wrapper_part_title" id="geschichte_title">Die Geschichte des Servers</h3>
                <div class="inside_content">
                    <div class="inner_content_content" id="content_1">
                        <h3>Die Entstehung</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente porro non quo labore assumenda nulla pariatur neque nemo corporis aliquid provident nisi iste dolorum, magnam, excepturi repellat accusantium amet. Vero, commodi nam sed sequi dolore laudantium temporibus possimus impedit, maiores tempore quos repellat assumenda, mollitia excepturi nesciunt inventore iusto a. Laborum ipsa maxime, beatae officiis eligendi iste dolorem adipisci reprehenderit, commodi laudantium repudiandae amet deleniti natus, sequi modi rerum. Id sint impedit reprehenderit error aspernatur sunt tempore debitis. Est, repellat blanditiis! Hic laborum eligendi asperiores corporis aspernatur ipsum explicabo ipsam, ducimus vel maxime fugiat, molestiae nobis dignissimos excepturi blanditiis aut.</p>
                    </div>
                    <hr>
                    <div class="inner_content_content" id="content_2">
                        <h3>Something Else</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente porro non quo labore assumenda nulla pariatur neque nemo corporis aliquid provident nisi iste dolorum, magnam, excepturi repellat accusantium amet. Vero, commodi nam sed sequi dolore laudantium temporibus possimus impedit, maiores tempore quos repellat assumenda, mollitia excepturi nesciunt inventore iusto a. Laborum ipsa maxime, beatae officiis eligendi iste dolorem adipisci reprehenderit, commodi laudantium repudiandae amet deleniti natus, sequi modi rerum. Id sint impedit reprehenderit error aspernatur sunt tempore debitis. Est, repellat blanditiis! Hic laborum eligendi asperiores corporis aspernatur ipsum explicabo ipsam, ducimus vel maxime fugiat, molestiae nobis dignissimos excepturi blanditiis aut.</p>
                    </div>
                     
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
                Was in den Moderationteil gehört :
                    2 Owners, 3 Mods ...
            -->
            <h3 class="wrapper_part_title" id="moderation_title">Das Mod Team auf der Hüpfburg</h3>
            <div class="moderation_content" id="owner">
                <div class="inner_content">
                    <h3>Die 2 Owner</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit :<br>- Skippi Lorem ipsum dolor sit amet consectetur.<br>- Jessy Raven Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <img src="img/section_moderation/2owners.png" alt="owner">
            </div>

            <div class="moderation_content" id="mods">
                <div class="inner_content">
                    <h3>Die Mods</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, nemo.<br>- erwischt <br>- Nelli <br>- LuiGinA</p>
                </div>
                <img src="img/section_moderation/3mods.png" alt="mods">
            </div>
        </div>
    </div>
    </div>

    <!-- aktuelles, -->

    <!--
        Rest of the Code in the footer.php
        maybe something dark gray
    -->

    <div class="coming_soon"></div>

</body>